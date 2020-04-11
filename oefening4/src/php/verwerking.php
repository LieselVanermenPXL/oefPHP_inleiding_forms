<?php
$naam = $_GET['naam'];
$backgroundColor = $_GET['background'];
setcookie('naam', $naam, time() + 5 * 60 * 60);
setcookie('achtergrond_kleur', $backgroundColor, time() + 5 * 60 * 60);
require ('toon.php');