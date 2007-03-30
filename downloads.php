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
<div id="rightcolumn">
 <div class="sideitem">
   <h6>Incubation</h6>
   <div align="center"><a href="/projects/gazoo.php">
        <img align="middle" src="/images/gazoo-incubation.jpg" 
        border="0" alt="[gazoo-incubation]"/></a>
   </div>
 </div>
</div>

<div id="midcolumn">
 <div class="homeitem3col">
    <h3><?= $pageTitle ?></h3>


    <p><img border="0" src="../images/new.gif" width="31" height="14" alt="[new]"/>
     <b>Eclipse Communication Framework 1.0.0 milestone 6 build is now available.</b>
    <p></p>

    <h4><img border="0" src="../images/new.gif" width="31" height="14" alt="[new]"/>
     <b>IMPORTANT:  The 0.9.3, and newer, releases are a compatibility-breaking release</b>, meaning that:
    </h4>

    <ul>
     <li>If you are using a previous version of ECF (&gt;&#61; 0.9.2), it is necessary to <b>uninstall</b> this
     version <b>before</b> installing 0.9.6.  To uninstall the previous version:

      <ul>
       <li>In Eclipse, go to <b>Help -> Software Updates -> Manage Configuration</b>
       </li>
       <li>Select all the features that start with "ECF ...".
       </li>
       <li>Right click to bring up context menu and choose <b>Uninstall</b>
       </li>
       <li>Answer Yes/OK to questions
       </li>
       <li>Stop and restart Eclipse
       </li>
       <li>
       Now you may install 0.9.6 (via update site or zip).  See below for instructions.
       </li>
      </ul>
     </li>
     <li>Applications based upon 0.9.6 will not work with older servers (&gt;&#61; 0.9.2).  
     </li>
     <li>Applications created with ECF releases previous to 0.9.3 will not work with new servers.  
     The public ECF server at 
     <b>ecftcp://ecf.eclipse.org:3282/server has moved to 0.9.6. The ECF server no longer support old clients (0.9.2).</b>
     </li>
    </ul>

    <h4><b>Please see <a href="NewAndNoteworthy_0.9.6.html">New and Noteworthy for 0.9.6</a> for details about API changes</b></h4>
    <p></p>


<?php
	$html = ob_get_contents();

        include 'getNugget.php';

        $html = getNugget("EcfInstallViaUpdate.html",$html);
        $html = getNugget("EcfInstallViaZip.html",$html);
        $html = getNugget("EcfSourceCode.html",$html);
        $html = getNugget("EcfExtraPlugins.html",$html);
        $html = getNugget("EcfBuildTypes.html",$html);

        $html = $html . "</div></div>";

	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
