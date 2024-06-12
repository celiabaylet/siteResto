<?php
include_once "$racine/modele/bd.resto.php";


// recuperation des donnees GET, POST, et SESSION
;

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
$lesRestos = getLesRestos();


// traitement si necessaire des donnees recuperees
;

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Liste des restaurants répertoriés";
include "$racine/vue/entete.html.php";
include "$racine/vue/vueListeRestos.php";
include "$racine/vue/pied.html.php";
?>