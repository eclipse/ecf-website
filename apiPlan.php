<?php  	
  require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
 	$App 	= new App();
	$Nav	= new Nav();
	$Menu 	= new Menu();
	include($App->getProjectCommon());

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		Denis Roy
	# Date:			2005-06-16
        #
        # Modified:		Ted Kubaska
	# Date:                 2006-12-08
	#      
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "ECF Resources";
	$pageKeywords	        = "Type, page, keywords, here";
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
<div id="rightcolumn">
 <div class="sideitem">
   <h6>Incubation</h6>
   <div align="center"><a href="/projects/gazoo.php"><img
        align="center" src="/images/gazoo-incubation.jpg"
        border="0" /></a></div>
 </div>
</div>

	<div id="midcolumn">
        <div class="homeitem3col">
	<h3>ECF Milestone Plan</h3>
           <p><a href="http://www.eclipse.org/ecf/plan.php">Click here to look at the ECF Project Milestone plan</a>.
           </p>

        <h3></h3>
	</div></div>

	<div id="midcolumn">
        <div class="homeitem3col">
	<h3>ECF API Plan</h3>
           <p>The Eclipse Communication Framework (ECF) API documentation uses Javadocs. 
           <a href="http://www.eclipse.org/ecf/org.eclipse.ecf.docs/api">Click here to look at the ECF API documentation</a>.
           </p>

        <h3></h3>
	</div>
	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
