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
	  	<b>February 15, 2007 - ECF 1.0.0M5-stable build released on eclipse.org. </b>
			See <a href="NewAndNoteworthy.html">New and Noteworthy</a> release documentation.
		</td>
	</tr>

	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>January 13, 2007 - ECF 0.9.6-stable build released on eclipse.org. </b>  
		</td>
	</tr>
	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>December 22, 2006 - ECF 0.9.5-stable build released on eclipse.org. </b>
		</td>
	</tr>

       <tr>
         <td align="left" valign="top" height="12" width="23">
          <img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
         </td>
         <td valign="top">
	  <b>December 2, 2006 - ECF 0.9.4-stable build released on eclipse.org. </b>
	 </td>
       </tr>

       <tr>
         <td align="left" valign="top" height="12" width="23">
          <img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
         </td>
         <td valign="top">
	  <b>November 15, 2006 - ECF 0.9.3-stable build released on eclipse.org. </b>
            
  		NOTE: 0.9.3 is a compatibility-breaking release, with major API changes and improvements.  
          If you are using 0.9.2 or previous versions it will 
	  be necessary to recompile applications.
	 </td>
       </tr>

       <tr>
	<td align="left" valign="top" height="12" width="23">
	 <img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
	</td>
	<td valign="top">
	 <b>October 6, 2006 - ECF 0.9.2-stable build released on eclipse.org.</b>
        </td>
       </tr>

       <tr>
         <td align="left" valign="top" height="12" width="23">
	  <img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
	 </td>
         <td valign="top">
          <b>September 6, 2006 - ECF 0.9.1-stable build released on eclipse.org.</b>
         </td>
       </tr>

       <tr>
        <td align="left" valign="top" height="12" width="23">
         <img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
        </td>
        <td valign="top">
         <b>August 17, 2006 - ECF 0.9.0-stable build released on eclipse.org.</b>
        </td>
       </tr>

       <tr>
        <td align="left" valign="top" height="12" width="23">
         <img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
	</td>
	<td valign="top">
         <b>June 24, 2006 - ECF 0.8.9-stable build released on eclipse.org.</b>
	</td>
       </tr>

       <tr>
	<td align="left" valign="top" height="12" width="23">
         <img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
        </td>
        <td valign="top">
         <b>June 27, 2006 - ECF 0.8.7-stable build released on eclipse.org.</b>
	</td>
       </tr>

        <tr>
         <td align="left" valign="top" height="12" width="23">
          <img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
         </td>
         <td valign="top">
          <b>June 19, 2006 - ECF Tutorial by Chris Aniszczyk for the 2006 Rational Software Developer's Conference. </b>
          <a href="presentations/ecf_rsdc2006.pdf">Here are the tutorial slides (pdf)</a>.
         </td>
    	</tr>

        <tr>
         <td align="left" valign="top" height="12" width="23">
          <img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
         </td>
         <td valign="top">
          <b>June 19, 2006 - ECF 0.8.6-stable build</b>
         </td>
        </tr>

        <tr>
         <td align="left" valign="top" height="12" width="23">
          <img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
         </td>
         <td valign="top">
          <b>May 28, 2006 - ECF 0.8.3-stable build</b>
         </td>
        </tr>

        <tr>
         <td align="left" valign="top" height="12" width="23">
          <img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
         </td>
         <td valign="top">
          <b>May 23, 2006 - ECF 0.8.2-stable build</b>
         </td>
        </tr>

        <tr>
         <td align="left" valign="top" height="12" width="23">
          <img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
         </td>
         <td valign="top">
          <b>May 14, 2006 - ECF 0.8.1-stable build</b>
         </td>
        </tr>

        <tr>
         <td align="left" valign="top" height="12" width="23">
          <img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
         </td>
         <td valign="top">
          <b>May 7, 2006 - ECF 0.8.0-stable build</b>
         </td>
        </tr>

        <tr>
          <td align="left" valign="top" height="12" width="23">
          <img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
         </td>
         <td valign="top">
          <b>April 13, 2006 - ECF 0.7.7-stable build</b>
         </td>
        </tr>

        <tr>
         <td align="left" valign="top" height="12" width="23">
          <img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
         </td>
         <td valign="top">
          <b>April 12, 2006 - New tutorial documentation for running the ECF 'scribbleshare' example
          whiteboard application.</b>  
          See <a href="scribbleshare.html"/><b>here</b>
         </td>
        </tr>

        <tr>
         <td align="left" valign="top" height="12" width="23">
          <img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
         </td>
         <td valign="top">
          <b>April 1, 2006 - ECF 0.7.6-stable build</b>
         </td>
        </tr>

        <tr>
         <td align="left" valign="top" height="12" width="23">
          <img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
         </td>
         <td valign="top">
          <b>March 21, 2006 - EclipseCon 2006 </b>
          <a href="http://www.eclipsecon.org/2006/Sub.do?id=385">ECF Short Talk</a>.  Presentation
         materials (pdf) available here <a href="presentations/EclipseCon.2006.ECF.Talk.385.pdf">here</a>
         </td>
        </tr>

        <tr>
          <td align="left" valign="top" height="12" width="23">
          <img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
          </td>
          <td valign="top">
           <b>March 20, 2006 - EclipseCon 2006 </b>
           <a href="http://www.eclipsecon.org/2006/Sub.do?id=46">ECF Tutorial</a>.  Presentation
           materials (pdf) available here <a href="presentations/EclipseCon.2006.ECF.Tutorial.42.pdf">here</a>
          </td>
         </tr>

         <tr>
          <td align="left" valign="top" height="12" width="23">
           <img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
          </td>
          <td valign="top">
           <b>March 14, 2006 - IBM developerWorks® Article: </b>
           <a href="http://www-128.ibm.com/developerworks/opensource/library/os-ecl-commfwk/">
           Getting started with the Eclipse Communication Framework</a>
          </td>
         </tr>

         <tr>
          <td align="left" valign="top" height="12" width="23">
           <img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
          </td>
          <td valign="top">
           <b>November 1, 2005 - ECF 0.5.0-stable build</b>
          </td>
         </tr>

        <tr>
         <td align="left" valign="top" height="12" width="23">
          <img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
         </td>
         <td valign="top">
          <b>September 27, 2005 </b> 
          <a href="http://www.eclipsezone.com/articles/ecf-interview">
          Interview with ECF project lead Scott Lewis</a> at <a href="http://www.eclipsezone.com">EclipseZone</a>
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
