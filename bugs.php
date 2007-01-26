<?php  	
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
$App 	= new App();
$Nav	= new Nav();
$Menu 	= new Menu();
include($App->getProjectCommon());

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
        align="middle" src="/images/gazoo-incubation.jpg"
        border="0" alt="[gazoo-incubation]"/></a></div>
 </div>
</div>

<div id="midcolumn">
 <div class="homeitem3col">
    <h3>Bugs</h3>
    <p>To report and view ECF bugs click 
    <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&amp;product=ECF&amp;bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED">here.</a> </p>
    <p>The Eclipse Communications Framework uses Bugzilla to track bugs. To Report and view Eclipse bugs click
    <a href="https://bugs.eclipse.org/bugs/">here.</a> </p>
    <h3></h3>
 </div>
</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
