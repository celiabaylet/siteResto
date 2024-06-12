<?php
include_once "bd.pdo.php";
function getCritiquerByIdR($idR){
    try{
        $connex = connexionPDO();
        $prep = $connex->prepare("SELECT * FROM critiquer WHERE idR = ?");
        $prep->BindValue(1, $idR);
        $prep->execute();
        $Critiques = $prep->fetchAll(PDO::FETCH_OBJ);
        return $Critiques;
    }
    catch(PDOException $e){
        print "Erreur !: " . $e->getMessage();
        die();
    }
}
?>