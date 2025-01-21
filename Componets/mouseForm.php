
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
                      <label for="txtMarcaMonitor">Marca</label><br>
                      <select class="form-control select2" id="txtMarcaMonitor" name="txtMarcaMonitor">
                      <option value="">Seleccione...</option>  
                        <option>opcion 1</option>
                        <option>opcion 2</option>
                        <option>opcion 3</option>
                        <option>opcion 4</option>
                        <option>opcion 5</option>
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

                  <div class="form-group col-4">
                    <label for="txtPuertoMouse">Puertos</label>
                    <select class="form-control select2" id="txtPuertoMouse" name="txtPuertoMouse"> 
                    <option value="">Seleccione...</option> 
                      <option>USB</option>
                      <option>USB-C</option>
                      <option>PS/2</option>
                      <option>Lightning</option>
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
