<?php
include_once "bd.pdo.php";

function getAimerById($mailU, $idR){
try{
    $connex = connexionPDO();
    $prep = $connex->prepare("SELECT * FROM aimer WHERE idR = ?");
    $prep->BindValue(1, $idR);
    $prep->execute();
    $Aimer = $prep->fetchAll(PDO::FETCH_OBJ);
    return $Aimer;
}
catch(PDOException $e){
    print "Erreur !: " . $e->getMessage();
    die();
}
}

function addAimer($mailU, $idR){
try{
    $connex = connexionPDO();
    $prep = $connex->prepare("INSERT INTO aimer (mailU, idR) VALUES (?,?)");
    $prep->BindValue(1, $mailU);
    $prep->BindValue(2, $idR);
    $prep->execute();
}
catch(PDOException $e){
    print "Erreur !: " . $e->getMessage();
    die();
}
}

function delAimer($mailU, $idR){
    try{
        $connex = connexionPDO();
        $prep = $connex->prepare("DELETE * FROM aimer WHERE mailU = ? and idR = ?");
        $prep->BindValue(1, $mailU);
        $prep->BindValue(2, $idR);
        $prep->execute();
    }
    catch(PDOException $e){
        print "Erreur !: " . $e->getMessage();
        die();
    }
    }
?>