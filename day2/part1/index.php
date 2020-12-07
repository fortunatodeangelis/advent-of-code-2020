<?php

$fileInputRows = file('../input.txt');

$rightPasswordCounter = 0;
foreach ($fileInputRows as $pwPolicy){
    /** Formatto le variabili nel modo più adatto */
    $passwordSettings = explode(" ", $pwPolicy);
    $passwordSettings[0] = explode("-", $passwordSettings[0]);
    $passwordSettings[1] = $passwordSettings[1][0];

    $occurrenceNumber = substr_count($passwordSettings[2], $passwordSettings[1]);
    if ($occurrenceNumber >= $passwordSettings[0][0] && $occurrenceNumber <= $passwordSettings[0][1]){
        $rightPasswordCounter++;
    }
}

echo $rightPasswordCounter;
