<!DOCTYPE html>

<?php include '../Componets/cpusLink.php'; ?>

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
     

  </nav>
  <!-- /.navbar -->
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
<script src='../Assests/dist/js/tablaRam.js'></script>
<script src='../Assests/dist/js/tablaDisco.js'></script>
<script src='../Assests/plugins/jquery/jquery.min.js'></script>

<style>
  hr {
    height: 4px;
    background-color: #cac3c3;
    border: none;
  }
</style>
</body>
</html>
