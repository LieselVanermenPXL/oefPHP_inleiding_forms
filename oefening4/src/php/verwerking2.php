<?php
$naam = $_GET['naam'];
$kleur = $_GET['kleur'];

setcookie('naam', $naam, time() + 5 * 60 * 60);
setcookie('kleur', $kleur, time() + 5 * 60 * 60);

require_once('toon.php');

// werkt ook en werkt sowieso met cookie (variabalen namen waar cookie gemaakt wordt in toon.php nog aanpassen dan)