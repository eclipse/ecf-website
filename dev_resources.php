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
		<h2>Developer Resources</h2>
<table border=0 cellspacing=5 cellpadding=2 width="100%" >
  <tr>
    <td align=left valign=top bgcolor="#0080C0"><b><font color="#FFFFFF" face="Arial,Helvetica">
    &nbsp;ECF User Resources</font></b></td>
  </tr>
  <tr>
    <td>
      <h3>ECF Newsgroup</h3>
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
      <p><p>
    </td>
  </tr>
  <tr>
    <td align=left valign=tpo bgcolor="#0080C0">
      <b><font color="#FFFFFF" face="Arial,Helvetica">&nbsp;ECF Developer Resources</font></b>
    </td>
  </tr>
  <tr>
    <td>
      <h3>ECF Developers mailing list</h3>
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
    </td>
  </tr>
  <tr>
    <td>
      <h3>Anonymous CVS Access to ECF Source Code</h3>
      To load ECF source code into your workspace follow the instructions with one of the project set files listed below
      <ol>
      Instructions for Using Project Set Files
      <li>Download/Save Link As... the desired project set file to local disk</li>
      <li>Within Eclipse, choose <b>File -> Import -> Team Project Set</b> and open the .psf file downloaded in step 1</li>
      </ol>
      <p>Save one of the below project set files to local disk by choosing File -> Save Link As... in your browser</p>

      <ul>
      <li><a href="org.eclipse.ecf.docs/ecf-anonymous.psf">ECF core, examples, and test plugins</a></li>
      <li><a href="org.eclipse.ecf.docs/ecf-anonymous-core.psf">ECF core plugins</a></li>
      <li><a href="org.eclipse.ecf.docs/ecf-anonymous-examples.psf">ECF example plugins</a></li>
      <li><a href="org.eclipse.ecf.docs/ecf-anonymous-tests.psf">ECF test plugins</a></li>
      </ul>
      
      <h4>Anonymous CVS server info</h4>
      <ul>
      <li>Host: dev.eclipse.org</li>
      <li>Repository Path:  /cvsroot/technology</li>
      <li>User: anonymous</li>
      <li>Password:  ;&ltempty;&gt</li>
      <li>Connection method: pserver</li>
      <li>Module:  org.eclipse.ecf/plugins</li>
      </ul> 
      
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
