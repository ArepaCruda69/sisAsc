function openRamModal() {
    const ramQuantity = document.querySelector('.input-group select').value;
    const ramModalBody = document.getElementById('ramModalBody');
    
    // Limpia el contenido previo del modal
    ramModalBody.innerHTML = '';
    
    for (let i = 0; i < ramQuantity; i++) {
      const inputGroup = document.createElement('div');
      inputGroup.classList.add('form-group', 'd-flex', 'flex-row', 'flex-wrap');
      
      inputGroup.innerHTML = `
        <h5 class="w-100"><b>Tarjeta RAM ${i+1}</b></h5>
        <div class="col-md-3">
          <label for="ramBrand${i}">Marca:</label>
          <input type="text" id="ramBrand${i}" class="form-control mb-2">
        </div>
        <div class="col-md-3">
          <label for="ramSerial${i}">Serial:</label>
          <input type="text" id="ramSerial${i}" class="form-control mb-2">
        </div>
        <div class="col-md-3">
          <label for="ramType${i}">Tipo:</label>
          <input type="text" id="ramType${i}" class="form-control mb-2">
        </div>
        <div class="col-md-3">
          <label for="ramSize${i}">Tamaño:</label>
          <input type="text" id="ramSize${i}" class="form-control mb-2">
        </div>
      `;
      
      ramModalBody.appendChild(inputGroup);
    }
  }
  