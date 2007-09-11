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
	$pageTitle 		= "ECF Release Plan";
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

<head>
 <link rel="stylesheet" type="text/css" href="table.css"/>
</head>


<div id="maincontent">
		
<div id="midcolumn">
<h3 style="color:#fff;background-image:url(/eclipse.org-common/themes/Phoenix/images/header_bg.gif)">ECF Project Milestone Plan</h3>
   <div class="right"> Last modified on Sept 11, 2007 by slewis </div>

<p>
 See the <a href="http://wiki.eclipse.org/index.php/Eclipse_Communication_Framework_Project">ECF Ganymede Roadmap</a>
 for plans and schedules for the Ganymede Release.
</p>
<p>
 See <a href="http://wiki.eclipse.org/index.php/ECF_API_Docs">ECF API documentation</a>.
</p>
<p>
 See <a href="org.eclipse.ecf.docs/api">Javadocs API documentation</a>.
</p>
<p>
 ECF was part of the <a href="http://wiki.eclipse.org/index.php/Europa_Simultaneous_Release">Europa Simultaneous Release</a>.  
 We had our 1.0.0 release with the Europa release (June 29, 2007).  ECF is now no longer in incubation, in accord with the 
 <a href="http://wiki.eclipse.org/Development_Process_2006_Revision_Final">Eclipse Development Process</a>.
</p>
<p>
Stay tuned here for details of features and bug fixes for each remaining milestone release (M6, M7, RCn).
</p>

<?php
	$html = ob_get_contents();
        include 'getNugget.php';

        $html = getNugget("EcfRelease1.1.0.html",$html);
        $html = getNugget("EcfRelease1.0.0.RC1.html",$html);
        $html = getNugget("EcfRelease1.0.0.M7.html",$html);
        $html = getNugget("EcfRelease1.0.0.M6.html",$html);
        $html = getNugget("EcfRelease1.0.0.M5.html",$html);
        $html = getNugget("EcfRelease0.9.6.html",$html);
        $html = getNugget("EcfRelease0.9.5.html",$html);
        $html = getNugget("EcfRelease0.9.4.html",$html);

 $html = $html . "</div></div>";

	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
