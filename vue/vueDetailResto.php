<?php
$leResto = getLeRestoByIdR($idR);
$TypeDeCuisine = getLesTypesCuisinebyIdR($idR);
$LesPhotos = getLesPhotosByIdR($idR);
$Critiques = getCritiquerByIdR($idR);
$Aimer = getAimerById($mailU, $idR);
$mailU = getMailULoggedOn();

echo"<h1> $leResto->nomR</h1>";

?>

<a href="./?action=aimer&idR=<?= $leResto->idR; ?>">
   <img class="aimer" src="images/aime.png" alt="j'aime ce restaurant">
</a>


<span id="note">
    <?php
    for ($i = 1; $i <= 5; $i++) {
        echo "<img class='note' src='images/like.png' alt=''>";
    }
    ?>
</span>

<?php
echo"<section>
    <h3>Type de cuisine</h3>
    <ul id='tagFood'>";
        foreach ($TypesCuisine as $TypeDeCuisine){
        echo"<li class='tag'><span class='tag'>#</span>$TypeDeCuisine->libelleTC</li>";
        }
    echo"</ul>
</section>";
?>

<?php
echo"<section>
    <h3>Description</h3>$leResto->descR
</section>";
?>

<?php
echo"<h2 id='adresse'>
    Adresse
</h2>";
echo"<p>$leResto->numAdrR $leResto->voieAdrR <br> $leResto->cpR $leResto->villeR
</p>";

echo"<h2 id='photos'>
    Photos 
</h2>
<ul id='galerie'>";
        foreach($LesPhotos as $LaPhoto){
   echo"<li><img class='galerie' src='photos/$LaPhoto->cheminP' alt='' /></li>";
        }  
echo"</ul>";

echo"<h2 id='horaires'>
    Horaires 
    </h2> 
<p> $leResto->horairesR </p>";

echo"<h2 id='crit'>Critiques</h2>
<ul id='critiques'>";
    foreach($Critiques as $Critiques){
        echo"<li>$Critiques->mailU<br>";
        echo"$Critiques->note/5 ";
        echo"$Critiques->commentaire</li>";
    }
echo"</ul>";

?>