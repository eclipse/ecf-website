<?php  	
        require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
 	$App 	= new App();
	$Nav	= new Nav();
	$Menu 	= new Menu();
	include($App->getProjectCommon());

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
   <h6>Under Construction</h6>
   <div align="center"><img
        align="center" src="/images/under_construction.jpg"
        border="0" alt="[under_construction]"/>
   </div>
 </div>
</div>


	<div id="midcolumn">
        <div class="homeitem3col">
	<h3>ECF API Plan </h3>
           <p>The Eclipse Communication Framework (ECF) API documentation uses Javadocs. To look
            at the API documentation, click
           <a href="http://www.eclipse.org/ecf/org.eclipse.ecf.docs/api">javadocs</a>.
           </p>

        <h3></h3>
<p>
 See <a href="http://wiki.eclipse.org/index.php/ECF_API_Docs">ECF API documentation</a>.
</p>
<p>
 See <a href="org.eclipse.ecf.docs/api">Javadocs API documentation</a>.
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
