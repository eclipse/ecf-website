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
	$pageTitle 		= "Eclipse Communication Framework";
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
		<h1><?= $pageTitle ?></h1>
		<h2>ECF Documentation</h2>
<table border=0 cellspacing=5 cellpadding=2 width="100%" >
  <tr>
    <td align=left valign=top bgcolor="#0080C0"><b><font color="#FFFFFF" face="Arial,Helvetica">
    &nbsp;ECF Documentation</font></b></td>
  </tr>
  <tr>
    <td>
      <ul>
        <li>Tutorials
        <br>&nbsp;&nbsp;&nbsp;<a href="scribbleshare.html">Scribbleshare Example Whiteboard</a></li>
        <li>ECF Architectural Overview -- DRAFT
        <br>&nbsp;&nbsp;&nbsp;<a href="#Containers">Introduction: ECF Containers</a>
        <br>&nbsp;&nbsp;&nbsp;<a href="#Instance Creation">Container Instance Creation</a>
        <br>&nbsp;&nbsp;&nbsp;<a href="#Container Connection">Container Connection</a>
        <br>&nbsp;&nbsp;&nbsp;<a href="#Example Connection Code">Example:  Container Connection Code</a>
        <br>&nbsp;&nbsp;&nbsp;<a href="#Namespace Extension Point">Namespaces and Identity</a>
        <br>&nbsp;&nbsp;&nbsp;<a href="#Extensibility">Extensibility through Adapters</a>
        <br>&nbsp;&nbsp;&nbsp;<a href="#Identity">Identity</a>
		</li>
        <li><a href="org.eclipse.ecf.docs/api">ECF API (javadocs)</a></li>
        <li><a href="sharedobjectcontainerdocumentation.html">Component Model:  Shared Object Containers</a></li>
      	<li>Use Cases
      	<br>&nbsp;&nbsp;&nbsp;<a href="chatusecase.html">MultiUser Chat Use Cases</a>
      	</li>
      </ul>
      <p>&nbsp;&nbsp;&nbsp;<strong>Note:</strong> standalone bookmark for the ECF API (javadocs) web pages. Copy and paste:
	  http://www.eclipse.org/ecf/org.eclipse.ecf.docs/api</p>
    </td>
  </tr>
  <tr>
    <td ALIGN=left VALIGN=top BGCOLOR="#0080C0"><b><font color="#FFFFFF" face="Arial,Helvetica">
    &nbsp;<a name="Containers"></a>Introduction:  ECF Containers</font></b></td>
  </tr>
  <tr>
    <td>
       ECF introduces the concept of a communications <b>container</b>.  ECF containers represent access to 
       a protocol-specific communications context. For connection-oriented communications, an ECF container loosely 
       corresponds to the traditional notion of a communications <b>session</b>, but the more general container concept is also
       useful for capturing context even if the communications are not session-oriented.
       <p></p>
       ECF containers can represent both point-to-point communications (e.g. client/server) or 
       publish-and-subscribe (group) communications.  Container instances can provide access to synchronous
       communications only, asynchronous communications only, or both together.  This flexibility allows
       many communications applications to be constructed out of one or more ECF containers...each of which
       provides access to some specific communications context and some protocol(s) for communicating within
       that context.
       <h4><a name="Instance Creation"></a>Instance Creation</h4>       
       Container instance creation is done via ECF-provided factory APIs.  For example, here's code to create 
       and IContainer instance:
       <pre>
       IContainer container = getContainerFactory().createContainer(&lt;Container Type&gt;);
       </pre>
       Note that the getContainerFactory() method should return an IContainerFactory instance and this can be accessed as a singleton OSGi Service (via OSGi ServiceReferece, ServiceTracker or Declarative Services).
       Once constructed, <a href="http://www.eclipse.org/ecf/org.eclipse.ecf.docs/api/org/eclipse/ecf/core/IContainer.html">IContainer</a> instances may be used in the manner appropriate for the given application.  
       <br/><br/>
       Container Types Available at dev.eclipse.org<br>
       <br/>
<a name="devcontainers"></a><TABLE WIDTH=669 BORDER=1 BORDERCOLOR="#000000" CELLPADDING=4 CELLSPACING=0>
	<COL WIDTH=96>
	<COL WIDTH=109>
	<COL WIDTH=164>
	<COL WIDTH=266>
	<THEAD>
		<TR VALIGN=TOP>
			<TH WIDTH=96>
				<P ALIGN=CENTER>PROTOCOL(s)</P>
			</TH>
			<TH WIDTH=109>
				<P ALIGN=CENTER>Container Factory Name</P>
			</TH>
			<TH WIDTH=164>
				<P ALIGN=CENTER>Plugin(s)</P>
			</TH>
			<TH WIDTH=266>

				<P ALIGN=CENTER>Supported APIs</P>
			</TH>
		</TR>
	</THEAD>
	<TBODY>
		<TR VALIGN=TOP>
			<TD WIDTH=96>
				<P ALIGN=CENTER><FONT SIZE=2>HTTP/HTTPS, file, all other protocols supported JRE URLConnection</FONT></P>
			</TD>
			<TD WIDTH=109>
				<P ALIGN=CENTER><FONT SIZE=2>ecf.base</FONT></P>
			</TD>
			<TD WIDTH=164>
				<P ALIGN=CENTER><FONT SIZE=2>org.eclipse.ecf,org.eclipse.ecf.provider.filetransfer</FONT></P>
			</TD>
			<TD WIDTH=266>
				<P ALIGN=CENTER><FONT SIZE=2><a href="http://wiki.eclipse.org/ECF_API_Docs#File_Transfer_API">File Transfer</a></FONT></P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=96>
				<P ALIGN=CENTER><FONT SIZE=2>HTTP/HTTPS via Httpclient 3.0.1</FONT></P>
			</TD>
			<TD WIDTH=109>
				<P ALIGN=CENTER><FONT SIZE=2>ecf.base</FONT></P>
			</TD>
			<TD WIDTH=164>
				<P ALIGN=CENTER><FONT SIZE=2>org.eclipse.ecf,org.eclipse.ecf.provider.filetransfer.httpclient</FONT></P>
			</TD>
			<TD WIDTH=266>
				<P ALIGN=CENTER><FONT SIZE=2><a href="http://wiki.eclipse.org/ECF_API_Docs#File_Transfer_API">File Transfer</a></FONT></P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=96>
				<P ALIGN=CENTER><FONT SIZE=2>None</FONT></P>
			</TD>
			<TD WIDTH=109>
				<P ALIGN=CENTER><FONT SIZE=2>ecf.container.trivial</FONT></P>
			</TD>
			<TD WIDTH=164>
				<P ALIGN=CENTER><FONT SIZE=2>org.eclipse.ecf.examples.provider.trivial</FONT></P>
			</TD>
			<TD WIDTH=266>
			<a href="http://wiki.eclipse.org/ECF_API_Docs#ECF_Core>Core API</a> Only (Example)
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=96>
				<P ALIGN=CENTER><FONT SIZE=2>None</FONT></P>
			</TD>
			<TD WIDTH=109>
				<P ALIGN=CENTER><FONT SIZE=2>ecf.container.trivial</FONT></P>
			</TD>
			<TD WIDTH=164>
				<P ALIGN=CENTER><FONT SIZE=2>org.eclipse.ecf.examples.provider.trivial</FONT></P>
			</TD>
			<TD WIDTH=266>
			<a href="http://wiki.eclipse.org/ECF_API_Docs#ECF_Core>Core API</a> Only (Example)
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=96>
				<P ALIGN=CENTER><FONT SIZE=2>ECF Generic Client</FONT></P>
			</TD>
			<TD WIDTH=109>
				<P ALIGN=CENTER><FONT SIZE=2>ecf.generic.client</FONT></P>
			</TD>
			<TD WIDTH=164>
				<P ALIGN=CENTER><FONT SIZE=2>org.eclipse.ecf.provider</FONT></P>
			</TD>
			<TD WIDTH=266>
				<P ALIGN=CENTER><FONT SIZE=2><a href="http://wiki.eclipse.org/ECF_API_Docs#Shared_Object_API">Shared Object</a></FONT></P>
				<P ALIGN=CENTER><FONT SIZE=2><a href="http://wiki.eclipse.org/ECF_API_Docs#Datashare_API">Datashare</a></FONT></P>
				<P ALIGN=CENTER><FONT SIZE=2><a href="http://wiki.eclipse.org/ECF_API_Docs#Remote_Services_API">Remote Services</a></FONT></P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=96>
				<P ALIGN=CENTER><FONT SIZE=2>ECF Generic Server</FONT></P>
			</TD>
			<TD WIDTH=109>
				<P ALIGN=CENTER><FONT SIZE=2>ecf.generic.server</FONT></P>
			</TD>
			<TD WIDTH=164>
				<P ALIGN=CENTER><FONT SIZE=2>org.eclipse.ecf.provider</FONT></P>
			</TD>
			<TD WIDTH=266>
				<P ALIGN=CENTER><FONT SIZE=2><a href="http://wiki.eclipse.org/ECF_API_Docs#Shared_Object_API">Shared Object</a></FONT></P>
				<P ALIGN=CENTER><FONT SIZE=2><a href="http://wiki.eclipse.org/ECF_API_Docs#Datashare_API">Datashare</a></FONT></P>
				<P ALIGN=CENTER><FONT SIZE=2><a href="http://wiki.eclipse.org/ECF_API_Docs#Remote_Services_API">Remote Services</a></FONT></P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=96>
				<P ALIGN=CENTER><FONT SIZE=2>ECF Bittorrent Filetransfer</FONT></P>
			</TD>
			<TD WIDTH=266>
				<P ALIGN=CENTER><FONT SIZE=2><a href="http://wiki.eclipse.org/ECF_API_Docs#File_Transfer_API">File Transfer</a></FONT></P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=96>
				<P ALIGN=CENTER><FONT SIZE=2>IRC</FONT></P>
			</TD>
			<TD WIDTH=109>
				<P ALIGN=CENTER><FONT SIZE=2>ecf.irc.irclib</FONT></P>
			</TD>
			<TD WIDTH=164>
				<P ALIGN=CENTER><FONT SIZE=2>org.eclipse.ecf.provider.irc</FONT></P>
			</TD>
			<TD WIDTH=266>
				<P ALIGN=CENTER><FONT SIZE=2><a href="http://wiki.eclipse.org/ECF_API_Docs#Presence_API">Presence</a></FONT></P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=96>
				<P ALIGN=CENTER><FONT SIZE=2>Zeroconf/Bonjour/Rendevous</FONT></P>
			</TD>
			<TD WIDTH=109>
				<P ALIGN=CENTER><FONT SIZE=2>ecf.discovery.jmdns</FONT></P>
			</TD>
			<TD WIDTH=164>
				<P ALIGN=CENTER><FONT SIZE=2>org.eclipse.ecf.provider.jmdns</FONT></P>
			</TD>
			<TD WIDTH=266>
				<P ALIGN=CENTER><FONT SIZE=2><a href="http://wiki.eclipse.org/ECF_API_Docs#Discovery_API">Discovery</a></FONT></P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=96>
				<P ALIGN=CENTER><FONT SIZE=2><a href="http://jslp.sourceforge.net/">Java Service Locator Protocol (RFC 2608)</a></FONT></P>
			</TD>
			<TD WIDTH=109>
				<P ALIGN=CENTER><FONT SIZE=2>ecf.discovery.jslp</FONT></P>
			</TD>
			<TD WIDTH=164>
				<P ALIGN=CENTER><FONT SIZE=2>org.eclipse.ecf.provider.jslp</FONT></P>
			</TD>
			<TD WIDTH=266>
				<P ALIGN=CENTER><FONT SIZE=2><a href="http://wiki.eclipse.org/ECF_API_Docs#Discovery_API">Discovery</a></FONT></P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=96>
				<P ALIGN=CENTER><FONT SIZE=2>MSN</FONT></P>
			</TD>
			<TD WIDTH=109>
				<P ALIGN=CENTER><FONT SIZE=2>ecf.msn.msnp</FONT></P>
			</TD>
			<TD WIDTH=266>
				<P ALIGN=CENTER><FONT SIZE=2><a href="http://wiki.eclipse.org/ECF_API_Docs#Presence_API">Presence</a></FONT></P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=96>
				<P ALIGN=CENTER><FONT SIZE=2>r-OSGi</FONT></P>
			</TD>
			<TD WIDTH=109>
				<P ALIGN=CENTER><FONT SIZE=2>ecf.r_osgi.peer</FONT></P>
			</TD>
			<TD WIDTH=164>
				<P ALIGN=CENTER><FONT SIZE=2>org.eclipse.ecf.provider.r-osgi</FONT></P>
			</TD>
			<TD WIDTH=266>
				<P ALIGN=CENTER><FONT SIZE=2><a href="http://wiki.eclipse.org/ECF_API_Docs#Remote_Services_API">Remote Services</a></FONT></P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=96>
				<P ALIGN=CENTER><FONT SIZE=2>XMPP</FONT></P>
			</TD>
			<TD WIDTH=109>
				<P ALIGN=CENTER><FONT SIZE=2>ecf.xmpp.smack</FONT></P>
			</TD>
			<TD WIDTH=164>
				<P ALIGN=CENTER><FONT SIZE=2>org.eclipse.ecf.provider.xmpp</FONT></P>
			</TD>
			<TD WIDTH=266>
				<P ALIGN=CENTER><FONT SIZE=2><a href="http://wiki.eclipse.org/ECF_API_Docs#Shared_Object_API">Shared Object</a></FONT></P>
				<P ALIGN=CENTER><FONT SIZE=2><a href="http://wiki.eclipse.org/ECF_API_Docs#Datashare_API">Datashare</a></FONT></P>
				<P ALIGN=CENTER><FONT SIZE=2><a href="http://wiki.eclipse.org/ECF_API_Docs#Presence_API">Presence</a></FONT></P>
				<P ALIGN=CENTER><FONT SIZE=2><a href="http://wiki.eclipse.org/ECF_API_Docs#File_Transfer_API">File Transfer</a></FONT></P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=96>
				<P ALIGN=CENTER><FONT SIZE=2>XMPP SSL</FONT></P>
			</TD>
			<TD WIDTH=109>
				<P ALIGN=CENTER><FONT SIZE=2>ecf.xmpps.smack</FONT></P>
			</TD>
			<TD WIDTH=164>
				<P ALIGN=CENTER><FONT SIZE=2>org.eclipse.ecf.provider.xmpp</FONT></P>
			</TD>
			<TD WIDTH=266>
				<P ALIGN=CENTER><FONT SIZE=2><a href="http://wiki.eclipse.org/ECF_API_Docs#Shared_Object_API">Shared Object</a></FONT></P>
				<P ALIGN=CENTER><FONT SIZE=2><a href="http://wiki.eclipse.org/ECF_API_Docs#Datashare_API">Datashare</a></FONT></P>
				<P ALIGN=CENTER><FONT SIZE=2><a href="http://wiki.eclipse.org/ECF_API_Docs#Presence_API">Presence</a></FONT></P>
				<P ALIGN=CENTER><FONT SIZE=2><a href="http://wiki.eclipse.org/ECF_API_Docs#File_Transfer_API">File Transfer</a></FONT></P>
			</TD>
		</TR>
	</TBODY>
</TABLE>


       <br/><br/>
       Container Types Available at <a href="http://github.com/ECF">ECF Github site</a><br>
       <br/>
<a name="osuoslcontainers"></a><TABLE WIDTH=669 BORDER=1 BORDERCOLOR="#000000" CELLPADDING=4 CELLSPACING=0>
	<COL WIDTH=96>
	<COL WIDTH=109>
	<COL WIDTH=164>
	<COL WIDTH=266>
	<THEAD>
		<TR VALIGN=TOP>
			<TH WIDTH=96>
				<P ALIGN=CENTER>PROTOCOL(s)</P>
			</TH>
			<TH WIDTH=109>
				<P ALIGN=CENTER>Container Factory Name</P>
			</TH>
			<TH WIDTH=164>
				<P ALIGN=CENTER>Plugin(s)</P>
			</TH>
			<TH WIDTH=266>

				<P ALIGN=CENTER>Supported APIs</P>
			</TH>
		</TR>
	</THEAD>
	<TBODY>
		<TR VALIGN=TOP>
			<TD WIDTH=96>
				<P ALIGN=CENTER><FONT SIZE=2>Yahoo</FONT></P>
			</TD>
			<TD WIDTH=109>
				<P ALIGN=CENTER><FONT SIZE=2>ecf.yahoo.jymsg</FONT></P>
			</TD>
			<TD WIDTH=164>
				<P ALIGN=CENTER><FONT SIZE=2>org.eclipse.ecf.provider.yahoo</FONT></P>
			</TD>
			<TD WIDTH=266>
				<P ALIGN=CENTER><FONT SIZE=2><a href="http://wiki.eclipse.org/ECF_API_Docs#Presence_API">Presence</a></FONT></P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=96>
				<P ALIGN=CENTER><FONT SIZE=2><a href="http://www.jgroups.org">JavaGroups Client</a></FONT></P>
			</TD>
			<TD WIDTH=109>
				<P ALIGN=CENTER><FONT SIZE=2>ecf.jgroups.client</FONT></P>
			</TD>
			<TD WIDTH=164>
				<P ALIGN=CENTER><FONT SIZE=2>org.eclipse.ecf.provider.jgroups</FONT></P>
			</TD>
			<TD WIDTH=266>
				<P ALIGN=CENTER><FONT SIZE=2><a href="http://wiki.eclipse.org/ECF_API_Docs#Shared_Object_API">Shared Object</a></FONT></P>
				<P ALIGN=CENTER><FONT SIZE=2><a href="http://wiki.eclipse.org/ECF_API_Docs#Datashare_API">Datashare</a></FONT></P>
				<P ALIGN=CENTER><FONT SIZE=2><a href="http://wiki.eclipse.org/ECF_API_Docs#Remote_Services_API">Remote Services</a></FONT></P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=96>
				<P ALIGN=CENTER><FONT SIZE=2><a href="http://www.jgroups.org">JavaGroups Manager</a></FONT></P>
			</TD>
			<TD WIDTH=109>
				<P ALIGN=CENTER><FONT SIZE=2>ecf.jgroups.manager</FONT></P>
			</TD>
			<TD WIDTH=164>
				<P ALIGN=CENTER><FONT SIZE=2>org.eclipse.ecf.provider.jgroups</FONT></P>
			</TD>
			<TD WIDTH=266>
				<P ALIGN=CENTER><FONT SIZE=2><a href="http://wiki.eclipse.org/ECF_API_Docs#Shared_Object_API">Shared Object</a></FONT></P>
				<P ALIGN=CENTER><FONT SIZE=2><a href="http://wiki.eclipse.org/ECF_API_Docs#Datashare_API">Datashare</a></FONT></P>
				<P ALIGN=CENTER><FONT SIZE=2><a href="http://wiki.eclipse.org/ECF_API_Docs#Remote_Services_API">Remote Services</a></FONT></P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=96>
				<P ALIGN=CENTER><FONT SIZE=2><a href="http://activemq.apache.org/">ActiveMQ Client</a></FONT></P>
			</TD>
			<TD WIDTH=109>
				<P ALIGN=CENTER><FONT SIZE=2>ecf.jms.activemq.tcp.client</FONT></P>
			</TD>
			<TD WIDTH=164>
				<P ALIGN=CENTER><FONT SIZE=2>org.eclipse.ecf.provider.jms.activemq</FONT></P>
			</TD>
			<TD WIDTH=266>
				<P ALIGN=CENTER><FONT SIZE=2><a href="http://wiki.eclipse.org/ECF_API_Docs#Shared_Object_API">Shared Object</a></FONT></P>
				<P ALIGN=CENTER><FONT SIZE=2><a href="http://wiki.eclipse.org/ECF_API_Docs#Datashare_API">Datashare</a></FONT></P>
				<P ALIGN=CENTER><FONT SIZE=2><a href="http://wiki.eclipse.org/ECF_API_Docs#Remote_Services_API">Remote Services</a></FONT></P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=96>
				<P ALIGN=CENTER><FONT SIZE=2><a href="http://activemq.apache.org/">ActiveMQ Manager</a></FONT></P>
			</TD>
			<TD WIDTH=109>
				<P ALIGN=CENTER><FONT SIZE=2>ecf.jms.activemq.tcp.manager</FONT></P>
			</TD>
			<TD WIDTH=164>
				<P ALIGN=CENTER><FONT SIZE=2>org.eclipse.ecf.provider.jms.activemq</FONT></P>
			</TD>
			<TD WIDTH=266>
				<P ALIGN=CENTER><FONT SIZE=2><a href="http://wiki.eclipse.org/ECF_API_Docs#Shared_Object_API">Shared Object</a></FONT></P>
				<P ALIGN=CENTER><FONT SIZE=2><a href="http://wiki.eclipse.org/ECF_API_Docs#Datashare_API">Datashare</a></FONT></P>
				<P ALIGN=CENTER><FONT SIZE=2><a href="http://wiki.eclipse.org/ECF_API_Docs#Remote_Services_API">Remote Services</a></FONT></P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=96>
				<P ALIGN=CENTER><FONT SIZE=2><a href="http://www.bea.com/framework.jsp?CNT=index.htm&FP=/content/products/weblogic">Weblogic Client</a></FONT></P>
			</TD>
			<TD WIDTH=109>
				<P ALIGN=CENTER><FONT SIZE=2>ecf.jms.activemq.tcp.client</FONT></P>
			</TD>
			<TD WIDTH=164>
				<P ALIGN=CENTER><FONT SIZE=2>ecf.jms.weblogic.client</FONT></P>
			</TD>
			<TD WIDTH=266>
				<P ALIGN=CENTER><FONT SIZE=2><a href="http://wiki.eclipse.org/ECF_API_Docs#Shared_Object_API">Shared Object</a></FONT></P>
				<P ALIGN=CENTER><FONT SIZE=2><a href="http://wiki.eclipse.org/ECF_API_Docs#Datashare_API">Datashare</a></FONT></P>
				<P ALIGN=CENTER><FONT SIZE=2><a href="http://wiki.eclipse.org/ECF_API_Docs#Remote_Services_API">Remote Services</a></FONT></P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=96>
				<P ALIGN=CENTER><FONT SIZE=2><a href="http://www.bea.com/framework.jsp?CNT=index.htm&FP=/content/products/weblogic">Weblogic Manager</a></FONT></P>
			</TD>
			<TD WIDTH=109>
				<P ALIGN=CENTER><FONT SIZE=2>ecf.jms.weblogic.server</FONT></P>
			</TD>
			<TD WIDTH=164>
				<P ALIGN=CENTER><FONT SIZE=2>org.eclipse.ecf.provider.jms.weblogic</FONT></P>
			</TD>
			<TD WIDTH=266>
				<P ALIGN=CENTER><FONT SIZE=2><a href="http://wiki.eclipse.org/ECF_API_Docs#Shared_Object_API">Shared Object</a></FONT></P>
				<P ALIGN=CENTER><FONT SIZE=2><a href="http://wiki.eclipse.org/ECF_API_Docs#Datashare_API">Datashare</a></FONT></P>
				<P ALIGN=CENTER><FONT SIZE=2><a href="http://wiki.eclipse.org/ECF_API_Docs#Remote_Services_API">Remote Services</a></FONT></P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=96>
				<P ALIGN=CENTER><FONT SIZE=2>Skype</FONT></P>
			</TD>
			<TD WIDTH=109>
				<P ALIGN=CENTER><FONT SIZE=2>ecf.call.skype</FONT></P>
			</TD>
			<TD WIDTH=164>
				<P ALIGN=CENTER><FONT SIZE=2>org.eclipse.ecf.provider.skype</FONT></P>
			</TD>
			<TD WIDTH=266>
				<P ALIGN=CENTER><FONT SIZE=2><a href="http://wiki.eclipse.org/ECF_API_Docs#Shared_Object_API">Shared Object</a></FONT></P>
				<P ALIGN=CENTER><FONT SIZE=2><a href="http://wiki.eclipse.org/ECF_API_Docs#Datashare_API">Datashare</a></FONT></P>
				<P ALIGN=CENTER><FONT SIZE=2><a href="http://wiki.eclipse.org/ECF_API_Docs#Presence_API">Presence</a></FONT></P>
			</TD>
		</TR>
	</TBODY>
</TABLE>

       <h4><a name="Container Instance Disposal"></a>Container Instance Disposal</h4>       
       When
       no longer required the <a href="http://www.eclipse.org/ecf/org.eclipse.ecf.docs/api/org/eclipse/ecf/core/IContainer.html#dispose()">IContainer.dispose()</a> method should be called to release any resources associated with
       the container instance upon its construction or used during its lifecycle (e.g. network resources, etc).
       
       <h4><a name="Container Connection"></a>Connection/Disconnection</h4>
       The IContainer interface exposes two key methods:  <a href="http://www.eclipse.org/ecf/org.eclipse.ecf.docs/api/org/eclipse/ecf/core/IContainer.html#connect(org.eclipse.ecf.core.identity.ID,%20org.eclipse.ecf.core.security.IConnectContext)">connect(ID targetID, IConnectContext connectContext)</a> and disconnect().  
       As is obvious, these two methods allow
       container implementations to initiate communication with remote services, 
       either server-based or group-based communications.
       <p></p>
       Notice the first parameter to the connect method...<b>targetID</b>.  TargetID is of 
       type <a href="http://www.eclipse.org/ecf/org.eclipse.ecf.docs/api/org/eclipse/ecf/core/identity/ID.html">ID</a>.  The <b>targetID</b> parameter 
       <b>identifies the target server or group</b> for the connect operation.  It is of type <a href="http://www.eclipse.org/ecf/org.eclipse.ecf.docs/api/org/eclipse/ecf/core/identity/ID.html">ID</a> so that the
       to allow the target communications service to be of many kinds...e.g. client-server or peer-to-peer.  For example, for http communication the targetID would consist of
       the URL specifying a particular file at a particular path on a particular server...e.g: <b>http://www.eclipse.org/ecf</b>.  For some
       other communications protocol the ID provided would be different...e.g:  <b>sip:someone@example.com;transport=tcp</b>.  All such targets for
       connect may be represented via an instance of the ID interface.
       <h4><a name="Example Connection Code"></a>Example Code: Container Creation and Connection</h4>
       Here's an example code snippet that shows the creation and connection of an ECF container:
       <pre>
       // make container instance
       IContainer cont = getContainerFactory().createContainer("ecf.generic.client");
       // make targetID
       ID targetID = IDFactory.getDefault().createID(cont.getConnectNamespace(),"ecftcp://foo.com:3282/server");
       // then connect to targetID with null authentication data
       cont.connect(targetID,null);
       </pre>       
        <h4><a name="Namespace Extension Point"></a>Namespaces and ID Construction</h4>
       The <b>org.eclipse.ecf</b> core plugin defines a namespace extension point, so that ECF provider plugins can provide
       their own Namespace implementations.  For example, here is the namespace extension definition for the 
       <b>org.eclipse.ecf.provider.xmpp</b> plugin:
       <pre>
   &lt;extension point="org.eclipse.ecf.namespace">
      &lt;namespace
            class="org.eclipse.ecf.provider.xmpp.identity.XMPPNamespace"
            description="XMPP Namespace"
            name="ecf.xmpp"/>
   &lt;/extension>
       </pre>
       This assigns the name "ecf.xmpp" to the class <b>org.eclipse.ecf.provider.xmpp.identity.XMPPNamespace</b>.  Notice that this
       class <b>must</b> be a subclass of <a href="http://www.eclipse.org/ecf/org.eclipse.ecf.docs/api/org/eclipse/ecf/core/identity/Namespace.html">org.eclipse.ecf.core.identity.Namespace</a>.  
       The XMPPNamespace class provides the
       XMPP namespace implementation and as described above implements the XMPP namespace restrictions.  It is also responsible for
       constructing new ID instances via the ECF <a href="http://www.eclipse.org/ecf/org.eclipse.ecf.docs/api/org/eclipse/ecf/core/identity/IIDFactory.html">IDFactory</a>.
       For example, to construct an instance of and XMPP ID, a client could use the following code:
       <pre>
       ID newID = IDFactory.getDefault().createID("ecf.xmpp","slewis@foo.com");
       </pre>
       Underneath the covers of the IDFactory.createID method the following occurs:
       <ol>
       <li>The name "ecf.xmpp" is used to lookup it's associated Namespace class (in this case XMPPNamespace).  This lookup is done via the
       Eclipse extension registry.
       <li>The XMPPNamespace.createInstance method is called to manufacture an <a href="http://www.eclipse.org/ecf/org.eclipse.ecf.docs/api/org/eclipse/ecf/core/identity/ID.html">ID</a>
       that is in the XMPPNamespace from the string "slewis@foo.com"
       <li>The new <a href="http://www.eclipse.org/ecf/org.eclipse.ecf.docs/api/org/eclipse/ecf/core/identity/ID.html">ID</a> is
       returned to the caller
       </ol>
       Note that there are other IDFactory.createID(...) methods that allow parameters other than Strings to be used for 
       ID construction (e.g. URIs).
       <br>
       <h4><a name="Extensibility"></a>Container Extensibility through Adapters</h4>
       To support run-time extensibility, the IContainer interface inherits from org.eclipse.core.runtime.IAdaptable.  This 
       interface exposes a single method: the 'getAdapter(Class intf)' method.  In the case of IContainer instances,
       this allows client applications to query the IContainer instance at runtime about it's exposed capabilities, and get
       access to those capabilities if they are available.  So, for example, perhaps we're interested in creating an 
       instant messaging application and wish to use the capabilities exposed by the 
       <a href="http://www.eclipse.org/ecf/org.eclipse.ecf.docs/api/org/eclipse/ecf/presence/IPresenceContainer.html">IPresenceContainer</a> interface.
       To do this, we simply query the IContainer instance at runtime to see if it provides access
       to IPresenceContainer capabilities:
       <pre>
       IPresenceContainer pc = (IPresenceContainer) cont.getAdapter(IPresenceContainer.class);
       if (pc != null) {
           // The container DOES expose IPresenceContainer capabilities, so we can use them!
       } else {
           // The container does not expose IPresenceContainer capabilities...we're out of luck
       }
       </pre>
       Among other positive characteristics, this adapter mechanism provides a consistent-yet-simple way for
       a wide variety of container types to be defined and used without the need to update the ECF
       IContainer abstractions.
       <p></p>
       See the documentation for the <a href="http://www.eclipse.org/ecf/org.eclipse.ecf.docs/api/org/eclipse/ecf/core/IContainer.html#getAdapter(java.lang.Class)">IContainer.getAdapter()</a> method.
       See also a terrific <a href="http://www.eclipsezone.com/articles/what-is-iadaptable/">article on EclipseZone about usage of IAdaptable for runtime extensibility</a>
       <h4><a name="Identity"></a>Identity</h4>
       <p></p>
       In ECF, identity of local or remote entities such as users, remote services, and groups are all represented
       via the <a href="http://www.eclipse.org/ecf/org.eclipse.ecf.docs/api/org/eclipse/ecf/core/identity/ID.html">ID</a> interface.  
       This interface provides the basic contract for addressing uniquely identified entities.  ID instances belong
       to a given <a href="http://www.eclipse.org/ecf/org.eclipse.ecf.docs/api/org/eclipse/ecf/core/identity/Namespace.html">Namespace</a>
       Namespaces define the range of allowable values of the ID instances belonging to that Namespace.  So, for example, the Namespace of
       XMPP (Jabber) user identities is defined by <a href="http://www.ietf.org/rfc/rfc3920.txt">XMPP RFC3920</a> as having the following structure
       <pre>
      jid             = [ node "@" ] domain [ "/" resource ]
      domain          = fqdn / address-literal
      fqdn            = (sub-domain 1*("." sub-domain))
      sub-domain      = (internationalized domain label)
      address-literal = IPv4address / IPv6address
      example         = slewis@foo.com/ecf
       </pre>
      The ECF XMPP provider implementation restricts jids to this syntax by providing a Namespace subclass responsible
      for constructing ID instances that follow the rules defined by the protocol specification.  Other communications protocols 
      and their associated service identities have
      their own Namespaces (e.g. ftp, http, sip, irc, etc, etc), each with it's own requirements for addressing and
      identity.  The <a href="http://www.eclipse.org/ecf/org.eclipse.ecf.docs/api/org/eclipse/ecf/core/identity/ID.html">ID</a>
      contract is not bound to any specific protocol, and makes it possible to create client applications that are
      insensitive to the addressing differences between protocols while still guaranteeing basic uniqueness requirements within a given namespace.
       <p></p>
       <h4><a name="Extensibility Example"></a>Example:  Container creation, ID creation, container adapter, and connection</h4>
       <pre>
         // Create the new container 
		IContainer client = ContainerFactory
				.getDefault().createContainer(containerType);
		// Create the targetID 
		ID targetID = IDFactory.getDefault().createID(client.getConnectNamespace(), uri);
	    // Check for IPresenceContainer....if it is, setup presence UI, if not setup shared object container
		IPresenceContainer pc = (IPresenceContainer) client
				.getAdapter(IPresenceContainer.class);
		if (pc != null) {
			// Setup presence UI
			presenceContainerUI = new PresenceContainerUI(pc);
			presenceContainerUI.setup(client, targetID, username);
		} else throw new NullPointerException("IPresenceContainer interface not exposed by client with type "+containerType);
		// connect
		client.connect(targetID, getJoinContext(username, connectData));
       </pre>
       UNDER CONSTRUCTION 6/17/07
<br><a href="#top"><i>back to top</i></a>
  </td>
  </tr>
</table>

	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
