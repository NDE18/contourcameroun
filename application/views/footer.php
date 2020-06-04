    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        Tout Ce dont Vous Avez Besoin
      </div>
      <strong>Copyright &copy; 2018 <a href="#">Eboards</a>.</strong> Tous Droits Resevés.
    </footer>
    </div>
    <!--script src="<?php echo  js_url('jquery-2.2.3.min'); ?>"></script-->
    <script src="<?php echo  js_url('jquery-ui.min'); ?>"></script>
    <script src="<?php echo  js_url('bootstrap.min'); ?>"></script>
    <script src="<?php echo  js_url('moment/moment'); ?>"></script>
    <script src="<?php echo  js_url('daterangepicker'); ?>"></script>
    <script src="<?php echo  js_url('jquery.dataTables.min'); ?>"></script>
    <script src="<?php echo  js_url('dataTables.bootstrap.min'); ?>"></script>
    <script src="<?php echo  js_url('jquery.slimscroll.min'); ?>"></script>
    <script src="<?php echo  js_url('app.min'); ?>"></script>
    <script src="<?php echo  js_url('demo'); ?>"></script>
    <script type="application/javascript">
		$(document).ready(function(){
			<?= active_menus(isset($active_menus)?$active_menus:[]) ?>
		});
	</script>
  </body>
</html>
