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
	$pageTitle 		= "ECF Team";
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
		<!--	<div align="center"><h1>$pageTitle</h1></div> -->
		<i>Last updated: 2006-11-03</i></p>
		<div class="homeitem3col">
		    <h3>Committers</h3>
			<ul>
				<li>
                    <a href="http://www.composent.com">Scott Lewis</a>, project lead <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=ECF&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=CLOSED&emailassigned_to1=1&emailreporter1=1&emailqa_contact1=1&emailcc1=1&emaillongdesc1=1&emailtype1=substring&email1=slewis&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
                    [bugs resolved]</a>
                </li>
				<li>
                	Boris Bokowski
                </li>
				<li>
					<a href="http://mea-bloga.blogspot.com/">Chris Aniszczyk</a>
				</li>
				<li>
                	Ken Gilmer
                </li>
                <li>
                	<a href="http://www.seaquest.com">Pete Mackie</a>
                </li>
                <li>
                	Peter Nehrer
                </li>
                <li>
                	Pierre-Henry Perret
                </li>
			</ul> 
		</div>

		<div class="homeitem3col">
			<h3>Contributors</h3>
			<ul>
				<li>
				Roland Fru
				</li>
				<li>
				Mustafa Isik
				</li>
				<li>
				Erkki Lindpere
				</li>
				<li>
				Marcello Mayworm 
				</li>
				<li>
				Remy Suen
				</li>
			</ul> 
		</div>
		   <div class="homeitem3col">
			<h3>Past Committers & Contributors</h3>
			<ul>
				<li> 
				Paul Trevithick
				</li>
				<li> 
				Rick Hamnett
				</li>
			</ul> 
		</div>

		<p>&nbsp;</p>
		<p>&nbsp;</p>

	</div> 
	
	
<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
