<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/projects/common/project-info.class.php");
	$projectInfo = new ProjectInfo("rt.ecf");
#	$projectInfo->generate_common_nav($Nav);

	# set default theme
	$_theme = "solstice";
	$theme = "solstice";
	if(isset($_POST['theme'])) {
		$_theme = $_POST['theme'];
	}
	if($_theme != "" && $App->isValidTheme($_theme)) {
		setcookie("theme", $_theme);
		$theme = $_theme;
	}
	else {
		# Get theme from browser, or none default
		$theme = $App->getUserPreferedTheme();
	}

	# Define your project-wide Nav bars here.
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
 	$Nav->addNavSeparator("ECF Home", "/ecf/");
    $Nav->addCustomNav("About This Project","http://www.eclipse.org/projects/project_summary.php?projectid=rt.ecf","_self",1);
    
    $Nav->addCustomNav("Contact Us","contact.php","_self",1);
    
    $Nav->addCustomNav("Downloads","http://www.eclipse.org/ecf/downloads.php","_self",1);
    $Nav->addCustomNav("Documentation/Wiki","http://wiki.eclipse.org/Eclipse_Communication_Framework_Project","_self",1);
 
    $Nav->addCustomNav("Bugs","http://www.eclipse.org/ecf/bugs.php","_self",1);
    $Nav->addCustomNav("Legal","legal.php","_self",1);
     
    $Nav->addCustomNav("Developer Mail List","https://dev.eclipse.org/mailman/listinfo/ecf-dev","_self",2);
    $Nav->addCustomNav("Newsgroup","http://dev.eclipse.org/newslists/news.eclipse.technology.ecf/maillist.html","_self",2);
    $Nav->addCustomNav("Wiki","http://wiki.eclipse.org/Eclipse_Communication_Framework_Project","_self",2);

?>
