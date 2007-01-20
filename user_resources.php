<?php  	
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
$App 	= new App();
$Nav	= new Nav();
$Menu 	= new Menu();
include($App->getProjectCommon());

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		Denis Roy
	# Date:			2005-06-16
        #
        # Modified:		Ted Kubaska
	# Date:                 2006-12-08
	#      
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "ECF Resources";
	$pageKeywords	        = "Type, page, keywords, here";
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
  <h3>ECF Users</h3>
   <h4>Newsgroup</h4>
      <p>The Eclipse Communications Framework newsgroup is for anything and everything ECF related.<br>
      You will need a newsgroup
      <a href="http://dev.eclipse.org/newsManager/newsRequestForm.html">username
      and password from Eclipse.org</a> to participate</p>

      <blockquote>
        <p><a href="news://news.eclipse.org/eclipse.technology.ecf">
        news://news.eclipse.org/eclipse.technology.ecf</a></p>
      </blockquote>

   <h3>Bug Reporting</h3>
    <p>Please use Bugzilla to report any bugs you find.
      <blockquote>
        <p> <a href="https://bugs.eclipse.org/bugs/">https://bugs.eclipse.org/bugs</a> 
        </p>
      </blockquote>
    </p>

   <h3>ECF Wiki</h3>
   <p>You can find a great deal of information about ECF on the 
   <a href="http://wiki.eclipse.org/index.php/Eclipse_Communication_Framework_Project">ECF Wiki</a>
   </p>

   <h3>Presentations</h3>
   <p>The following are introductory presentations and tutorials.</p>

   <ul>
   <li><b>June 19, 2006 - ECF Tutorial by Chris Aniszczyk for the 2006 Rational Software Developer's Conference.
   <a href="presentations/ecf_rsdc2006.pdf">Here are the tutorial slides (pdf)</a>.
   </li>

   <li><b>March 21, 2006 - EclipseCon 2006 <a href="http://www.eclipsecon.org/2006/Sub.do?id=385">ECF Short Talk</a>.  Presentation
   materials (pdf) available here. <a href="presentations/EclipseCon.2006.ECF.Talk.385.pdf">here</a></b>
   </li>

   <li><b>March 20, 2006 - EclipseCon 2006 <a href="http://www.eclipsecon.org/2006/Sub.do?id=46">ECF Tutorial</a>.  Presentation
   materials (pdf) available here <a href="presentations/EclipseCon.2006.ECF.Tutorial.42.pdf">here</a></b>
   </li>

   <li>
   <b>March 14, 2006 - IBM developerWorks® Article:
   <a href="http://www-128.ibm.com/developerworks/opensource/library/os-ecl-commfwk/">
   Getting started with the Eclipse Communication Framework</a></b>
   </li>

   <li>
   <b>September 27, 2005 -
   <a href="http://www.eclipsezone.com/articles/ecf-interview">
   Interview with ECF project lead Scott Lewis</a> at <a href="http://www.eclipsezone.com">EclipseZone</a></b>
   </li>
   </ul>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
