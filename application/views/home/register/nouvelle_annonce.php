<?php require_once("upload/gallery.html"); ?>
<body onload="script();">
    <!-- Page-->

      <!-- Page Header-->
<div class="page text-center">
      <!-- Page Header-->
<main class="page-content">      
<section class="section-20 section-skew section-lg-top-20 section-lg-bottom-120 bg-overlay-green">
  <div class="skew-block"></div>
    <div class="shell text-sm-left">
        <div class="range range-xs-center range-sm-left">
            <div class="cell-xs-10 cell-lg-12">
                <div class="offset-top-80">
                <h2>Nouvelle annonce</h2>
                <hr class="divider divider-lg bg-primary hr-sm-left-0">
                <div class="content form_border">
                    <form method="post" enctype="multipart/form-data" accept-charset="utf-8" action="enregistrer_annonce" >
                                
                        <div class="form-group col-md-6"> 
                            <label class="control-label" for="depart">Type d'annonce</label>
                            <div class="inputWithIcon inputIconBg">
                              <select class="form-control form-validation-inside" id="depart" type="select" name="type">
                                <option selected disabled value="11">Selectionnez le type </option>
                                <option value ="Accident">Accident </option >
                                <option value ="Décès">Décès </option >
                                <option value ="Maladie">Maladie </option >
                                <option value ="Vente">Vente</option >
                                <i class="fa fa-flag-o fa-lg fa-fw" aria-hidden="true"></i>
                              </select>
                            </div>
                            <span id="error_type" class="text-danger"></span>
                            <?php echo form_error('type')?></br>
                            <label class="control-label" for="login-pass">Titre</label>
                            <div class="inputWithIcon inputIconBg">
                                <input class="form-control form-validation-inside" id="titre" type="text" name="titre">
                                <i class="fa fa-edit fa-lg fa-fw" aria-hidden="true"></i>
                            </div>
                            <span id="error_titre" class="text-danger"></span>
                            <?php echo form_error('titre')?></br>
                            <label class="controle-label" for="login-pass">Image</label>
                            <div id="file-drop-area"></div>
                        </div>
                                 
                        <div class="form-group col-md-6">
                            <label class="controle-label" for="login-pass">Détails</label>
                            <div class="inputWithIcon inputIconBg">
                              <textarea class="form-control" id="detail" name="detail" style="height: 300px;"></textarea>
                            </div>
        					<span id="error_detail" class="text-danger"></span>
                            <?php echo form_error('detail')?></br></br>
                            <button class="btn-right btn btn-sm btn-primary offset-top-25 submit">Enregistrer</button>
        				</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </section>
</div>
</section>
</main>
</div>
  <script type="text/javascript">
      function script(){
        var element = document.getElementById("annonce");
        element.classList.add("active");
      }
    </script> 
</body>
