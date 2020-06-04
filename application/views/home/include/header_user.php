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
    <link rel="stylesheet" href="<?= css_url('sweetalert2.min') ?>">
    <link rel="stylesheet" href="<?= css_url('fine-uploader-gallery') ?>">
    <!--link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@8.0.1/dist/sweetalert2.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@8.0.1/dist/sweetalert2.min.css"/-->
  </head>
<!-- Page-->
    <div class="page text-center">
      <!-- Page Header-->
      <header class="page-head header-panel-absolute">
        <!-- RD Navbar Transparent-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-minimal" data-sm-device-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-stick-up-offset="2" data-lg-auto-height="true" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-stick-up="true">
            <div class="rd-navbar-inner">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap"><span></span></button>
                <div class="rd-navbar-panel-title veil-lg reveal-inline-block">
                  <h4>Home 3</h4>
                </div>
                <div class="rd-navbar-brand"><a href="index.html"><img width='165' height='76' alt=''/></a></div>
              </div>
              <div class="rd-navbar-menu-wrap">
                <div class="rd-navbar-nav-wrap">
                  <div class="rd-navbar-mobile-scroll">
                    <div class="rd-navbar-mobile-header-wrap">
                      <!--Navbar Brand Mobile-->
                      <div class="rd-navbar-mobile-brand"><a href="index.html"><img width='165' height='76' alt=''/></a><a class="rd-navbar-mobile-search-toggle mdi" data-custom-toggle="rd-navbar-search-mobile" href="home-3.html#"><span></span></a></div>
                      <!--RD Navbar Mobile Search-->
                      <div class="rd-navbar-search-mobile" id="rd-navbar-search-mobile">
                        <form class="rd-navbar-search-form search-form-icon-right rd-search" action="https://livedemo00.template-help.com/wt_58977_v5/search-results.html" method="GET">
                          <div class="form-group">
                            <label class="form-label" for="rd-navbar-mobile-search-form-input">Search</label>
                            <input class="rd-navbar-search-form-input form-control form-control-gray-lightest" id="rd-navbar-mobile-search-form-input" type="text" name="s" autocomplete="off"/>
                          </div>
                        </form>
                      </div>
                    </div>
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                      <li id="accueil_user"><a href="<?= base_url('home/ouvrir_session'); ?>">Acceuil</a>
                        
                      </li>
                      <li id="trajet"><a href="<?= base_url('trajet_controller/liste_trajet_user'); ?>">Un Trajet</a>
                       
                      </li>
                      <li id="annonce"><a href="<?= base_url('home/annonce_user'); ?>">Mes Annonces</a>
                        
                      </li>
                      <li id="reservation"><a href="<?= base_url('home/reservation_user'); ?>">Mes Reservations</a>
                        
                      </li>
                      <li><a href="blog-default.html">Mon Compte</a>
                      </li>

                      <li><a href="<?= base_url('home/deconnection'); ?>">Se deconnecter</a>
                      </li>
                     
                    </ul>
                  </div>
                </div>
                <!--RD Navbar Search-->
                <div class="rd-navbar-search">
							   <!-- <form class="rd-navbar-search-form search-form-icon-right rd-search" action="https://livedemo00.template-help.com/wt_58977_v5/search-results.html" data-search-live="rd-search-results-live" method="GET">
                    <div class="form-group">
                      <label class="form-label" for="rd-navbar-search-form-input">Search</label>
                      <input class="rd-navbar-search-form-input form-control form-control-gray-lightest" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off"/>
                      <div class="rd-search-results-live" id="rd-search-results-live"></div>
                    </div>
                  </form> -->
                  <div id="avatar"></div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
    </div>