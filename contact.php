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
		<h2>Contact ECF Team</h2>
		<p>Please contact us!  We would appreciate hearing from you about your needs for ECF, 
		what you are doing or want to do with ECF,
		what we can do to make ECF more useful for you,
		and your ideas of what sort of applications you would like to see built on ECF by us and/or others.</p>
		<p>We can be reached on the <a href="news://news.eclipse.org/eclipse.technology.ecf">ECF newsgroup</a>, via
		the <a href="mailto:ecf-dev@eclipse.org">ecf-dev@eclipse.org mailing list</a>, the <a href="http://wiki.eclipse.org/index.php/Eclipse_Communication_Framework_Project">ECF planning wiki</a> or via the bi-monthly 
		<a href="http://wiki.eclipse.org/index.php/Eclipse_Communication_Framework_Project#ECF_Team_Meetings">ECF conference calls</a>.  Also,
		please feel free to contact the ECF project team lead, Scott Lewis directly at <a href="slewis@composent.com">slewis at composent.com</a>...particularly
		if you have contributions to make to support the project, are using ECF successfully already, or have nice things to say about what we're doing :).</p>
		<p>
		If you have an ECF bug to report, the quickest thing to get our immediate attention is to 
		file a <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=specific&order=relevance+desc&bug_status=__open__&product=ECF&content="> ECF bug report</a></p>
	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
