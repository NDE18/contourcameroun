  
<div class="content-wrapper">
  <section class="content-header">
    <h1>
		<?= mb_strtoupper("Liste des reservations") ?>
     
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Layout</a></li>
      <li class="active">Fixed</li>
    </ol>
  </section><br><br>
  <section class="content">
	<div class="row">
        <div class="col-xs-12">
			<div class="box">
                <div class="box-header">
                  <h3 class="box-title"></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
						<th class="text-center">#</th>
                        <th>reservation</th>
                        <th>destinataire</th>
                        <th>destinateurs</th>
                        <th>action</th>
                      </tr>
                    </thead>
                    <tbody>
					<?php
						
						if(!empty($reservations) and count($reservations)>0){
								$i=0;			
							foreach ($reservations as $reservation) {	
					?>
                      <tr>
						<td class="text-center"><?php echo ++$i ?></td>
                        <td><?php echo $reservation->users ?></td>
                        <td><?php echo $reservation->trajet ?></td>
                        <td><?php echo $reservation->annonce ?></td>
                        <td>
						<button class="btn bg-purple btn-flat margin">Voir</button>
						<button class="btn bg-maroon btn-flat margin">Supprimer</button>
						<button class="btn bg-olive btn-flat margin">Suspendre</button>
						</td>
                      </tr>
						<?php
							}
						}
						?>
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
    </div>
      </div>
	  		</div>  
</section>

