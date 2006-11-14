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
	$pageTitle 		= "ECF Download";
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

	<div id="midcolumn">
	<div class="homeitem3col">
		<h3>Download &amp; Installation Requirements - <b style="color:#eeff00">PLEASE READ!</b></h3>

		<p><b>First-time users</b> can get started quickly by simply downloading the combined <b style="color:#B51464">ALL</b> SDK bundle (includes Source, Runtime and Docs for <b style="color:#BF5FBF">EMF</b>, <b style="color:#18187D">XSD</b>, and <b style="color:#C7568E">SDO</b>). <a href="http://www.eclipse.org/emf/downloads/build-types.php">What Build Type do I want?</a></p>
		<p>EMF, SDO and XSD 2.x require <a href="http://www.eclipse.org/downloads/" target="_eclipse">Eclipse 3.x</a> and <b>JDK 1.4</b>. As of Eclipse 3.2, you can also use a <b>JDK 1.5 / 5.0</b>, since this bug only exists in the <b>Sun JDK 1.4</b>.</p>

		<p>Note that the full Eclipse SDK is only required <i>if you intend to use the EMF, SDO or XSD graphical interfaces</i>, (ie., views, wizards, extensions) which are built for Eclipse. For <i>runtime-only applications</i>, only a JDK is required.</p>
		<p>EMF, SDO and XSD are built against the latest Eclipse SDKs, eg., EMF 2.1.0 with Eclipse 3.1.0, and is thus as compatible with Eclipse 3.0 as Eclipse 3.1 is with 3.0.</p>
		<p>To see or download the Eclipse build used for a particular package, choose a build and scroll down to see its <b>Build Dependencies</b>. For older, archived builds, click the link under <b>Build Name</b> and check the <b>Requirements</b> section.</p>

	</div>
	<div class="homeitem3col" id="crimsonbug">
		<h3>XSD Model Loading: Crimson DOM Bug, Workaround &amp; Download</h3>
		
		<p>If you use the <b>IBM JDK 1.4</b> or a <b>1.5 / 5.0 JDK</b> instead of the <b>SUN JDK 1.4</b>, this workaround is not required.</p>

		
		<p><b>If you <b style="color:red">will NOT</b> be loading or importing model(s) from XML Schema</b>, or do not plan to use the XSD plugin, but intend to generate models from Rose, annotated java code, or using pre-existing ecore file(s), this workaround is also not required. EMF &amp; SDO will work fine without Xerces.</p>

		<p><b>If you <b style="color:green">will be</b> loading or importing model(s) from XML Schema</b>, you need to be aware of the following bug &amp; its workaround.</p>

		<ul>
			<li>The Crimson DOM implementation in (some versions of) the Sun JDK 1.4 has a bug in the implementation of <tt>hasAttributeNS</tt>. 
			This bug can be seen, <i>when importing a model from XML Schema</i>, as either:
				<ul>
					<li>a null pointer exception, or</li>
					<li>the error message "Specify a valid XML Schema and try loading again".</li>
				</ul>

			</li>
            
			<li>To avoid this, use the following to control the JAXP implementation:
				<pre style="background-color:yellow"><b>&lt;eclipse-install-dir&gt;</b>eclipse.exe -vmargs <br/>&#160;&#160;&#160;-D<a href="http://java.sun.com/j2se/1.4.2/docs/guide/standards/index.html">java.endorsed.dirs</a>=<b>&lt;path-to-your-xerces-jars-folder&gt;</b></pre>
			</li>

			<li>For your convenience, here are some links to XML4J and Xerces2-J, for anyone wishing to use Eclipse 3.0M8 or later.
				<ul>

				<li><a target="_xml" href="http://alphaworks.ibm.com/tech/xml4j"><img border="0" alt="Other Download" src="http://www.eclipse.org/emf/images/dl-other.gif"/></a>
				<a target="_xml" href="http://alphaworks.ibm.com/tech/xml4j">Download XML4J from IBM alphaWorks</a></li>
				<li><a target="_xml" href="http://xml.apache.org/xerces2-j/download.cgi"><img border="0" alt="Other Download" src="http://www.eclipse.org/emf/images/dl-other.gif"/></a>
				<a target="_xml" href="http://xml.apache.org/xerces2-j/download.cgi">Download Xerces2-J from apache.org</a></li>
				</ul>
			</li>

		</ul>

		
		<p>Please do NOT open any bugs or post comments to the newsgroup regarding the absence of Xerces in the Eclipse plugin directory or that the above workaround no longer works.</p>
		
	</div>
	</div>
	
	<div id="midcolumn">
		<h1><?= $pageTitle ?></h1>
<table border=0 cellspacing=5 cellpadding=2 width="100%" >
  <tr>
    <td align=left valign=top>
    
      On this page, you can find the latest builds for the <a href="http://www.eclipse.org/ecf">ECF Project</a>.
      
      <p>
        <img border="0" src="../images/new.gif" width="31" height="14">
	    <b>Eclipse Communications Framework 0.9.2</b> &quot;Stable&quot; build is now available.  Please see <a href="NewAndNoteworthy.html">New and Noteworthy</a> for this release.
      </p>
      <p>
      The ECF SDK and example applications require <a href="http://download.eclipse.org/eclipse/downloads/">Eclipse 3.2+</a>.  
    </td>
  </tr>
  <tr>
    <td>
      <p><b><u>Install ECF via Eclipse Install/Update Site</u></b></p>
      	<ol>
		   <li>In Eclipse, choose <b>Help->Software Updates->Find and Install...</b></li>
		   <li>Choose <b>Search for New Features to Install->Next</b></li>
		   <li>Choose <b>New Remote Site</b></li>
		      <ul>
			     <li>Name: <b>ECF updates</b></li>
			     <li>URL: <b>http://download.eclipse.org/technology/ecf/update</b></li>
		      </ul>
  		      <img border="0" src="images/new-update-site.jpg" width="373" height="170">
	    </ol>
     </td>
  </tr>
</table>
<table border=0 cellspacing=5 cellpadding=2 width="100%">
<p><b>Option 2a - <u>ECF SDK</u></b>&nbsp;&nbsp;The zip below contains all ECF core plugins and example applications.  First-time users can get started quickly by simply downloading and installing this zip:</p>
<ul>
  <li>Download<table style="border-collapse: collapse;" id="AutoNumber1" border="0" bordercolor="#111111" cellpadding="" cellspacing="5">
    <tbody>
    <tr>
      <th bgcolor="#c0c0c0">File</th>
      <th colspan="1" bgcolor="#c0c0c0">&nbsp;&nbsp; Build Date &nbsp;&nbsp;</th>
    </tr>
		<tr>
      <td>
  			<a href="http://www.eclipse.org/downloads/download.php?file=/technology/ecf/org.eclipse.ecf.sdk-0.9.2.S20061006.zip">
  			org.eclipse.ecf.sdk-0.9.2.S20061006.zip</a>&nbsp;
      </td>
      <td align="center">2006-10-06</td>
    </tr>
		<tr>
      <td>
			<a href="http://www.eclipse.org/downloads/download.php?file=/technology/ecf/org.eclipse.ecf.sdk-0.9.1.S20060906.zip">
  			org.eclipse.ecf.sdk-0.9.1.S20060906.zip</a>&nbsp;
      </td>
      <td align="center">2006-09-06</td>
    </tr>
  </tbody></table>
  </li>
  <br>
  <li>Unzip into your Eclipse installation directory (e.g. C:\eclipse)</li>
  <li>Launch Eclipse (you may need to use the <b>-clean </b>command line switch
  or delete your configuration directory) </li>
  <li><b>Problems?</b> Check the <a href="faq.html">FAQ</a> entries.</li>
  <br>
		<li>Major features/changes in 0.9.2.S20061006 &quot;Stable&quot; Build Date 2006-10-06, from previous builds:<br>
		&nbsp;&nbsp;See <a href="NewAndNoteworthy.html">New and Noteworthy</a> for this ECF SDK 0.9.2 release.
		</li>
	</br>
  <br>
<p><b>Option 2b - <u>ECF Individual Plugins</u></b>&nbsp;&nbsp;Below are listed the various individual ECF features.  These features can be downloaded and installed separately.  If you wish to have/install all the ECF features, see Option 2a above.</p>
<ul>
  <li><b>Core</b></li>
	<ul>
		<li>Download<table style="border-collapse: collapse;" id="AutoNumber1" border="0" bordercolor="#111111" cellpadding="" cellspacing="5">
		     <tbody>
		     <tr>
		       <th bgcolor="#c0c0c0">File</th>
		       <th colspan="1" bgcolor="#c0c0c0">&nbsp;&nbsp; Build Date &nbsp;&nbsp;</th>
		     </tr>
		 		<tr>
		       <td>
		   			<a href="http://www.eclipse.org/downloads/download.php?file=/technology/ecf/org.eclipse.ecf.core-0.9.2.S20061006.zip">
		   			org.eclipse.ecf.core-0.9.2.S20061006.zip</a>&nbsp;
		       </td>
		       <td align="center">2006-10-06</td>
		     </tr>
		 		<tr>
		       <td>
		   			<a href="http://www.eclipse.org/downloads/download.php?file=/technology/ecf/org.eclipse.ecf.core-0.9.1.S20060906.zip">
		   			org.eclipse.ecf.core-0.9.1.S20060906.zip</a>&nbsp;
		       </td>
		       <td align="center">2006-09-06</td>
		     </tr>
		  </tbody>
  </table>
		</li>
	</ul>
  <li><a name="server-download"></a><b>ECF Generic Collaboration Server</b></li>
	<ul>
		<li>Download<table style="border-collapse: collapse;" id="AutoNumber1" border="0" bordercolor="#111111" cellpadding="" cellspacing="5">
		     <tbody>
		     <tr>
		       <th bgcolor="#c0c0c0">File</th>
		       <th colspan="1" bgcolor="#c0c0c0">&nbsp;&nbsp; Build Date &nbsp;&nbsp;</th>
		     </tr>
		 		<tr>
		       <td>
		   			<a href="http://www.eclipse.org/downloads/download.php?file=/technology/ecf/org.eclipse.ecf.serverfeature-0.9.2.S20061006.zip">
		   			org.eclipse.ecf.serverfeature-0.9.2.S20061006.zip</a>&nbsp;
		       </td>
		       <td align="center">2006-10-06</td>
		     </tr>
		 		<tr>
		       <td>
		   			<a href="http://www.eclipse.org/downloads/download.php?file=/technology/ecf/org.eclipse.ecf.serverfeature-0.9.1.S20060906.zip">
		   			org.eclipse.ecf.serverfeature-0.9.1.S20060906.zip</a>&nbsp;
		       </td>
		       <td align="center">2006-09-06</td>
		     </tr>
		  </tbody>
  </table>
		</li>
		<a href="http://www.eclipse.org/ecf/comm_resources.html#dev-testing"><li>See Installing and Configuring ECF Communication Servers for Development Testing</a></li>
	</ul>
  <br>
	<li><b>ECF Protocol Providers</b></li>
  <ul>
		<li>IRC Provider</li>
		<ul>
			<li>Download <table style="border-collapse: collapse;" id="AutoNumber1" border="0" bordercolor="#111111" cellpadding="" cellspacing="5">
     <tbody>
     <tr>
       <th bgcolor="#c0c0c0">File</th>
       <th colspan="1" bgcolor="#c0c0c0">&nbsp;&nbsp; Build Date &nbsp;&nbsp;</th>
     </tr>
 		<tr>
       <td>
   			<a href="http://www.eclipse.org/downloads/download.php?file=/technology/ecf/org.eclipse.ecf.provider.irc-0.9.2.S20061006.zip">
   			org.eclipse.ecf.provider.irc-0.9.2.S20061006.zip</a>&nbsp;
       </td>
       <td align="center">2006-10-06</td>
     </tr>
 		<tr>
       <td>
   			<a href="http://www.eclipse.org/downloads/download.php?file=/technology/ecf/org.eclipse.ecf.provider.irc-0.9.1.S20060906.zip">
   			org.eclipse.ecf.provider.irc-0.9.1.S20060906.zip</a>&nbsp;
       </td>
       <td align="center">2006-09-06</td>
     </tr>
  </tbody>
  </table>
			</li>
		</ul>
	</ul>  <ul>
		<li>JMDNS Provider</li>
		<ul>
			<li>Download <table style="border-collapse: collapse;" id="AutoNumber1" border="0" bordercolor="#111111" cellpadding="" cellspacing="5">
     <tbody>
     <tr>
       <th bgcolor="#c0c0c0">File</th>
       <th colspan="1" bgcolor="#c0c0c0">&nbsp;&nbsp; Build Date &nbsp;&nbsp;</th>
     </tr>
 		<tr>
       <td>
   			<a href="http://www.eclipse.org/downloads/download.php?file=/technology/ecf/org.eclipse.ecf.provider.jmdns-0.9.2.S20061006.zip">
   			org.eclipse.ecf.provider.jmdns-0.9.2.S20061006.zip</a>&nbsp;
       </td>
       <td align="center">2006-10-06</td>
     </tr>
 		<tr>
       <td>
   			<a href="http://www.eclipse.org/downloads/download.php?file=/technology/ecf/org.eclipse.ecf.provider.jmdns-0.9.1.S20060906.zip">
   			org.eclipse.ecf.provider.jmdns-0.9.1.S20060906.zip</a>&nbsp;
       </td>
       <td align="center">2006-09-06</td>
     </tr>
  </tbody>
  </table>
			</li>
		</ul>
	</ul>
  <ul>
		<li>XMPP Provider</li>
		<ul>
			<li>Download <table style="border-collapse: collapse;" id="AutoNumber1" border="0" bordercolor="#111111" cellpadding="" cellspacing="5">
     <tbody>
     <tr>
       <th bgcolor="#c0c0c0">File</th>
       <th colspan="1" bgcolor="#c0c0c0">&nbsp;&nbsp; Build Date &nbsp;&nbsp;</th>
     </tr>
 		<tr>
       <td>
   			<a href="http://www.eclipse.org/downloads/download.php?file=/technology/ecf/org.eclipse.ecf.xmpp-0.9.2.S20061006.zip">
   			org.eclipse.ecf.xmpp-0.9.2.S20061006.zip</a>&nbsp;
       </td>
       <td align="center">2006-10-06</td>
     </tr>
 		<tr>
       <td>
   			<a href="http://www.eclipse.org/downloads/download.php?file=/technology/ecf/org.eclipse.ecf.xmpp-0.9.1.S20060906.zip">
   			org.eclipse.ecf.xmpp-0.9.1.S20060906.zip</a>&nbsp;
       </td>
       <td align="center">2006-09-06</td>
     </tr>
  </tbody>
  </table>
			</li>
		</ul>
	</ul>
  <ul>
		<li><img border="0" src="../images/new.gif" width="31" height="14">ECF Call Setup API&nbsp&nbsp</li>
		<ul>
			<li>Download <table style="border-collapse: collapse;" id="AutoNumber1" border="0" bordercolor="#111111" cellpadding="" cellspacing="5">
     <tbody>
     <tr>
       <th bgcolor="#c0c0c0">File</th>
       <th colspan="1" bgcolor="#c0c0c0">&nbsp;&nbsp; Build Date &nbsp;&nbsp;</th>
     </tr>
  		<tr>
       <td>
   			<a href="http://www.eclipse.org/downloads/download.php?file=/technology/ecf/org.eclipse.ecf.call-0.9.2.S20061006.zip">
   			org.eclipse.ecf.call-0.9.2.S20061006.zip</a>&nbsp;
       </td>
       <td align="center">2006-10-06</td>
     </tr>
		<tr>
       <td>
   			<a href="http://www.eclipse.org/downloads/download.php?file=/technology/ecf/org.eclipse.ecf.call-0.9.1.S20060906.zip">
   			org.eclipse.ecf.call-0.9.1.S20060906.zip</a>&nbsp;
       </td>
       <td align="center">2006-09-06</td>
     </tr>
  </tbody>
  </table>
			</li>
		</ul>
	</ul>
	</br>
  <li><b>Example Applications</b> </li>
   <ul>
		<li>
			<img border="0" src="../images/new.gif" width="31" height="14">
			Shared Text Editor. See <a href="http://wiki.eclipse.org/index.php/Example_Shared_Text_Editor"><b>Example Shared Text Editor</b></a> for deployment details.</li>
		<ul>
			<li>Download<table style="border-collapse: collapse;" id="AutoNumber1" border="0" bordercolor="#111111" cellpadding="" cellspacing="5">
     <tbody>
     <tr>
       <th bgcolor="#c0c0c0">File</th>
       <th colspan="1" bgcolor="#c0c0c0">&nbsp;&nbsp; Build Date &nbsp;&nbsp;</th>
     </tr>
 		<tr>
       <td>
   			<a href="http://www.eclipse.org/downloads/download.php?file=/technology/ecf/org.eclipse.ecf.example.collab.editor-0.9.2.S20061006.zip">
   			org.eclipse.ecf.example.collab.editor-0.9.2.S20061006.zip</a>&nbsp;
       </td>
       <td align="center">2006-10-06</td>
     </tr>
  		<tr>
       <td>
   			<a href="http://www.eclipse.org/downloads/download.php?file=/technology/ecf/org.eclipse.ecf.example.collab.editor-0.9.1.S20060906.zip">
   			org.eclipse.ecf.example.collab.editor-0.9.1.S20060906.zip</a>&nbsp;
       </td>
       <td align="center">2006-09-06</td>
     </tr>
 </tbody>
  </table>
		 </li>
		</ul>
   </ul>
		<ul>
		<li>Real-time Collaboration Features</li>
		<ul>
			<li>Download<table style="border-collapse: collapse;" id="AutoNumber1" border="0" bordercolor="#111111" cellpadding="" cellspacing="5">
     <tbody>
     <tr>
       <th bgcolor="#c0c0c0">File</th>
       <th colspan="1" bgcolor="#c0c0c0">&nbsp;&nbsp; Build Date &nbsp;&nbsp;</th>
     </tr>
 		<tr>
       <td>
   			<a href="http://www.eclipse.org/downloads/download.php?file=/technology/ecf/org.eclipse.ecf.collab-0.9.2.S20061006.zip">
   			org.eclipse.ecf.collab-0.9.2.S20061006.zip</a>&nbsp;
       </td>
       <td align="center">2006-10-06</td>
     </tr>
 		<tr>
       <td>
   			<a href="http://www.eclipse.org/downloads/download.php?file=/technology/ecf/org.eclipse.ecf.collab-0.9.1.S20060906.zip">
   			org.eclipse.ecf.collab-0.9.1.S20060906.zip</a>&nbsp;
       </td>
       <td align="center">2006-09-06</td>
     </tr>
  </tbody>
  </table>
		 </li>
		</ul>
	</ul>
  <ul>
		<li>Example Clients</li>
		<ul>
			<li>Download <table style="border-collapse: collapse;" id="AutoNumber1" border="0" bordercolor="#111111" cellpadding="" cellspacing="5">
     <tbody>
     <tr>
       <th bgcolor="#c0c0c0">File</th>
       <th colspan="1" bgcolor="#c0c0c0">&nbsp;&nbsp; Build Date &nbsp;&nbsp;</th>
     </tr>
		<tr>
       <td>
   			<a href="http://www.eclipse.org/downloads/download.php?file=/technology/ecf/org.eclipse.ecf.example.clients-0.9.2.S20061006.zip">
   			org.eclipse.ecf.example.clients-0.9.2.S20061006.zip</a>&nbsp;
       </td>
       <td align="center">2006-10-06</td>
     </tr>
  	<tr>
       <td>
   			<a href="http://www.eclipse.org/downloads/download.php?file=/technology/ecf/org.eclipse.ecf.example.clients-0.9.1.S20060906.zip">
   			org.eclipse.ecf.example.clients-0.9.1.S20060906.zip</a>&nbsp;
       </td>
       <td align="center">2006-09-06</td>
     </tr>
  </tbody>
  </table>
			</li>
		</ul>
	</ul>
  <ul>
		<li>Datashare</li>
		<ul>
			<li>Download <table style="border-collapse: collapse;" id="AutoNumber1" border="0" bordercolor="#111111" cellpadding="" cellspacing="5">
     <tbody>
     <tr>
       <th bgcolor="#c0c0c0">File</th>
       <th colspan="1" bgcolor="#c0c0c0">&nbsp;&nbsp; Build Date &nbsp;&nbsp;</th>
     </tr>
 		<tr>
       <td>
   			<a href="http://www.eclipse.org/downloads/download.php?file=/technology/ecf/org.eclipse.ecf.datashare-0.9.2.S20061006.zip">
   			org.eclipse.ecf.datashare-0.9.2.S20061006.zip</a>&nbsp;
       </td>
       <td align="center">2006-10-06</td>
     </tr>
 		<tr>
       <td>
   			<a href="http://www.eclipse.org/downloads/download.php?file=/technology/ecf/org.eclipse.ecf.datashare-0.9.1.S20060906.zip">
   			org.eclipse.ecf.datashare-0.9.1.S20060906.zip</a>&nbsp;
       </td>
       <td align="center">2006-09-06</td>
     </tr>
  </tbody>
  </table>
			</li>
		</ul>
	</ul>
  <ul>
		<li>Fileshare</li>
		<ul>
			<li>Download <table style="border-collapse: collapse;" id="AutoNumber1" border="0" bordercolor="#111111" cellpadding="" cellspacing="5">
     <tbody>
     <tr>
       <th bgcolor="#c0c0c0">File</th>
       <th colspan="1" bgcolor="#c0c0c0">&nbsp;&nbsp; Build Date &nbsp;&nbsp;</th>
     </tr>
		<tr>
       <td>
   			<a href="http://www.eclipse.org/downloads/download.php?file=/technology/ecf/org.eclipse.ecf.datashare-0.9.2.S20061006.zip">
   			org.eclipse.ecf.fileshare-0.9.2.S20061006.zip</a>&nbsp;
       </td>
       <td align="center">2006-10-06</td>
     </tr>
  		<tr>
       <td>
   			<a href="http://www.eclipse.org/downloads/download.php?file=/technology/ecf/org.eclipse.ecf.datashare-0.9.1.S20060906.zip">
   			org.eclipse.ecf.fileshare-0.9.1.S20060906.zip</a>&nbsp;
       </td>
       <td align="center">2006-09-06</td>
     </tr>
  </tbody>
  </table>
			</li>
		</ul>
	</ul>
	<ul>
		<li>Graphshare</li>
		<ul>
			<li>Download <table style="border-collapse: collapse;" id="AutoNumber1" border="0" bordercolor="#111111" cellpadding="" cellspacing="5">
     <tbody>
     <tr>
       <th bgcolor="#c0c0c0">File</th>
       <th colspan="1" bgcolor="#c0c0c0">&nbsp;&nbsp; Build Date &nbsp;&nbsp;</th>
     </tr>
 		<tr>
       <td>
   			<a href="http://www.eclipse.org/downloads/download.php?file=/technology/ecf/org.eclipse.ecf.graphshare-0.9.2.S20061006.zip">
   			org.eclipse.ecf.graphshare-0.9.2.S20061006.zip</a>&nbsp;
       </td>
       <td align="center">2006-10-06</td>
     </tr>
 		<tr>
       <td>
   			<a href="http://www.eclipse.org/downloads/download.php?file=/technology/ecf/org.eclipse.ecf.graphshare-0.9.1.S20060906.zip">
   			org.eclipse.ecf.graphshare-0.9.1.S20060906.zip</a>&nbsp;
       </td>
       <td align="center">2006-09-06</td>
     </tr>
  </tbody>
  </table>
			</li>
		</ul>
	</ul>
  <li><b>Tests</b> </li>
  <ul>
		<li>All Tests Junit Plugin tests may be retrieved via CVS.  See <a href="http://www.eclipse.org/ecf/resources.html">dev resources</a> for instructions.</li>
	</ul>
</ul>
<p><b>Option 3 - <u>ECF from CVS</u></b></p>
<ul>
  <li>Create a new workspace (recommended).</li>
  <li>Define a new Java Classpath Variable named <b>JAVA_HOME </b>that points to
    your JDK 1.4.x installation (e.g. C:\jdk1.4.2).</li>
  <li>Import the ECF team project set for anonymous access:
  <b><a href="org.eclipse.ecf.docs/ecf-anonymous.psf">
  http://www.eclipse.org/ecf/org.eclipse.ecf.docs/ecf-anonymous.psf</a></b><br>
  or ECF team project set for committer's access:
  <b><a href="org.eclipse.ecf.docs/ecf-committer.psf">http://www.eclipse.org/ecf/org.eclipse.ecf.docs/ecf-committer.psf</a></b><br>
  (when using anonymous access, enter &quot;anonymous&quot; as the
  username, leave the password field empty, and check &quot;save password&quot;).</li>
  <li>Launch either or both of the following run configs: <b>ECF Example
     Collab Client 1</b> or <b>ECF Example Collab Client 2</b> with either the
     Eclipse Run->Run... or Run->Debug... config dialogs.</li>
</ul>
    </td>

  </tr>
  <tr><td><br></td></tr>
  <tr>
    <td ALIGN=LEFT VALIGN=TOP BGCOLOR="#0080C0"><b><font color="#FFFFFF" face="Arial,Helvetica">
    &nbsp;<a name="updates"></a>ECF JAR (Java Archive) Files via Eclipse Update Manager</font></b></td>
  </tr>
	<tr>
		<td align=left valign=top bgcolor="#FFFFFF">
	 	<p>The following Eclipse Communications Framework JAR files are available via the Eclipse Update Manager:</p>
		<table style="border-collapse: collapse;" id="AutoNumber1" border="0" bordercolor="#111111" cellpadding="" cellspacing="5">
    <tbody>
    <tr>
      <th bgcolor="#c0c0c0">File</th>
      <th colspan="1" bgcolor="#c0c0c0">&nbsp;&nbsp; Build Date &nbsp;&nbsp;</th>
    </tr>
		<tr>
      <td>org.eclipse.ecf.call - 0.9.2&nbsp;</td>
      <td align="center">2006-10-06</td>
    </tr>
		<tr>
		<tr>
      <td>org.eclipse.ecf.collab - 0.9.2&nbsp;</td>
      <td align="center">2006-10-06</td>
    </tr>
		<tr>
      <td>org.eclipse.ecf.collab.editor - 0.9.2&nbsp;</td>
      <td align="center">2006-10-06</td>
    </tr>
		<tr>
      <td>org.eclipse.ecf.core - 0.9.2&nbsp;</td>
      <td align="center">2006-10-06</td>
    </tr>
   	<tr>
      <td>org.eclipse.ecf.datashare - 0.9.2&nbsp;</td>
      <td align="center">2006-10-06</td>
    </tr>
   	<tr>
      <td>org.eclipse.ecf.fileshare - 0.9.2&nbsp;</td>
      <td align="center">2006-10-06</td>
    </tr>
   	<tr>
      <td>org.eclipse.ecf.graphshare - 0.9.2&nbsp;</td>
      <td align="center">2006-10-06</td>
    </tr>
   	<tr>
      <td>org.eclipse.ecf.example.clients - 0.9.2&nbsp;</td>
      <td align="center">2006-10-06</td>
    </tr>
		<tr>
      <td>org.eclipse.ecf.provider.irc - 0.9.2&nbsp;</td>
      <td align="center">2006-10-06</td>
    </tr>
		<tr>
      <td>org.eclipse.ecf.provider.jmdns - 0.9.2&nbsp;</td>
      <td align="center">2006-10-06</td>
    </tr>
		<tr>
      <td>org.eclipse.ecf.serverfeature - 0.9.2&nbsp;</td>
      <td align="center">2006-10-06</td>
    </tr>
		<tr>
      <td>org.eclipse.ecf.xmpp - 0.9.2&nbsp;</td>
      <td align="center">2006-10-06</td>
    </tr>
  	</tbody>
    </table>
  	</td>
	</tr>
	<tr>
		<td><b>Directions to configure Eclipse for ECF JAR file updates</b><br></td>
	</tr>
	<tr>
			<td>&nbsp;&nbsp;Activate ECF JAR (Java Archive) update connection:
			<ol>
			<li>Save this <b><a href="ecf-update.xml">http://www.eclipse.org/ecf/ecf-update.xml</a></b> file to your local disk.</li>
			<li>Go to <b>Eclipse Help</b> => <b>Software Updates</b> => <b>Find and Install</b> => <b>Search for new Features to Install</b> => <b>Next</b>.</li>
			<li>Select <b>Import Sites</b>... button.</li>
			<li>Choose the "ecf-update.xml" file saved in step number 1.</li>
			</ol>
		</td>
	</tr>
	<tr>
		<td>&nbsp;&nbsp;In Eclipse, go to <b>Help</b> menu <b>> Help Contents > Workbench User Guide</b><br></td>
</tr>
</tr>
<td>
	<ul>
		<li>In the <b>Workbench User Guide</b>, navigate to:<br>
		<ul>
		<li>Tasks</li>
		<li>&nbsp;&nbsp;Updating features with the update manager</li>
		<li>&nbsp;&nbsp;&nbsp;&nbsp;Installing new features with the update manager</li>
		</ul>
		</li>
		<li>In <b>Installing new features with the update manager</b>, follow steps 5 through 13</li>
		</li>
		</ul>
	</ul>
	</td>
	</tr>
	<tr>
		<td><b>Alternate directions to configure Eclipse for ECF JAR file updates</b><br></td>
	</tr>
	<tr>
		<td>&nbsp;&nbsp;In Eclipse, go to <b>Help</b> menu <b>> Help Contents > Workbench User Guide</b><br></td>
	</tr>

	<tr>
	<td>
	<ul>
		<li>In the <b>Workbench User Guide</b>, navigate to:<br>
		<ul>
		<li>Tasks</li>
		<li>&nbsp;&nbsp;Updating features with the update manager</li>
		<li>&nbsp;&nbsp;&nbsp;&nbsp;Installing new features with the update manager</li>
		</ul>
		</li>
		<li>In <b>Installing new features with the update manager</b>, follow steps 1 through 13</li>
			<ul>
				<li>In step #4, in the <b>New Update Site</b> dialog:<br>
				<ul>
					<li>For "CompanyA" enter: ECF updates</li>
					<li>For the URL enter: http://download.eclipse.org/technology/ecf/update</li>
				</ul>
				As shown in this dialog:<br>
				<img border="0" src="images/new-update-site.jpg" width="373" height="170">
		</li>
		</ul>
	</ul>
	</td>
	</tr>
  </table>
	<table border=0 cellspacing=5 cellpadding=2 width="100%" >
		<tr>
			<td align=left valign=top colspan="2" bgcolor="#0080c0">
				<a name="build-types"></a><b><font face="Arial,Helvetica" color="#ffffff">ECF Build Types</font></b>
			</td>
		</tr>
		<font size="-1" face="arial,helvetica,geneva">
		<tr>
			<td align=right valign=top><img src="http://dev.eclipse.org/images/Adarrow.gif" border=0 height=16 width=16></td>
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
		<tr><td align=right valign=top><img src="http://dev.eclipse.org/images/Adarrow.gif" border=0 height=16 width=16></td>
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
			<td align=right valign=top><img src="http://dev.eclipse.org/images/Adarrow.gif" border=0 height=16 width=16></td>
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
			<td align=right valign=top><img src="http://dev.eclipse.org/images/Adarrow.gif" border=0 height=16 width=16></td>
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
			<td align=right valign=top><img src="http://dev.eclipse.org/images/Adarrow.gif" border=0 height=16 width=16></td>
			<td><b>Maintenance Builds</b><br>
				Periodically builds for maintenance of the current release will be performed.
				They will not necessarily be stable builds. When the maintenace is finalized and
				released, it will be moved up to a Release build. If the build name starts with
				an &quot;M&quot; i.e. M200500810,then it has not been tested for stability. If it
				is a release candidate, i.e. 0.5.0.1RC1, then it is a stable maintenance build.
			</td>
		</tr>
	</table>
</table>
	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
