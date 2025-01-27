
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

          <form class="row g-3 needs-validation" id="upsForm" action="../model/registrarUps.php" method="POST" style="border-radius: 20px;" novalidate>

     <div class="col-md-3">

        <label for="modelo" class="form-label"><b>Modelo</b><b style="color: red;">*</b></label>
        <input type="text" class="form-control" id="txtModeloUps" name="modelo" required>
        <div class="invalid-feedback">Por favor ingrese el modelo</div>
    </div>
    
    <div class="col-md-3">
        <label for="serial" class="form-label"><b>Serial</b><b style="color: red;">*</b></label>
        <input type="text" class="form-control" id="txtSerialUps" name="serial" required>
        <div class="invalid-feedback">Por favor ingrese el serial</div>
    </div>


    <div class="col-md-3">
    <label for="unidad" class="form-label">Unidad</label>
    <select class="form-control select2" id="txtUnidadUps" name="unidad" required>   
        <option value="">Seleccione...</option>
        <?php
            if (!empty($unidades)) {
                foreach ($unidades as $unidad) {
                    echo "<option value='" . htmlspecialchars($unidad['nom_unidad']) . "'>" . htmlspecialchars($unidad['nom_unidad']) . "</option>";
                }
            } else {
                echo "<option>No hay unidades disponibles</option>";
            }
        ?>
    </select>
</div>

    

    <div class="col-md-3">
        <label for="fecha_instalacion" class="form-label">Fecha de instalación de la batería:</label>
        <input type="date" class="form-control" id="txtfechaUps" name="fecha_instalacion" required>
    </div>
    <div class="col-md-3">
        <label for="cantidad_bateria" class="form-label"><b>Cantidad de Batería</b><b style="color: red;">*</b></label>
        <input type="number" class="form-control" id="txtCantidadUps" name="cantidad_bateria" required>
        <div class="invalid-feedback">Por favor ingrese la cantidad de batería</div>
    </div>
    <div class="col-md-3">
        <label for="modelo_bateria" class="form-label"><b>Modelo de la Batería</b><b style="color: red;">*</b></label>
        <input type="text" class="form-control" id="txtModeloBateriaUps" name="modelo_bateria" required>
        <div class="invalid-feedback">Por favor ingrese el modelo de la batería</div>
        <br>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="observaciones">Observaciones</label>
            <textarea class="form-control" id="txtObserUps" name="observaciones" rows="1"></textarea>
        </div>
    </div>
    <div class="col-md-6">
                  <button class="btn btn-outline-success" type="button" id = "btUps" ><b>Agregar</b></button>
                
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
          <?php
            if (!empty($datosTabla)) {
                foreach ($datosTabla as $row) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['modelo_ups']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['serial_ups']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['unidad']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['fecha_instalacion']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['modelo_bateria']) . "</td>";
                    echo "<td>
                        <button type='button' class='btn btn-warning btn-sm' onclick='editRecord(" . $row['id_ups'] . ")'>Editar</button>
                        <a href='../Model/delete.php?id=" . $row['id_ups'] . "' class='btn btn-danger btn-sm' onclick=\"return confirm('¿Estás seguro de eliminar este registro?');\">Eliminar</a>
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

      