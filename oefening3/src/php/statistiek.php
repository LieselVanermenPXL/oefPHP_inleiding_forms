<?php
$getallen = $_GET['getallen'];
$wrongValues = array();

foreach ($getallen as $getal) {
    if (!is_numeric($getal)) {
        array_push($wrongValues, $getal);
        array_splice($getallen, array_search($getal, $getallen), 1);
    }
}

print("Som = " . array_sum($getallen) . "</br>");
print("Min = " . min($getallen) . "</br>");
print("Max = " . max($getallen) . "</br>");

print("</br>Wrong values: </br>");
foreach ($wrongValues as $value) {
    print(" - " . $value . "</br>");
}