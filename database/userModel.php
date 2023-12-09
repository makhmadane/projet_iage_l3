<?php
require_once('DB.php');

function getUsers(){
    global  $connexion;
    $sql="SELECT * FROM user";
    return $connexion->query($sql)->fetchAll();
}


function  addUser($nom,$prenom,$login,$password,$type){
    global  $connexion;
    $sql="INSERT INTO user(nom,prenom,login,password,type) values(:nom,:prenom,:login,:password,:type)";
    $state=$connexion->prepare($sql);
    $state->bindValue("nom",$nom,PDO::PARAM_STR);
    $state->bindValue("prenom",$prenom,PDO::PARAM_STR);
    $state->bindValue("login",$login,PDO::PARAM_STR);
    $state->bindValue("password",$password,PDO::PARAM_STR);
    $state->bindValue("type",$type,PDO::PARAM_INT);

    return $state->execute();
}

?>