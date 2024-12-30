<?php
include '../Componets/scripts.php';
?>
<!DOCTYPE html>


<?php include '../Componets/cpusLink.php'; ?>


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

          

          
         

  </body>
</html>


