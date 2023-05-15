<!-- jQuery -->
<script src="{{ asset('admin_assets') }}/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('admin_assets') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('admin_assets') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{ asset('admin_assets') }}/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{ asset('admin_assets') }}/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{ asset('admin_assets') }}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{ asset('admin_assets') }}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('admin_assets') }}/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{ asset('admin_assets') }}/plugins/moment/moment.min.js"></script>
<script src="{{ asset('admin_assets') }}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('admin_assets') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{ asset('admin_assets') }}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('admin_assets') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin_assets') }}/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('admin_assets') }}/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('admin_assets') }}/dist/js/pages/dashboard.js"></script>
<script src="{{ asset('admin_assets') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('admin_assets') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('admin_assets') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('admin_assets') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{ asset('admin_assets') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('admin_assets') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{ asset('admin_assets') }}/plugins/jszip/jszip.min.js"></script>
<script src="{{ asset('admin_assets') }}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{ asset('admin_assets') }}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{ asset('admin_assets') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset('admin_assets') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{ asset('admin_assets') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="https://cdn.tiny.cloud/1/4zw697k2qjv5tbmfbscnw8l7lq50s4lb97f2vy49pv8x83n6/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
   tinymce.init({
        selector: 'textarea',
        plugins: 'autolink lists link image imagetools',
        toolbar: 'undo redo | bold italic | alignleft aligncenter alignright | image',
    });
</script>
<script>
  $(function () {
        //Date picker
    $('#reservationdate').datetimepicker({
    format: 'YYYY-MM-DD'
    });
  })
  // BS-Stepper Init
  
    $(document).ready(function() {
/*      $(".btn-success").click(function(){
          var html = $(".clone").html();
          $(".increment").after(html);
      });
      $("body").on("click",".btn-danger",function(event){
          $(this).parents(".form-group").remove();
      });*/
    });

</script>