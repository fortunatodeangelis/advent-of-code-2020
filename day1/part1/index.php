<?php

$fileInputRows = file('../input.txt');
$copyRows = $fileInputRows;

/**
 * Ciclo ogni numero e lo sommo ad ogni numero escluso se stesso
 * @var  $k
 * @var  $firstN
 */
foreach ($fileInputRows as $k => $firstN) {

    /**
     * Se durante la somma trovo le due occorrenze allora eseguo il prodotto dei due
     * @var  $secondN
     */
    foreach ($copyRows as $secondN) {
        if ((int)$firstN + (int)$secondN === 2020) {
            echo (int)$firstN * (int)$secondN;
            exit;
        }
    }
}
