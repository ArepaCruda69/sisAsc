
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="col">

              <div class="card ">
                  <div class="card-header">
                    <H2><u>Registro de CPU</u></H2>
                  </div>


          <div class="card-body">
          <form>

          <div><h3>CPU</h3></div>

          <div class="form-row">
            <div class="form-group col-3">
              <label for="">Nombre</label>
              <input type="" class="form-control" id="txtNombreCpu">
            </div>
            
            <div class="form-group col-3">
               <label>Unidad</label>
                   <select class="form-control select2" id="txtUnidadCpu">
                            
                   <option value="1">opcion 1</option>
                   <option value="2">opcion 2</option>
                   <option value="3">opcion 3</option>
                   <option value="4">opcion 4</option>
                   <option value="5">opcion 5</option>
                </select>
            </div>

            <div class="form-group col-3" >
            <label>Marca</label>
                   <select class="form-control select2" id="txtMarcaCpu">
                            
                   <option value="1">opcion 1</option>
                   <option value="2">opcion 2</option>
                   <option value="3">opcion 3</option>
                   <option value="4">opcion 4</option>
                   <option value="5">opcion 5</option>
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

          <div><h3>Tarjeta Madre</h3></div>

          <div class="form-row">
          <div class="form-group col-4" >
            <label>Marca</label>
                   <select class="form-control select2" id="txtMarcaMadre">
                            
                   <option value="1">opcion 1</option>
                   <option value="2">opcion 2</option>
                   <option value="3">opcion 3</option>
                   <option value="4">opcion 4</option>
                   <option value="5">opcion 5</option>
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

          <div><h3>Procesador</h3></div>

          <div class="form-row">
            <div class="form-group col-3">
            <label>Marca</label>
                   <select class="form-control select2" id="txtMarcaProcesador">
                            
                   <option>opcion 1</option>
                   <option>opcion 2</option>
                   <option>opcion 3</option>
                   <option>opcion 4</option>
                   <option>opcion 5</option>
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

          <div><h3>Tarjeta RAM</h3></div>

          <div class="form-row">

          <div class="form-group col-2">
              <label for="txtMarcaRam">Marca</label>
              <select class="form-control select2" id="txtMarcaRam" name="txtMarcaRam">  
                <option>opcion 1</option>
                <option>opcion 2</option>
                <option>opcion 3</option>
                <option>opcion 4</option>
                <option>opcion 5</option>
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

          <button class="btn btn-outline-success" type="button" id="btRam"><b>Agregar</b></button>
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

          <div><h3>Disco Duro</h3></div>

          <div class="form-row">

          <div class="form-group col-2">
              <label for="txtMarcaDisco">Marca</label>
              <select class="form-control select2" id="txtMarcaDisco" name="txtMarcaDisco">  
                <option>opcion 1</option>
                <option>opcion 2</option>
                <option>opcion 3</option>
                <option>opcion 4</option>
                <option>opcion 5</option>
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

          <button class="btn btn-outline-success" type="button" id="btDisco"><b>Agregar</b></button>
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

          <div><h3>Fuente de Poder</h3></div>

          <div class="form-row">
          <div class="form-group col-3">
              <label for="txtMarcaPoder">Marca</label>
              <select class="form-control select2" id="txtMarcaPoder" name="txtMarcaPoder">  
                <option>opcion 1</option>
                <option>opcion 2</option>
                <option>opcion 3</option>
                <option>opcion 4</option>
                <option>opcion 5</option>
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

          <div><h3>Lector de Disco</h3></div>

          <div class="form-row">
            <div class="form-group col-3">
              <label for="txtMarcaLector">Marca</label>
              <select class="form-control select2" id="txtMarcaLector" name="txtMarcaLector">  
                <option>opcion 1</option>
                <option>opcion 2</option>
                <option>opcion 3</option>
                <option>opcion 4</option>
                <option>opcion 5</option>
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

          <div><h3>Tarjeta Grafica</h3></div>

          <div class="form-row">
          <div class="form-group col-3">
              <label for="txtMarcaGrafica">Marca</label>
              <select class="form-control select2" id="txtMarcaGrafica" name="txtMarcaGrafica">  
                <option>opcion 1</option>
                <option>opcion 2</option>
                <option>opcion 3</option>
                <option>opcion 4</option>
                <option>opcion 5</option>
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
 
</style>


                          
                          
