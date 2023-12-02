<?php

$server='localhost';
$user='postgres';
$password='passer';
$dbname='gestion_iage_3';

try{

    $connexion= new PDO("pgsql:host=$server;dbname=$dbname",$user,$password);

}catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}




?>