<?php

$fileInputRows = file('../input.txt');

$arrayRequiredFields = [
    "byr",
    "iyr",
    "eyr",
    "hgt",
    "hcl",
    "ecl",
    "pid",
    //"cid",
];

$tmpRows = [];
$key = 0;
foreach ($fileInputRows as $row) {
    if (empty(trim($row))) {
        $key++;
        continue;
    }
    $tmpRows[$key][] = $row;
}

$orderedRows = [];
foreach ($tmpRows as $k => $passportRows) {
    foreach (explode(" ", implode(" ", $passportRows)) as $item) {
        $arrayFieldValue = explode(":", $item);
        $orderedRows[$k][$arrayFieldValue[0]] = $arrayFieldValue[1];
    }
}

$validPassport = 0;
foreach ($orderedRows as $fields) {
    if (!array_diff_key(array_flip($arrayRequiredFields), $fields)) {
        $validPassport++;
    }
}

echo $validPassport;
