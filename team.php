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
	<div id="midcolumn">
		<!--	<div align="center"><h1>$pageTitle</h1></div> -->
		<i>Last updated: 2008-3-3</i><p/>
		<div class="homeitem3col">
		    <h3>ECF Team</h3>
                    <p>The ECF Team consists of Contributors and Committers. 
                    We also list past Committers and Contributors and thank them kindly for their work.</p>
            <h3>ECF committers and contributors often hang out on the #eclipse-ecf channel on irc.freenode.net.  See <a href="http://wiki.eclipse.org/Eclipse_Communication_Framework_Project#Public_and_Private_Chat_Groups">here</a> for more information.</h3>
		    <h3>Committers</h3>
			<ul>
				<li>
<a href="http://eclipseecf.blogspot.com">Scott Lewis (IRC: slewis2)</a>, project lead <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&amp;short_desc_type=allwordssubstr&amp;short_desc=&amp;product=ECF&amp;long_desc_type=allwordssubstr&amp;long_desc=&amp;bug_file_loc_type=allwordssubstr&amp;bug_file_loc=&amp;status_whiteboard_type=allwordssubstr&amp;status_whiteboard=&amp;keywords_type=allwords&amp;keywords=&amp;bug_status=RESOLVED&amp;bug_status=CLOSED&amp;emailassigned_to1=1&amp;emailreporter1=1&amp;emailqa_contact1=1&amp;emailcc1=1&amp;emaillongdesc1=1&amp;emailtype1=substring&amp;email1=slewis&amp;emailtype2=substring&amp;email2=&amp;bugidtype=include&amp;bug_id=&amp;votes=&amp;chfieldfrom=&amp;chfieldto=Now&amp;chfieldvalue=&amp;cmdtype=doit&amp;order=Reuse+same+sort+as+last+time&amp;field0-0-0=noop&amp;type0-0-0=noop&amp;value0-0-0="> 
[bugs resolved]</a>
<?php
$pathBIG = "http://".$serverName."/ecf/images/slewis.png";
$path = $_SERVER['DOCUMENT_ROOT'] . "/ecf/images/slewis.png";
$size=50;
echo "<a href=\"". $pathBIG ."\"> <img align=\"middle\" src=\"getthumb.php?path=$path&amp;size=$size\" "." alt=\"[Scott Lewis]\"/></a>";
?>

                </li>
				<li>
			<a href="http://mea-bloga.blogspot.com/">Chris Aniszcxyk (IRC: zx)</a>
<?php
$pathBIG = "http://".$serverName."/ecf/images/ChrisAniszcxyk.gif";
$path = $_SERVER['DOCUMENT_ROOT'] . "/ecf/images/ChrisAniszcxyk.gif";
$size=50;
echo "<a href=\"". $pathBIG ."\"> <img align=\"middle\" src=\"getthumb.php?path=$path&amp;size=$size\" "." alt=\"[Chris Aniszcxyk]\"/></a>";
?>
				</li>
				<li>
                	<a href="http://borisoneclipse.blogspot.com">Boris Bokowski</a>
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
                	<a href="http://codesurgeon.blogspot.com">Mustafa Isik</a>
<?php
$pathBIG = "http://".$serverName."/ecf/images/team/mustafa.jpg";
$path = $_SERVER['DOCUMENT_ROOT'] . "/ecf/images/team/mustafa.jpg";
$size=50;
echo "<a href=\"". $pathBIG ."\"> <img align=\"middle\" src=\"getthumb.php?path=$path&amp;size=$size\" "." alt=\"[Mustafa Isik]\"/></a>";
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
<a href="http://www.lemmster.de/">Markus Kuppe (IRC: lemmy)</a>
<?php
$pathBIG = "http://".$serverName."/ecf/images/markuskuppe.jpg";
$path = $_SERVER['DOCUMENT_ROOT'] . "/ecf/images/markuskuppe.jpg";
$size=50;
echo "<a href=\"". $pathBIG ."\"> <img align=\"middle\" src=\"getthumb.php?path=$path&amp;size=$size\" "." alt=\"[Markus Kuppe]\"/></a>";
?>

                </li>
				<li>
				<a href="http://weblogs.java.net/blog/mayworm/">Marcelo Mayworm</a>
				</li>
                <li>
                	<a href="http://pnehrer.freeshell.org">Peter Nehrer (IRC: pnehrer)</a>
                </li>
                <li>
                	Pierre-Henry Perret (IRC: phperret)
<?php
$pathBIG = "http://".$serverName."/ecf/images/Pierre-HenryPerret.gif";
$path = $_SERVER['DOCUMENT_ROOT'] . "/ecf/images/Pierre-HenryPerret.gif";
$size=50;
echo "<a href=\"". $pathBIG ."\"> <img align=\"middle\" src=\"getthumb.php?path=$path&amp;size=$size\" "."alt=\"[Pierre-Henry Perret]\"/></a>";
?>
                </li>
                <li>
                	<a href="http://moritzpost.de/blog/">Moritz Post</a> (IRC: soulreaper)
                </li>
				<li>
				<a href="http://people.inf.ethz.ch/rjan/">Jan Rellermeyer</a> (IRC: rjan)
				</li>
				<li>
				Remy Chi Jian Suen (IRC: rcjsuen)
				</li>
			</ul> 
		</div>

		<div class="homeitem3col">
			<h3>Contributors</h3>
			<ul>
			   <li>
			   Abner Ballardo - <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=193136">bug 193136</a>, <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=192756">bug 192756</a>, <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=205532">bug 205532</a>
			   </li>
			   <li>
			   Ferenc Boldog - <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=198193">bug 198193</a>
			   </li>
			   <li>
			   Cagatay Calli - <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=192759">bug 192759</a>, <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=196812">bug 196812</a>, <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=192757">bug 192757</a>, <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=198170">bug 198170</a>
			   </li>
			   <li>
			   Joern Dinkla - <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=192574">bug 192574</a>, <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=197821">bug 197821</a>
			   </li>
			   <li>
			   Jakub Jurkiewicz - <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=197332">bug 197332</a>, <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=221139">bug 221139</a>, 
			   <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=196541">bug 196541</a>
			   </li>
				<li>
				Mark Kropf
				</li>
			   <li>
			   Hiroyuki Inaba - <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=219247">bug 219247</a>, <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=219253">bug 219253</a>, 
			   <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=220059">bug 220059</a>
			   </li>
				<li>
				Erkki Lindpere.  Erkki has contributed the bulletin board API to ECF.  We need some additional work on BBAPI before we can
				distribute it as part of ECF.  If you are able to contribute please see <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=180796">bug 180796</a> and 
				<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=164199">bug 164199</a>.
				</li>
			   <li>
			   Willian Mitsuda - <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=192589">bug 192589</a>
			   </li>
			   <li>
			   <a href="http://eclipser-blog.blogspot.com/">Jacek Pospychala</a> - <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=197604">bug 197604</a>, <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=192762">bug 192762</a>, <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=149912">bug 149912</a>
			   </li>
				<li>
				Christoph Schwering.  Christoph is the author of <a href="http://moepii.sourceforge.net/">IRCLib</a>, which ECF is using for it's IRC provider.  He's currently
				working on enhancing IRCLib to support CTCP via <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=220264">bug 220264</a>.
				</li>
			</ul> 
		</div>
		   <div class="homeitem3col">
			<h3>Past Committers and Contributors</h3>
			<ul>
				<li> 
				Rick Hamnett
				</li>
				<li>
				Mary Ruddy
				</li>
				<li> 
				Paul Trevithick
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
