<div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="<?= js_url('jQuery-2.1.4.min') ?>" type="text/javascript"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?= js_url('bootstrap.min') ?>" type="text/javascript"></script>
		<script src="<?= js_url('jquery.dataTables.min') ?>" type="text/javascript"></script>
    <script src="<?= js_url('dataTables.bootstrap.min') ?>" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="<?= js_url('jquery.slimscroll.min') ?>" type="text/javascript"></script>
    <!-- FastClick -->
    <script src="<?= js_url('fastclick.min') ?>" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="<?= js_url('app.min') ?>" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= js_url('demo') ?>" type="text/javascript"></script>
		<script type="text/javascript">
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
  </body>
</html>
