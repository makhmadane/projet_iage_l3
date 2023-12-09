



      <?php
          ob_start();
          require_once("./pages/template/header.php");
          require_once("./pages/template/sidebar.php");

          require_once('./database/profilModel.php');
          require_once('./database/userModel.php');

          $profils= ($_GET['page']=='profil' || $_GET['page']=='user') ? getProfils() : [];
          $users =  ($_GET['page']=='user') ? getUsers() : [];

          //router
          //require_once("./pages/user/user.php");
          if(isset($_GET['page'])){
            if($_GET['page']== 'user'){
                require_once("./pages/user/user.php");
            }
            if($_GET['page']== 'profil'){
                require_once("./pages/profil/profil.php");
            }
            if($_GET['page']== 'deleteProfil'){
                $id = $_GET['id'];
                deleteProfil($id);
                header('location:http://localhost/gestion_iage_3/?page=profil');
            }
          }else{
            require_once("./pages/profil/profil.php");
          }

          if(isset($_POST["ajoutUser"])){
               // $libelle = $_POST["libelle"];
               extract($_POST);
               addUser($nom,$prenom,$login,$password,$type);
               header('location:http://localhost/gestion_iage_3/?page=user');
          }

          
       


          


          require_once("./pages/template/footer.php");
      ?>
  