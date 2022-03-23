<?php
    $read = file('japanesenames.txt');
    foreach ($read as $line) {
        echo $line .", ";
    }
?>