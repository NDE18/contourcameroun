<aside class="main-sidebar">
	<section class="sidebar">
		<div class="user-panel">
			<div class="pull-left image">
				<img src="<?= img_url($_SESSION['photo'])?>" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				<p><?= $_SESSION['nom'].' '.$_SESSION['prenom']?></p>
				<a href="#"><i class="fa fa-circle text-success"></i> Connecté</a>
			</div>
		</div>
		<ul class="sidebar-menu">
			<li class="header">MENU PRINCIPAL</li>
			<!-- Optionally, you can add icons to the links -->
			<li><a href="<?= site_url() ?>"><i class="fa fa-home"></i> <span>Accueil</span></a></li>
			<li class="treeview active">
				<a href="#"><i class="fa  fa-info-circle"></i> <span>Annonces</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li class="active"><a href="#"><i class="fa fa-edit"></i> <span>Enregistrer Une Annonce</span></a></li>
					<li><a href="<?= site_url('Annonces/liste') ?>"><i class="fa fa-list"></i> <span>Liste Des Annonces</span></a></li>
				</ul>
			</li>
			<li class="treeview">
				<a href="#"><i class="fa fa-newspaper-o"></i> <span>Breaking News</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="<?= site_url('News') ?>"><i class="fa fa-edit"></i> <span>Enregistrer Une News</span></a></li>
					<li><a href="<?= site_url('News/liste') ?>"><i class="fa fa-list"></i> <span>Liste Des News</span></a></li>
				</ul>
			</li>

			<li class="treeview">
				<a href="#"><i class="fa fa-newspaper-o"></i> <span>Emploi de temps</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="<?= site_url('Annonces/emploi') ?>"><i class="fa fa-edit"></i> <span>Enregistrer_emploi_temps</span></a></li>

				</ul>
			</li>
			<li class="treeview">
				<a href="#"><i class="fa fa-newspaper-o"></i> <span>Resultats</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="<?= site_url('Resultat/ajouter') ?>"><i class="fa fa-edit"></i> <span>Enregistrer un Resultat</span></a></li>
					<li><a href="<?= site_url('Resultat/liste') ?>"><i class="fa fa-edit"></i> <span>Liste des Resultats</span></a></li>
				</ul>
			</li>


			<li class="treeview">
				<a href="#"><i class="fa fa-users"></i> <span>Utilisateurs</span>
					<span class="pull-right-container">
        				<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="<?= site_url('Users/ajouter') ?>"><i class="fa fa-user-plus"></i> <span>Enregistrer Un Utilisateur</span></a></li>
					<li><a href="<?= site_url('Users/liste') ?>"><i class="fa fa-list"></i> <span>Liste Des Utilisateurs</span></a></li>
				</ul>
			</li>
		</ul>
	</section>
	<!-- /.sidebar -->
</aside>
