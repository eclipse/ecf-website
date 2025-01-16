<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");

  $descString = $_SERVER['DOCUMENT_ROOT']."/ecf/project-info/project-description.html";
  $desc = file_get_contents($descString);
 	$App 	= new App();
	$Nav	= new Nav();
	$Menu 	= new Menu();
	include($App->getProjectCommon());

	#*****************************************************************************
	#
	# index.php
	#
	# Author: 		Denis Roy
	# Date:			2005-10-11
	#
	# Description: Main eclipse.org page
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "Eclipse Communication Framework Project Home";
	$pageKeywords	= "eclipse,project,plug-ins,plugins,java,ide,swt,refactoring,free java ide,tools,platform,open source,development environment,development,ide";
	$pageAuthor		= "Eclipse Foundation, Inc.";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank)
	# $Nav->addCustomNav("My Link", "mypage.php", "_self");
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank");

	# End: page-specific settings
	#
	
	# Place your html content in a file called content/en_pagename.php
	$html = <<<EOHTML
<div id="midcolumn">
    
    <img src="https://wiki.eclipse.org/images/b/b8/Logo128x37.png" alt="ECF Logo" align="right"/>
    <h1>$pageTitle</h1>
    
    <br/>	
	<div class="homeitem3col">	
         <h3>About the ECF Project</h3>
     	<div style="margin:10px;">
         $desc
	</div></div>
    <div class="homeitem3col">	
	<h3>ECF Remote Services Training, Support, and Integration</h3>
	   For Remote Services training, support, or expert OSGi or Eclipse development please contact <a href="mailto:slewis@composent.com">Composent.com via email</a> or bring it up
	   on the <a href="https://dev.eclipse.org/mailman/listinfo/ecf-dev">ECF dev mailing list</a>.	
	</div>
 	<h3>What's New</h3>
 <table cellspacing="5" cellpadding="2" width="100%" border="0">
	 <tr>
	 	<td align="left" valign="top" height="12" width="23">
	 	</td>
	 	<td valign="top">
	   	<b>Wednesday, August 21, 2024 - ECF 3.15.2 has been released on eclipse.org.</b>
	 		See <a href="downloads.php">here for download</a>.  The ECF 3.15.2 release is a bug-fix release.  See <a href="NewAndNoteworthy.html">ECF New and Noteworthy</a>
	        <p></p>
	 	</td>
	 </tr>
  	<tr>
		<td align="left" valign="top" height="12" width="23">
		</td>
		<td valign="top">
	  	<b>Wednesday, August 21, 2024 - ECF 3.15.2 has been released on eclipse.org.</b>
			See <a href="downloads.php">here for download</a>.  The ECF 3.15.2 release is a bug-fix release.  See <a href="NewAndNoteworthy.html">ECF New and Noteworthy</a>
           <p></p>
		</td>
	</tr>
  	<tr>
		<td align="left" valign="top" height="12" width="23">
		</td>
		<td valign="top">
	  	<b>Friday, April 1, 2022 - ECF has moved it's project repository to Eclpse Github:  https://github.com/eclipse/ecf.</b>
			See <a href="downloads.php">here for binary download</a>.  See <a href="https://github.com/eclipse/ecf">ECF's github repo</a>.   
			Special thanks to ECF committer Wim Jongman for doing the work of moving from Eclipse git/gerrit to github.
           <p></p>
		</td>
	</tr>
	<tr>
		<td align="left" valign="top" height="12" width="23">
		</td>
		<td valign="top">
	  	<b>December 30, 2015 - Christoph Keimel recently presented a very cool 
	  	<a href="http://de.slideshare.net/keimel/how-to-diffuse-a-bomb-with-ecf-and-efxclipse">Internet of Things game based upon ECF Remote Services</a>
	  	 at <a href="http://eclipsesource.com/blogs/2015/12/23/eclipse-democamp-december-munich-2015">Eclipse Democamp</a>.   
	  	 <a href="http://de.slideshare.net/keimel/how-to-diffuse-a-bomb-with-ecf-and-efxclipse">Check it out</a>...it's really cool!
           <p></p>
		</td>
	</tr>
      </table>    
	</div>

EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
