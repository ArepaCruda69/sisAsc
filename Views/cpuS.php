<!DOCTYPE html>

<?php include '../Componets/head.php'; ?>

<body class="hold-transition sidebar-mini">
  
<div class="wrapper">

  
<?php include '../Componets/navbar.php'; ?>
<?php include '../Componets/sidebarCpus.php'; ?>
  

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



    <?php include '../Componets/cpusForm.php'; ?>







    
  </div>
  <!-- /.content-wrapper -->



<?php echo $form2?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src='../Assests/plugins/jquery/jquery.min.js'></script>
<script src='../Assests/dist/js/select2.min.js'></script>
<script src='../Assests/dist/js/formCpu.js'></script>

<script>
  $(function () {
    $('.select2').each(function () {
        $(this).select2({
            theme: 'bootstrap4',
            placeholder: $(this).data('placeholder'),
            allowClear: Boolean($(this).data('allow-clear')),
            language: {
                noResults: function () {
                    return `<button type="button" class="btn btn-primary btn-lg btn-block" onclick="AgregarNuevoCPU()">Agregar Nuevo CPU <i class="zmdi zmdi-plus-square zmdi-hc-1x"></i></button>`;
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
