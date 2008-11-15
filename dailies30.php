<!doctype html public "-//w3c//dtd html 4.0 transitional//en">
<html>
<head>
<title>eclipse communication framework dailies</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="default_style.css" type="text/css">
</head>
<body text="#000000" bgcolor="#ffffff" link="#0000ee" vlink="#551a8b" alink="#ff0000"><table width=100% BORDER=0 CELLPADDING=2 CELLSPACING=5 STYLE="page-break-before: always">
<h1>ECF 3.0 Daily Downloads</h1>
<div>
<p>
</p>
<?php
    $files=file("filelist30.txt");
    rsort($files);
    foreach ($files as $file) {
       echo '<tr> <td><p>
       <a href="http://www.eclipse.org/downloads/download.php?file=/rt/ecf/3.5dailies3.0/' . $file .'">' . $file .'</a>
       </p></td></tr>';
       
    }
?>
</div>
</body>
</html>
