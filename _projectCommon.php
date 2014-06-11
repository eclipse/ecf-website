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
    
#   $Nav->addCustomNav("Contact US","http://www.eclipse.org/ecf/contact.php","_self",1);
    $Nav->addCustomNav("Contact Us","contact.php","_self",1);
#   $Nav->addCustomNav("Contact US","/ecf/contact.php","_self",1);
    
    $Nav->addCustomNav("Getting Started","/ecf/gettingStarted.php","_self",1);
    $Nav->addCustomNav("Downloads","http://www.eclipse.org/ecf/downloads.php","_self",1);
    $Nav->addCustomNav("Documentation","documentation.php","_self",1);
 
    $Nav->addCustomNav("Bugs","http://www.eclipse.org/ecf/bugs.php","_self",1);
    $Nav->addCustomNav("Plan","http://www.eclipse.org/ecf/plans/ecf.plan.3.0.xml","_self",1);
    $Nav->addCustomNav("Legal","legal.php","_self",1);
     
    $Nav->addCustomNav("Resources","http://www.eclipse.org/ecf/dev_resources.php","_self",1);
    $Nav->addCustomNav("Newsgroups","http://dev.eclipse.org/newslists/news.eclipse.technology.ecf/maillist.html","_self",2);
    $Nav->addCustomNav("Mail Lists","https://dev.eclipse.org/mailman/listinfo/ecf-dev","_self",2);
    $Nav->addCustomNav("ECF Wiki","http://wiki.eclipse.org/Eclipse_Communication_Framework_Project","_self",2);

        
    
# 	$Nav->addCustomNav("Team", "team.php", 	"_self", 1);
# 	$Nav->addCustomNav("Team", "team.php", 	"_self", 1);
# 	$Nav->addCustomNav("Downloads", "downloads.php", 	"_self", 1);
# 	$Nav->addCustomNav("Contact Us", "contact.php", 	"_self", 1);
# 	$Nav->addCustomNav("Project Planning and Team Conference Schedule","http://wiki.eclipse.org/index.php/Eclipse_Communication_Framework_Project", "_blank", 1);
# 	$Nav->addCustomNav("Overview Documentation", 		"documentation.php", "_self", 1);
# 	$Nav->addCustomNav("ECF APIs (Javadocs)","org.eclipse.ecf.docs/api", "_blank", 1);
# 	$Nav->addCustomNav("Developer Resources", "dev_resources.php", 	"_self", 1);
# 	$Nav->addCustomNav("ECF Bugs", "https://bugs.eclipse.org/bugs/buglist.cgi?query_format=specific&order=relevance+desc&bug_status=__open__&product=ECF&content=", "_blank", 1);
?>
