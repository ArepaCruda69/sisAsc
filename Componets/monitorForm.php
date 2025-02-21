
      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="content">
             <div class="container-fluid">
              <div class="col">

                <div class="card text">
                  <div class="card-header">
                    <h2>Monitor</h2>
                  </div>
                  <div class="card-body">

                <main class="col">
                      <form class="row g-3 needs-validation" style="border-radius: 20px;" novalidate>

                      <div class="col-md-3">
                    <label for="inputAddress2" class="form-label"><b>Modelo</b><b
                        style="color: red;">*</b></label>
                    <input type="tel" class="form-control" id="txtModeloMonitor" required>
                    <div class="invalid-feedback">
                      Porfavor seleccione una fecha
                    </div>
                  </div>


                        <div class="form-group col-3">
                        <label for="txtMarcaMonitor">Marca</label> <br>
                        <select class="form-control select2" id="txtMarcaMonitor" name="txtMarcaMonitor" required>
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
                          <input type="tel" class="form-control" id="txtSerialMonitor" required>
                          <div class="invalid-feedback">
                            Porfavor seleccione una fecha
                          </div>
                        </div>

                    

                    <div class="form-group col-3">
                      <label for="txtPuertoMonitor">Puerto</label> <br>
                      <select class="form-control select2" id="txtPuertoMonitor" name="txtPuertoMonitor" required>
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


                  <div class="form-group col-3">
                    <label for="txtPanelMonitor">Panel</label>
                    <select class="form-control select2" id="txtPanelMonitor" name="txtPanelMonitor">  
                    <option value="">Seleccione...</option>
                      <option>TN </option>
                      <option>IPS </option>
                      <option>VA </option>
                      <option>OLED </option>
                      <option>QLED </option>
                      <option>Otros</option>
                    </select>
                  </div>

                  <div class="form-group col-3">
                    <label for="txtHerciosMonitor">Hercios</label>
                    <select class="form-control select2" id="txtHerciosMonitor" name="txtHerciosMonitor">  
                    <option value="">Seleccione...</option>
                      <option>60 Hz </option>
                      <option>75 Hz </option>
                      <option>120 Hz </option>
                      <option>144 Hz </option>
                      <option>165 Hz </option>
                      <option>240 Hz</option>
                      <option>240 Hz</option>
                      <option>360 Hz</option>
                      <option>Otros</option>
                      
                    </select>
                  </div>

                  
            <div class="form-group col-3">
              <label for="txtAsignadoMonitor">Asignado a</label>
              <select class="form-control select2" id="txtAsignadoMonitor" name="txtAsignadoMonitor"> 
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
                        <button class="btn btn-outline-success" type="button" id = "btMonitor" ><b>Agregar</b></button>
                       </div>

                        </form> 

                        
              <!-- /.card-header -->
              <div class="card-body">
        <table id="example2" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Modelo</th>
              <th>Marca</th>
              <th>Serial</th>
              <th>Hercios</th>
              <th>Asignado a</th>
            </tr>
          </thead>
          <tbody>
          
          </tbody>
         
        </table>




                      </main> 
                   </div>
                 </div>
              </div>
            </div>  
          </div>
        </div> 
     </div>
