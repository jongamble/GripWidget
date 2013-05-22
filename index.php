<!doctype html>
<html>
<head>
	<title>Grip Selector Tool Configurator</title>
	<link href="library/stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />

	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<script src="library/js/scripts.js"></script>
</head>
<body>
	
	<section class="container">
		<article class="widgetInputCont">
			<form action="" method="post" class="widgetSettings">
				<section class="basicWidget">
					<p class="p">Below is where you will put your information that we will use to generate a widget code. You will then copy and paste the widget code into your site for maximum awesomeness.</p>
					<h2 class="h2">Customize Your Widget</h2>
					<h4 class="h4">All settings below are required.</h4>
					<label for="domainName" class="label">Domain Name:</label>
					<input type="text" name="domainName" id="domainName" class="inputDomainName required">
					<p class="inputDescription">Please enter the website domain name. For Example: <b>trimarksolutions.com</b>.</p>
					<hr>
					<label for="emailAddress" class="label">Contact Email Address:</label>
					<input type="text" name="emailAddress" id="emailAddress" class="inputEmailAddress required">
					<p class="inputDescription">Please provide a valid contact email address for the webmaster of the hosting website.</p>
					<hr>
					<input type="submit" name="submit" value="Generate Code" class="generateCodeButton">
				</section>
				<section class="advancedWidget">
					<h2 class="h2">Advanced Settings</h2>
					<p class="p">Whoa... gettin' crazy here. Let's add some gnarly, completely optional Advanced Settings!</p>
					<label for="displayBanner" class="label">Display Widget Banner:</label>
					<input type="checkbox" name="displayBanner" id="displayBanner">
					<p class="inputDescription">If you click this, it will display a different than normal size. Sweet!</p>
					<hr>
					<label for="linkNavigation" class="label">Link Navigation:</label>
					<select name="linkNavigation" id="linkNavigation" class="linkNavigation">
						<option value=""></option>
						<option value="newWindow">Launch a NEW WINDOW</option>
						<option value="sameWindow">Stay in Same Window</option>
					</select>
					<p class="inputDescription">This setting determines if product links will launch a NEW browser window. The default value is to navigate using the SAME browser window.</p>
					<hr>
					<fieldset class="fieldset">
						<label for="linkDualDurometer" class="gripLabel">Link - Dual Durometer:</label>
						<input type="text" name="linkDualDurometer" id="linkDualDurometer" class="inputGrip">
					</fieldset>
					<fieldset class="fieldset">
						<label for="linkNDMC" class="gripLabel">Link - New Decade&reg; Multicompound:</label>
						<input type="text" name="linkNDMC" id="linkNDMC" class="inputGrip">						
					</fieldset>
					<fieldset class="fieldset">
						<label for="linkNDMCWO" class="gripLabel">Link - New Decade&reg; Multicompound Whiteout&reg;:</label>
						<input type="text" name="linkNDMCWO" id="linkNDMCWO" class="inputGrip">
					</fieldset>
					<fieldset class="fieldset">
						<label for="linkTourVelvet" class="gripLabel">Link - Tour Velvet&reg;:</label>
						<input type="text" name="linkTourVelvet" id="linkTourVelvet" class="inputGrip">
					</fieldset>	
					<fieldset class="fieldset">
						<label for="linkTourVelvetBCT" class="gripLabel">Link - Tour Velvet&reg; BCT&reg; Cord:</label>
						<input type="text" name="linkTourVelvetBCT" id="linkTourVelvetBCT" class="inputGrip">
					</fieldset>
					<fieldset class="fieldset">
						<label for="linkTourWrap2g" class="gripLabel">Link - Tour Wrap&reg; 2G&reg;:</label>
						<input type="text" name="linkTourWrap2g" id="linkTourWrap2g" class="inputGrip">
					</fieldset>
					<fieldset class="fieldset">
						<label for="linkVDR" class="gripLabel">Link - VDR&reg;:</label>
						<input type="text" name="linkVDR" id="linkVDR" class="inputGrip">
					</fieldset>
					<fieldset class="fieldset">
						<label for="linkZgrip" class="gripLabel">Link - Z-Grip&trade;:</label>
						<input type="text" name="linkZgrip" id="linkZgrip" class="inputGrip">
					</fieldset>
					<fieldset class="fieldset">
						<label for="linkZgripPatriot" class="gripLabel">Link - Z-Grip&trade; Patriot&trade;:</label>
						<input type="text" name="linkZgripPatriot" id="linkZgripPatriot" class="inputGrip">
					</fieldset>
					<p class="inputDescription">Define the page link for the product page Buy Now \ Learn More button. If left blank the default will be to the bridgestonegolf.com product page.</p>
					<hr>
					<label for="linkButtonText" class="label">Link Button Text:</label>
					<input type="text" name="linkButtonText" id="linkButtonText" class="inputButtonText">
					<p class="inputDescription">You may change the text that displays on the product link button, 20 characters maximum. The default text is Learn More.</p>
					<hr>
					<label for="hideEmailSub" class="label">Hide Email Subscribe Option:</label>
					<input type="checkbox" name="hideEmailSub" id="hideEmailSub">
					<p class="inputDescription">Hide the "Subscribe to Bridgestone Golf News" checkbox on the email summary page.</p>
					<hr>
					<label for="zindex" class="label">Dialog Z-Index:</label>
					<input type="text" name="zindex" id="zindex" class="zindex">
					<p class="inputDescription">The Z-Index enables the widget to display over your page content. The default z-index is 9999.</p>
					<hr>
					<input type="submit" name="submit" value="Generate Code" class="generateCodeButton">
				</section> 
				<section class="installNotes">
					<h2 class="h2">Installation Notes</h2>
					<p class="p">Certain blogs and social networking sites do not permit the execution of external JavaScript, so please check with your hosting company on their policies. If JavaScript cannot be run on the site where you are embedding the Ball Selection Guide Widget, the widget will not be rendered.</p>
					<p class="p">This widget uses an embedded version (1.4.3) of jQuery. If you already load jQuery on your site, then check the box "Use Minimum Version" in Advance Settings to only load the widget code. The widget has been tested with jQuery 1.3.2 or greater.</p>
				</section>
			</form>
		</article>
		<aside class="previewWidgetCont">
			<h2 class="h2">Preview Widget</h2>
			<p class="p">Update your configuration settings on the left and then click on the Icon below to test your Widget Settings.</p>
			<div class="previewWidget"></div>
			<h2 class="h2">Widget Code</h2>
			<p class="p">Copy and paste this code into an HTML web page:</p>
			<textarea name="widgetCodeBox" rows="20" cols="20" readonly="readonly" id="widgetCodeBox" class="widgetCodeBox" onclick="selectAll(this);" style="width:310px;">Blah Blah Blah</textarea>
		</aside>
	</section>





</body>
</html>