<?php
    $myfile = fopen("names.txt", "w");

    $txt = "John\n";
    fwrite($myfile, $txt);
    $txt = "David\n";
    fwrite($myfile, $txt);

    fclose($myfile);

    $read = file('names.txt');
    foreach ($read as $line) {
        echo $line .", ";
    }
?>