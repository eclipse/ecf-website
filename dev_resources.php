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

<div id="midcolumn">
 <div class="homeitem3col">
  <h3>ECF Contributors</h3>
   <p>
      This page provides information about resources for Eclipse ECF contributors.
   </p> 
<p>
 See <a href="http://wiki.eclipse.org/Eclipse_Communication_Framework_Project">ECF Wiki</a> for further information about plans, sub-projects, meetings, etc.
</p>
   <p>
      If you are writing code to make
      ECF itself better, consider yourself a contributor.
      If you are a user taking advantage of ECF's
      incredible features to write your own software, then consider yourself a user. 
   </p>

   <p>
     Contributors should look for information mainly at the mailing list.
     while users should focus on the Eclipse newsgroup.
     Both groups may be interested in the Eclipse Wiki.
   </p>

   <p>
      The distinction between users and contributors is somewhat blurred if you are using ECF to contribute software to
      another Eclipse project. If you fall in that category, look at both user and contributor information.
   </p>
   <p><a href="/ecf/contributing.php">Contributing</a></p>


<?php
        $html = ob_get_contents();
        include 'getNugget.php';

        $html = getNugget("EcfJavadocs.html",$html);
        $html = getNugget("EcfMailingList.html",$html);
        $html = getNugget("EcfAnonCVSaccess.html",$html);
        $html = getNugget("EcfCodeConventions.html",$html);
        $html = getNugget("EcfWiki.html",$html);
        $html = getNugget("EcfBugReporting.html",$html);
        $html = getNugget("EcfNewsgroup.html",$html);
        $html = getNugget("EcfPresentations.html",$html);


 $html = $html . "</div></div>";

	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
