<?php
require_once('DB.php');
/*
function getUsers(){
    global  $connexion;
    $sql="SELECT u.id,u.nom,u.prenom,u.login,p.libelle FROM user u, profil p  where u.type = p.id  ";
    return $connexion->query($sql)->fetchAll();
}*/


function  addOffre($offre){

    global  $connexion;
    $sql="INSERT INTO offre(libelle,description,salaire,image,idg,etat) values(:lib,:des,:sal,:ima,:idg,:etat)";
    $state=$connexion->prepare($sql);
    $state->bindValue("lib",$offre->getLibelle(),PDO::PARAM_STR);
    $state->bindValue("des",$offre->getDescription(),PDO::PARAM_STR);
    $state->bindValue("sal",$offre->getSalaire(),PDO::PARAM_STR);
    $state->bindValue("ima",$offre->getImage(),PDO::PARAM_STR);
    $state->bindValue("idg",$offre->getIdg(),PDO::PARAM_INT);
    $state->bindValue("etat",1,PDO::PARAM_INT);

    return $state->execute();
}


function getDemandes($idg){
    global  $connexion;
    $sql="SELECT u.id,u.libelle,u.description,u.salaire,u.image,u.etat FROM offre u  where u.idg = $idg";
    return $connexion->query($sql)->fetchAll();
}

function updateEtat($id,$etat){
    global  $connexion;
    if($etat ==1){
        $etat =0;
    }else{
        $etat = 1;
    }
   
    $sql="UPDATE offre set etat = $etat where id = $id";
    return $connexion->exec($sql);
}

function getDemandesAct(){
    global  $connexion;
    $sql="SELECT u.id,u.libelle,u.description,u.salaire,u.image,u.etat FROM offre u  where u.etat = 1 order by id desc ";
    return $connexion->query($sql)->fetchAll();
}




?>