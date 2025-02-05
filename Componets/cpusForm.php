
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="col">

              <div class="card ">
                  <div class="card-header">
                    <H2>Registro de CPU</H2>
                  </div>


          <div class="card-body">
          <form>
            
          
          <hr class="hr hr-blurry"></hr>
          <div><h3>CPU</h3></div>

          <div class="form-row">
            <div class="form-group col-3">
              <label for="">Nombre</label>
              <input type="" class="form-control" id="txtNombreCpu">
            </div>
            
        

           
    <div class="form-group col-3">
    <label for="txtUnidadCpu">Unidad</label>
    <select class="form-control select2" id="txtUnidadCpu" name="txtMarcaCpu" required>
        <option value="">Seleccione...</option>
        <?php
            include '../Model/conexion.php';
            $conn = conectarDB("bd_globales");
            $query = "SELECT nom_unidad FROM glo_1unidad";
            $result = mysqli_query($conn, $query);

            if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='" . htmlspecialchars($row['nom_unidad']) . "'>" . htmlspecialchars($row['nom_unidad']) . "</option>";
                }
            } else {
                echo "<option>No hay marcas disponibles</option>";
            }

            $conn->close();
        ?>
    </select>
</div>

           
    <div class="form-group col-3">
    <label for="txtMarcaCpu">Marca</label>
    <select class="form-control select2" id="txtMarcaCpu" name="txtMarcaCpu" required>
        <option value="">Seleccione...</option>
        <?php
            include '../Model/conexion.php';
            $conn = conectarDB("bdd_sisasc");
            $query = "SELECT marca_marca FROM marca";
            $result = mysqli_query($conn, $query);

            if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='" . htmlspecialchars($row['marca_marca']) . "'>" . htmlspecialchars($row['marca_marca']) . "</option>";
                }
            } else {
                echo "<option>No hay marcas disponibles</option>";
            }

            $conn->close();
        ?>
    </select>
</div>

          <div class="form-group col-3">
              <label for="">Modelo</label>
              <input type="" class="form-control" id="txtModeloCpu">
            </div>
          </div>

        
          </form> 
          </div>
          
          <div class="card-body">
          <form>

          
          <hr class="hr hr-blurry"></hr>
          <div><h3>Tarjeta Madre</h3></div>

          <div class="form-row">
          

            <div class="form-group col-4">
            <label for="txtMarcaMadre">Marca</label>
            <select class="form-control select2" id="txtMarcaMadre" name="txtMarcaMadre" required>
                <option value="">Seleccione...</option>
                <?php
                    include '../Model/conexion.php';
                    $conn = conectarDB("bdd_sisasc");
                    $query = "SELECT marca_marca FROM marca";
                    $result = mysqli_query($conn, $query);

                    if ($result && mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<option value='" . htmlspecialchars($row['marca_marca']) . "'>" . htmlspecialchars($row['marca_marca']) . "</option>";
                        }
                    } else {
                        echo "<option>No hay marcas disponibles</option>";
                    }

                    $conn->close();
                ?>
            </select>
        </div>




            <div class="form-group col-4">
              <label for="">Modelo</label>
              <input type="" class="form-control" id="txtModeloMadre">
            </div>
          

          <div class="form-group col-4">
              <label for="">Serial</label>
              <input type="" class="form-control" id="txtSerialMadre">
            </div>
            </div>

        
          </form>
          </div>

          <div class="card-body">
          <form>

          <hr class="hr hr-blurry"></hr>
          <div><h3>Procesador</h3></div>

          <div class="form-row">
           


               <div class="form-group col-3">
            <label for="txtMarcaProcesador">Marca</label>
            <select class="form-control select2" id="txtMarcaProcesador" name="txtMarcaProcesador" required>
                <option value="">Seleccione...</option>
                <?php
                    include '../Model/conexion.php';
                    $conn = conectarDB("bdd_sisasc");
                    $query = "SELECT marca_marca FROM marca";
                    $result = mysqli_query($conn, $query);

                    if ($result && mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<option value='" . htmlspecialchars($row['marca_marca']) . "'>" . htmlspecialchars($row['marca_marca']) . "</option>";
                        }
                    } else {
                        echo "<option>No hay marcas disponibles</option>";
                    }

                    $conn->close();
                ?>
            </select>
        </div>

          

          <div class="form-group col-3">
              <label for="">Modelo</label>
              <input type="" class="form-control" id="txtModeloProcesador">
            </div>
          

          <div class="form-group col-3">
              <label for="">Generacion</label>
              <input type="" class="form-control" id="txtGeneracionProcesador">
            </div>
          

          <div class="form-group col-2">
              <label for="">Serial</label>
              <input type="" class="form-control" id="txtSerialProcesador">
            
          </div>

          <div class="form-group col-1">
              <label for="">Hercios</label>
              <input type="" class="form-control" id="txtHerciosProcesador">
            
          </div>
        </div>

        
          </form>
          </div>


      <div class="card-body">
        <form>

        
        <hr class="hr hr-blurry"></hr>
          <div><h3>Tarjeta RAM</h3></div>

          <div class="form-row">

         

            <div class="form-group col-2">
            <label for="txtMarcaRam">Marca</label>
            <select class="form-control select2" id="txtMarcaRam" name="txtMarcaRam" required>
                <option value="">Seleccione...</option>
                <?php
                    include '../Model/conexion.php';
                    $conn = conectarDB("bdd_sisasc");
                    $query = "SELECT marca_marca FROM marca";
                    $result = mysqli_query($conn, $query);

                    if ($result && mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<option value='" . htmlspecialchars($row['marca_marca']) . "'>" . htmlspecialchars($row['marca_marca']) . "</option>";
                        }
                    } else {
                        echo "<option>No hay marcas disponibles</option>";
                    }

                    $conn->close();
                ?>
            </select>
        </div>



            
            
            <div class="form-group col-2">
              <label for="txtModeloRam">Modelo</label>
              <input type="text" class="form-control" id="txtModeloRam" name="txtModeloRam">
            </div>

            

            <div class="form-group col-2">
              <label for="txtSerialRam">Serial</label>
              <input type="text" class="form-control" id="txtSerialRam" name="txtSerialRam">
            </div>

            <div class="form-group col-2">
              <label for="txtTipoRam">Tipo</label>
              <input type="text" class="form-control" id="txtTipoRam" name="txtTipoRam">
            </div>

            <div class="form-group col-2">
              <label for="txtCapacidadRam">Capacidad</label>
              <input type="text" class="form-control" id="txtCapacidadRam" name="txtCapacidadRam">
            </div>

            <div class="form-group col-2">
              <label for="txtVelocidadRam">Velocidad</label>
              <input type="text" class="form-control" id="txtVelocidadRam" name="txtVelocidadRam">
            </div>
          </div>

          <button class="btn btn-outline-success" type="button" id="btRam"><b>Agregar Tarjeta RAM</b></button>
          <br>
          <br>

          <section class="tablaregistros">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Marca</th>
                <th scope="col">Modelo</th>
                <th scope="col">Serial</th>
                <th scope="col">Tipo</th>
                <th scope="col">Capacidad</th>
                <th scope="col">Velocidad</th>
              </tr>
            </thead>
            <tbody id="tbodyRam">
              <!-- Aquí se agregarán las filas dinámicamente -->
            </tbody>
          </table>
        </section>
          
        </form>
      </div>

          

          
          <div class="card-body">
            <form>

            <hr class="hr hr-blurry"></hr>
          <div><h3>Disco de Almacenamiento</h3></div>

          <div class="form-row">

            <div class="form-group col-2">
            <label for="txtMarcaDisco">Marca</label>
            <select class="form-control select2" id="txtMarcaDisco" name="txtMarcaDisco" required>
                <option value="">Seleccione...</option>
                <?php
                    include '../Model/conexion.php';
                    $conn = conectarDB("bdd_sisasc");
                    $query = "SELECT marca_marca FROM marca";
                    $result = mysqli_query($conn, $query);

                    if ($result && mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<option value='" . htmlspecialchars($row['marca_marca']) . "'>" . htmlspecialchars($row['marca_marca']) . "</option>";
                        }
                    } else {
                        echo "<option>No hay marcas disponibles</option>";
                    }

                    $conn->close();
                ?>
            </select>
        </div>
          

          <div class="form-group col-2">
              <label for="">Modelo</label>
              <input type="" class="form-control" id="txtModeloDisco" name="txtModeloDisco">
            
          </div>

          

          <div class="form-group col-2">
              <label for="">Serial</label>
              <input type="" class="form-control" id="txtSerialDisco" name="txtSerialDisco">
           
          </div>

          <div class="form-group col-2">
              <label for="">Tipo</label>
              <input type="" class="form-control" id="txtTipoDisco" name="txtTipoDisco">
            
          </div>

          <div class="form-group col-2">
              <label for="">Capacidad</label>
              <input type="" class="form-control" id="txtCapacidadDisco" name="txtCapacidadDisco">
            
          </div>

          <div class="form-group col-2">
              <label for="">Puerto</label>
              <input type="" class="form-control" id="txtPuertoDisco" name="txtPuertoDisco">
            </div>
          </div>

          <button class="btn btn-outline-success" type="button" id="btDisco"><b>Agregar Disco </b></button>
          <br>
          <br>


          <section class="tablaregistros">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Marca</th>
                <th scope="col">Modelo</th>
                <th scope="col">Serial</th>
                <th scope="col">Tipo</th>
                <th scope="col">Capacidad</th>
                <th scope="col">Puerto</th>
              </tr>
            </thead>
            <tbody id="tbodyDisco">
              <!-- Aquí se agregarán las filas dinámicamente -->
            </tbody>
          </table>
        </section>
            
        
          </form>
          </div>

             
          <div class="card-body">
          <form>

          <hr class="hr hr-blurry"></hr>
          <div><h3>Fuente de Poder</h3></div>

          <div class="form-row">

            <div class="form-group col-3">
            <label for="txtMarcaPoder">Marca</label>
            <select class="form-control select2" id="txtMarcaPoder" name="txtMarcaPoder" required>
                <option value="">Seleccione...</option>
                <?php
                    include '../Model/conexion.php';
                    $conn = conectarDB("bdd_sisasc");
                    $query = "SELECT marca_marca FROM marca";
                    $result = mysqli_query($conn, $query);

                    if ($result && mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<option value='" . htmlspecialchars($row['marca_marca']) . "'>" . htmlspecialchars($row['marca_marca']) . "</option>";
                        }
                    } else {
                        echo "<option>No hay marcas disponibles</option>";
                    }

                    $conn->close();
                ?>
            </select>
        </div>

          <div class="form-group col-2">
              <label for="">Modelo</label>
              <input type="" class="form-control" id="txtModeloPoder">
            
          </div>

          <div class="form-group col-3">
              <label for="">Serial</label>
              <input type="" class="form-control" id="txtSerialPoder">
            
          </div>

          <div class="form-group col-2">
              <label for="">Voltaje</label>
              <input type="" class="form-control" id="txtVoltajePoder">
            
          </div>

          <div class="form-group col-2">
              <label for="">Tipo</label>
              <input type="" class="form-control" id="txtTipoPoder">
            </div>
          </div>

        
          </form>
          </div>
              
          <div class="card-body">
          <form>

          <hr class="hr hr-blurry"></hr>
          <div><h3>Lector de Disco</h3></div>

          <div class="form-row">

            <div class="form-group col-3">
            <label for="txtMarcaLector">Marca</label>
            <select class="form-control select2" id="txtMarcaLector" name="txtMarcaLector" required>
                <option value="">Seleccione...</option>
                <?php
                    include '../Model/conexion.php';
                    $conn = conectarDB("bdd_sisasc");
                    $query = "SELECT marca_marca FROM marca";
                    $result = mysqli_query($conn, $query);

                    if ($result && mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<option value='" . htmlspecialchars($row['marca_marca']) . "'>" . htmlspecialchars($row['marca_marca']) . "</option>";
                        }
                    } else {
                        echo "<option>No hay marcas disponibles</option>";
                    }

                    $conn->close();
                ?>
            </select>
        </div>

          <div class="form-group col-2">
              <label for="">Modelo</label>
              <input type="" class="form-control" id="txtModeloLector">
            
          </div>

          <div class="form-group col-3">
              <label for="">Serial</label>
              <input type="" class="form-control" id="txtSerialLector">
            
          </div>

          <div class="form-group col-2">
              <label for="">Tipo</label>
              <input type="" class="form-control" id="txtTipoLector">
            
          </div>

          <div class="form-group col-2">
              <label for="">Puerto</label>
              <input type="" class="form-control" id="txtPuertoLector">
            </div>
          </div>
        
          </form>
          </div>

              
          <div class="card-body">
          <form>

          <hr class="hr hr-blurry"></hr>
          <div><h3>Tarjeta Grafica</h3></div>

          <div class="form-row">

            <div class="form-group col-3">
            <label for="txtMarcaGrafica">Marca</label>
            <select class="form-control select2" id="txtMarcaGrafica" name="txtMarcaGrafica" required>
                <option value="">Seleccione...</option>
                <?php
                    include '../Model/conexion.php';
                    $conn = conectarDB("bdd_sisasc");
                    $query = "SELECT marca_marca FROM marca";
                    $result = mysqli_query($conn, $query);

                    if ($result && mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<option value='" . htmlspecialchars($row['marca_marca']) . "'>" . htmlspecialchars($row['marca_marca']) . "</option>";
                        }
                    } else {
                        echo "<option>No hay marcas disponibles</option>";
                    }

                    $conn->close();
                ?>
            </select>
        </div>

          <div class="form-group col-2">
              <label for="">Modelo</label>
              <input type="" class="form-control" id="txtModeloGrafica">
            
          </div>

          <div class="form-group col-3">
              <label for="">Serial</label>
              <input type="" class="form-control" id="txtSerialGrafica">
            
          </div>

          <div class="form-group col-2">
              <label for="">Capacidad</label>
              <input type="" class="form-control" id="txtCapacidadGrafica">
            
          </div>

          <div class="form-group col-2">
              <label for="">Velocidad</label>
              <input type="" class="form-control" id="txtVelocidadGrafica">
            </div>
          </div>
        
          </form>
        </div>


          
              
          <div class="card-body">
          <form>

          <hr class="hr hr-blurry"></hr>
          <div><h3>Otros Componentes</h3></div>

          <div class="form-row">
            <div class="form-group col-12">
            <label>Observaciones</label>
            <textarea class="form-control" rows="3" id="txtObsComponentes"></textarea>
            </div>
          </div>


        <div class="form-row">
          <button class="btn btn-outline-success" type="button" id = "btCpu" ><b>Agregar</b></button>
          </div>


          </form>
        </div>


     


          
              </div>  
           </div>
        </div>
      </div>
    </div>



    <style>
    hr {
      height: 4px;
      background-color: #cac3c3;
      border: none;
    }
  </style>
                          
                          
