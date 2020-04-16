<?php
$naam = null;
$kleur = null;

if (isset($_GET['naam'])) {
    $naam = $_GET['naam'];
    setcookie('naam', $naam, time() + 5 * 60 * 60);
}
elseif (isset($_COOKIE['naam'])) {
    $naam = $_COOKIE['naam'];
}

if (isset($_GET['kleur'])) {
    $kleur = $_GET['kleur'];
    setcookie('kleur', $kleur, time() + 5 * 60 * 60);
}
elseif (isset($_COOKIE['kleur'])) {
    $kleur = $_COOKIE['kleur'];
}

require_once('toon.php');