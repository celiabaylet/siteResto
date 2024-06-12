<?php
include_once "bd.pdo.php";
function getLesTypesCuisinebyIdR($idR){
    try{
        $connex = connexionPDO();
        $prep = $connex->prepare("SELECT libelleTC FROM typecuisine INNER JOIN proposer ON typecuisine.idTC = proposer.idTC INNER JOIN resto ON proposer.idR = resto.idR WHERE resto.idR = ?");
        $prep->BindValue(1, $idR);
        $prep->execute();
        $TypesCuisine = $prep->fetchAll(PDO::FETCH_OBJ);
        return $TypesCuisine;
    }
    catch(PDOException $e){
        print "Erreur !: " . $e->getMessage();
        die();
    }
}

function getLesTypesCuisine(){
    try{
        $connex = connexionPDO();
        $req = $connex->prepare("SELECT * FROM typecuisine");
        $req->execute();
        $lesTypesCuisine = $req->fetchAll(PDO::FETCH_OBJ);
        return $lesTypesCuisine;
    }
    catch(PDOException $e){
        print "Erreur !: " . $e->getMessage();
        die();
    }
}
?>