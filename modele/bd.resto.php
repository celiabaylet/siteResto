<?php
include_once "bd.pdo.php";
function getLesRestos(){
    try{
        $connex = connexionPDO();
        $req = $connex->prepare("SELECT * FROM resto");
        $req->execute();
        $lesRestos = $req->fetchAll(PDO::FETCH_OBJ);
        return $lesRestos;
    }
    catch(PDOException $e){
        print "Erreur !: " . $e->getMessage();
        die();
    }
}
function getLeRestoByIdR($idR){
    try{
        $connex = connexionPDO();
        $req = $connex->prepare("SELECT * FROM resto WHERE idR= ?");
        $req->BindValue(1, $idR);
        $req->execute();
        $leResto = $req->fetch(PDO::FETCH_OBJ);
        return $leResto;
    }
    catch(PDOException $e){
        print "Erreur !: " . $e->getMessage();
        die();
    }
}

function getLesRestosByNomR($nomR){
    try{
        $connex = connexionPDO();
        $req = $connex->prepare("SELECT * FROM resto WHERE nomR LIKE ?");
        $req->bindValue(1, "%".$nomR."%");
        $req->execute();
        $lesRestos = $req->fetchAll(PDO::FETCH_OBJ);
        return $lesRestos;
    }
    catch(PDOException $e){
        print "Erreur !: " . $e->getMessage();
        die();
    }
}

function getLesRestosByAdresse($voieAdrR, $cpR, $villeR){
    try{
        $connex = connexionPDO();
        $req = $connex->prepare("SELECT * FROM resto WHERE voieAdrR LIKE ? AND cpR LIKE ? AND villeR LIKE ?");
        $req->bindValue(1, "%".$voieAdrR."%");
        $req->bindValue(2, "%".$cpR."%");
        $req->bindValue(3, "%".$villeR."%");
        $req->execute();
        $lesRestos = $req->fetchAll(PDO::FETCH_OBJ);
        return $lesRestos;
    }
    catch(PDOException $e){
        print "Erreur !: " . $e->getMessage();
        die();
    }
}


function getLesRestosByTC($tabIdTC){
    if (count($tabIdTC) > 0) {
        $filtre = "(";
        foreach($tabIdTC as $idTC){
            $filtre .= "$idTC,";
        }
        $filtre .= "null)";
 
        try{
            $connex = connexionPDO();
            $prep = $connex->prepare("select distinct resto.* from resto inner join proposer on resto.idR=proposer.idR where idTC IN $filtre");
            $prep->execute();
            return $prep->fetchAll(PDO::FETCH_OBJ);
        }catch(PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
    }else{
        return false;
    }
}
?>
