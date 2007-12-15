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
     	   <h3>About the ECF Project</h3>
     	<div style="margin:10px;">
           $desc
<h3></h3>
           <p>
           <a href="http://wiki.eclipse.org/ECF_Frequently_Asked_Questions">ECF Frequently Asked Questions List</a>
          </p>
          <p>
          <a href="http://wiki.eclipse.org/Eclipse_Communication_Framework_Project">ECF Wiki</a>
          </p>
         </ul>
	</div>

<h3></h3>
</div>
</div>


EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, NULL, NULL, NULL, $html);
?>
