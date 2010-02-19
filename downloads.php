<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
$App 	= new App();
$Nav	= new Nav();
$Menu 	= new Menu();
include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "ECF Downloads";
	$pageKeywords	= "Type, page, keywords, here";
	$pageAuthor		= "Scott Lewis, Pete Mackie";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 1);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 1);

	# End: page-specific settings
	#

		
ob_start();
?>		

<div id="midcolumn">
 <div class="homeitem3col">
    <h3><?= $pageTitle ?></h3>
    <p><img border="0" src="../images/new.gif" width="31" height="14" alt="[new]"/>
    <b>ECF 3.2 Now Available (2/19/2010).</b>
    <p></p>
    <p>
    ECF 3.2 requires <b>Eclipse Galileo (3.5.X) or Eclipse Helios 3.6 Milestone 5 (or more recent milestones/releases)</b>.  <br>
    See <a href="http://download.eclipse.org/eclipse/downloads/">here to get
    appropriate version of Eclipse</a>.  <br>
    See <a href="NewAndNoteworthy.html">New and Noteworthy</a> for details of the contents of this release.<br>
 See <a href="http://wiki.eclipse.org/Eclipse_Communication_Framework_Project">ECF Wiki</a> and/or the <a href="https://dev.eclipse.org/mailman/listinfo/ecf-dev">ecf dev at eclipse.org mailing list</a>for further information about plans and ongoing project activities.
    </p>
	
<?php
	$html = ob_get_contents();

        include 'getNugget.php';
        $html = getNugget("EcfInstallViaUpdate3.5.html",$html);
        $html = getNugget("EcfInstallViaZip3.5.html",$html);
        $html = getNugget("EcfDailies.html",$html);    
 
        $html = getNugget("EcfSourceCode.html",$html);
        $html = getNugget("EcfExtraPlugins.html",$html);
        $html = getNugget("EcfBuildTypes.html",$html);
        

        $html = $html . "</div></div>";

	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
