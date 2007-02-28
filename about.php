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
            Currently, this tag just displays the about nugget. Displaying the about nugget is fine, but I think it should display more. 
            This means including additional nuggets, as yet undefined. I think of the About tag as a place where readers go who are 
            more interested in reading about ECF than using it. This doesn't mean that they don't want to use or won't but rather 
            when they want to satisfy that need, they'll go to a different tag. They're at About because they want to read about ECF, 
            simple as that.
          </p>
          <p>
           Suggestions for additional information include the following. (I'm not making a case for any of these topics; 
           I'm just listing possibilities.)
          </p>
          <ul>
           <li>
            a motivation nugget. Why was ECF written? What needs is it intended to solve? Why would you want to use it. 
            The motivation described here is not a motivation of why someone would want to work on ECF, but rather a 
            description of what motivates the existence of ECF as a technology.
          </li>
          <li>
            a history nugget. How did the idea of ECF originate? Is is like anything else? In what ways might it be 
            better than a comparable technology. 
          </li>
          <li>
            a future nugget. What does the ECF Team think is ECF's future direction? This might include conflicting 
            scenarios that are under discussion.
          </li>
          <li>
            a support nugget. Who supports ECF? The Who here is not a list of names (although we may mention some key names) 
            but rather a description of the source of support. What percentage is volunteer, what percentage is corporate-funded, 
            what are the motivations for this funding ...?
          </li>
          <li>
            an examples nugget. Examples here are not meant to be something you download and run. Rather I mean examples to be a 
            description of how ECF is currently used? Is it part of any current product? Is it intended to be part of a 
            future product? If we have corporate funding, what are the motivations for that funding? Where would corporate 
            contributors use ECF? A good description here might even entice someone to consider being a financial contributor.
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
