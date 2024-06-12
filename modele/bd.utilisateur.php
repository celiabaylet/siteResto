<?php
include_once "bd.pdo.php";
function getLeUtilisateurByMailU($mailU){
    try{
        $connex = connexionPDO();
        $req = $connex->prepare("SELECT * FROM utilisateur WHERE mailU = ?");
        $req->BindValue(1, $mailU);
        $req->execute();
        $Utilisateur = $req->fetch(PDO::FETCH_OBJ);
        return $Utilisateur;
    }
    catch(PDOException $e){
        print "Erreur !: " . $e->getMessage();
        die();
    }
}
?>