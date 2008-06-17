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
 	<h3>What's New</h3>
 <table cellspacing="5" cellpadding="2" width="100%" border="0">
	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>June 17, 2008 - ECF 2.0.0 Release Candidate 5 (RC5) released on eclipse.org. </b>
			See <a href="downloads.php">here for download</a>.  See <a href="NewAndNoteworthy.html">New and Noteworthy</a> release documentation.
           <p></p>
		</td>
	</tr>
	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>Mar 24, 2008 - ECF committers <a href="http://eclipseecf.blogspot.com/">Scott Lewis</a>, <a href="http://www.lemmster.de/blog/">Markus Kuppe</a>, Ted Kubaska, and <a href="http://people.inf.ethz.ch/rjan/">Jan Rellermeyer</a> present at <a href="http://www.eclipsecon.org">EclipseCon 2008</a>. </b>
			Presentation slides can be found <a href="http://www.eclipse.org/ecf/presentations/eclipsecon2008/longtalk134/ecf_eclipsecon2008_134.pdf">here</a>.  
           <p></p>
		</td>
	</tr>
	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>October 19, 2007 - ECF 1.2.0 released on eclipse.org. </b>
			See <a href="downloads.php">here for download</a>.  See <a href="NewAndNoteworthy.html">New and Noteworthy</a> release documentation.
           <p></p>
		</td>
	</tr>
	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>September 27, 2007 - ECF 1.0.3 available via Eclipse.org. </b>
     Eclipse Communication Framework 1.0.3 build is now available.  See <a href="http://www.eclipse.org/ecf/downloads.php">here for download</a>.
		</td>
	</tr>
	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>July 27, 2007 - Great ECF Contributions for BugDay.</b>
			Several great contributions from <a href="team.php">new contributors</a> for <a href="http://wiki.eclipse.org/BugDayJuly2007">BugDay July 2007</a>.  Thanks to all who participated.
		</td>
	</tr>
	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>June 22, 2007 - <a href="http://villane.blogspot.com/2007/06/equinox-ecf-serving-interactive-fiction.html">Really cool:  Server-side interactive fiction done with Equinox and ECF</a>. </b>
		</td>
	</tr>
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
	  	<b>April 2, 2007 - ECF blog</b>
			Scott has (re)-started a <a href="http://eclipseecf.blogspot.com/">blog for ECF</a>.
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
