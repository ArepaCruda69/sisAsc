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


