<?php 
/* 
Golf Pride Grip Selector Widget Code Exporter
Created: 21 May 2013
Author: Jon Gamble
Company: Trimark Solutions
Contact: jon@trimarksolutions.com
Updated: 21 May 2013
----------------------------------------------------*/
function sanitizeData($foo){
	$bar = stripslashes(strip_tags(trim($foo)));
	return $bar;
}
function regKeyCreation($foo){
	$bar = md5($foo);
	return $bar;
}
function onlyNumbers($foo){
	$bar = preg_replace( '/[^0-9]/', '', $foo );
	$bar = substr(ltrim($bar, '0'), 0, 6);
	return $bar;
}
function returnDomain($foo){
	if((substr($foo,0,7) == 'http://') || (substr($foo,0,8) == 'https://')){
		$bar = str_replace('https://','',$foo);
		$bar = str_replace('http://','',$bar);
		$bar = str_replace('www.','',$bar);
		return $bar;
	}else{
		$bar = str_replace('www.','',$foo);
		return $bar;
	}
}


foreach($_POST as $key => $val){
	$gwd[$key] = sanitizeData($val);
}

$gwd['zindex'] = onlyNumbers($gwd['zindex']);

$response = "<script type='text/javascript' src='//golfpride.com/js/bsgwidget.js'></script>\n";
$response .= "<script type='text/javascript'>\n";
$response .= "\t/* Registered Domain: ".returnDomain($gwd['domainName'])." */\n";
$response .= "\tnew GPGS.Widget({\n";
$response .= "\t\tregKey: '".regKeyCreation(returnDomain($gwd['domainName']))."',\n";
$response .= "\t\tgrips: {\n";
	if(!empty($gwd['linkDualDurometer'])){
		$response .= "\t\t\tdd: '".$gwd['linkDualDurometer']."',\n";
	}
	if(!empty($gwd['linkNDMC'])){
		$response .= "\t\t\tndm: '".$gwd['linkNDMC']."',\n";
	}
	if(!empty($gwd['linkNDMCWO'])){
		$response .= "\t\t\tndmw: '".$gwd['linkNDMCWO']."',\n";
	}
	if(!empty($gwd['linkTourVelvet'])){
		$response .= "\t\t\ttv: '".$gwd['linkTourVelvet']."',\n";
	}
	if(!empty($gwd['linkTourVelvetBCT'])){
		$response .= "\t\t\ttvbct: '".$gwd['linkTourVelvetBCT']."',\n";
	}
	if(!empty($gwd['linkTourWrap2g'])){
		$response .= "\t\t\ttw2g: '".$gwd['linkTourWrap2g']."',\n";
	}
	if(!empty($gwd['linkVDR'])){
		$response .= "\t\t\tvdr: '".$gwd['linkVDR']."'',\n";
	}
	if(!empty($gwd['linkZgrip'])){
		$response .= "\t\t\tzg: '".$gwd['linkZgrip']."',\n";
	}
	if(!empty($gwd['linkZgripPatriot'])){
		$response .= "\t\t\tzgp: '".$gwd['linkZgripPatriot']."',\n";
	}
$response .= "\t\t},\n";
if(!empty($gwd['displayBanner'])){
	$response .= "\t\tdispB: '".$gwd['displayBanner']."',\n";
}
if(!empty($gwd['linkNavigation'])){
	$response .= "\t\tlinkNav: '".$gwd['linkNavigation']."',\n";
}
if(!empty($gwd['linkButtonText'])){
	$response .= "\t\tlinkText: '".$gwd['linkButtonText']."',\n";
}
if(!empty($gwd['hideEmailSub'])){
	$response .= "\t\thideEmail: '".$gwd['hideEmailSub']."',\n";
}
if(!empty($gwd['zindex'])){
	$response .= "\t\tzIn: '".$gwd['zindex']."'\n";
}
$response .= "\t}).render();\n";
$response .= "</script>";



echo json_encode($response);

?>
