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
function validLink($foo, $rab){
	if(strstr($foo, $rab)){
		return true;
	}else{
		return false;
	}
}
function remChr($foo){
	$bar = preg_replace('/[^\da-z]/i', '', $foo);
	return $bar;
}

$gwd = $_POST;
foreach($gwd as $key => $val){
	$gwd[$key] = remChr(sanitizeData($val));
}

$gwd['zindex'] = onlyNumbers($gwd['zindex']);
$dn = $gwd['domainName'];

$response = "<script type='text/javascript' src='//golfpride.com/js/bsgwidget.js'></script>\n";
$response .= "<script type='text/javascript'>\n";
$response .= "\t/* Registered Domain: ".$gwd['domainName']." */\n";
$response .= "\tnew GPGS.Widget({\n";
$response .= "\t\tregKey: '".regKeyCreation($gwd['domainName'])."',\n";
$response .= "\t\tgrips: {\n";
if(!empty($gwd['linkDualDurometer']) && validLink($gwd['linkDualDurometer'],$dn)){$response .= "\t\t\tdd: '".$gwd['linkDualDurometer']."',\n";}
if(!empty($gwd['linkNDMC']) && validLink($gwd['linkNDMC'],$dn)){$response .= "\t\t\tndm: '".$gwd['linkNDMC']."',\n";}
if(!empty($gwd['linkNDMCWO']) && validLink($gwd['linkNDMCWO'],$dn)){$response .= "\t\t\tndmw: '".$gwd['linkNDMCWO']."',\n";}
if(!empty($gwd['linkTourVelvet']) && validLink($gwd['linkTourVelvet'],$dn)){$response .= "\t\t\ttv: '".$gwd['linkTourVelvet']."',\n";}
if(!empty($gwd['linkTourVelvetBCT']) && validLink($gwd['linkTourVelvetBCT'],$dn)){$response .= "\t\t\ttvbct: '".$gwd['linkTourVelvetBCT']."',\n";}
if(!empty($gwd['linkTourWrap2g']) && validLink($gwd['linkTourWrap2g'],$dn)){$response .= "\t\t\ttw2g: '".$gwd['linkTourWrap2g']."',\n";}
if(!empty($gwd['linkVDR']) && validLink($gwd['linkVDR'],$dn)){$response .= "\t\t\tvdr: '".$gwd['linkVDR']."'',\n";}
if(!empty($gwd['linkZgrip']) && validLink($gwd['linkZgrip'],$dn)){$response .= "\t\t\tzg: '".$gwd['linkZgrip']."',\n";}
if(!empty($gwd['linkZgripPatriot']) && validLink($gwd['linkZgripPatriot'],$dn)){$response .= "\t\t\tzgp: '".$gwd['linkZgripPatriot']."',\n";}
$response .= "\t\t},\n";
if(!empty($gwd['displayBanner'])){$response .= "\t\tdispB: '".$gwd['displayBanner']."',\n";}
if(!empty($gwd['linkNavigation'])){$response .= "\t\tlinkNav: '".$gwd['linkNavigation']."',\n";}
if(!empty($gwd['linkButtonText'])){$response .= "\t\tlinkText: '".$gwd['linkButtonText']."',\n";}
if(!empty($gwd['hideEmailSub'])){$response .= "\t\thideEmail: '".$gwd['hideEmailSub']."',\n";}
if(!empty($gwd['zindex'])){$response .= "\t\tzIn: '".$gwd['zindex']."'\n";}
$response .= "\t}).render();\n";
$response .= "</script>";



echo json_encode($response);

?>
