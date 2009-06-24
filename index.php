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
	  	<b>June 24, 2009 - ECF 3.0 Release available on eclipse.org. </b>
			See <a href="downloads.php">here for download</a>.  See <a href="NewAndNoteworthy.html">ECF New and Noteworthy</a>.
           <p></p>
		</td>
	</tr>
	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>March 26, 2009 - Markus Alexander Kuppe and Scott Lewis present a talk about <a href="http://www.eclipsecon.org/2009/sessions?id=757">"Best Practices with distributed OSGi services"</a> during <a href="http://www.eclipsecon.org/2009">EclipseCON 2009</a>. </b>
			As always the slides are <a href="http://ecf2.osuosl.org/Best_Practices_with_Distributed_OSGi.pdf">available online</a>.
           <p></p>
		</td>
	</tr>
	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>March 23, 2009 - Scott Lewis and Markus Alexander Kuppe gave a tutorial titled <a href="http://www.eclipsecon.org/2009/sessions?id=618">"Distributed OSGi - The ECF way"</a> at <a href="http://www.eclipsecon.org/2009">EclipseCON 2009</a>. </b>
			The slides are available <a href="http://ecf2.osuosl.org/Distributed_OSGi_-_The_ECF_way_rev02.pdf">on ecf2.osuosl.org</a>.
           <p></p>
		</td>
	</tr>
	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>Dec 24, 2008 - ECF 2.1 Release available on eclipse.org. </b>
			See <a href="downloads.php">here for download</a>.  See <a href="NewAndNoteworthy.html">ECF 2.1 New and Noteworthy</a> release documentation.
           <p></p>
		</td>
	</tr>
	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>Nov 24, 2008 - Marcelo Mayworm and Scott Lewis gave a talk titled "ECF Inside and Out" at <a href="http://www.eclipsecon.org/summiteurope2008">ESE08</a>. </b>
			A description of the talk is <a href="http://www.eclipsecon.org/summiteurope2008/sessions?id=206">here</a>, and the slides
			are available <a href="http://www.eclipse.org/ecf/presentations/ese08/ECF_Eclipse_Summit_2008_Inside_and_Out.pdf">here</a>.
           <p></p>
		</td>
	</tr>
	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>Nov 21, 2008 - Jan Rellermeyer, Markus Alexander Kuppe, and Scott Lewis gave a talk titled "Service Discovery and Remote Services with the Eclipse Communication Framework" at <a href="http://www.eclipsecon.org/summiteurope2008">ESE08</a>. </b>
			Slides can be found <a href="http://www.eclipse.org/ecf/presentations/ese08/ESE_2008_ECF.pdf">here</a>
           <p></p>
		</td>
	</tr>
	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>July 24, 2008 - Two ECF video demos available on <a href="http://live.eclipse.org">live.eclipse.org</a></b>
			See <a href="http://live.eclipse.org/node/543">here for Cola Real-Time Shared Editing</a> and <a href="http://live.eclipse.org/node/571">here for ECF 2.0.0 - Some New Features</a>.
           <p></p>
		</td>
	</tr>
	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>June 24, 2008 - ECF 2.0.0/Ganymede Release available on eclipse.org. </b>
			See <a href="downloads.php">here for download</a>.  See <a href="NewAndNoteworthy.html">New and Noteworthy</a> release documentation.
           <p></p>
		</td>
	</tr>
	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>June 18, 2008 - ECF Committers Markus Kuppe and Jan Rellermeyer present ECF at <a href="http://www.osgi.org/CommunityEvent2008/HomePage">OSGi Community Event, June 10 and 11, 2008</a>. </b>
			See <a href="http://www.osgi.org/wiki/uploads/CommunityEvent2008/21_RemoteServices_OSGi_CommEvent08.pdf">here for the slides of their presentation</a>.  <a href="http://www.osgi.org/CommunityEvent2008/Program">Here is the entire program</a>.
           <p></p>
		</td>
	</tr>
	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>June 16, 2008 - Article about <a href="http://www.infoq.com/news/2008/06/eclipse-ganymede-ecf">ECF on InfoQ</a>. </b>
           <p></p>
		</td>
	</tr>
	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>May 30, 2008 - <a href="http://java.dzone.com/news/the-ecf-project-an-interview-w">Interview with ECF project lead Scott Lewis at Dzone</a>. </b>
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
      </table>    
	</div>

    </div>
</div>


EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
