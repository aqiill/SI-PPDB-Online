<footer class="main-footer fixed-bottom">
    <strong>Lembaga Sertifikasi Profesi Informatika - Aqil Rahman</strong>
    <div class="float-right d-none d-sm-inline-block">
        Dimuat dalam <strong>{elapsed_time}</strong> detik. <?php echo (ENVIRONMENT === 'development') ?  '' : '' ?>
    </div>
</footer>
</div>
<script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/jquery-ui/jquery-ui.min.js') ?>"></script>
<script>
$.widget.bridge('uibutton', $.ui.button)
</script>
<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/chart.js/Chart.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/sparklines/sparkline.js') ?>"></script>
<!-- <script src="<?php echo base_url('assets/plugins/jqvmap/jquery.vmap.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/jqvmap/maps/jquery.vmap.usa.js') ?>"></script> -->
<script src="<?php echo base_url('assets/plugins/jquery-knob/jquery.knob.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/moment/moment.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/daterangepicker/daterangepicker.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') ?>">
</script>
<script src="<?php echo base_url('assets/plugins/summernote/summernote-bs4.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') ?>"></script>
<script src="<?php echo base_url('assets/dist/js/adminlte.js') ?>"></script>
<script src="<?php echo base_url('assets/dist/js/demo.js') ?>"></script>
<script src="<?php echo base_url('assets/dist/js/pages/dashboard.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/jszip/jszip.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/pdfmake/pdfmake.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/pdfmake/vfs_fonts.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables-buttons/js/buttons.html5.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables-buttons/js/buttons.print.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') ?>"></script>
<script>
$(function() {
    $("#example1").DataTable({
        "responsive": true,
        "lengthChange": true,
        "autoWidth": true,
        "buttons": ["excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
    });
});
</script>
<script>
$(function() {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
        mode: "htmlmixed",
        theme: "monokai"
    });
})
</script>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
</body>

</html>