<?php

$fileInputRows = file('../input.txt');
$copyRows1 = $fileInputRows;
$copyRows2 = $fileInputRows;

/**
 * Ciclo ogni numero e lo sommo ad ogni numero escluso se stesso
 * @var  $k
 * @var  $firstN
 */
foreach ($fileInputRows as $k => $firstN) {

    foreach ($copyRows1 as $k2 => $secondN) {

        /**
         * Se durante la somma trovo le due occorrenze allora eseguo il prodotto dei tre
         * @var  $secondN
         */
        foreach ($copyRows2 as $thirdN) {
            if ((int)$firstN + (int)$secondN + (int)$thirdN === 2020) {
                echo (int)$firstN * (int)$secondN * (int)$thirdN;
                exit;
            }
        }
    }
}
