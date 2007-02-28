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
        align="middle" src="/images/gazoo-incubation.jpg"
        border="0" alt="[gazoo-incubation]"/></a>
   </div>
 </div>
</div>

<div id="midcolumn">
 <div class="homeitem3col">
  <h3>ECF Users</h3>
   <p>
      This page provides information about resources for Eclipse ECF Users.
   </p>
   <p>
      If you are a user taking advantage of ECF's
      incredible features to write your own software, then consider yourself a user. If you are writing code to make
      ECF itself better, consider yourself a contributor.
   </p>

   <p>
     Users should look mainly at the Eclipse newsgroup while contributors should focus mainly on the mailing list.
     Both groups may be interested in the Eclipse Wiki.
   </p>

   <p>
      The distinction between users and contributors is somewhat blurred if you are using ECF to contribute software to
      another Eclipse project. If you fall in that category, look at both user and contributor information.
   </p>

  <p><a href="/ecf/gettingStarted.php">Getting Started</a></p>

<?php
	$html = ob_get_contents();
        include 'getNugget.php';

        $html = getNugget("EcfNewsgroup.html",$html);
        $html = getNugget("EcfBugReporting.html",$html);
        $html = getNugget("EcfWiki.html",$html);
        $html = getNugget("EcfMailingList.html",$html);
        $html = getNugget("EcfPresentations.html",$html);

 $html = $html . "</div></div>";

	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
