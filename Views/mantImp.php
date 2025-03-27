<?php


require '../Model/conexion.php';


?>
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

  
<?php include '../Componets/navbar.php'; ?>
  
<?php include '../Componets/sidebarMantImpr.php'; ?>
  
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
              <h2>Impresora</h2>
            </div>
            <div class="card-body">

              <main class="col">

              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Preventivo</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Correctivo</a>
              </li>
              
            </ul>

 <!--Mantenimiento Preventivo -->
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">               
            <form class="row g-3 needs-validation" style="border-radius: 20px;" novalidate>
                
                
                <div class="col-md-3">
                                    <label for="inputEmail4" class="form-label"><b> Id </b><b style="color: red;">*</b></label>
                                    <div class="input-group mb-3">
                                      <input type="text" class="form-control" id="txtcliente" aria-label="Recipient's username"
                                        aria-describedby="button-addon2">
                                      <button class="btn btn-danger" type="button" id="button-addon2" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop" ><b>Buscar</b></button>
                                    </div>
                                    <div class="invalid-feedback">
                                      Porfavor Digite un Id
                                    </div>
                                  </div>
                
                
                                  <div class="col-md-3">
                        <label for="inputAddress2" class="form-label"><b>Nombre</b><b
                            style="color: red;">*</b></label>
                            <input type="text" class="form-control" id="txtNNombreImpresora" name="NNombreImpresora" required> 
                            <div class="invalid-feedback">Por favor, ingrese el modelo</div> 
                            </div>
                
                         
                
                    <div class="col-md-3"> 
                          <label for="unidad" class="form-label">Unidad</label> 
                          <select class="form-control select2" id="txtUnidadImpresora" name="unidad" required> 
                            <option value="">Seleccione...</option> 
                            <?php if (!empty($unidades)) { foreach ($unidades as $unidad) { 
                              echo "<option value='" . htmlspecialchars($unidad['nom_unidad']) . "'>" . htmlspecialchars($unidad['nom_unidad']) . "</option>"; } 
                          } else { echo "<option>No hay unidades disponibles</option>"; } ?> 
                          </select> 
                        </div>
                
                
                        

                            <div class="col-md-3">
                        <label for="inputAddress2" class="form-label"><b>Causa</b><b
                            style="color: red;">*</b></label>
                            <input type="text" class="form-control" id="txtNNombreImpresora" name="NNombreImpresora" required> 
                            <div class="invalid-feedback">Por favor, ingrese el modelo</div> 
                            </div>

                            
                
                        <div class="form-group col-3">
                              <label for="txtEstiloImpresora">Montivo</label>
                              <select class="form-control select2" id="txtEstiloImpresora" name="EstiloImpresora">
                              <option value="">Seleccione...</option>  
                                <option>Revision</option>
                                <option>Limpieza</option>
                              </select>
                            </div>
                
                      
                            <div class="form-group col-3">
                    <label for="txtPuertoImpresora">Actividad a realizar</label>
                    <select class="form-control select2" id="txtPuertoImpresora" name="PuertoImpresora">
                        <option value="">Seleccione...</option>
                                <option>Limpieza interna</option>
                                <option>Limpieza externa</option>
                                <option>Lubricacion de parte moviles</option>
                                <option>Revision de toner/cartuchos</option>
                                <option>Actualizacion de finware</option>
                    </select>
                </div>

                <div class="form-group col-3">
                    <label for="txtPuertoImpresora">Resonsable del Mantenimiento</label>
                    <select class="form-control select2" id="txtPuertoImpresora" name="PuertoImpresora">
                        <option value="">Seleccione...</option>
                                <option>Jose luis</option>
                                <option>Dolores</option>
                                <option>Clotilde</option>
                                <option>Papadopoulos</option>
                                <option>Bonifacio</option>
                    </select>
                </div>
                
                      <div class="col-md-3">
                          <label for="txtAnchoImpresora" class="form-label"><b>Fecha de Mantenimiento</b><b style="color: red;">*</b></label>
                          <input type="tel" class="form-control" id="txtAnchoImpresora" name="AnchoImpresora" required>
                          <div class="invalid-feedback">
                              Por favor, seleccione una fecha
                          </div>
                
                     
                          <br>
                      </div>
                      <div class="col-md-3">
                      <label for="inputAddress2" class="form-label"><b>Ultimo de Mantenimiento</b><b
                            style="color: red;">*</b></label>
                            <input type="tel" class="form-control" id="txtConsumibleImpresora" name="ConsumibleImpresora" required>
                            <div class="invalid-feedback">
                             Porfavor seleccione una fecha
                            </div>
                          <br>
                      </div>
                
                
                
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label>Observaciones</label>
                                    <textarea class="form-control" rows="3" id="txtObsImpresora" name="txtObsImpresora" ></textarea>
                                </div>
                            </div>
                        
                              <div class="col-md-6">
                                  <button class="btn btn-outline-success" type="button" id = "btImpresora" ><b>Agregar</b></button>
                                
                                </div>
                      </form>

                      
                          <!-- /.card-header -->
                          <div class="card-body">
                    <table id="tablaImpresora" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>Nombre</th>
                          <th>Motivo</th>
                          <th>Actividad Realizada</th>
                          <th>Fecha de Mantenimiento </th>
                          <th>Observacion</th>
                          <th></th>
                        </tr>
                      </thead>
                      
                      <tbody>
                      <?php
                        if (!empty($datosTablaa)) {
                            foreach ($datosTablaa as $row) {
                                echo "<tr>";
                                echo "<td>" . htmlspecialchars($row['modelo_impresora']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['marca_impresora']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['serial_impresora']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['unidad_impresora']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['estilo_impresora']) . "</td>";
                                echo "<td>
                                    <button type='button' class='btn btn-warning btn-sm' onclick='editRecord(" . $row['id_impresora'] . ")'>Editar</button>
                                    <a href='../Model/deleteImpresora.php?id=" . $row['id_impresora'] . "' class='btn btn-danger btn-sm' onclick=\"return confirm('¿Estás seguro de eliminar este registro?');\">Eliminar</a>
                                    </td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='6'>No se encontraron registros</td></tr>";
                        }
                        ?>
                      </tbody>
                    
                    </table>
                    </div>
                    <!-- /.card-body -->
                        <!-- /.card-header -->

                </div>

 <!-- /Mantenimiento Preventivo -->



 <!-- Mantenimiento Correctivo -->
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

            <form class="row g-3 needs-validation" style="border-radius: 20px;" novalidate>
                
                
                <div class="col-md-3">
                                    <label for="inputEmail4" class="form-label"><b> Id </b><b style="color: red;">*</b></label>
                                    <div class="input-group mb-3">
                                      <input type="text" class="form-control" id="txtcliente" aria-label="Recipient's username"
                                        aria-describedby="button-addon2">
                                      <button class="btn btn-danger" type="button" id="button-addon2" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop" ><b>Buscar</b></button>
                                    </div>
                                    <div class="invalid-feedback">
                                      Porfavor Digite un Id
                                    </div>
                                  </div>
                
                
                                  <div class="col-md-3">
                        <label for="inputAddress2" class="form-label"><b>Nombre</b><b
                            style="color: red;">*</b></label>
                            <input type="text" class="form-control" id="txtNNombreImpresora" name="NNombreImpresora" required> 
                            <div class="invalid-feedback">Por favor, ingrese el modelo</div> 
                            </div>
                
                         
                
                    <div class="col-md-3"> 
                          <label for="unidad" class="form-label">Unidad</label> 
                          <select class="form-control select2" id="txtUnidadImpresora" name="unidad" required> 
                            <option value="">Seleccione...</option> 
                            <?php if (!empty($unidades)) { foreach ($unidades as $unidad) { 
                              echo "<option value='" . htmlspecialchars($unidad['nom_unidad']) . "'>" . htmlspecialchars($unidad['nom_unidad']) . "</option>"; } 
                          } else { echo "<option>No hay unidades disponibles</option>"; } ?> 
                          </select> 
                        </div>
                
                
                        

                            <div class="col-md-3">
                        <label for="inputAddress2" class="form-label"><b>Causa</b><b
                            style="color: red;">*</b></label>
                            <input type="text" class="form-control" id="txtNNombreImpresora" name="NNombreImpresora" required> 
                            <div class="invalid-feedback">Por favor, ingrese el modelo</div> 
                            </div>

                            
                
                        <div class="form-group col-3">
                              <label for="txtEstiloImpresora">Montivo</label>
                              <select class="form-control select2" id="txtEstiloImpresora" name="EstiloImpresora">
                              <option value="">Seleccione...</option>  
                                <option>Atasco de papel</option>
                                <option>Fallos en el cabezal</option>
                                <option>Error de conexion en el software</option>
                                <option>Desgaste de rodillos</option>
                                <option>Problemas de calidad de impresion(lineas,manchas)</option>
                              </select>
                            </div>
                
                      
                            <div class="form-group col-3">
                    <label for="txtPuertoImpresora">Accion realizada</label>
                    <select class="form-control select2" id="txtPuertoImpresora" name="PuertoImpresora">
                        <option value="">Seleccione...</option>
                                <option>Sustitucion</option>
                                <option>Reparacion parcial</option>
                                <option>Limpieza</option>
                                <option>Ajuste</option>
                                <option>Calibracion</option>
                    </select>
                </div>

                <div class="form-group col-3">
                    <label for="txtPuertoImpresora">Componentes</label>
                    <select class="form-control select2" id="txtPuertoImpresora" name="PuertoImpresora">
                        <option value="">Seleccione...</option>
                                <option>Consumibles (toner/tinta/cabezal)</option>
                                <option>Cabezal</option>
                                <option>Rodillo</option>
                                <option>Fusor</option>
                                <option>Placa Electronica</option>
                                <option>Sensores</option>
                                <option>Otros</option>
                    </select>
                </div>

                <div class="form-group col-3">
                    <label for="txtPuertoImpresora">Resonsable del Mantenimiento</label>
                    <select class="form-control select2" id="txtPuertoImpresora" name="PuertoImpresora">
                        <option value="">Seleccione...</option>
                                <option>Jose luis</option>
                                <option>Dolores</option>
                                <option>Clotilde</option>
                                <option>Papadopoulos</option>
                                <option>Bonifacio</option>
                    </select>
                </div>

                
                      <div class="col-md-3">
                          <label for="txtAnchoImpresora" class="form-label"><b>Fecha de Mantenimiento</b><b style="color: red;">*</b></label>
                          <input type="tel" class="form-control" id="txtAnchoImpresora" name="AnchoImpresora" required>
                          <div class="invalid-feedback">
                              Por favor, seleccione una fecha
                          </div>
                
                     
                          <br>
                      </div>
                      <div class="col-md-3">
                      <label for="inputAddress2" class="form-label"><b>Ultimo de Mantenimiento</b><b
                            style="color: red;">*</b></label>
                            <input type="tel" class="form-control" id="txtConsumibleImpresora" name="ConsumibleImpresora" required>
                            <div class="invalid-feedback">
                             Porfavor seleccione una fecha
                            </div>
                          <br>
                      </div>
                      
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                  <label class="form-check-label" for="inlineCheckbox1"><b>Nuevo</b></label>
                </div>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                  <label class="form-check-label" for="inlineCheckbox2"><b>Reparado</b></label>
                </div>
                
                
                
                
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Observaciones</label>
                                    <textarea class="form-control" rows="3" id="txtObsImpresora" name="txtObsImpresora" ></textarea>
                                </div>
                            </div>
                        
                              <div class="col-md-6">
                                  <button class="btn btn-outline-success" type="button" id = "btImpresora" ><b>Agregar</b></button>
                                
                                </div>
                      </form>

                      
                          <!-- /.card-header -->
                          <div class="card-body">
                    <table id="tablaImpresora" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>Nombre</th>
                          <th>Motivo</th>
                          <th>Accion Realizada</th>
                          <th>Fecha de Mantenimiento </th>
                          <th>Observacion</th>
                          <th></th>
                        </tr>
                      </thead>
                      
                      <tbody>
                      <?php
                        if (!empty($datosTablaa)) {
                            foreach ($datosTablaa as $row) {
                                echo "<tr>";
                                echo "<td>" . htmlspecialchars($row['modelo_impresora']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['marca_impresora']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['serial_impresora']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['unidad_impresora']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['estilo_impresora']) . "</td>";
                                echo "<td>
                                    <button type='button' class='btn btn-warning btn-sm' onclick='editRecord(" . $row['id_impresora'] . ")'>Editar</button>
                                    <a href='../Model/deleteImpresora.php?id=" . $row['id_impresora'] . "' class='btn btn-danger btn-sm' onclick=\"return confirm('¿Estás seguro de eliminar este registro?');\">Eliminar</a>
                                    </td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='6'>No se encontraron registros</td></tr>";
                        }
                        ?>
                      </tbody>
                    
                    </table>
                    </div>
            </div>
            <!-- /Mantenimiento Correctivo -->
            </main>

            
          </div>


        </div>
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


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


<style>
.form-check-input {
  transform: scale(1.7); /* Aumenta el tamaño en un 50% */
}
</style>

</body>
</html>
