<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "ECF Committers";
	$pageKeywords	= "ECF, Eclipse, committer, contributor";
	$pageAuthor		= "ECF Team";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
ob_start();
?>
	<div id="midcolumn">
		<h1><?= $pageTitle ?></h1>
		<div class="homeitem3col">
			<a name="committers"></a>
			<h3>ECF Committers</h3>
			<table width="100%" border="0">
              <tr>
                <td width="25%"><p align="center"><img src="zx.gif" alt="Chris Aniszczyk" width="200" height="280"></p>
                  <p align="center"><strong><a href="http://mea-bloga.blogspot.com">Chris Aniszczyk</a></strong></p>
                  <p align="center">Committer, IBM Austin Labs</p>               
                  <p align="center">&nbsp;</p>
                </td>
                <td width="25%"><p align="center"><img src="slewis.jpg" alt="Scott Lewis" width="200" height="280"></p>
                  <p align="center"><strong><a href="http://eclipseecf.blogspot.com/">Scott Lewis</a></strong></p>
                  <p align="center">Project Lead, Independent</p>
                  <p align="center">&nbsp;</p>
                </td>
                <td width="25%"><p align="center"><img src="pete_mackie.jpg" alt="Pete Mackie" width="200" height="280"></p>
                  <p align="center"><strong>Pete Mackie</strong></p>
                  <p align="center">Committer, Seaquest Software</p>
                  <p align="center">&nbsp;</p>
                </td>
              </tr>
          </table>
        </div>
	</div>
	

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

