<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<title>board</title>
  	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	  <link rel="stylesheet" href="<?php echo css_url('w3')?>">
	  <link href="<?php echo css_url('font-awesome/css/font-awesome.min')?>" rel="stylesheet">
  	<link rel="stylesheet" href="<?php echo css_url('bootstrap.min')?>" >
  	<link rel="stylesheet" href="<?php echo css_url('dataTables.bootstrap')?>">
  	<link rel="stylesheet" href="<?php echo css_url('AdminLTE.min')?>">
  	<link rel="stylesheet" href="<?php echo css_url('skins/skin-purple.min')?>">
  	<link rel="stylesheet" href="<?php echo css_url('daterangepicker')?>">

  	<script src="<?php echo  js_url('jquery-2.2.3.min'); ?>"></script>
<style media="screen">
  textarea{
    background-color: white
  }
</style>

</head>


<body class="hold-transition skin-purple sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <a href="#" class="logo">
      <span class="logo-mini"><b>E</b>B</span>
      <span class="logo-lg"><b>Entreprise</b>BOARD</span>
    </a>
    <nav class="navbar navbar-static-top" role="navigation">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo img_url($_SESSION['photo'])?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION['nom'].' '.$_SESSION['prenom']?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="<?php echo img_url($_SESSION['photo'])?>" class="img-circle" alt="User Image">
                <p>
                  <?php echo $_SESSION['nom'].' '.$_SESSION['prenom']?>
                  <small><?php echo 'Travaille à '.$_SESSION['service'].' Comme '.$_SESSION['fonction']?></small>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?= site_url('deconnexion') ?>" class="btn btn-default btn-flat">Déconnexion</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
