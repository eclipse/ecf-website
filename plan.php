<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
$App 	= new App();
$Nav	= new Nav();
$Menu 	= new Menu();
include($App->getProjectCommon());
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "ECF Release Plan";
	$pageKeywords	= "Type, page, keywords, here";
	$pageAuthor		= "Scott Lewis, Pete Mackie";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 1);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 1);

	# End: page-specific settings
	#
	# Paste your HTML content between the markers!	
ob_start();
?>

<head>
 <link rel="stylesheet" type="text/css" href="table.css"/>
</head>


<div id="maincontent">
		
<div id="rightcolumn">
 <div class="sideitem">
   <h6>Incubation</h6>
   <div align="center"><a href="/projects/gazoo.php"><img
        align="middle" src="/images/gazoo-incubation.jpg"
        border="0" alt="[gazoo-incubation]"/></a></div>
 </div>
</div>

	<div id="midcolumn">
<h1 style="color:#fff;background-image:url(/eclipse.org-common/themes/Phoenix/images/header_bg.gif)">ECF Plan</h1>
		<h1>ECF Project Milestone Plan</h1>
		<p></p>

		<div class="right">
            Last modified on Feb 14, 2007 by slewis
        </div>

<p></p>
<p></p>
<a href="org.eclipse.ecf.docs/api">See here for Javadocs of ECF APIs</a>
<p></p>
<p></p>
<a href="http://wiki.eclipse.org/index.php/Eclipse_Communication_Framework_Project">See Wiki for Sub-Project Info, Conference Call Schedule, and Longer-Range Planning</a>
<p></p>

ECF is part of the <a href="http://wiki.eclipse.org/index.php/Europa_Simultaneous_Release">Europa Simultaneous Release</a>.  We are planning now on having
our 1.0.0 final release with the Europa release (June 29, 2007).  As part of Europa, we will be having 1.0 milestone release as per the schedule <a href="http://wiki.eclipse.org/index.php/Europa_Simultaneous_Release#Milestones_and_Release_Candidates">here</a>.

<p></p>
Stay tuned here for details of features and bug fixes for each remaining milestone release (M6, M7, RCn).

<!-- Milestone 1.0.0.M5 -->
<h2><a name="1.0.0.M5">1.0.0.M5</a></h2>
<p></p>

<b>Target Release Date: 2/16/2007
<br/>
Actual Release Date: 2/15/2007
<br/>
<a href="downloads.php">Download</a>
<br/>
<a href="NewAndNoteworthy_1.0.0.html">New and Noteworthy</a></b>

<table class="milestones">

 <tr>

   <th>Features</th>
   <th>Committer/Contributor</th>
   <th>Enhancement Request/Bug</th>
 </tr>

   <tr class="done">
   <td>
     Additional UI features for IM and multi-user chat
   </td>

   <td>
      Unassigned
   </td>
   <td>
   <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=110896">#110896</a>
   </td>
 </tr>

   <tr class="done">
   <td>
      Refactor test code for presence and datashare APIs and move into org.eclipse.ecf.tests plugin
   </td>
   <td>
      Scott Lewis
   </td>

   <td>
       <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=161497">#161497</a>   </td>
   </tr>

  <tr class="done">
   <td>
     Move org.eclipse.ecf.provider.rss from Higgins' repository to ECF's
   </td>

   <td>
      Scott Lewis
   </td>
   <td>
   <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=166016">#166016</a>
  </td>
 </tr>

  <tr class="progress">
   <td>
   Complete bulletin board API, get IP approval for contribution, and integrate in with ECF on dev.eclipse.org
   </td>

   <td>
     Erkki Lindpere and Scott Lewis
   </td>
   <td>
   <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=150756">#150756</a>
   </td>
 </tr>

  <tr class="progress">
   <td>
     Create New Connect Wizard for JXTA Client
   </td>

   <td>
      Pierre Henry-Perret
   </td>
   <td>
   <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=165514">#165514</a>
   </td>
 </tr>
</table>
    
<p></p>

<!-- Milestone 0.9.6 -->
<h2><a name="0.9.6">0.9.6</a></h2>
<p></p>

<b>Target Release Date: 1/12/2007
<br/>
Actual Release Date: 1/13/2007
<br/>
<a href="downloads.php">Download</a>
<br/>
<a href="NewAndNoteworthy_0.9.6.html">New and Noteworthy</a></b>


<table class="milestones">
 
 <tr>

   <th>Features</th>
   <th>Committer/Contributor</th>
   <th>Enhancement Request/Bug</th>
 </tr>
  
   <tr class="progress">
   <td>
     Add persistence to RosterView
   </td>

   <td>
      Scott Lewis
   </td>
   <td>
   <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=166670">#166670</a>
   </td>
 </tr>

       <tr class="done">
   <td>
     [provider] BitTorrent provider for file transfer (receive) API
   </td>

   <td>
      Remy Suen and Scott Lewis
   </td>
   <td>
   <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=144133">#144133</a>
   </td>
 </tr>

       <tr class="done">
   <td>
     [IRC] Able to open links in internal browser
   </td>

   <td>
      Remy Suen
   </td>
   <td>
   <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=148874">#148874</a>
   </td>
 </tr>

 
      <tr class="done">
   <td>
     Create New Connect Wizard for XMPP Client
   </td>

   <td>
      Scott Lewis
   </td>
   <td>
   <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=165508">#165508</a>
   </td>
 </tr>

         <tr class="done">
   <td>
     Create New Connect Wizard for IRC Client
   </td>

   <td>
      Remy Suen
   </td>
   <td>
   <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=165511">#165511</a>
   </td>
 </tr>
</table>

<p></p>

<!-- Milestone 0.9.5 -->
<h2><a name="0.9.5">0.9.5</a></h2>
<p></p>

<b>Target Release Date: 12/15/2006
<br/>
Actual Release Date: 12/22/2006
<br/>
<a href="downloads.php">Download</a>
<br/>
<a href="NewAndNoteworthy_0.9.5.html">New and Noteworthy</a>
</b>

<p></p>

<table class="milestones">
 
 <tr>

   <th>Features</th>
   <th>Committer/Contributor</th>
   <th>Enhancement Request/Bug</th>
 </tr>  
  
 <tr class="done">   
   <td>
      Refactor test code and move into org.eclipse.ecf.tests plugin
   </td>
   <td>
      Scott Lewis
   </td>

   <td>   
       <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=161497">#161497</a>   </td>   
   </tr>
 
  <tr class="done">   
   <td>
     Refactor RosterView to allow easier extension
   </td>

   <td>
      Scott Lewis
   </td>
   <td>   
   <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=166675">#166675</a>
   </td>   
 </tr>
 
 
   <tr class="done">   
   <td>
     Update IRCLib to v1.10
   </td>

   <td>
      Scott Lewis
   </td>
   <td>   
   <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=166418">#166418</a>
   </td>   
 </tr>
 
<tr class="done">
   <td>
     Refactor presence API in <b>org.eclipse.ecf.presence</b> bundle
   </td>

   <td>
      Scott Lewis
   </td>
   <td>
   <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=167363">#167363</a>
   </td>
 </tr>

     <tr class="done">   
   <td>
     [provider] filetransfer provider based upon httpclient 3.0.1
   </td>

   <td>
      Scott Lewis
   </td>
   <td>   
   <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=166079">#166079</a>
   </td>   
 </tr>
 
</table>

<p></p>

<p></p>

<!-- Milestone 0.9.4 -->
<h2><a name="0.9.4">0.9.4</a></h2>

<b>Target Release Date: 12/02/2006
<br/>
Actual Release Date: 12/03/2006
<br/>
<a href="downloads.php">Download</a>
<br/>
<a href="NewAndNoteworthy_0.9.4.html">New and Noteworthy</a></b>

<p></p>
<table class="milestones">
 
 <tr>

   <th>Features</th>
   <th>Committer/Contributor</th>
   <th>Enhancement Request/Bug</th>
 </tr>
 
 <tr class="done">   
   <td>
      Document new <b>org.eclipse.ecf.ui.configurationWizards</b> and <b>org.eclipse.ecf.ui.connectWizards</b> extension points
   </td>

   <td>
      Scott Lewis
   </td>
   <td>
     See <a href="http://www.eclipse.org/ecf/NewAndNoteworthy_0.9.4.html">New and Noteworthy for 0.9.4</a>   
   </td>   
 </tr>
 
</table>

</div>

</div><?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
