<?php
$getal = $_GET['getal'];

if (ctype_digit($getal) && $getal > 0) {
    require_once('wiskunde.php');
    print('Faculteit van ' . $getal . ' is: ' . faculteit($getal));
}
else {
    print("Foutieve ingave: " . $getal);
}