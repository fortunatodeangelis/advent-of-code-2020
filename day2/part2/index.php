<?php

$fileInputRows = file('../input.txt');

$rightPasswordCounter = 0;
foreach ($fileInputRows as $pwPolicy) {
    /** Formatto le variabili nel modo più adatto */
    $passwordSettings = explode(" ", $pwPolicy);
    $passwordSettings[0] = explode("-", $passwordSettings[0]);
    $passwordSettings[1] = $passwordSettings[1][0];

    if (($passwordSettings[2][(int)$passwordSettings[0][0] - 1] === $passwordSettings[1] && $passwordSettings[2][(int)$passwordSettings[0][1] - 1] !== $passwordSettings[1]) || ($passwordSettings[2][(int)$passwordSettings[0][0] - 1] !== $passwordSettings[1] && $passwordSettings[2][(int)$passwordSettings[0][1] - 1] === $passwordSettings[1])) {
        $rightPasswordCounter++;
    }
}

echo $rightPasswordCounter;
