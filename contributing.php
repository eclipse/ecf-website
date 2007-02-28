<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");

  $descString = $_SERVER['DOCUMENT_ROOT']."/ecf/project-info/project-description.html";
  $desc = file_get_contents($descString);
 	$App 	= new App();
	$Nav	= new Nav();
	$Menu 	= new Menu();
	include($App->getProjectCommon());

	$html = <<<EOHTML
<div id="rightcolumn">
 <div class="sideitem">
   <h6>Under Construction</h6>
   <div align="center"><img 
        align="middle" src="/images/under_construction.jpg" 
        border="0" alt="[under_construction]"/></a>
   </div>
  </div>
</div>
<div id="midcolumn">
    
	<div class="homeitem3col">	
     	   <h3>ECF Contributing</h3>
     	<div style="margin:10px;">
           <p>
            The Contributing tag appears to be hard-linked to the Contributors tag.
           </p>
           <p>
            We are not clear on how we should distinguish the content between these two links.
           </p>
	</div>

<h3></h3>
</div>
</div>


EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
