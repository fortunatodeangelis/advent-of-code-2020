<?php

$mapRows = file('../input.txt');

$treesHit = 0;
for ($x = 0, $y = 0, $totalRows = count($mapRows), $xLength = strlen(trim($mapRows[0])); $y < $totalRows; $y++, $x += 3) {
    if ($mapRows[$y][$x % $xLength] === '#'){
        $treesHit++;
    }
}

echo 'Trees hit: ' . $treesHit . PHP_EOL;
