<?php
include_once "$racine/modele/bd.resto.php";
$critere = isset($_GET['critere']) ? $_GET['critere'] : 'nom';
?>
<h1>Recherche d'un restaurant</h1>

<form action="./?action=recherche&critere=<?= $critere ?>" method="POST">

<?php
   switch ($critere){
      case "nom":
         echo "Recherche par nom :";
         echo"<input type='text' name='nom' placeholder='nom'/><br>" ;
         break;

      case "adresse":
         echo "Recherche par adresse :";
         echo"<br><input type='text' name='rue' placeholder='rue'/>" ;
         echo"<br><input type='text' name='cp' placeholder='code postal'/>" ;
         echo"<br><input type='text' name='ville' placeholder='ville'/><br>" ;
         
         
         break;
      case "type":
         echo "Recherche par type de cuisine :";
         foreach($lesTypesCuisine as $unTypeCuisine){
         echo"<br><input type='checkbox' name='typeCuisine[]' value='$unTypeCuisine->idTC'>$unTypeCuisine->libelleTC";
         }
         echo"<br>";
         break;
   }
?>
   <input type="submit" value="Rechercher" />
</form>