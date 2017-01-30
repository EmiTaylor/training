<?php

$jeu[0] = "mario";
$jeu[4] = "prototype";
$jeu[1] = "zelda";
$jeu[2] = "rayman";
$jeu[3] = "sly";

//echo $jeu[3];


$mario ["type"] = "plateforme";
$mario ["console"] = "nintendo";
$mario ["public"] = "tous";

//echo $mario ["console"];


$jeux ["mario"] ["type"] = "plateforme";
$jeux ["mario"] ["console"] = "nintendo";
$jeux ["mario"] ["public"] = "tous";
$jeux ["zelda"] ["type"] = "RPG";
$jeux ["zelda"] ["console"] = "nintendo";
$jeux ["zelda"] ["public"] = "adulte";

print_r ($jeux); //echo ["zelda"] ["type"];