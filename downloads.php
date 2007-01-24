<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	
$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		
include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

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
<div id="rightcolumn">
 <div class="sideitem">
   <h6>Incubation</h6>
   <div align="center"><a href="/projects/gazoo.php"><img 
        align="center" src="/images/gazoo-incubation.jpg" 
        border="0" /></a></div>
 </div>
</div>

	<div id="midcolumn">
	   <div class="homeitem3col">
		 <h3><?= $pageTitle ?></h3>
         <p><img border="0" src="../images/new.gif" width="31" height="14"><b>Eclipse Communication Framework 0.9.6</b> Stable build is now available.</p>
         <p><h4><img border="0" src="../images/new.gif" width="31" height="14">IMPORTANT:  The 0.9.3, and newer, releases are a <b>compatibility-breaking release</b>, meaning that:</h4>
               <ul>
                  <li>If you are using a previous version of ECF (<= 0.9.2), it is necessary to <b>uninstall</b> this
                  version <b>before</b> installing 0.9.6.  To uninstall the previous version:
                  <ul>
                     <li>In Eclipse, go to <b>Help -> Software Updates -> Manage Configuration</b></li>
                     <li>Select all the features that start with "ECF ...".</li>
                     <li>Right click to bring up context menu and choose <b>Uninstall</b></li>
                     <li>Answer Yes/OK to questions</li>
                     <li>Stop/restart Eclipse</li>
                     Now you may install 0.9.6 (via update site or zip).  See below for instructions.
                  </ul></li>
                  <li>Applications based upon 0.9.6 will not work with older servers (<= 0.9.2).  
                  <li>Applications created with ECF releases previous to 0.9.3 will not work with new servers.  The public
                  ECF server at 
                  <b>ecftcp://ecf.eclipse.org:3282/server</b> has moved to 0.9.6. The ECF server no longer support old clients (0.9.2).</b></li>
               </ul>
            <h4><b>Please see <a href="NewAndNoteworthy_0.9.6.html">New and Noteworthy for 0.9.6</a> for details about API changes</b></h4>
         </p>
         <p></p>
         <h3>ECF Install via Update Site (preferred method)</h3>
         <p>
	        For <a href="update_install.php">detailed instructions on using the Eclipse install/update mechanism to install ECF see here</a>.  See below for 
	        quick install.
            <ol>
		       <li>In Eclipse, choose <b>Help -> Software Updates -> Find and Install...</b></li>
		       <li>Choose <b>Search for New Features to Install -> Next</b></li>
		       <li>Choose <b>New Remote Site</b></li>
		       <ul>
			      <li>Name: <b>ECF</b></li>
			      <li>URL: <b>http://download.eclipse.org/technology/ecf/update</a></b></li>
		       </ul>
  		       <img border="0" src="images/new-update-site.jpg" width="373" height="170">
  		       <li>
  		       Choose <b>both</b> the <b>ECF Core</b> and the <b>ECF Examples</b> features to install.</li>
	        </ol>
         </p>
         <p></p>
         <h3>ECF Install via Zip</h3>
         <p>
         <p><b>The ECF SDK zip contains ECF core and example plugins, as well as source code for all plugins.</b></p>
         <ul>
            <table style="border-collapse: collapse;" id="AutoNumber1" border="0" bordercolor="#111111" cellpadding="" cellspacing="5">
            <tbody>
               <tr>
               <th bgcolor="#c0c0c0">File</th>
               <th colspan="1" bgcolor="#c0c0c0">&nbsp;&nbsp; Build Date &nbsp;&nbsp;</th>
               </tr>
		       <tr>
                  <td>
                  
  			         <a href="http://www.eclipse.org/downloads/download.php?file=/technology/ecf/org.eclipse.ecf.sdk-0.9.6.S20070113.zip">
  			          org.eclipse.ecf.sdk-0.9.6.S20070113.zip</a>&nbsp;
                  </td>
                  <td align="center">2007-01-13</td>
               </tr>
					<tr>
           	<td>
			         <a href="http://www.eclipse.org/downloads/download.php?file=/technology/ecf/org.eclipse.ecf.sdk- 0.9.5.S20061222.zip">
  			          org.eclipse.ecf.sdk- 0.9.5.S20061222.zip</a>&nbsp;
                  </td>
                  <td align="center">2006-12-22
            </td>
           </tr>
            </tbody>
            </table>
         </ul>
         <p><b>This zip file contains ECF core plugins.</b></p>
         <ul>
            <table style="border-collapse: collapse;" id="AutoNumber1" border="0" bordercolor="#111111" cellpadding="" cellspacing="5">
            <tbody>
               <tr>
               <th bgcolor="#c0c0c0">File</th>
               <th colspan="1" bgcolor="#c0c0c0">&nbsp;&nbsp; Build Date &nbsp;&nbsp;</th>
               </tr>
		       <tr>
                  <td>
  			         <a href="http://www.eclipse.org/downloads/download.php?file=/technology/ecf/org.eclipse.ecf.core-0.9.6.S20070113.zip">
  			          org.eclipse.ecf.core-0.9.6.S20070113.zip</a>&nbsp;
                  </td>
                  <td align="center">2007-01-13</td>
               </tr>
					<tr>
           	<td>
			         <a href="http://www.eclipse.org/downloads/download.php?file=/technology/ecf/org.eclipse.ecf.core- 0.9.5.S20061222.zip">
  			          org.eclipse.ecf.core- 0.9.5.S20061222.zip</a>&nbsp;
                  </td>
                  <td align="center">2006-12-22
            </td>
           </tr>
            </tbody>
            </table>
         </ul>
         <p><b>This zip file contains ECF examples plugins.</b></p>
         <ul>
            <table style="border-collapse: collapse;" id="AutoNumber1" border="0" bordercolor="#111111" cellpadding="" cellspacing="5">
            <tbody>
               <tr>
               <th bgcolor="#c0c0c0">File</th>
               <th colspan="1" bgcolor="#c0c0c0">&nbsp;&nbsp; Build Date &nbsp;&nbsp;</th>
               </tr>
		       <tr>
                  <td>
  			         <a href="http://www.eclipse.org/downloads/download.php?file=/technology/ecf/org.eclipse.ecf.examples-0.9.6.S20070113.zip">
  			          org.eclipse.ecf.examples-0.9.6.S20070113.zip</a>&nbsp;
                  </td>
                  <td align="center">2007-01-13</td>
               </tr>
 					<tr>
           	<td>
			         <a href="http://www.eclipse.org/downloads/download.php?file=/technology/ecf/org.eclipse.ecf.examples- 0.9.5.S20061222.zip">
  			          org.eclipse.ecf.examples- 0.9.5.S20061222.zip</a>&nbsp;
                  </td>
                  <td align="center">2006-12-22
            </td>
           </tr>
           </tbody>
            </table>
         </ul>
         <br>
          To Install from zip files:
         <ul>
            <li>Close Eclipse (if running) and unzip into your Eclipse installation directory (e.g. C:\eclipse)</li>
            <li>Launch Eclipse</li>
            <li><b>Problems?</b> Check the <a href="faq.html">FAQ</a> and <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=specific&order=relevance+desc&bug_status=__open__&product=ECF&content=">file a bug report</a></b>.</li>
         </ul>
         
         <h3>ECF Source Code</h3>
         <p>For source code access to all ECF plugins, see the <a href="dev_resources.php">ECF developer resources</a> page</p>

         <h3>ECF Extras Plugins at OSU Open Source Lab</h3>
         <p><a href="http://ecf1.osuosl.org">ECF 'Extras' plugins are available via our site</a> at the Oregon State University <a href="http://www.osuosl.org">Open Source Lab</a>.</p>
         
         <h3>ECF Build Types</h3>
         	<table border=0 cellspacing=5 cellpadding=2 width="100%" >
		<font size="-1" face="arial,helvetica,geneva">
		<tr>
			<td align=right valign=top><img src="../images/Adarrow.gif" border=0 height=16 width=16></td>
			<td>
				<p><b>Releases</b><br>
				Releases are builds that have been declared major releases by the ECF development
				team - for example &quot;R1.0&quot;. Releases are the right builds for people
				who want to be on a stable, tested release, and don't need the latest greatest
				features and improvements. Release builds always have an &quot;R&quot; at the
				beginning of the name i.e. R1.0, R2.0 etc. Non-release builds are named according
				to the date of the build - for example 20050710 is the build from July 10, 2005.
				<br></p>
			</td>
		</tr>
		<tr><td align=right valign=top><img src="../images/Adarrow.gif" border=0 height=16 width=16></td>
			<td>
				<b>Stable Builds</b><br>
				Stable builds are integration builds that have been found to be stable enough for
				most people to use. They are promoted from integration build to stable build by
				the architecture team after they have been used for a few days and deemed
				reasonably stable. The latest stable build is the right build for people who want
				to stay up to date with what is going on in the latest development stream, and
				don't mind putting up with a few problems in order to get the latest greatest
				features and bug fixes. The latest stable build is the one the development team
				likes people to be using, because of the valuable and timely feedback.
			 </td>
		</tr>
		<tr>
			<td align=right valign=top><img src="../images/Adarrow.gif" border=0 height=16 width=16></td>
			<td>
				<p><b>Integration Builds</b><br>
				Periodically, component teams version off their work in what they believe is
				a stable, consistent state, and they update the build configuration to indicate
				that the next integration build should take this version of the component.
				Integration builds are built from these stable component versions that have been
				specified by each component team as the best version available. Integration
				builds may be promoted to stable builds after a few days of testing. Integration
				builds are built whenever new stable component versions are released into the build.
				</p>
			</td>
		</tr>
		<tr>
			<td align=right valign=top><img src="../images/Adarrow.gif" border=0 height=16 width=16></td>
			<td><b>Nightly Builds</b><br>
				Nightly builds are produced over night from whatever has been released into the
				HEAD stream of the CVS repository. They are completely untested and will almost
				always have major problems. Many will not work at all. These drops are normally
				only useful to developers actually working on the ECF project.<br> <br>
				Note: Nightly builds are produced only as requested, and not necessarily every
				night, by developers to build what was in HEAD.
			</td>
		</tr>
		<tr>
			<td align=right valign=top><img src="../images/Adarrow.gif" border=0 height=16 width=16></td>
			<td><b>Maintenance Builds</b><br>
				Periodically builds for maintenance of the current release will be performed.
				They will not necessarily be stable builds. When the maintenace is finalized and
				released, it will be moved up to a Release build. If the build name starts with
				an &quot;M&quot; i.e. M200500810,then it has not been tested for stability. If it
				is a release candidate, i.e. 0.5.0.1RC1, then it is a stable maintenance build.
			</td>
		</tr>
	</table>
         
  </div>
</div>
	
<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
