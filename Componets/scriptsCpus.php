<?php
$form2 = " 
<!-- jQuery -->
<script src='../Assests/plugins/jquery/jquery.min.js'></script>
<!-- Bootstrap 4 -->
<script src='../Assests/plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
<!-- AdminLTE App -->
<script src='../Assests/dist/js/adminlte.min.js'></script>

<!-- DataTables  & Plugins -->
<script src='../Assests/plugins/datatables/jquery.dataTables.min.js'></script>
<script src='../Assests/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'></script>
<script src='../Assests/plugins/datatables-responsive/js/dataTables.responsive.min.js'></script>
<script src='../Assests/plugins/datatables-responsive/js/responsive.bootstrap4.min.js'></script>
<script src='../Assests/plugins/datatables-buttons/js/dataTables.buttons.min.js'></script>
<script src='../Assests/plugins/datatables-buttons/js/buttons.bootstrap4.min.js'></script>
<script src='../Assests/plugins/jszip/jszip.min.js'></script>
<script src='../Assests/plugins/pdfmake/pdfmake.min.js'></script>
<script src='../Assests/plugins/pdfmake/vfs_fonts.js'></script>
<script src='../Assests/plugins/datatables-buttons/js/buttons.html5.min.js'></script>
<script src='../Assests/plugins/datatables-buttons/js/buttons.print.min.js'></script>
<script src='../Assests/plugins/datatables-buttons/js/buttons.colVis.min.js'></script>


<!-- SweetAlert2 -->
<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>



<script src='../Controller/agregar.js'></script>
<script src='../Controller/cancelar.js'></script>
<script src='../Controller/openRam.js'></script>


<script>
  document.getElementById('ramForm').addEventListener('submit', function(event) {
   event.preventDefault();
   // Aquí puedes agregar la lógica para manejar el registro de la tarjeta RAM
   alert('Tarjeta RAM registrada exitosamente');
   // Cerrar el modal después de registrar
   $('#ramModal').modal('hide');
});

</script>

";


?>