<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
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
		

	<div id="midcolumn">
		<h1>ECF Project Milestone Plan</h1>
		<p></p>

		<div class="right">
            Last modified on December 4, 2006 by slewis
        </div>

<!-- Milestone 0.9.4 -->
<a name="0.9.4"><h2>0.9.4</h2></a> - <a href="downloads.php">Download</a>

Target Release Date: 12/02/2006
Actual Release Date: 12/03/2006
<a href="NewAndNoteworthy_0.9.4.html">New and Noteworthy</a>

<p></p>
<table class="milestones">
 
 <tr>

   <th>Features</th>
   <th>Owners</th>
   <th>Bugzilla</th>
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


<p></p>

<!-- Milestone 0.9.5 -->
<a name="0.9.5"><h2>0.9.5</h2></a>
<p></p>

Target Release Date: 12/15/2006

<table class="milestones">
 
 <tr>

   <th>Features</th>
   <th>Owners</th>
   <th>Bugzilla</th>
 </tr>
  
 <tr class="progress">   
   <td>
      Refactor test code and move into org.eclipse.ecf.tests plugin
   </td>
   <td>
      Scott Lewis
   </td>

   <td>   
       <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=161497">#161497</a>   </td>   
   </tr>
 
  <tr class="not done">   
   <td>
     Add persistence to RosterView
   </td>

   <td>
      Unassigned
   </td>
   <td>   
   <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=166670">#166670</a>
   </td>   
 </tr>
 
  <tr class="not done">   
   <td>
     Refactor RosterView to allow easier extension
   </td>

   <td>
      Unassigned
   </td>
   <td>   
   <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=166675">#166675</a>
   </td>   
 </tr>
 
</table>

<p></p>

<!-- Milestone 0.9.6 -->
<a name="0.9.6"><h2>0.9.6</h2></a>
<p></p>

Target Release Date: 1/3/2007

<table class="milestones">
 
 <tr>

   <th>Features</th>
   <th>Owners</th>
   <th>Bugzilla</th>
 </tr>
  
 <tr class="not done">   
   <td>
   Move ECF source into separate plugin
   </td>

   <td>
      Scott Lewis/Pete Mackie
   </td>
   <td>   
     <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=166679">#166679</a>
   </td>   
 </tr>
 
  <tr class="not done">   
   <td>
   TBD
   </td>

   <td>
      TBD
   </td>
   <td>   
     TBD
   </td>   
 </tr>
 
  <tr class="not done">   
   <td>
   TBD
   </td>

   <td>
   TBD
   </td>
   <td>   
     TBD
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
