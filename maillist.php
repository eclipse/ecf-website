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

	<div id="midcolumn">
        <div class="homeitem3col">
	<h3>ECF Mailing Lists</h3>
        <p>The ECF mailing list is for developers working on ECF code to discuss development related issues.<br/>
        If you are &quot;kicking the tires&quot; or using ECF to develop your own communications applications,<br/>
        please post questions on the <b><u>newsgroup</u> </b>rather than the
        developers mailing list.</p>

        <blockquote>
        <a href="mailto:ecf-dev@eclipse.org">ecf-dev@eclipse.org</a>
        </blockquote>
<p>
        You must <a href="https://dev.eclipse.org/mailman/listinfo/ecf-dev"> subscribe to the
        ecf-dev mailing list</a> if you want to send email to that list.
</p>
        <p> You can read the <a href="http://dev.eclipse.org/mhonarc/lists/ecf-dev/maillist.html">mailing list archive</a> 
        without joining the list.
        </p>

        <p>The ECF mailing list is for developers working on ECF code to discuss development related issues.
        </p>
        <h3></h3>
	</div>
	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
