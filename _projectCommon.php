<?php

	# set default theme
	$_theme = "Phoenix";
	$theme = "Phoenix";
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
	$Nav->addCustomNav("Downloads", 				"/ecf/downloads.php", 		"_self", 1);
        $Nav->addCustomNav("Project Plans",                      "http://wiki.ecl
ipse.org/index.php/Eclipse_Communication_Framework_Project",    "_self", 1);

        $Nav->addCustomNav("ECF APIs (Javadocs)","/ecf/org.eclipse.ecf.docs/api",
 "_blank", 1);
	$Nav->addCustomNav("Overview Documentation", 		"/ecf/documentation.php",			 	"_self", 1);
	$Nav->addCustomNav("Developer Resources (CVS, mailing list and newsgroup)", 		"/ecf/dev_resources.php", 	"_self", 1);
	$Nav->addCustomNav("ECF Bugs", 					"https://bugs.eclipse.org/bugs/buglist.cgi?query_format=specific&order=relevance+desc&bug_status=__open__&product=ECF&content=", 	"_self", 1);

?>
