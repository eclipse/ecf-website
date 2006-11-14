<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		Denis Roy
	# Date:			2005-06-16
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "ECF Installation Instructions";
	$pageKeywords	= "Type, page, keywords, here";
	$pageAuthor		= "Scott Lewis, Pete Mackie";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 1);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 1);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the markers!	
ob_start();
?>		

	<div id="midcolumn">
	
	
	   <div class="homeitem3col">
	     <h3>ECF Installation Instructions</h3>
	     <h4>Step 1:</h4>
         <p>Begin the installation from the Eclipse Help menu item.</p>
         <img src="images/install-1.png" alt="Install screen" />

         <h4>Step 2:</h4>
         <p>This screenshot show the screen as it initially comes up.  In this case
         you will need to change the radio button to indicate that this is a new install.</p>
         <img src="images/install-2.png" alt="Install screen" />

	     <h4>Step 3:</h4>

<p>This screen will vary depending on the features you have installed already.  You want
to click on the New Remote Site button.</p>
<img src="images/install-3.png" alt="Install screen" />

<h4>Step 4:</h4>
<p>This screen is showing the New Remote Site dialog, filled in with the correct information
to install ECF</p>
<pre>
    Name: ECF
    URL:  http://download.eclipse.org/technology/ecf/update
</pre>
<img src="images/install-4.png" alt="Install screen" />
	   
	   <h4>Step 5:</h4>
<p>When you first come back to this screen, the site you added will NOT be selected.  Be sure
to select it before clicking Next.</p>

<img src="images/install-5.png" alt="Install screen" />

<h4>Step 6:</h4>
<p>This next screen shows all of the features that are available to install.</p>
<img src="images/install-6.png" alt="Install screen" />

<h4>Step 7:</h4>
<p>Click the button to accept the license agreement.</p>
<img src="images/install-7.png" alt="Install screen" />

<h4>Step 8:</h4>
<p>Confirm the install location</p>

<img src="images/install-8.png" alt="Install screen" />

<h4>Step 9:</h4>
The ECF plugins will be downloaded and installed.

<h4>Step 10:</h4>
<p>Eclipse needs to be restarted after installing ECF.</p>


       </div>
    </div>
	
<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
