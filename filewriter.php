<?php
$myfile = fopen("C:\wamp64\www\helloworld\japanesenames.txt", "a+");

$txt = "Saki\n";
fwrite($myfile, $txt);
$txt = "Kengo\n";
fwrite($myfile, $txt);

fclose($myfile);
?>