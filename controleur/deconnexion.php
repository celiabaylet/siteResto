<?php
include_once "$racine/modele/authentification.php";

logout();
include "$racine/vue/entete.html.php";
include "$racine/vue/vueAuthentification.php";
include "$racine/vue/pied.html.php";

?>
