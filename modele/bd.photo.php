<?php
include_once "bd.pdo.php";
function getLaPhotoByIdr($idR){
    try{
        // A COMPLETER
        $connex = connexionPDO();
        $prep = $connex->prepare("SELECT * FROM photo WHERE photo.idR = ?");
        $prep->BindValue(1, $idR);
        $prep->execute();
        $laPhoto = $prep->fetch(PDO::FETCH_OBJ);
        return $laPhoto;
    }
    catch(PDOException $e){
        print "Erreur !: " . $e->getMessage();
        die();
    }
}
function getLesPhotosByIdR($idR){
    try{
        $connex = connexionPDO();
        $prep = $connex->prepare("SELECT * FROM photo WHERE photo.idR = ?");
        $prep->BindValue(1, $idR);
        $prep->execute();
        $LesPhotos = $prep->fetchAll(PDO::FETCH_OBJ);
        return $LesPhotos;
    }
    catch(PDOException $e){
        print "Erreur !: " . $e->getMessage();
        die();
    }
}

?>