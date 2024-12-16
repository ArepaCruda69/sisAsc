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
      <img src="../Assests/dist/img/images.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
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
          <li class="nav-item menu-open">
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
                <a href="./monT.php" class="nav-link">
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
                <a href="./mouSe.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mouse</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="./acceS.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Accesorios</p>
                </a>
              </li>


              <li class="nav-item">
                <a href="../sisAsc/Views/ups.php" class="nav-link active">
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
                <a href=" " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Marcas</p>
                </a>
              </li>
            </ul>

            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tipos de Impresoras</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Estilos de Impresoras</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Puertos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
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
         
<!-- Main content -->
<div class="content">
  <div class="container-fluid">
    <div class="col">

      <div class="card text">
        <div class="card-header">
          <h2>Ups</h2>
        </div>
        <div class="card-body">

          <main class="col">

          <form class="row g-3 needs-validation" action="../model/registrarUps.php" method="POST" style="border-radius: 20px;" novalidate>

    <div class="col-md-3">

        <label for="modelo" class="form-label"><b>Modelo</b><b style="color: red;">*</b></label>
        <input type="text" class="form-control" id="modelo" name="modelo" required>
        <div class="invalid-feedback">Por favor ingrese el modelo</div>
    </div>
    <div class="col-md-3">
        <label for="serial" class="form-label"><b>Serial</b><b style="color: red;">*</b></label>
        <input type="text" class="form-control" id="serial" name="serial" required>
        <div class="invalid-feedback">Por favor ingrese el serial</div>
    </div>
    <div class="col-md-3">
        <label for="unidad" class="form-label">Unidad</label>
        <select class="form-control" id="unidad" name="unidad">
            <option>opcion 1</option>
            <option>opcion 2</option>
            <option>opcion 3</option>
            <option>opcion 4</option>
            <option>opcion 5</option>
        </select>
    </div>
    <div class="col-md-3">
        <label for="fecha_instalacion" class="form-label">Fecha de instalación de la batería:</label>
        <input type="date" class="form-control" id="fecha_instalacion" name="fecha_instalacion">
    </div>
    <div class="col-md-3">
        <hr class="hr hr-blurry" />
        <label for="cantidad_bateria" class="form-label"><b>Cantidad de Batería</b><b style="color: red;">*</b></label>
        <input type="number" class="form-control" id="cantidad_bateria" name="cantidad_bateria" required>
        <div class="invalid-feedback">Por favor ingrese la cantidad de batería</div>
    </div>
    <div class="col-md-3">
        <hr class="hr hr-blurry" />
        <label for="modelo_bateria" class="form-label"><b>Modelo de la Batería</b><b style="color: red;">*</b></label>
        <input type="text" class="form-control" id="modelo_bateria" name="modelo_bateria" required>
        <div class="invalid-feedback">Por favor ingrese el modelo de la batería</div>
        <br>
    </div>
    <div class="col-md-6">
        <hr class="hr hr-blurry" />
        <div class="form-group">
            <label for="observaciones">Observaciones</label>
            <textarea class="form-control" id="observaciones" name="observaciones" rows="1"></textarea>
        </div>
    </div>
    <div class="col-md-6">
        <button class="btn btn-outline-success" type="submit"><b>Registrar</b></button>
        <button class="btn btn-outline-danger" type="reset"><b>Cancelar</b></button>
    </div>

</form>


        </div>  













        
        

        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Modelo</th>
                <th>Serial</th>
                <th>Unidad</th>
                <th>Fecha.Inst.</th>
                <th>Modelo Bateria</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Test</td>
                <td>-----</td>
                <td>-----</td>
                <td> 4</td>
                <td>----</td>
              </tr>

              <td>Test</td>
                <td>----</td>
                <td>-----</td>
                <td> 5</td>
                <td>----</td>
              </tr>
              <tr>

                <td>Test</td>
                <td>-----</td>
                <td>-----</td>
                <td> 7</td>
                <td>----</td>
              </tr>

              <tr>
                <td>Trident</td>
                <td>Internet
                  Explorer 6
                </td>
                <td>Win 98+</td>
                <td>6</td>
                <td>A</td>
              </tr>
              <tr>
                <td>Trident</td>
                <td>Internet Explorer 7</td>
                <td>Win XP SP2+</td>
                <td>7</td>
                <td>A</td>
              </tr>
              <tr>
                <td>Trident</td>
                <td>AOL browser (AOL desktop)</td>
                <td>Win XP</td>
                <td>6</td>
                <td>A</td>
              </tr>
              <tr>
                <td>Gecko</td>
                <td>Firefox 1.0</td>
                <td>Win 98+ / OSX.2+</td>
                <td>1.7</td>
                <td>A</td>
              </tr>
              <tr>
                <td>Get</td>
                <td>------</td>
                <td>----</td>
                <td>1.8</td>
                <td>--</td>
              </tr>
              <tr>
                <td>Gecko</td>
                <td>Firefox 2.0</td>
                <td>Win 98+ / OSX.2+</td>
                <td>1.8</td>
                <td>A</td>
              </tr>
              <tr>
                <td>Gecko</td>
                <td>Firefox 3.0</td>
                <td>Win 2k+ / OSX.3+</td>
                <td>1.9</td>
                <td>A</td>
              </tr>
              <tr>
                <td>Gecko</td>
                <td>Camino 1.0</td>
                <td>OSX.2+</td>
                <td>1.8</td>
                <td>A</td>
              </tr>
              <tr>
                <td>Gecko</td>
                <td>Camino 1.5</td>
                <td>OSX.3+</td>
                <td>1.8</td>
                <td>A</td>
              </tr>
              <tr>
                <td>Gecko</td>
                <td>Netscape 7.2</td>
                <td>Win 95+ / Mac OS 8.6-9.2</td>
                <td>1.7</td>
                <td>A</td>
              </tr>
              <tr>
                <td>Gecko</td>
                <td>Netscape Browser 8</td>
                <td>Win 98SE+</td>
                <td>1.7</td>
                <td>A</td>
              </tr>
             
            </tbody>
            <tfoot>
              <tr>
                <th>Codigo</th>
                <th>Modelo</th>
                <th>Marca</th>
                <th>Tipo</th>
                <th>Unidad</th>
              </tr>
            </tfoot>
          </table>

         

          <div class="d-grid gap-2">
            <button class="btn btn-outline-success" type="button" onclick="cargar();"><b>Editar</b></button>
            <button class="btn btn-outline-danger" type="button" onclick="vaciar();"><b>Eliminar</b></button>
          </div>
        </div>
        <!-- /.card-body -->


        <!-- /.card-header -->


        </main>

        


      </div>

    </div>
  </div>
  <!-- /.container-fluid -->
</div>
<!-- /.content -->


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


<script src="../Controller/agregar.js"></script>
<script src="../Controller/cancelar.js"></script>





<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
      language: {
        processing: "Busqueda en curso...",
        search: "Buscar&nbsp;:",
        lengthMenu: "Agrupar de MENU Solicitudes",
        infoEmpty: "No existen datos.",
        infoFiltered: "(filtrado de MAX elementos en total)",
        infoPostFix: "",
        loadingRecords: "Cargando...",
        zeroRecords: "No se encontraron datos con tu busqueda",
        emptyTable: "No hay datos disponibles en la tabla.",
        paginate: {
            first: "Primero",
            previous: "Anterior",
            next: "Siguiente",
            last: "Ultimo"
        },
        aria: {
            sortAscending: ": active para ordenar la columna en orden ascendente",
            sortDescending: ": active para ordenar la columna en orden descendente"
        }
    },
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

  });
</script>

<style>
  hr {
    height: 4px;
    background-color: #cac3c3;
    border: none;
  }
</style>

</body>

<?php
if (isset($_GET['status'])) {
    if ($_GET['status'] == 'success') {
        echo "<div class='alert alert-success' role='alert'>Registro guardado exitosamente.</div>";
    } elseif ($_GET['status'] == 'error') {
        echo "<div class='alert alert-danger' role='alert'>Hubo un error al guardar el registro.</div>";
    }
}
?>

</html>


