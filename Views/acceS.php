
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
$datosTablaM = obtenerDatos($conn2, "SELECT id_monitor, modelo_monitor, marca_monitor, serial_monitor, puertos_monitor, panel_monitor,hercios_monitor, asignado_monitor FROM monitor");
$conn2->close();

?>


<?php
include '../Componets/scripts.php';
?>
<!DOCTYPE html>


<?php include '../Componets/head.php'; ?>


<body class="hold-transition sidebar-mini">


<div class="wrapper">

  
<?php include '../Componets/navbar.php'; ?>
<?php include '../Componets/sidebarAcce.php'; ?>




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

    <?php include '../Componets/monitorForm.php'; ?>
    
    <?php include '../Componets/tecladoForm.php'; ?>

    <?php include '../Componets/mouseForm.php'; ?>
    
     

  </div> 

<?php echo $form1?>

   <!-- ./wrapper -->
 <!-- jQuery -->
<script src="../Assests/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../Assests/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../Assests/dist/js/adminlte.min.js"></script>
       

          
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src='../Assests/plugins/jquery/jquery.min.js'></script>
<script src='../Assests/dist/js/select2.min.js'></script>
<script src='../Assests/dist/js/formMonitor.js'></script>
<script src='../Assests/dist/js/formTeclado.js'></script>
<script src='../Assests/dist/js/formMouse.js'></script>


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
                    return `<button type="button" class="btn btn-primary btn-lg btn-block" onclick="AgregarNuevo()">Agregar Nuevo  <i class="zmdi zmdi-plus-square zmdi-hc-1x"></i></button>`;
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


