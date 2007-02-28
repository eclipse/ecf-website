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
     	   <h3>ECF Getting Started</h3>
     	<div style="margin:10px;">
           $desc
<h3></h3>
           <p>
            The Getting Started tag appears to be hard-linked to the Users tag.
           </p>
           <p>
            I think of the Getting Started tag as a place where readers go who are intending to get serious about ECF.
            If you want to get started with ECF, you definitely start off as a user. You may become a developer, 
            but you start off as a user. However, I think it's more appropriate for this tag to contain specific information 
            about how to 1) download ECF and 2) do something simple with it. That's what getting started means to me. 
            So I recommend the following.
           </p>
           <ul>
            <li>
             a pre-requisites nugget. This describes what your Eclipse SDK should have before you download ECF. 
             It should also describe how to get and install any pre-requisites.
            </li>
            <li>
             a downloads_recommendation nugget. This is a recommendation of what you should download and a link to the Downloads page.
            </li>
            <li>
             an examples nugget. This describes available examples. It should list them in order of increasing complexity 
             and sophistication. It should recommend an example that is more than “hello-world,” but one that comes up 
             quickly and is bug-free and that demonstrates that ECF has been installed correctly.
            </li>
           </ul>
	</div>

<h3></h3>
</div>
</div>


EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, NULL, NULL, NULL, $html);
?>
