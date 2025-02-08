<?php include '../Model/consultas.php'?>


<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistemas Ascardio</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../Assests/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../Assests/dist/css/adminlte.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../Assests/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../Assests/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../Assests/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
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
        <a href="../index.php" class="nav-link">Inicio</a>
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
    <a href="../index.php" class="brand-link">
      <img src="../Assests/dist/img/images.png"  class="brand-image img-circle elevation-3" style="opacity: .8">
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
                <a href="../index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inicio</p>
                </a>
              </li>
            </ul>

            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="./impS.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Impresora</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./cpuS.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>CPUs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./monT.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Monitor</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="./tecLado.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Teclado</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="./mouSe.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mouse</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="./acceS.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Accesorios</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="../Views/ups.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ups</p>
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
                <a href="./catMarcas.html " class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Marcas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Views/catPuertos.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Puertos</p>
                </a>
              </li>
            </ul>

            <ul class="nav nav-treeview">

              
              <li class="nav-item">
                <a href="./catAcc.html" class="nav-link">
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
        <div class="col">

          <div class="card text">
            <div class="card-header">
              <h2>Marcas</h2> 
            </div>

              <div class="card-body">
              <main class="col">
              <form id="marcaForm" class="row g-3 needs-validation" style="border-radius: 20px;" novalidate>
              
                    <div class="form-group col-6" >
                        <label for=""> ID</label>
                        <input type="" class="form-control" id="txtModeloDisco" name="" disabled>
                      
                    </div>

                  <div class="form-group col-6">
                        <label for=""> Nombre</label>
                        <input type="" class="form-control" id="txtNombreMarca" >
                      
                    </div>

                    <button  class="btn btn-outline-success  btn-sm btn-block" type="button" id = "btMarca"><b>Agregar</b></button>
            


           <!-- /.card-header -->
           <div class="card-body">
              <table id="tablaMarca" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Codigo</th>
                    <th>Marca</th>
                    <th>Accion</th>
                  </tr>
                </thead>
                <tbody>
            
              <?php while ($columna = mysqli_fetch_assoc($resultados)) { ?>
                 <tr>
                 <td ><?php echo $columna['id_marca']; ?></td>
                 <td ><?php echo $columna['marca_marca']; ?></td>
                 <td ><?php if ($columna['status_marca']== 1 ) {?>
                  <button class="btn btn-danger">Desactivar</button>
                 <?php  }else if($columna['status_marca']== 0 ){ ?>
                  <button class="btn btn-success"> Activar</button>
                  <?php   }  ?>
                </td>
                                                            
                </tr>
                 <?php } ?>

                </tbody>
                <tfoot>
                  <tr>
                    <th>Codigo</th>
                    <th>Marca</th>
                    <th>Accion</th>
                  </tr>
                </tfoot>
              </table>

             

            </div>

    </form>
  </main>
</div>

        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  
  
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../Assests/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../Assests/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../Assests/dist/js/adminlte.min.js"></script>

<!-- DataTables  & Plugins -->
<script src="../Assests/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../Assests/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../Assests/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../Assests/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../Assests/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../Assests/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../Assests/plugins/jszip/jszip.min.js"></script>
<script src="../Assests/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../Assests/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../Assests/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../Assests/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../Assests/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>


<script src="../Assests/dist/js/formMarca.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>












</body>
</html>
