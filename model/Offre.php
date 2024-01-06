<?php

class Offre{

    //Attributs
    private int $id;
    private string $libelle;
    private string $description;
    private string $salaire;
    private string $image;
    private int $idg;

   //COnstructeur par default
    //
    public function __construct(){

    }

    //Setters

    public function setId(int $id){
        $this->id  = $id;
    }
    public function setLibelle(string $libelle){
        $this->libelle  = $libelle;
    }
    public function setDescription(string $description){
        $this->description  = $description;
    }

    public function setSalaire(string $salaire){
        $this->salaire  = $salaire;
    }
    public function setImage(string $image){
        $this->image  = $image;
    }

    public function setIdg(string $idg){
        $this->idg  = $idg;
    }

    //Getters

    public function getId(){
        return   $this->id;
    }

    public function getImage(){
        return   $this->image;
    }

    public function getSalaire(){
        return   $this->salaire;
    }

    public function getDescription(){
        return   $this->description;
    }

    public function getLibelle(){
        return   $this->libelle;
    }

    public function getIdg(){
        return   $this->idg;
    }
   



}




?>