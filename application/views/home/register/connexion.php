<body onload="script();">
    <!-- Page-->
    <div class="page text-center">
      <!-- Page Header-->
      
<section class="bg-overlay-green">
    <div class="shell text-sm-left">
        <div class="range range-xs-center range-sm-left">
            <div class="cell-xs-10 cell-lg-12">
                <div class="offset-top-80">
                    <h2>Connexion</h2>
                    <hr class="divider divider-lg bg-primary hr-sm-left-0">
                    <div class="content range range-xs-center range-sm-center">
                        <div id="wizard">
                            <section>
                                <form method="post" enctype="multipart/form-data" accept-charset="utf-8" action="<?php echo base_url(); ?>home/validation_connexion">
                                    
                                    <div class="form-group">
                                        <label class="control-label" for="login-username"></label>
                                        <div class="inputWithIcon inputIconBg">
                                          <input class="form-control form-validation-inside" id="pseudo" type="text" name="pseudo" placeholder="pseudo">
                                          <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
                                        </div>
                                        <span id="error_nom" class="text-danger"></span>
                                        <?php echo form_error('pseudo')?>
                                    </div>
                                    <div class="form-group">
                                        <label class="controle-label" for="login-pass"></label>
                                        <div class="inputWithIcon inputIconBg">
                                          <input class="form-control" id="mdp"  type="password" name="mdp" placeholder="Mot de passe">
                                          <i class="fa fa-key fa-lg fa-fw" aria-hidden="true"></i>
                                        </div>
                                        <span id="error_mdp" class="text-danger"></span>
                                        <?php echo form_error('mdp')?>
                                    </div>
                                    <div class="text-center error">
                                        <?php
                                        echo $this->session->flashdata("erreur", '<p style="color:red">',"<p>");
                                        ?>
                                    </div>
                                    <button class="btn btn-sm btn-primary offset-top-25" href="<?= base_url(); ?>">Annuler</button>
                                    <button class="btn btn-sm btn-primary offset-top-25">Se connecter</button>
                                      <div class="offset-top-25 text-center">
                                        <p class="text-white">Avez-vous déjà un compte?</p>
                                        <p><a href="<?= base_url('home/register'); ?>">Créer un compte</a></p>
                                      </div>
                                </form>
                            </section>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
  </section>
  <script type="text/javascript">
      function script(){
        var element = document.getElementById("connexion");
        element.classList.add("active");
      }
    </script> 
</body>
