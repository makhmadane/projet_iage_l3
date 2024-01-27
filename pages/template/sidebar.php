
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav"  <?php echo  !empty($_SESSION)? "" : "hidden" ?>>

      <li class="nav-item" <?php echo $_SESSION["profil"] == "gestionnaire"  ? '' : 'hidden'  ?>  >
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"></i>
          <span>Statistique</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item" <?php echo  $_SESSION["profil"] == "admin"  ? 'hidden' : ''  ?>>
        <a class="nav-link " href="?page=publication">
          <i class="bi bi-grid"></i>
          <span>Publication</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item" <?php echo  $_SESSION["profil"] == "admin"  ? '' : 'hidden'  ?>>
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Parametre</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="?page=user">
              <i class="bi bi-circle"></i><span>Utilisateur</span>
            </a>
          </li>
          <li>
            <a href="?page=profil">
              <i class="bi bi-circle"></i><span>Profil</span>
            </a>
          </li>
          
        
        </ul>
      </li><!-- End Components Nav -->
      <li class="nav-item" <?php echo $_SESSION["profil"] == "gestionnaire" || $_SESSION["profil"] == "client"  ? '' : 'hidden'  ?>>
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Liste</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li <?php echo  $_SESSION["profil"] == "client"  ? '' : 'hidden'  ?> >
            <a href="tables-general.html">
              <i class="bi bi-circle"></i><span>Offre</span>
            </a>
          </li>
          <li <?php echo  $_SESSION["profil"] == "gestionnaire"  ? '' : 'hidden'  ?>>
            <a href="?page=demande">
              <i class="bi bi-circle"></i><span>Demandes</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

     

    
    </ul>

  </aside><!-- End Sidebar-->
  <main id="main" class="main">