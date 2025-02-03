




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

              
     <form class="row g-3 needs-validation" style="border-radius: 20px;" novalidate>
     
    <div class="col-md-3">
        <label for="inputAddress2" class="form-label"><b>Modelo</b><b
            style="color: red;">*</b></label>
            <input type="text" class="form-control" id="txtModeloImpresora" required> 
            <div class="invalid-feedback">Por favor, ingrese el modelo</div> 
            </div>

            


            <div class="form-group col-3">
      <label for="txtMarcaImpresora">Marca</label>
      <select class="form-control select2" id="txtMarcaImpresora" name="txtMarcaImpresora" required>
          <option value="">Seleccione...</option>
        <?php
            include '../Model/conexion.php';
            $conn = conectarDB("bdd_sisasc");
            $query = "SELECT marca_marca FROM marca"; // Incluir ID
            $result = mysqli_query($conn, $query);

            if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='" . htmlspecialchars($row['marca_marca']) . "'>" . htmlspecialchars($row['marca_marca']) . "</option>";
                }
            } else {
                echo "<option>No hay marca disponibles</option>";
            }

            $conn->close();
        ?>
    </select>
</div>



            <div class="col-md-3">
                    <label for="inputAddress2" class="form-label"><b>Serial</b><b
                        style="color: red;">*</b></label>
                    <input type="tel" class="form-control" id="txtSerialImpresora" required>
                    <div class="invalid-feedback">
                      Porfavor seleccione una fecha
                    </div>
                  </div>


        <div class="form-group col-3">
              <label for="txtTipoImpresora">Tipo</label>
              <select class="form-control select2" id="txtTipoImpresora" name="txtTipoImpresora">
              <option value="">Seleccione...</option>  
                <option>Toner</option>
                <option>Tinta</option>
                <option>Laser </option>
                <option>Matriz</option>
                <option>Otras</option>
              </select>
            </div>

        <div class="form-group col-3">
              <label for="txtEstiloImpresora">Estilo</label>
              <select class="form-control select2" id="txtEstiloImpresora" name="txtEstiloImpresora">
              <option value="">Seleccione...</option>  
                <option>Blanco y negro</option>
                <option>Color</option>
                <option>Ambas</option>
              </select>
            </div>

      
            <div class="form-group col-3">
    <label for="txtPuertoImpresora">Puerto</label>
    <select class="form-control select2" id="txtPuertoImpresora" name="txtPuertoImpresora">
        <option value="">Seleccione...</option>
    </select>
</div>


      
      
      <div class="col-md-3">
          <label for="txtAnchoImpresora" class="form-label"><b>Ancho</b><b style="color: red;">*</b></label>
          <input type="tel" class="form-control" id="txtAnchoImpresora" required>
          <div class="invalid-feedback">
              Por favor, seleccione una fecha
          </div>

          
          <br>
      </div>
      <div class="col-md-3">
      <label for="inputAddress2" class="form-label"><b>Consumible</b><b
            style="color: red;">*</b></label>
            <input type="tel" class="form-control" id="txtConsumibleImpresora" required>
            <div class="invalid-feedback">
             Porfavor seleccione una fecha
            </div>
          <br>
      </div>

      <div class="form-group col-3">
              <label for="txtEstatusImpresora">Estatus</label>
              <select class="form-control select2" id="txtEstatusImpresora" name="txtEstatusImpresora"> 
              <option value="">Seleccione...</option> 
                <option>Activa</option>
                <option>Inactiva</option>
              </select>
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


     
            <div class="form-group col-3">
              <label for="txtAsignadoImpresora">Asignado a</label>
              <select class="form-control select2" id="txtAsignadoImpresora" name="txtAsignadoImpresora"> 
              <option value="">Seleccione...</option> 
                <option>opcion 1</option>
                <option>opcion 2</option>
                <option>opcion 3</option>
                <option>opcion 4</option>
                <option>opcion 5</option>
              </select>
            </div>


            <div class="col-md-12">
                <div class="form-group">
                    <label>Observaciones</label>
                    <textarea class="form-control" rows="3" id="txtObsImpresora"></textarea>
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
              <th>Modelo</th>
              <th>Marca</th>
              <th>Serial</th>
              <th>Unidad</th>
              <th>Estilo</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
          <?php
            if (!empty($datosTabla)) {
                foreach ($datosTabla as $row) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['modelo_impresora']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['marca_impresora']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['serial_impresora']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['unidad_impresora']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['estilo_impresora']) . "</td>";
                    echo "<td>
                        <button type='button' class='btn btn-warning btn-sm' onclick='editRecord(" . $row['id_impresora'] . ")'>Editar</button>
                        <a href='../Model/delete.php?id=" . $row['id_impresora'] . "' class='btn btn-danger btn-sm' onclick=\"return confirm('¿Estás seguro de eliminar este registro?');\">Eliminar</a>
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

