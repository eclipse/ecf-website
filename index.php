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
	<div class="homeitem3col">
         <h3>Next Release</h3>
     	<div style="margin:10px;">
     	<img border="0" src="../images/new.gif" width="31" height="14" alt="[new]"/><b>ECF 3.14.14 was released on 8/16/2020.</b><br><br>
			See also <a href="NewAndNoteworthy.html">ECF New and Noteworthy</a>
	</div></div>
 	<h3>What's New</h3>
 <table cellspacing="5" cellpadding="2" width="100%" border="0">
  	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>Sunday, August 16, 2020 - ECF 3.14.14 is available on eclipse.org.</b>
			See <a href="downloads.php">here for download</a>.  The ECF 3.14.14 release is a bug-fix release.  See <a href="NewAndNoteworthy.html">ECF New and Noteworthy</a>
           <p></p>
		</td>
	</tr>
 	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>Friday, August 14, 2020 - ECF 3.14.13 is available on eclipse.org.</b>
			See <a href="downloads.php">here for download</a>.  The ECF 3.14.13 release is a bug-fix release.  See <a href="NewAndNoteworthy.html">ECF New and Noteworthy</a>
           <p></p>
		</td>
	</tr>
 	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>Monday, July 13, 2020 - ECF 3.14.12 is available on eclipse.org.</b>
			See <a href="downloads.php">here for download</a>.  The ECF 3.14.12 release is a bug-fix release.  See <a href="NewAndNoteworthy.html">ECF New and Noteworthy</a>
           <p></p>
		</td>
	</tr>
 	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>Monday, June 15, 2020 - ECF 3.14.8 is available on eclipse.org.</b>
			See <a href="downloads.php">here for download</a>.  The ECF 3.14.8 release is a bug-fix release.  See <a href="NewAndNoteworthy.html">ECF New and Noteworthy</a>
           <p></p>
		</td>
	</tr>
 	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>Wednesday, Feb 19, 2019 - ECF 3.14.7 is available on eclipse.org.</b>
			See <a href="downloads.php">here for download</a>.  The ECF 3.14.7 release is a bug-fix release.  See <a href="NewAndNoteworthy.html">ECF New and Noteworthy</a>
           <p></p>
		</td>
	</tr>
 	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>October 31, 2019 - ECF 3.14.6 is available on eclipse.org.</b>
			See <a href="downloads.php">here for download</a>.  The ECF 3.14.6 release is a bug-fix release.  See <a href="NewAndNoteworthy.html">ECF New and Noteworthy</a>
           <p></p>
		</td>
	</tr>
 	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>June 20, 2019 - ECF 3.14.5 is available on eclipse.org.</b>
			See <a href="downloads.php">here for download</a>.  The ECF 3.14.5 release is a bug-fix release.  See <a href="NewAndNoteworthy.html">ECF New and Noteworthy</a>
           <p></p>
		</td>
	</tr>
 	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>October 20, 2018 - ECF 3.14.4 is available on eclipse.org.</b>
			See <a href="downloads.php">here for download</a>.  The ECF 3.14.4 release is a bug-fix release.  See <a href="NewAndNoteworthy.html">ECF New and Noteworthy</a>
           <p></p>
		</td>
	</tr>
 	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>October 4, 2018 - ECF 3.14.3 is available on eclipse.org.</b>
			See <a href="downloads.php">here for download</a>.  The ECF 3.14.3 release is a bug-fix release.  See <a href="NewAndNoteworthy.html">ECF New and Noteworthy</a>
           <p></p>
		</td>
	</tr>
 	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>July 30, 2018 - ECF 3.14.1 is available on eclipse.org.</b>
			See <a href="downloads.php">here for download</a>.  The ECF 3.14.1/Photon.1 release is a bug-fix release.  See <a href="NewAndNoteworthy.html">ECF New and Noteworthy</a>
           <p></p>
		</td>
	</tr>
 	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>June 20, 2018 - ECF 3.14.0 is available on eclipse.org.</b>
			See <a href="downloads.php">here for download</a>.  The ECF 3.14.0/Photon release is a minor release.  See <a href="NewAndNoteworthy.html">ECF New and Noteworthy</a>
           <p></p>
		</td>
	</tr>
	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>December 30, 2015 - Christoph Keimel recently presented a very cool 
	  	<a href="http://de.slideshare.net/keimel/how-to-diffuse-a-bomb-with-ecf-and-efxclipse">Internet of Things game based upon ECF Remote Services</a>
	  	 at <a href="http://eclipsesource.com/blogs/2015/12/23/eclipse-democamp-december-munich-2015">Eclipse Democamp</a>.   
	  	 <a href="http://de.slideshare.net/keimel/how-to-diffuse-a-bomb-with-ecf-and-efxclipse">Check it out</a>...it's really cool!
           <p></p>
		</td>
	</tr>
  	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>October 30, 2014</b>:  Wim Jongman presented <b><a href="https://www.eclipsecon.org/europe2014/session/how-cook-egg-eclipse-communication-framework-and-nebula">How to Cook an Egg with the Eclipse Communication
	  	Framework and Nebula</a></b> at <a href="https://www.eclipsecon.org/europe2014/">EclipseCon Europe 2014</a>.  
	  	The slides are available <a href="https://www.eclipsecon.org/europe2014/session/how-cook-egg-eclipse-communication-framework-and-nebula"> on the EclipseCon website</a> or from ECF's web area <a href="http://www.eclipse.org/ecf/presentations/ese2014/How%20to%20Cook%20an%20Egg%20with%20the%20Eclipse%20Communication%20Framework.pdf">here</a></p>
           <p></p>
		</td>
	</tr>
	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>Jan 2014 - New Tutorial: <a href="http://wiki.eclipse.org/Tutorial:_Creating_a_RESTful_Remote_Service_Provider">Creating a RESTful Remote Service Provider</a>
           <p></p>
		</td>
	</tr>
	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>December 2013 - New Tutorial: <a href="http://wiki.eclipse.org/Tutorial:_Building_your_first_OSGi_Remote_Service">Building your first OSGi Remote Service</a>
           <p></p>
		</td>
	</tr>
	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>November 2013 - Markus Alexander Kuppe demoed ECF's OSGi remote services at <a href="http://wiki.eclipse.org/Eclipse_DemoCamps_November_2013/Hamburg">Democamp</a> in Hamburg. The (few) slides of the talk
	  	can be found online <a href="http://www.lemmster.de/publications/Discover_Remote_Services_-_Democamp_HH_2013_-_Markus_Alexander_Kuppe.pdf">at his personal blog</a>.
		More importantly, the code of the example Chat app and server are hosted at <a href="http://github.com/ECF/Chat">ECF's github repo</a>.</b>
           <p></p>
		</td>
	</tr>
	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>October 2013 - Wim Jongman and Markus Alexander Kuppe presented at <a href="http://www.eclipsecon.org/europe2013/">EclipseCon Europe 2013</a> in Ludwigsburg. The slides of the talk
	  	can be found on the conference session page: <a href="http://www.eclipsecon.org/europe2013/discover-remote-osgi-services.html">Discover Remote OSGi Services</a>.
		The code of the example Chat app and server can be found at <a href="http://github.com/ECF/Chat">ECF's github repo</a>.</b>
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
	  	is <a href="http://www.eclipsecon.org/europe2013/discover-remote-osgi-services.html">Discover Remote OSGi Services</a></b>
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
      </table>    
	</div>

EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
