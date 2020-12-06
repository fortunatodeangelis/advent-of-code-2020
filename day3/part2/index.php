<?php

$mapRows = file('../input.txt');

$treesHit = [];
foreach ([['y' => 1, 'x' => 1], ['y' => 1, 'x' => 3], ['y' => 1, 'x' => 5], ['y' => 1, 'x' => 7], ['y' => 2, 'x' => 1]] as $i => $data) {
    $treesHit[$i] = 0;
    for ($x = 0, $y = 0, $totalRows = count($mapRows), $xLength = strlen(trim($mapRows[0])); $y < $totalRows; $y += $data['y'], $x += $data['x']) {
        if ($mapRows[$y][$x % $xLength] === '#'){
            $treesHit[$i]++;
        }
    }
}

echo 'Trees hit: ' . array_product($treesHit) . PHP_EOL;
