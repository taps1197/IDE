<?php
$q="BlinkM.cpp";
$myfile = fopen($q, "r") or die("Unable to open file!");
echo fread($myfile,filesize($q));
fclose($myfile);
?>