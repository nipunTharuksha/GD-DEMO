<?php
$lang="en";
if(isset($_GET["lang"])){
    $lang=$_GET["lang"];
}
$lang=parse_ini_file("lang/".$lang.".ini");
?>