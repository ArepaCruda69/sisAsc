
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
                    <input type="tel" class="form-control" id="txtdescripcion" required>
                    <div class="invalid-feedback">
                      Porfavor seleccione una fecha
                    </div>
                  </div>


                  
                  <div class="form-group col-4">
                    <label for="txtMarcaTeclado">Marca</label>
                    <br>
                    <select class="form-control select2" id="txtMarcaTeclado" name="txtMarcaTeclado">  
                    <option value="">Seleccione...</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                    </select>
                  </div>

                  <div class="col-md-4">
                    <label for="inputAddress2" class="form-label"><b>Serial</b><b
                        style="color: red;">*</b></label>
                    <input type="tel" class="form-control" id="txtdescripcion" required>
                    <div class="invalid-feedback">
                      Porfavor seleccione una fecha
                    </div>
                  </div>
<!-- 
                    <div class="col-md-4">

                    <div class="form-group">
                      <label>Puerto</label>
                      <select class="form-control" required>
                      <option value="">Seleccione...</option>
                        <option>USB</option>
                        <option>USB-C</option>
                        <option>PS/2</option>
                        <option>Lightning</option>
                      </select>
                    </div>
                  </div> -->

                  <div class="form-group col-4">
              <label for="txtPuertoTeclado">Puertos</label>
              <select class="form-control select2" id="txtPuertoTeclado" name="txtPuertoTeclado"> 
              <option value="">Seleccione...</option> 
                <option>USB</option>
                <option>USB-C</option>
                <option>PS/2</option>
                <option>Lightning</option>
              </select>
            </div>

            <div class="form-group col-4">
              <label for="txtTipoMonitor">Tipo</label>
              <select class="form-control select2" id="txtTipoMonitor" name="txtTipoMonitor"> 
              <option value="">Seleccione...</option> 
                <option>Membrana</option>
                <option>Mecanico</option>
                <option>Otro</option>
              </select>
            </div>



                  


                  <div class="col-md-6">
                <button class="btn btn-outline-success" type="button" onclick="agregar();"><b>Agregar</b></button>
                <button class="btn btn-outline-danger" type="button" onclick="cancelar();"><b>Cancelar</b></button>
                </div>

                        </form> 
                      </main> 
                   </div>
                 </div>
              </div>
            </div>  
          </div>
        </div> 
     </div>



     <!-- End Main content -->
