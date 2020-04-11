<?php
function faculteit ($getal) {
    $result = 1;
    while($getal > 0) {
        $result *= $getal;
        $getal--;
    }
    return $result;
}