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
    
    <h1>$pageTitle</h1>
    
    <br/>	
	<div class="homeitem3col">	
         <h3>About the ECF Project</h3>
     	<div style="margin:10px;">
         $desc
	</div>
	<div class="homeitem3col">		
 	<h3>What's New</h3>
 <table cellspacing="5" cellpadding="2" width="100%" border="0">
	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>May 14, 2007 - <a href="http://www.eclipsezone.com/eclipse/forums/t94530.html">Podcast with ECF project lead Scott Lewis.</a></b>
		</td>
	</tr>
	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>May 11, 2007 - ECF 1.0.0 M7 released on eclipse.org. </b>
			See <a href="downloads.php">here for download</a>.  See <a href="NewAndNoteworthy.html">New and Noteworthy</a> release documentation.
		</td>
	</tr>
	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>April 28, 2007 - ECF 1.0.0 dev build released on eclipse.org. </b>
			See <a href="http://dev.eclipse.org/mhonarc/lists/ecf-dev/msg00786.html">Mailing List/Newsgroup Posting</a>.  Note this
			includes a new <a href="http://wiki.eclipse.org/index.php/Skype_Provider">Skype Provider for ECF</a>.
		</td>
	</tr>
	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>April 2, 2007 - ECF blog</b>
			Scott has (re)-started a <a href="http://eclipseecf.blogspot.com/">blog for ECF</a>.
		</td>
	</tr>
	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>March 30, 2007 - ECF 1.0.0 milestone 6 build released on eclipse.org. </b>
			See <a href="NewAndNoteworthy.html">New and Noteworthy</a> release documentation.  See also a 
			new <a href="http://wiki.eclipse.org/index.php/Bot_Framework">Bot Framework Tutorial</a> by Remy Suen for the new <a href="http://www.eclipse.org/ecf/org.eclipse.ecf.docs/api/org/eclipse/ecf/presence/bot/package-summary.html">ECF Robot API</a>.
		</td>
	</tr>

		<tr>
		 <td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		 </td>
		 <td valign="top">
			<b>March 7, 2007 - ECF Short talk by <b>Ken Gilmer</b> at <a href="http://www.eclipsecon.org/2007/index.php?page=sub/&id=4081">EclipseCon 2007</a>. </b>
			<a href="presentations/eclipsecon2007/ecf_talk.pdf">Here are the talk slides (pdf)</a>.
		 </td>
	</tr>


	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>February 15, 2007 - ECF 1.0.0-stable build released on eclipse.org. </b>
		</td>
	</tr>

      </table>    
	</div>

    </div>
</div>


EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
