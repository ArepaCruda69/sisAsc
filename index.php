<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistemas Ascardio</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../sisAsc/Assests/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../sisAsc/Assests/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.html" class="nav-link">Inicio</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Buscar" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-danger elevation-4" style="background-color: #959a9b;">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="../sisAsc/Assests/dist/img/images.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Sistemas</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-4">
        
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Buscar" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="true">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Registrar
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inicio</p>
                </a>
              </li>
            </ul>

            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="../sisAsc/Views/impS.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Impresora</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../sisAsc/Views/cpuS.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>CPUs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../sisAsc/Views/monT.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Monitor</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="../sisAsc/Views/tecLado.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Teclado</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="../sisAsc/Views/mouSe.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mouse</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="../sisAsc/Views/acceS.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Accesorios</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="../sisAsc/Views/ups.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ups</p>
                </a>
              </li>



            </ul>
            
          </li>


          <li class="nav-item menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Mantenimiento
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
           

            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="../sisAsc/Views/mantImp.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Impresora</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../sisAsc/Views/mantCpu.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>CPUs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../sisAsc/Views/mantMont.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Monitor</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="../sisAsc/Views/mantTecl.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Teclado</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="../sisAsc/Views/mantMou.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mouse</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="../sisAsc/Views/mantAcc.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Accesorios</p>
                </a>
              </li>
              



            </ul>
            
            
          </li>
         
          <li class="nav-item menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Catalogos

                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=" ../sisAsc/Views/catMarcas.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Marcas</p>
                </a>
              </li>
            </ul>

            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="../sisAsc/Views/catTipoImp.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tipos de Impresoras</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../sisAsc/Views/catEstiloImp.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Estilos de Impresoras</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../sisAsc/Views/catPuertos.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Puertos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../sisAsc/Views/catAcc.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Accesorios</p>
                </a>
              </li>

            </ul>
            

          </li>
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
      <div class="content">
      <div class="container-fluid">
        <div class="row">
          
          <img src="./Assests/dist/img/tecn.jpg" alt="" style="width: 100%; height: auto; max-width: 1024px; display: block; margin: 0 auto;">

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
    <!-- /.content -->


  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <footer class="main-footer">
    <strong>Copyright &copy; 2024 <a href="">Alfred</a>.</strong>
    <div class="float-right d-none d-sm-inline-block">
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../sisAsc/Assests/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../sisAsc/Assests/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../sisAsc/Assests/dist/js/adminlte.min.js"></script>

</html>
