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
     	<img border="0" src="../images/new.gif" width="31" height="14" alt="[new]"/><b>ECF 3.5.4 released on 12/30/2011.</b>.<br><br>
			See also <a href="NewAndNoteworthy.html">ECF 3.5 New and Noteworthy</a>
	<div class="homeitem3col">		
 	<h3>What's New</h3>
 <table cellspacing="5" cellpadding="2" width="100%" border="0">
	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>Dec 30, 2011 - ECF 3.5.4 is available on eclipse.org.</b>
			See <a href="downloads.php">here for download</a>.  See <a href="NewAndNoteworthy.html">ECF 3.5 New and Noteworthy</a>
           <p></p>
		</td>
	</tr>
	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>Nov 11, 2011 - ECF 3.5.3 is available on eclipse.org.</b>
			See <a href="downloads.php">here for download</a>.  See <a href="NewAndNoteworthy.html">ECF 3.5 New and Noteworthy</a>
           <p></p>
		</td>
	</tr>
	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>Aug 29, 2011 - ECF 3.5.2 is available on eclipse.org.</b>
			See <a href="downloads.php">here for download</a>.  See <a href="NewAndNoteworthy.html">ECF 3.5 New and Noteworthy</a>
           <p></p>
		</td>
	</tr>
	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>A new EclipseZone article on ECF Indigo release:  <a href="http://eclipse.dzone.com/articles/eclipse-indigo-highlights-ecf">Eclipse Indigo Highlights: Five Reasons to Check Out ECF</a></b>
			See also <a href="NewAndNoteworthy.html">ECF 3.5.1 New and Noteworthy</a>
           <p></p>
		</td>
	</tr>
	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>Nov 3, 2010 - Wim Jongman and Markus Alexander Kuppe presented ECF remote services at ESE2010 in Ludwigsburg. <a href="http://www.eclipsecon.org/summiteurope2010/sessions/?page=sessions&id=1916">More information can be found at the conference website.</a></b>
           <p></p>
		</td>
	</tr>
	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>Nov 2, 2010 - Committer Scott Lewis has two new blog posts: <a href="http://eclipseecf.blogspot.com/2010/11/ecf-34-remote-services.html">ECF 3.4 Remote Services</a></b> and 
	  	<a href="http://eclipseecf.blogspot.com/2010/10/ecf-34-released.html">ECF 3.4 Released</a>.
           <p></p>
		</td>
	</tr>
	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>Oct 26, 2010 - ECF committer Pavel Samolisov has written a nice article: <a href="http://psamolisov.blogspot.com/2010/10/ecf-for-eclipse-customers.html">ECF for Eclipse Customers</a></b>.  It describes
	  	some of the Eclipse developer collaboration features that come with ECF.
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
	  	<b>Sept 24, 2010 - ECF 3.3.1/Helios Service Release 1 available on eclipse.org.</b>
			See <a href="downloads.php">here for download</a>.  See <a href="NewAndNoteworthy.html">ECF New and Noteworthy</a>.
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
	  	<b>March 26, 2009 - Markus Alexander Kuppe and Scott Lewis present a talk about <a href="http://www.eclipsecon.org/2009/sessions?id=757">"Best Practices with distributed OSGi services"</a> during <a href="http://www.eclipsecon.org/2009">EclipseCON 2009</a>. </b>
			As always the slides are <a href="presentations/Best_Practices_with_Distributed_OSGi.pdf">available online</a>.
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
      </table>    
	</div>

    </div>
</div>


EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
