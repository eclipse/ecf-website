<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
$serverName = $_SERVER['SERVER_NAME'];
$App 	= new App();
$Nav	= new Nav();
$Menu 	= new Menu();
include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
$pathPhotos = "http://".$serverName."/ecf/committers/index.php";
$Nav->addCustomNav("Committer Photos", $pathPhotos, "_self", 2);
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
<div id="rightcolumn">
 <div class="sideitem">
   <h6>Incubation</h6>
   <div align="center"><a href="/projects/gazoo.php"><img
        align="middle" src="/images/gazoo-incubation.jpg"
        border="0" alt="[gazoo-incubation]"/></a></div>
 </div>
</div>

	<div id="midcolumn">
		<!--	<div align="center"><h1>$pageTitle</h1></div> -->
		<i>Last updated: 2007-2-10</i><p/>
		<div class="homeitem3col">
		    <h3>ECF Team</h3>
                    <p>The ECF Team consists of Contributors and Committers. 
                    We also list past Committers and Contributors and thank them for their work.</p>
		    <h3>Committers</h3>
			<ul>
				<li>
<a href="http://www.composent.com">Scott Lewis</a>, project lead <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&amp;short_desc_type=allwordssubstr&amp;short_desc=&amp;product=ECF&amp;long_desc_type=allwordssubstr&amp;long_desc=&amp;bug_file_loc_type=allwordssubstr&amp;bug_file_loc=&amp;status_whiteboard_type=allwordssubstr&amp;status_whiteboard=&amp;keywords_type=allwords&amp;keywords=&amp;bug_status=RESOLVED&amp;bug_status=CLOSED&amp;emailassigned_to1=1&amp;emailreporter1=1&amp;emailqa_contact1=1&amp;emailcc1=1&amp;emaillongdesc1=1&amp;emailtype1=substring&amp;email1=slewis&amp;emailtype2=substring&amp;email2=&amp;bugidtype=include&amp;bug_id=&amp;votes=&amp;chfieldfrom=&amp;chfieldto=Now&amp;chfieldvalue=&amp;cmdtype=doit&amp;order=Reuse+same+sort+as+last+time&amp;field0-0-0=noop&amp;type0-0-0=noop&amp;value0-0-0="> 
[bugs resolved]</a>
<?php
$pathBIG = "http://".$serverName."/ecf/images/slewis.png";
$path = $_SERVER['DOCUMENT_ROOT'] . "/ecf/images/slewis.png";
$size=50;
echo "<a href=\"". $pathBIG ."\"> <img align=\"middle\" src=\"getthumb.php?path=$path&amp;size=$size\" "." alt=\"[Scott Lewis]\"/></a>";
?>

                </li>
				<li>
			<a href="http://mea-bloga.blogspot.com/">Chris Aniszcxyk</a>
<?php
$pathBIG = "http://".$serverName."/ecf/images/ChrisAniszcxyk.gif";
$path = $_SERVER['DOCUMENT_ROOT'] . "/ecf/images/ChrisAniszcxyk.gif";
$size=50;
echo "<a href=\"". $pathBIG ."\"> <img align=\"middle\" src=\"getthumb.php?path=$path&amp;size=$size\" "." alt=\"[Chris Aniszcxyk]\"/></a>";
?>
				</li>
				<li>
                	Boris Bokowski
                </li>
				<li>
                	Roland Fru
                </li>
				<li>
                	Ken Gilmer
                </li>
                                <li>
                	<a href="http://www.markcasimer.com">Ted Kubaska</a>
<?php
$pathBIG = "http://".$serverName."/ecf/images/TedKubaska.png";
$path = $_SERVER['DOCUMENT_ROOT'] . "/ecf/images/TedKubaska.png";
$size=50;
echo "<a href=\"". $pathBIG ."\"> <img align=\"middle\" src=\"getthumb.php?path=$path&amp;size=$size\" "." alt=\"[Ted Kubaska]\"/></a>";
?>
                                </li>
                <li>
                	<a href="http://www.seaquest.com">Pete Mackie</a>
<?php
$pathBIG = "http://".$serverName."/ecf/images/PeteMackie.jpg";
$path = $_SERVER['DOCUMENT_ROOT'] . "/ecf/images/PeteMackie.jpg";
$size=50;
echo "<a href=\"". $pathBIG ."\"> <img align=\"middle\" src=\"getthumb.php?path=$path&amp;size=$size\" "."alt=\"[Pete Mackie]\"/></a>";
?>

                </li>
				<li>
				Marcelo Mayworm
				</li>
                <li>
                	Peter Nehrer
                </li>
                <li>
                	Pierre-Henry Perret
<?php
$pathBIG = "http://".$serverName."/ecf/images/Pierre-HenryPerret.gif";
$path = $_SERVER['DOCUMENT_ROOT'] . "/ecf/images/Pierre-HenryPerret.gif";
$size=50;
echo "<a href=\"". $pathBIG ."\"> <img align=\"middle\" src=\"getthumb.php?path=$path&amp;size=$size\" "."alt=\"[Pierre-Henry Perret]\"/></a>";
?>
                </li>
				<li>
				Remy Suen
				</li>
			</ul> 
		</div>

		<div class="homeitem3col">
			<h3>Contributors</h3>
			<ul>
				<li>
				Mustafa Isik
				</li>
				<li>
				Mark Kropf
				</li>
				<li>
				Erkki Lindpere
				</li>
				<li>
				Christoph Schwering
				</li>
			</ul> 
		</div>
		   <div class="homeitem3col">
			<h3>Past Committers and Contributors</h3>
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
