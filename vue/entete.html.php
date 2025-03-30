<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $titre ?></title>
        <style type="text/css">
            @import url("css/base.css");
            @import url("css/form.css");
            @import url("css/corps.css");
        </style>
    </head>
    <body>
    <nav>
        <ul id="menuGeneral">
            <li><a href="./?action=accueil">Accueil</a></li> 
            <li><a href="./?action=recherche"><img src="images/rechercher.png" alt="loupe"/>Recherche</a></li> 
            <li></li>
            <li id="logo"><a href="./?action=accueil"><img src="images/logoBarre.png" alt="logo" /></a></li>
            <li></li>
            <?php
                if (isLoggedOn()) {
                    echo "<li><a href='./?action=deconnexion'><img src='images/profil.png' alt='loupe' />Deconnexion</a></li>";
                } else {
                    echo "<li><a href='./?action=connexion'><img src='images/profil.png' alt='loupe' />Connexion</a></li>";
                }
            ?>
        </ul>
    </nav>
    <div id="bouton">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <ul id="menuContextuel">
        <li><img src="images/logoBarre.png" alt="logo" /></li>
        <?php if (isset($menuBurger)) { ?>
            <?php for ($i = 0; $i < count($menuBurger); $i++) { ?>
                <li>
                    <a href="<?php echo $menuBurger[$i]['url']; ?>">
                        <?php echo $menuBurger[$i]['label']; ?>
                    </a>
                </li>
            <?php } ?>
        <?php } ?>
    </ul>
    <div id="corps">