



      <?php
          session_start();
          ob_start();
          require_once("./pages/template/header.php");
          require_once("./pages/template/sidebar.php");

          require_once('./database/profilModel.php');
          require_once('./database/userModel.php');
          require_once('./database/offreModel.php');

          require_once('./model/Offre.php');

     

          //router
          //require_once("./pages/user/user.php");
   
          if(isset($_GET['page'])){
            $profils= ($_GET['page']=='profil' || $_GET['page']=='user') ? getProfils() : [];
            $users =  ($_GET['page']=='user') ? getUsers() : [];

            if($_GET['page']== 'user'){
                require_once("./pages/user/user.php");
            }
            if($_GET['page']== 'profil'){
                require_once("./pages/profil/profil.php");
            }
            if($_GET['page']== 'demande'){
              require_once("./pages/demande/demande.php");
          }
            if($_GET['page']== 'deleteProfil'){
                $id = $_GET['id'];
                deleteProfil($id);
                header('location:http://localhost/gestion_iage_3/?page=profil');
            }
            if($_GET["page"] == "deconnexion"){
              session_destroy();
              header('location:http://localhost/gestion_iage_3');
            }
          }else{
            require_once("./pages/connexion.php");
          }

          if(isset($_POST["login"])){
            extract($_POST);
            $res =  verifUser($username,$password);
            if($res){

              $_SESSION["nom"] = $res["nom"];
              $_SESSION["prenom"] = $res["prenom"];
              $_SESSION["profil"] = $res["type"];
              $_SESSION["id"] = $res["id"];
              header('location:http://localhost/gestion_iage_3/?page=profil');
            }else{
              $error= "Login ou mot de passe Incorrect";
            }

          }
          

          if(isset($_POST["ajoutUser"])){
                
               extract($_POST);
               addUser($nom,$prenom,$login,$password,$type ? $type : getProfilClient()['id']);
               if(isset($type)){
                header('location:http://localhost/gestion_iage_3/?page=user');
               }else{
                header('location:http://localhost/gestion_iage_3/index.php');
               }
               
          }

          if(isset($_POST["ajoutOffre"])){
            extract($_POST);
            $offre = new Offre();
            $offre->setLibelle($libelle);
            $offre->setImage($image);
            $offre->setDescription($description);
            $offre->setSalaire($salaire);
            $offre->setIdg($_SESSION['id']);
            addOffre($offre);
            header('location:http://localhost/gestion_iage_3/?page=demande');

          }

          

          
       


          


          require_once("./pages/template/footer.php");
      ?>
  