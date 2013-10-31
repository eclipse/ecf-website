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
    
    <h1>$pageTitle</h1>
    
    <br/>	
	<div class="homeitem3col">	
         <h3>About the ECF Project</h3>
     	<div style="margin:10px;">
         $desc
	</div>
	<div class="homeitem3col">
         <h3>Next Release</h3>
     	<div style="margin:10px;">
     	<img border="0" src="../images/new.gif" width="31" height="14" alt="[new]"/><b>ECF 3.7.1 released on 10/27/2013.</b>.<br><br>
			See also <a href="NewAndNoteworthy.html">ECF 3.7.0 New and Noteworthy</a>
	<div class="homeitem3col">		
 	<h3>What's New</h3>
 <table cellspacing="5" cellpadding="2" width="100%" border="0">
	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>October 2013 - Wim Jongman and Markus Alexander Kuppe presented at <a href="http://www.eclipsecon.org/europe2013/">EclipseCon Europe 2013</a> in Ludwigsburg. The slides of the talk
	  	can be found on the conference session page: <a href="http://www.eclipsecon.org/europe2013/discover-remote-osgi-services">Discover Remote OSGi Services</a>.
		The code of the example Chat app and server can be found at <a href="http://github.com/ECF/Chat">ECF's github repo</a>.</b>
           <p></p>
		</td>
	</tr>
	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>October 27, 2013 - ECF 3.7.1 is available on eclipse.org.</b>
			See <a href="downloads.php">here for download</a>.  See <a href="NewAndNoteworthy.html">ECF 3.7.0 New and Noteworthy</a>
           <p></p>
		</td>
	</tr>
	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>October 16, 2013 - ECF 3.7.0 is available on eclipse.org.</b>
			See <a href="downloads.php">here for download</a>.  See <a href="NewAndNoteworthy.html">ECF 3.7.0 New and Noteworthy</a>
           <p></p>
		</td>
	</tr>
	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>June 26, 2013 - ECF 3.6.1 is available on eclipse.org.</b>
			See <a href="downloads.php">here for download</a>.  See <a href="NewAndNoteworthy.html">ECF 3.6.1 New and Noteworthy</a>
           <p></p>
		</td>
	</tr>
	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>March 10, 2013 - ECF 3.6.0 is available on eclipse.org.</b>
			See <a href="downloads.php">here for download</a>.  See <a href="NewAndNoteworthy.html">ECF 3.6.0 New and Noteworthy</a>
           <p></p>
		</td>
	</tr>
	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>June 27, 2012 - ECF 3.5.6 (Juno) is available on eclipse.org.</b>
			See <a href="downloads.php">here for download</a>.  See <a href="NewAndNoteworthy.html">ECF 3.5 New and Noteworthy</a>
           <p></p>
		</td>
	</tr>
	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>August 2013 - Committer Scott Lewis has two new blog posts: <a href="http://eclipseecf.blogspot.com/2013/06/ecf-kepler361-remote-services-takes.html">ECF Kepler Remote Services take Center Stage</a></b> and 
	  	<a href="http://eclipseecf.blogspot.com/2013/07/article-on-osgi-remote-services-in.html">Article on ECF Remote Services in Eclipse Newsletter</a>.
           <p></p>
		</td>
	</tr>
	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>October 2013 - Wim Jongman and Markus Alexander Kuppe are presenting at <a href="http://www.eclipsecon.org/europe2013/">EclipseCon Europe 2013 in Ludwigsburg.  The title of their presentation
	  	is <a href="http://www.eclipsecon.org/europe2013/discover-remote-osgi-services">Discover Remote OSGi Services</a></b>
           <p></p>
		</td>
	</tr>
	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>Oct 13, 2010 - ECF has changed its source code repository from CVS to git The git repo can be found at <a href="http://git.eclipse.org/c/ecf/org.eclipse.ecf.git">http://git.eclipse.org/c/ecf/org.eclipse.ecf.git</a>.</b>
			The CVS repository remains online read-only for the moment but _won't be_ synced with git!.
           <p></p>
		</td>
	</tr>
	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>Oct 08, 2010 - Markus Alexander Kuppe gave a one day tutorial about ECF remote services as part of OSGi Summerschool at University Hamburg.</b>
			Slides can be found <a href="http://github.com/lemmy/org.eclipse.ecf.winterschool/raw/master/org.eclipse.ecf.winterschool/EclipseCommunicationFramework.odp">online</a> (German only).
           <p></p>
		</td>
	</tr>
	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>March 23, 2009 - Scott Lewis and Markus Alexander Kuppe gave a tutorial titled <a href="http://www.eclipsecon.org/2009/sessions?id=618">"Distributed OSGi - The ECF way"</a> at <a href="http://www.eclipsecon.org/2009">EclipseCON 2009</a>. </b>
			The slides are available <a href="presentations/Distributed_OSGi_-_The_ECF_way_rev02.pdf">here</a>.
           <p></p>
		</td>
	</tr>
      </table>    
	</div>
	</div>
    </div>
</div>


EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
