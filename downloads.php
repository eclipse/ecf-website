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
    <b>ECF 2.0.0RC3 now available (6/3/2008).</b>
    <p>
    <b>NOTE:  For Eclipse 3.4 it is necessary to use a distinct update site.  See <a href="#2.0.0M6">ECF 2.0 Install via Update Site -- <b>for use with Eclipse 3.4</a> below.</b>
    <p>
    For Eclipse 3.3, please use the <a href="#2.0.0M5">ECF 2.0 Install via Update Site -- <b>for use with Eclipse 3.3</b></a>.
    <p></p>
    ECF 2.0.0 requires <b>Eclipse 3.3</b> or 3.4.  See <a href="http://download.eclipse.org/eclipse/downloads/">here to get
    appropriate version of Eclipse</a>.
    <p></p>
    <p>
    See <a href="NewAndNoteworthy.html">New and Noteworthy</a> for details of the contents of this release.
	</p>
	<p>
 See <a href="http://wiki.eclipse.org/Eclipse_Communication_Framework_Project">ECF Wiki</a> for further information about plans, sub-projects, meetings, etc.
</p>
	
<?php
	$html = ob_get_contents();

        include 'getNugget.php';
        $html = getNugget("EcfInstallViaUpdate3.4.html",$html);
        $html = getNugget("EcfInstallViaZip3.4.html",$html);
        $html = getNugget("EcfInstallViaUpdate.html",$html);
        $html = getNugget("EcfInstallViaZip.html",$html);
        $html = getNugget("Ecf1.2InstallViaUpdate.html",$html);
        $html = getNugget("Ecf1.2InstallViaZip.html",$html);
        $html = getNugget("EcfSourceCode.html",$html);
        $html = getNugget("EcfExtraPlugins.html",$html);
        $html = getNugget("EcfBuildTypes.html",$html);

        $html = $html . "</div></div>";

	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
