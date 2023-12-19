<?php
require_once('DB.php');

function getUsers(){
    global  $connexion;
    $sql="SELECT u.id,u.nom,u.prenom,u.login,p.libelle FROM user u, profil p  where u.type = p.id  ";
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

function verifUser($login,$password){
    global  $connexion;
    $sql="SELECT u.nom,u.prenom,p.libelle as type FROM user u , profil p where u.login ='$login' and u.password = '$password' and u.type=p.id  ";
    return $connexion->query($sql)->fetch();
}

?>