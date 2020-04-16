<?php
if(isset($_COOKIE['naam'])){
    $naam = $_COOKIE['naam'];
}
if(isset($_COOKIE['kleur'])){
    $kleur = $_COOKIE['kleur'];
}

header("Refresh:0");

echo '<html><body style="background-color:' . $kleur . '">';
print($naam);
echo '</body></html>';

