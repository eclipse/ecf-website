<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		Denis Roy
	# Date:			2005-06-16
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "ECF Downloads";
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

<div id="maincontent">
		

	<div id="midcolumn">
		<h1>ECF Project Milestone Plan</h1>
		<p>

		<div class="right">
            Last modified on December 1, 2006
        </div>

<!-- Milestone 0.9.4 -->
<h2>0.9.4</h2>

Date: 12/02/2006

<p>
<table class="milestones">
 
 <tr>

   <th>Features</th>
   <th>Owners</th>
   <th>Progress</th>
 </tr>
 
 
 
 <tr class="done">   
   <td>
      Document <b>org.eclipse.ecf.ui.configurationWizards</b> and <b>org.eclipse.ecf.ui.connectWizards</b> extension points
   </td>

   <td>
      Scott Lewis
   </td>
   <td>   
      Complete
   </td>   
 </tr>
 
 <tr class="notdone">
   <td>
     
   </td>
   <td>
      
   </td>
   <td class="notdone">
     Not Done
   </td>

 </tr>
 
   
</table>


<p>

<!-- Milestone 0.9.5 -->
<h2>0.9.5</h2>
<p>
Date: December 15, 2006

<table class="milestones">
 
 <tr>

   <th>Features</th>
   <th>Owners</th>
   <th>Progress</th>
 </tr>
  
 <tr class="not done">   
   <td>
     Move source over to separate plugin
   </td>

   <td>
      Scott Lewis/Pete Mackie
   </td>
   <td>   
      Not Done
   </td>   
 </tr>
 
 
  <tr class="progress">   
   <td>
      Organize and refactor test code as in bug <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=161497">#1613497</a>
   </td>
   <td>
      Scott Lewis
   </td>

   <td>   
      50%
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
