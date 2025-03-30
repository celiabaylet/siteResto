<h1>Liste des restaurants</h1>
<?php
include_once "$racine/modele/bd.photo.php";
include_once "$racine/modele/bd.typecuisine.php";

foreach($lesRestos as $unResto){
    $laPhoto = getLaPhotoByIdr($unResto->idR);
    $TypesCuisine = getLesTypesCuisinebyIdR($unResto->idR);
    echo"<div class='card'>
        <div class='photoCard'>
        <img src = 'photos/$laPhoto->cheminP'>
        </div>
        <a href=?action=detail&idR=$unResto->idR>$unResto->nomR</a>
        <br>
        $unResto->numAdrR
        $unResto->voieAdrR
        $unResto->cpR
        $unResto->villeR";
        echo "<div class='tagCard'>";
        foreach($TypesCuisine as $TypeDeCuisine){
                echo "<ul id='tagFood'>
                    <li class='tag'><span class='tag'>#</span>$TypeDeCuisine->libelleTC</li>		
                </ul>";   
        }
        echo "</div>";
    echo "</div>";
    }
?>
