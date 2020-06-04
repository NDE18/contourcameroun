<body onload="script();">
<div class="page text-center">
      <!-- Page Header-->
<main class="page-content">
<section class="section-80 section-skew section-lg-top-90 section-lg-bottom-120 bg-overlay-green" id="voyage">
          <div class="skew-block"></div>
          <div class="shell text-md-left">
            <h2>Liste des voyages</h2>
              <hr class="divider divider-lg bg-primary hr-md-left-0">
                  <div class="range text-md-left offset-top-50">
                    <div class="" id="container">
                      <h3>Rechercher un trajet</h3>
                      <form action="rechercher_trajet" method="post" class="form-inline text-center">
                      <div class="form-group">
                        <label class="control-label" for="login-username">De</label>
                        <i class="fa fa-flag-o fa-lg fa-fw" style="color: #98c013;" aria-hidden="true"></i>
                      </div>
                      <div class="form-group">
                        <select class="form-control form-validation-inside select-width" id="depart" type="select" name="depart">
                          <option selected disabled value="11">Select region</option>
                          <option value ="Adamawa">Adamawa </option >
                          <option value ="Centre">Centre </option >
                          <option value ="East">East</option >
                          <option value ="Far North">Far North</option >
                        </select>
                      </div>
                      <div class="form-group">
                        <label class="control-label" for="login-username">A</label>
                        <i class="fa fa-flag-customize fa-lg fa-fw" aria-hidden="true"></i>                      
                      </div>
                      <div class="form-group">
                        <select class="form-control form-validation-inside select-width" id="depart" type="select" name="arrive">
                          <option selected disabled value="11">Select region</option>
                          <option value ="Adamawa">Adamawa </option >
                          <option value ="Centre">Centre </option >
                          <option value ="East">East</option >
                          <option value ="Far North">Far North</option >
                        </select>
                      </div>
                      <div class="form-group">
                        <label class="control-label" for="login-username">Le</label>
                        <i class="fa fa-calendar fa-lg fa-fw" style="color: #98c013;" aria-hidden="true"></i>
                        <input class="form-control form-validation-inside" type="date" name="date">
                      </div>
                      <div class="form-group">
                        <button class="btn-primary submit">
                          <i class="fa fa-search"></i>
                        </button>
                      </div>
                      </form>
                      <h3><a href="<?= base_url('home/ouvrir_session'); ?>">Afficher tous les trajets</a></h3>
                    </div>
                  </div>

<?php
                  $compteur=0;
                  if($fetch_data->num_rows() > 0)
                      {
                        foreach($fetch_data->result() as $row)
                        { ?>
                          <form action="form_reservation" method="post" id="new_resrvation">
                          <div class="border-bottom container-striped" id="container">
                            <div class="col-md-3"> 
                                <img class="img-valign" src="<?= img_url('backgrounds/IMG_2507.jpg') ?>" alt="" />
                                <label class="control-label" for="login-username">Vehicule:</label>
                            </div>
                            <div class="col-md-9 border-left">  
                              <div class="col-md-4">
                                <label class="control-label" for="login-username" id="datevoyage"><?php echo $row->datedepart;?></label></br>
                                <label class="control-label" for="login-username" id="trajets"><?php echo $row->villedepart.'-'.$row->villearrive;?></label></br>
                                <label class="control-label" for="login-username">Vehicule:</label>
                                <label class="control-label" for="login-username" id="vehicule"><?php echo $row->voiture;?></label>
                              </div>
                              <div class="col-md-4">
                                <label class="control-label" for="login-username" id="montant"><?php echo $row->prixplace .' FCFA';?></label>
                                <label class="control-label" for="login-username "id="place-price">/place</label></br>
                                <label class="control-label" for="login-username" id="place-restante"><?php echo $row->place_disponible.' places restantes';?> </label></br>
                                <input type="text" id="id_trajet" name="id_trajet" value=<?php echo $row->id;?>>
                                <button  class="btn-primary submit">Réserver</button></br>
                              </div>
                            </div>
                          </div> 
                        </form>
                   <?php $compteur++;
                    }  
                  }  
                  else {
                   ?>
                    <div>O DATA FOUND</div>
                  <?php } 
                  ?>
                  <div><?php echo $compteur.' resultat(s).';?></div>
                  </div>
            </div>
        </div>
    </div>
  </section>
</main>
</div>
<script type="text/javascript">
      function script(){
        var element = document.getElementById("reservation");
        element.classList.add("active");
      }
</script>   
</body>