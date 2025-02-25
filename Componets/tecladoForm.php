

     
     <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="content">
             <div class="container-fluid">
              <div class="col">

                <div class="card text">
                  <div class="card-header">
                    <h2>Teclado</h2>
                  </div>
                  <div class="card-body">

                <main class="col">
                      <form class="row g-3 needs-validation" style="border-radius: 20px;" novalidate>

                      <div class="col-md-4">
                    <label for="inputAddress2" class="form-label"><b>Modelo</b><b
                        style="color: red;">*</b></label>
                    <input type="tel" class="form-control" id="txtModeloTeclado" name="modeloteclado" required>
                    <div class="invalid-feedback">
                      Porfavor seleccione una fecha
                    </div>
                  </div>



                  <div class="form-group col-4">
                        <label for="txtMarcaTeclado">Marca</label> <br>
                        <select class="form-control select2" id="txtMarcaTeclado" name="marcateclado" required>
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

                  <div class="col-md-4">
                    <label for="inputAddress2" class="form-label"><b>Serial</b><b
                        style="color: red;">*</b></label>
                    <input type="tel" class="form-control" id="txtSerialTeclado" name="serialteclado" required>
                    <div class="invalid-feedback">
                      Porfavor seleccione una fecha
                    </div>
                  </div>



            
                       <div class="form-group col-4">
                <label for="txtPuertoTeclado">Puerto</label>
                <select class="form-control select2" id="txtPuertoTeclado" name="puertoteclado" required>
                    <option value="">Seleccione...</option>
                    <?php
                    include '../Model/conexion.php';
                    $conn = conectarDB("bdd_sisasc");
                    $query = "SELECT nombre_puerto FROM puertos"; // Incluir ID
                    $result = mysqli_query($conn, $query);
            
                    if ($result && mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<option value='" . htmlspecialchars($row['nombre_puerto']) . "'>" . htmlspecialchars($row['nombre_puerto']) . "</option>";
                        }
                    } else {
                        echo "<option>No hay puertos disponibles</option>";
                    }
            
                    $conn->close();
                    ?>
                </select>
            </div>
            
            <div class="form-group col-4">
                <label for="txtTipoTeclado">Tipo</label>
                <select class="form-control select2" id="txtTipoTeclado" name="tipoteclado">
                    <option value="">Seleccione...</option>
                    <option>Óptico</option>
                    <option>Láser</option>
                    <option>Inalámbrico</option>
                    <option>Mecánico</option>
                    <option>Otro</option>
                </select>
            </div>
            
            <div class="form-group col-4">
                <label for="txtAsignadoTeclado">Asignado a</label>
                <select class="form-control select2" id="txtAsignadoTeclado" name="asignadoteclado">
                    <option value="">Seleccione...</option>
                    <?php
                    include '../Model/conexion.php';
                    $conn = conectarDB("bdd_sisasc");
                    $query = "SELECT nombre_cpu FROM cpuss"; // Incluir ID
                    $result = mysqli_query($conn, $query);
            
                    if ($result && mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<option value='" . htmlspecialchars($row['nombre_cpu']) . "'>" . htmlspecialchars($row['nombre_cpu']) . "</option>";
                        }
                    } else {
                        echo "<option>No hay cpuss disponibles</option>";
                    }
            
                    $conn->close();
                    ?>
                </select>
            </div>


            


            <div class="col-md-6">
                  <button class="btn btn-outline-success" type="button" id = "btTeclados" ><b>Agregar</b></button>
                 </div>     

                        </form> 

                   </div>  

                      <!-- /.card-header -->
                      <div class="card-body">
                        <table id="exampleteclado" class="table table-bordered table-striped">
                          <thead>
                              <tr>
                              <th>Modelo</th>
                              <th>Marca</th>
                              <th>Serial</th>
                              <th>Tipo</th>
                              <th>Asignado a</th>
                              </tr>
                          </thead>
                        <tbody>
                        <?php
                          if (!empty($datosTablaT)) {
                              foreach ($datosTablaT as $row) {
                                  echo "<tr>";
                                  echo "<td>" . htmlspecialchars($row['modelo_teclado']) . "</td>";
                                  echo "<td>" . htmlspecialchars($row['marca_teclado']) . "</td>";
                                  echo "<td>" . htmlspecialchars($row['serial_teclado']) . "</td>";
                                  echo "<td>" . htmlspecialchars($row['tipo_teclado']) . "</td>";
                                  echo "<td>" . htmlspecialchars($row['asignado_teclado']) . "</td>";
                                  echo "<td>
                                      <button type='button' class='btn btn-warning btn-sm' onclick='editarRegistro(" . $row['id_teclado'] . ")'>Editar</button>
                                      <a href='../Model/deleteTeclado.php?id=" . $row['id_teclado'] . "' class='btn btn-danger btn-sm' onclick=\"return confirm('¿Estás seguro de eliminar este registro?');\">Eliminar</a>
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

                      </main> 
                   </div>
                 </div>
              </div>
            </div>  
          </div>
        </div> 
     </div>



     <!-- End Main content -->
