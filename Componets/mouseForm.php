
     <!-- Main content -->
     <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="content">
             <div class="container-fluid">
              <div class="col">

                <div class="card text">
                  <div class="card-header">
                    <h2>Mouse</h2>
                  </div>
                  <div class="card-body">

                <main class="col">
                      <form class="row g-3 needs-validation" style="border-radius: 30px;" novalidate>

                      <div class="col-md-4">
                    <label for="inputAddress2" class="form-label"><b>Modelo</b><b
                        style="color: red;">*</b></label>
                    <input type="tel" class="form-control" id="txtModeloMouse" required>
                    <div class="invalid-feedback">
                      Porfavor seleccione una fecha
                    </div>
                  </div>

                 

                    
                  <div class="form-group col-4">
                        <label for="txtMarcaMouse">Marca</label> <br>
                        <select class="form-control select2" id="txtMarcaMouse" name="txtMarcaMouse" required>
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
                    <input type="tel" class="form-control" id="txtSerialMouse" required>
                    <div class="invalid-feedback">
                      Porfavor seleccione una fecha
                    </div>
                  </div>

                  

                  

                  <div class="form-group col-4">
                      <label for="txtPuertoMouse">Puerto</label> <br>
                      <select class="form-control select2" id="txtPuertoMouse" name="txtPuertoMouse" required>
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
                            echo "<option>No hay marca disponibles</option>";
                        }

                        $conn->close();
                            ?>
                            
                    </select>
                </div>


                  <div class="form-group col-4">
                    <label for="txtTipoMouse">Tipo</label>
                    <select class="form-control select2" id="txtTipoMouse" name="txtTipoMouse"> 
                    <option value="">Seleccione...</option> 
                      <option>Óptico</option>
                      <option>Láser</option>
                      <option>Inalámbrico</option>
                      <option>Mecánico</option>
                      <option>Otro</option>
                    </select>
                  </div>

                  
            <div class="form-group col-4">
              <label for="txtAsignadoMouse">Asignado a</label>
              <select class="form-control select2" id="txtAsignadoMouse" name="txtAsignadoMouse"> 
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
                  <button class="btn btn-outline-success" type="button" id = "btMouse" ><b>Agregar</b></button>
                 </div>                

                                    

                        </form>  



                          <!-- /.card-header -->
                      <div class="card-body">
                        <table id="" class="table table-bordered table-striped">
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
