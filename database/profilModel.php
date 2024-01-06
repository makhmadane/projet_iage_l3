<?php

require_once('DB.php');


function addProfil($libelle){
    global  $connexion;
    $sql="INSERT INTO profil(libelle) values(:libelle)";
    $state=$connexion->prepare($sql);
    $state->bindValue("libelle",$libelle,PDO::PARAM_STR);

    return $state->execute();
}

function getProfils(){
    global  $connexion;
    $sql="SELECT * FROM profil";
    return $connexion->query($sql)->fetchAll();
}

function deleteProfil($id){
    global  $connexion;
    $sql= "DELETE FROM profil where id = :id";
    $state=$connexion->prepare($sql);
    $state->bindValue("id",$id,PDO::PARAM_INT);

    return $state->execute();
}

function getProfilClient(){
    global  $connexion;
    $sql="SELECT id FROM profil where libelle = 'client'";
    return $connexion->query($sql)->fetch();
}


?>