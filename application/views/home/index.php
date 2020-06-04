<!-- ?php require_once("upload/gallery.html"); ?-->
<body onload="script();">
    <!-- Page-->
    <div class="page text-center">
      <!-- Page Header-->
      
<section class="bg-overlay-green">
    <div class="shell text-sm-left">
    <div class="range range-xs-center range-sm-left">
        <div class="cell-xs-10 cell-lg-12">
        <div class="offset-top-80">
        <h2>Création de compte</h2>
        <?php if(isset($error)) { ?>
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" onclick="$(this).parrent().hide()"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <?php echo $error ?>
        </div>
        <?php } ?>
        <hr class="divider divider-lg bg-primary hr-sm-left-0">
        <div class="content ">
            <div id="wizard">
                <h2>Informations personnelles</h2>
                <section>
                    <form method="post" enctype="multipart/form-data" accept-charset="utf-8" action="">
                        
                        <div class="form-group col-md-6">
                            <label class="control-label" for="login-username">Nom</label>
                            <div class="inputWithIcon inputIconBg">
                              <input class="form-control form-validation-inside" id="nom" type="text" name="nom">
                              <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
                            </div>
                            <span id="error_nom" class="text-danger"></span>
                            <?php echo form_error('nom')?>
                        </div>
                         <div class="form-group col-md-6"> 
                            <label class="control-label" for="login-pass">Prenom</label>
                            <div class="inputWithIcon inputIconBg">
                              <input class="form-control form-validation-inside" id="prenom" type="text" name="prenom">
                              <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
                            </div>
                            <span id="error_prenom" class="text-danger"></span>
                            <?php echo form_error('prenom')?>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label" for="date">Date de Naissance</label>
                            <div class="inputWithIcon inputIconBg">
                              <input class="form-control" id="datenaissance"  type="date" name="datenaissance" data-constraints="@Required">
                              <i class="fa fa-clock-o fa-lg fa-fw" aria-hidden="true"></i>
                            </div>
                            <span id="error_datenaissance" class="text-danger"></span>
                            <?php echo form_error('datenaissance')?>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label" for="login-pass">Fonction</label>
                            <div class="inputWithIcon inputIconBg">
                              <input class="form-control" id="fonction" type="select" name="fonction" data-constraints="@Required">
                              <i class="fa fa-edit fa-lg fa-fw" aria-hidden="true"></i>
                            </div>
                            <span id="error_speudo" class="text-danger"></span>
                            <?php echo form_error('speudo')?>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label" for="login-pass">Speudo</label>
                            <div class="inputWithIcon inputIconBg">
                              <input class="form-control" id="speudo" type="text" name="speudo" data-constraints="@Required">
                              <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
                            </div>
                            <span id="error_speudo" class="text-danger"></span>
                            <?php echo form_error('speudo')?>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label" for="login-pass">Email</label>
                            <div class="inputWithIcon inputIconBg">
                              <input class="form-control"  type="text" id="email" name="email" data-constraints="@Required">
                              <i class="fa fa-envelope fa-lg fa-fw" aria-hidden="true"></i>
                            </div>
                            <span id="error_email" class="text-danger"></span>
                            <?php echo form_error('email')?>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="controle-label" for="login-pass">Mot de passe</label>
                            <div class="inputWithIcon inputIconBg">
                              <input class="form-control" id="mdp"  type="password" name="mdp" data-constraints="@Required">
                              <i class="fa fa-key fa-lg fa-fw" aria-hidden="true"></i>
                            </div>
                            <span id="error_mdp" class="text-danger"></span>
                            <?php echo form_error('mdp')?>
                            <label class="controle-label" for="login-pass">Confirme mot de passe</label>
                            <div class="inputWithIcon inputIconBg">
                              <input class="form-control" id="cmdp" type="password" name="cmdp" data-constraints="@Required">
                              <i class="fa fa-key fa-lg fa-fw" aria-hidden="true"></i>
                            </div>
                            <span id="error_cmdp" class="text-danger"></span>
                            <?php echo form_error('cmdp')?>
                            <label class="controle-label" for="login-pass">Telephone</label>
                            <div class="inputWithIcon inputIconBg">
                              <input class="form-control" id="phone" type="text" name="telephone" data-constraints="@Required">
                              <i class="fa fa-phone fa-lg fa-fw" aria-hidden="true"></i>
                            </div>
                            <span id="error_telephone" class="text-danger"></span>
                            <?php echo form_error('telephone')?>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="controle-label" for="login-pass">Image</label>
              <div id="file-drop-area"></div>
            </div>
                    
                </section>

                <h2>Confirmation du mail</h2>
                <section>
                        <!-- <form action="" method=""> -->
                        <div class="form-group col-md-12">
                            <label class="controle-label" for="login-pass">Entrez le code recu par mail</label>
                            <input class="form-control" id="coderecuparmail"  type="text" name="coderecuparmail" data-constraints="@Required">
                            <span id="error_coderecuparmail" class="text-danger"></span>
                            <?php echo form_error('coderecuparmail')?>
                        </div>
                        
                </section>

                <h2>Activation du N° de téléphone</h2>
                <section>
                        <div class="form-group col-md-12">
                            <label class="controle-label" for="login-pass">Entrez le numero d'activation</label>
                            <input class="form-control" id="numactivation"  type="text" name="numactivation" data-constraints="@Required">
                            <span id="error_numactivation" class="text-danger"></span>
                            <?php echo form_error('numactivation')?>
                        </div>

                </section>

                <h2>Terminé</h2>
                <section>
                </section>
                </form> 
            </div>
        </div>
            <div class="offset-top-55">
            </div>
            
        </div>
        </div>
    </div>
    </div>
  </section>
  <script type="text/javascript">
      function script(){
        var element = document.getElementById("inscription");
        element.classList.add("active");
      }
    </script> 
</body>
