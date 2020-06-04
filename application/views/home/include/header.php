<!DOCTYPE html>
<html class="wide wow-animation scrollTo" lang="en">
  <head>
    <!-- Site Title-->
    <title>Eneo covoiturage</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="keywords" content="intense web design multipurpose template">
    <meta name="date" content="Dec 26">
    <link rel="icon" href="<?= img_url('favicon.ico') ?>" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Hind:400,300,700%7CMontserrat:400,700">
    <link rel="stylesheet" href="<?= css_url('style') ?>">
    <link rel="stylesheet" href="<?= css_url('normalize') ?>">
    <link rel="stylesheet" href="<?= css_url('main') ?>">
    <link rel="stylesheet" href="<?= css_url('jquery.steps') ?>">
    <link rel="stylesheet" href="<?= css_url('fine-uploader-gallery') ?>">
    <!--link rel="stylesheet" href="<?= css_url('sweetalert2.min') ?>"-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@8.0.1/dist/sweetalert2.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@8.0.1/dist/sweetalert2.min.css" />
  </head>
  <header class="page-head header-panel-absolute">
        <!-- RD Navbar Transparent-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-default" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-lg-layout="rd-navbar-static" data-stick-up-offset="95" data-stick-up="true" data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true" data-lg-auto-height="true" data-auto-height="false">
            <div class="rd-navbar-inner">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap"><span></span></button>
                <div class="rd-navbar-panel-title">
                  <h4>Accueil</h4>
                </div>
                <!-- RD Navbar Right Side Toggle-->
                <button class="rd-navbar-right-side-toggle veil-md" data-rd-navbar-toggle=".right-side"><span></span></button>
                <div class="shell">
                  <div class="range range-md-middle range-lg-top">
                    <div class="cell-md-3 left-side">
                      <div class="clearfix text-lg-left text-center">
                        <!--Navbar Brand-->
                        <div class="rd-navbar-brand"><a href="<?= base_url(); ?>"><img width='165' height='76' src='<?= img_url('logo-light-165x76.png') ?>' alt=''/></a></div>
                      </div>
                    </div>
                    <div class="cell-md-9 text-md-right right-side">
                      <ul class="offset-lg-top-15 list-unstyled">
                        <li class="reveal-md-inline-block"><span class="icon icon-xxs fa-envelope-o text-middle icon-primary"></span><a class="inset-left-10 text-middle" href="mailto:#">b2ktech@gmail.com</a></li>
                        <li class="reveal-md-inline-block"><span class="icon icon-xxs fa-clock-o text-middle icon-primary"></span><span class="inset-left-10 text-middle">Lun–Dim: 7:00–19:00</span></li>
                        <li class="reveal-md-inline-block"><span class="icon icon-xxs fa-phone text-middle icon-primary"></span><a class="inset-left-10 text-middle" href="tel:#">+237 622334455</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="rd-navbar-menu-wrap">
                <div class="rd-navbar-nav-wrap">
                  <div class="rd-navbar-mobile-scroll">
                    <div class="rd-navbar-mobile-header-wrap">
                      <!--Navbar Brand Mobile-->
                      <div class="rd-navbar-mobile-brand"><a href="index.html"><img width='165' height='76' src='<?= img_url('logo-light-165x76.png') ?>' alt=''/></a><a class="rd-navbar-mobile-search-toggle mdi" data-custom-toggle="rd-navbar-search-mobile" href="home-1.html#"><span></span></a></div>
                      <!--RD Navbar Mobile Search-->
                      <div class="rd-navbar-search-mobile" id="rd-navbar-search-mobile">
                        <form class="rd-navbar-search-form search-form-icon-right rd-search" action="" method="GET">
                         
                        </form>
                      </div>
                    </div>
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                      <li id="accueil"><a href="<?= base_url(); ?>">Accueil</a>
                    
                      </li>
                      <li id="voyage"><a href="#voyage">liste des voyages</a>
                        
                      </li>
                      <li id="information"><a href="#infos">Annonces</a>
                        
                      </li>
                      <li id="plan"><a href="#bon_plan">Bons plans</a></li>
                      <li id="inscription"><a href="<?= base_url('home/register'); ?>">Inscription</a></li>
                      <li id="connexion"><a href="<?= base_url('home/connexion'); ?>">Se connecter</a>
                
                      </li>
                    </ul>
                  </div>
                </div>
                
              </div>
            </div>
          </nav>
        </div>
      </header>
