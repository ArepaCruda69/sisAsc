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
$datosTabla = obtenerDatos($conn2, "SELECT id_impresora, modelo_impresora, serial_impresora, unidad_impresora, estatus_impresora, observaciones FROM impresoras");
$conn2->close();
?>



<!DOCTYPE html>

<?php include '../Componets/head.php'; ?>



<body class="hold-transition sidebar-mini">
<div class="wrapper">

  
<?php include '../Componets/navbar.php'; ?>
<?php include '../Componets/sidebarImp.php'; ?>


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
     

                
    <?php include '../Componets/impresoraForm.php'; ?>


  </div>
  <!-- /.content-wrapper -->




<!-- jQuery -->
<script src="../Assests/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../Assests/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../Assests/dist/js/adminlte.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src='../Assests/plugins/jquery/jquery.min.js'></script>
<script src='../Assests/dist/js/select2.min.js'></script>
<script src='../Assests/dist/js/formImpresora.js'></script>




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
