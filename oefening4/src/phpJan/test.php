<?php
$naam = $_GET['naam'];
$kleur = $_GET['kleur'];
setcookie('naam', $naam, time() + 5 * 60 * 60);
setcookie('kleur', $kleur, time() + 5 * 60 * 60);
// require_once plaatst de code van de file toon.math op deze locatie
// dus in toon.math kan je aan naam en kleur aan
require_once('toon.php');

