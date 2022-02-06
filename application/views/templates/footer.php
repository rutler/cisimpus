            <!-- Default box -->
            <div class="card">
              
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->



<!-- REQUIRED SCRIPTS -->



<!-- <script type="text/javascript">
  function user_id(){
    var kode_depo = $("#kode_depo").val();
    $.ajax({
      url: 'resep/formresep.php',
      data:"kode_depo="+kode_depo ,
    }).success(function (data) {
      var json = data,
      obj = JSON.parse(json);
      $('#nama_obt').val(obj.nama_obt);
      $('#kkode_depo').val(obj.kkode_depo);
    });
  }
</script> -->

<script src="<?php echo base_url(); ?>boxplate/plugins/jquery/jquery.min.js"></script> <!-- V3.6 -->
<script src="<?php echo base_url(); ?>boxplate/plugins/jquery/jquery1.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>boxplate/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTabl dPlugins -->
<script src="<?php echo base_url(); ?>boxplate/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>boxplate/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>boxplate/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url(); ?>boxplate/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>boxplate/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>boxplate/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>boxplate/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>boxplate/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>boxplate/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url(); ?>boxplate/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>boxplate/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>boxplate/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>boxplate/dist/js/adminlte.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
       "buttons": ["copy", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $("#example3").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#example3_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
