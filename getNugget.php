<?php
function getNugget($fileName,$html) {
       $filepathString = $_SERVER['DOCUMENT_ROOT']."/ecf/nuggets/" . $fileName;
        $filepathString = "./nuggets/" . $fileName;
        $fileContent = file_get_contents($filepathString);
        $html = $html . $fileContent;
        return $html;
   }
?>

