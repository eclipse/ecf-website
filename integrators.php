<?php  	
        require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
 	$App 	= new App();
	$Nav	= new Nav();
	$Menu 	= new Menu();
	include($App->getProjectCommon());

ob_start();
?>		
<div id="rightcolumn">
 <div class="sideitem">
   <h6>Under Construction</h6>
   <div align="center"><img
        align="center" src="/images/under_construction.jpg"
        border="0" alt="[under_construction]"/></div>
 </div>
</div>


	<div id="midcolumn">
        <div class="homeitem3col">
	<h3>ECF Integrators</h3>
        <p>
         We are currently deciding what to put under this tag.
         Our speculation is that this tag is meant to provide information about how the ECF plug-in interacts 
         with other Eclipse plug-ins. It might contain the following.
        </p>
        <ul>
          <li> what other plug-ins ECF might require </li>
          <li> what other plug-ins use ECF </li>
          <li>why another plug-in might want to use ECF </li>
          <li>how another plug-in would go about using ECF</li>
        </ul>

        <h3></h3>
	</div>
	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
