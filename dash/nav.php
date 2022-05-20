<?php
  session_start();
  if (!(isset($_SESSION['id_user'])) || $_SESSION['type']=="user")
        {
          echo '<script language="Javascript"> document.location.replace("../mainwebsite/index.php"); </script>';
        }
  ?>
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <style type="text/css">
        /*la couleur de la bare du dash*/
        #accordionSidebar{
          background-color: #da1b3e;
          background-image: linear-gradient(90deg, rgba(46,46,46,1) 0%, rgba(46,46,46,1) 35%, rgba(46,46,46,1) 100%);
          background-size: cover;
        }
      </style>
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="reservation.php">
        <div class="sidebar-brand-text mx-3">TECH PRINT</div>
      </a>
      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      <!-- Nav Item - Dashboard -->
      <!-- Divider -->
      <hr class="sidebar-divider">
       <!-- Nav Item - Pages Collapse Menu -->
       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <i class="fas fa-fw fa-sliders-h"></i>
          <span class="glyphicon glyphicon-search" aria-hidden="true">Commande</span>
        </a>
        <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="reservation.php">Afficher</a>
            <a class="collapse-item" href="confirmReservation.php">Commande en attente</a>
            <a class="collapse-item" href="traitReservation.php">Ajouter une commande</a>
          </div>
        </div>
      </li>
      <hr class="sidebar-divider">
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-sliders-h"></i>
          <span class="glyphicon glyphicon-search" aria-hidden="true">Gestion De Stock</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="cars.php">Afficher</a>
            <a class="collapse-item" href="traitCar.php">Ajouter</a>
          </div>
        </div>
      </li>
      
      <hr class="sidebar-divider">
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-sliders-h"></i>
          <span>Administrateurs</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="admin.php">Afficher</a>
            <a class="collapse-item" href="traitAdmin.php">Ajouter</a>
          </div>
        </div>
      </li>
      <hr class="sidebar-divider">
       <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
          <i class="fas fa-fw fa-sliders-h"></i>
          <span>Clients</span>
        </a>
        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="client.php">Afficher</a>
            <a class="collapse-item" href="newClient.php">Confirmer les clients</a>
            <a class="collapse-item" href="traitClient.php">Ajouter</a>
          </div>
        </div>
      </li>
      <hr class="sidebar-divider">
      <!-- Nav Item - Pages Collapse Menu -->

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
    </ul>
    <!-- End of Sidebar -->
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

        

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">        

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                  <?php echo "<strong>".strtoupper($_SESSION['nom'])."</strong>";?> 
                </span>
                <i class="fas fa-user-shield fa-1x" style="color : black"></i>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="../mainwebsite/profile.php">
                  <i class="fas fa-id-card-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    <!--Aller au profile-->
                  Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../mainwebsite/index.php">
                  <i class="fas fa-id-card-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Website
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../mainwebsite/deconnexion.php">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Déconnexion 
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- End of Topbar -->