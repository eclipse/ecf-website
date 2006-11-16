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
	$pageTitle 		= "ECF Resources";
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
		<h3>ECF User Resources</h3>
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
      <p>Please report any bugs you find using Bugzilla.<ul>
        <li>Reporting and Viewing <a href="bugs.html">ECF Bugs</a></li>
        </ul>
      </p><p></p>
      <h3>ECF Developer Resources</h3>
      <h4>Mailing List</h4>
      <p>The ECF mailing list is for developers working on ECF code to discuss development related issues.<br>
      If you are &quot;kicking the tires&quot; or using ECF to develop your own communications applications,<br>
      please post questions on the <b><u>newsgroup</u> </b>rather than the
      developers mailing list.</p>
      <blockquote>
        <p><a href="mailto:ecf-dev@eclipse.org">ecf-dev@eclipse.org</a></p>
      </blockquote>
      You must <a href="https://dev.eclipse.org/mailman/listinfo/ecf-dev"> subscribe to the
      ecf-dev mailing list</a> if you want to send email to that list.
      <p></p>
      You can read the <a href="http://dev.eclipse.org/mhonarc/lists/ecf-dev/maillist.html">mailing list archive</a> without joining the list.
      <p></p>
      <h4>Project IP Log</h4>
      The ECF Project IP Log is available <a href="ip_log.html">here</a>
      <p></p>
      <h4>Anonymous CVS Access to ECF Source Code</h4>
      <p></p>
      To load ECF source code into your workspace download and use one of the project set files below
      <p>Save one of the below project set files to local disk by choosing File -> Save Link As... in your browser</p>

      <ul>
      <li><a href="org.eclipse.ecf.docs/ecf-anonymous.psf">ECF core, examples, and test plugins</a></li>
      <li><a href="org.eclipse.ecf.docs/ecf-anonymous-core.psf">ECF core plugins</a></li>
      <li><a href="org.eclipse.ecf.docs/ecf-anonymous-examples.psf">ECF example plugins</a></li>
      <li><a href="org.eclipse.ecf.docs/ecf-anonymous-tests.psf">ECF test plugins</a></li>
      </ul>
      
      <ol>
      <p>Instructions for Using Project Set Files</p>
      <li>Download/Save Link As... the desired project set file to local disk</li>
      <li>Within Eclipse, choose <b>File -> Import -> Team Project Set</b> and open the .psf file downloaded in step 1</li>
      </ol>
      <h5>Anonymous CVS server info</h5>
      <ul>
      <li>Host: <b>dev.eclipse.org</b></li>
      <li>Repository Path:  <b>/cvsroot/technology</b></li>
      <li>User: <b>anonymous</b></li>
      <li>Password:  &lt;empty&gt;</li>
      <li>Connection method: <b>pserver</b></li>
      <li>Module:  <b>org.eclipse.ecf/plugins</b></li>
      </ul> 
	</div>
	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
