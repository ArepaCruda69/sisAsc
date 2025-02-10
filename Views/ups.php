<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require '../Model/conexion.php';

function conectarDB($dbname) {
    $conn = new mysqli("localhost", "root", "123456789", $dbname);
    if ($conn->connect_error) {
        die("Conexión fallida a $dbname: " . $conn->connect_error);
    }
    return $conn;
}

function obtenerDatos($conn, $query) {
    $stmt = $conn->prepare($query);
    if ($stmt === false) {
        die("Error en la consulta: " . $conn->error);
    }
    $stmt->execute();
    return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
}

// Conectar y obtener datos
$conn1 = conectarDB("bd_globales");
$unidades = obtenerDatos($conn1, "SELECT nom_unidad FROM glo_1unidad");
$conn1->close();

$conn2 = conectarDB("bdd_sisasc");
$datosTabla = obtenerDatos($conn2, "SELECT id_ups, modelo_ups, serial_ups, unidad, fecha_instalacion, modelo_bateria FROM ups");
$conn2->close();
?>




<!DOCTYPE html>
<?php include '../Componets/head.php'; ?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistemas Ascardio</title>

   

 
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
                <a href="../Views/catMarcas.php " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Marcas</p>
                </a>
              </li>
            </ul>

            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="../Views/catPuertos.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Puertos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Views/acceS.php" class="nav-link">
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
         
    <?php include '../Componets/upsForm.php'; ?>

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
    <strong>Copyright &copy; 2025 <a href="">Alfred</a>.</strong>
    <div class="float-right d-none d-sm-inline-block">
    </div>
  </footer>
</div>

<!-- ./wrapper -->
 <!-- jQuery -->
<script src="../Assests/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../Assests/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../Assests/dist/js/adminlte.min.js"></script>

<!-- REQUIRED SCRIPTS -->

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src='../Assests/plugins/jquery/jquery.min.js'></script>
<script src='../Assests/dist/js/select2.min.js'></script>
<script src="../Assests/dist/js/formUps.js"></script>





  <!-- Page specific script -->
  <!-- <script>
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
  </script> -->


<!-- <script>

function editRecord(id) {
  $.ajax({
    url: 'edit.php',
    type: 'GET',
    data: { id: id },
    success: function(response) {
      const record = JSON.parse(response);
      $('#editId').val(record.id);
      $('#editModelo').val(record.modelo);
      $('#editSerial').val(record.serial);
      $('#editUnidad').val(record.unidad);
      $('#editFechaInstalacion').val(record.fecha_instalacion);
      $('#editCantidadBateria').val(record.cantidad_bateria);
      $('#editModeloBateria').val(record.modelo_bateria);
      $('#editObservaciones').val(record.observaciones);
      $('#editModal').modal('show');
    }
  });
}

</script> -->


  <style>
    hr {
      height: 4px;
      background-color: #cac3c3;
      border: none;
    }
  </style>
  
  <style>
  .select2-container {
    width: 100% !important;
  }
  @media (max-width: 768px) {
    .select2-container--bootstrap4 .select2-selection--single {
      height: auto;
    }
  }
</style>

<script>
  $(function () {
    $('.select2').each(function () {
        $(this).select2({
            theme: 'bootstrap4',
            placeholder: $(this).data('placeholder'),
            allowClear: Boolean($(this).data('allow-clear')),
            language: {
                noResults: function () {
                    return `<button type="button" class="btn btn-primary btn-lg btn-block" onclick="AgregarNuevoImpresora()">Agregar Nuevo Impresora <i class="zmdi zmdi-plus-square zmdi-hc-1x"></i></button>`;
                },
            },
            escapeMarkup: function (markup) {
                return markup;
            }
        });
    });
  });
</script>

</body>
</html>


