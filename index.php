<?php
include "getRacine.php";
include "$racine/controleur/controleurPrincipal.php";
include "$racine/modele/authentification.php";

if (isset($_GET["action"])){
    $action = $_GET["action"];
}else{
    $action = "defaut";
}
$fichier = controleurPrincipal($action);
include "$racine/controleur/$fichier";
?>
     