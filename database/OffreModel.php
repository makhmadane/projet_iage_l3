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
    $sql="INSERT INTO offre(libelle,description,salaire,image,idg) values(:lib,:des,:sal,:ima,:idg)";
    $state=$connexion->prepare($sql);
    $state->bindValue("lib",$offre->getLibelle(),PDO::PARAM_STR);
    $state->bindValue("des",$offre->getDescription(),PDO::PARAM_STR);
    $state->bindValue("sal",$offre->getSalaire(),PDO::PARAM_STR);
    $state->bindValue("ima",$offre->getImage(),PDO::PARAM_STR);
    $state->bindValue("idg",$offre->getIdg(),PDO::PARAM_INT);

    return $state->execute();
}



?>