<?php


//date de l'événement au format YYYY-mm-jj HH:MM:SS
$date_deb = "2016-12-15 09:00:00";
$date_fin = "2017-12-15 17:00:00";

//récupération éléments de la date à traiter
$date = explode(" ", $date_deb); //division date et heure
$heure = explode(":", $date[1]); //division des éléments de l'heure
$date = explode("-", $date[0]); //division des éléments de la date


//récupération du timestamp de la date
$timestamp = mktime($heure[0], $heure[1], $heure[2], $date[1], $date[2], $date[0]);


//vérification de l'antériorité des dates
if ($timestamp != $date_fin)
{


//la date à évaluer est dans le futur
$calcul = "jusqu'au $date_fin, il reste ";
$temp = $timestamp;
$timestamp = $date_fin;
$date_fin = $temp;
}
else
{
//la date à évaluer est dans le passé
$calcul = "depuis le $date_deb , le temps écoulé est de ";
}


//calcul du nombre de jours
$difference = $date_fin - $timestamp;
$residu = $difference % 86400;
$nb_jours = floor(($difference - $residu) / 86400);
//calcul du nombre d'heures
$difference = $residu;
$residu = $difference % 3600;
$nb_heures = floor(($difference - $residu) / 3600);
//calcul du nombre de minutes
$difference = $residu;
$residu = $difference % 60;
$nb_minutes = floor(($difference - $residu) / 60);
//nombre de secondes
$nb_secondes = $residu;
//affichage du résultat
echo $calcul.$nb_jours." jours ".$nb_heures." heures ".$nb_minutes." minutes et ".$nb_secondes." secondes";



/*1h = 60min
1h = 3 600 s
25 200s = 1j (7h)
126 000s = 5j
20 jours par mois = 2 520 000 s*/
?>
