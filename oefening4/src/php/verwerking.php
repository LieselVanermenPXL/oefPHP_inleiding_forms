<?php
$naam = null;
$kleur = null;

if (isset($_GET['naam'])) {
    $naam = $_GET['naam'];
    setcookie('naam', $naam, time() + 5 * 60 * 60);
}
if (isset($_GET['kleur'])) {
    $kleur = $_GET['kleur'];
    setcookie('kleur', $kleur, time() + 5 * 60 * 60);
}

require_once('toon.php');