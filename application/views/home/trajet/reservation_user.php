<style>
#avatar {
    /* This image is 687 wide by 1024 tall, similar to your aspect ratio */
    background-image: url("<?= img_url('backgrounds/IMG_2507.jpg') ?>");
    
    /* make a square container */
    width: 75px;
    height: 60px;

    /* fill the container, preserving aspect ratio, and cropping to fit */
    background-size: cover;

    /* center the image vertically and horizontally */
    background-position: top center;

    /* round the edges to a circle with border radius 1/2 container size */
    border-radius: 50%;
}
</style>
<body onload="script();">
<div class="page text-center">
      <!-- Page Header-->
<main class="page-content">
<section class="section-80 section-skew section-lg-top-90 section-lg-bottom-120 bg-overlay-green">
  <div class="skew-block"></div>
    <div class="shell text-sm-left">
        <div class="range range-xs-center range-sm-left">
            <div class="cell-xs-10 cell-lg-12">
                <h2>Mes reservations</h2>
                <hr class="divider divider-lg bg-primary hr-sm-left-0">
                <div class="content ">
                    <div id="displaylist">
                    <?php
                      if($fetch_data->num_rows() > 0)
                          { 
                        foreach($fetch_data->result() as $row){ ?>
                              <form id="form_modif_reservation" action="formmodifier_reservation" method="post">
                                <div class="border-bottom container-striped" id="container"></br>
                                  <div class="col-md-6">  
                                    <div class="col-md-6" id="containers">
                                      <div class="col-md-6">
                                        <label class="control-label" for="login-username">Reservation effectuée le</label></br>
                                        <label class="control-label" for="login-username">Départ</label></br>
                                        <label class="control-label" for="login-username">Arrivée</label></br>
                                        <label class="control-label" for="login-username">Date de départ</label></br>
                                        <label class="control-label" for="login-username">Date arrivée</label></br>
                                        <label class="control-label" for="login-username">Vehicule</label></br></br>
                                      </div>
                                      <div class="col-md-6 data-font" id="data-font">
                                        <label class="control-label data-font" for="login-username" id="villedepart"><?php echo $row->date;?></label></br>
                                        <label class="control-label data-font" for="login-username" id="villedepart"><?php echo $row->villedepart;?></label></br>
                                        <label class="control-label data-font" for="login-username" id="villearrive"><?php echo $row->villearrive;?></label></br>
                                        <label class="control-label data-font" for="login-username" id="datedepart"><?php echo $row->datedepart;?></label></br>
                                        <label class="control-label data-font" for="login-username" id="datearrive"><?php echo $row->datearrive;?></label></br>
                                        <label class="control-label data-font" for="login-username" id="vehicule"><?php echo $row->voiture;?></label>
                                      </div>
                                    </div> 
                                  </div>
                                  <div class="col-md-6 text-center">
                                    <div class="col-md-6 border-left" id="containers">
                                      <div class="col-md-6">
                                        </br><label class="control-label data-font" for="login-username"><?php echo $row->place;?></label></br>
                                        <label class="control-label" for="login-username ">place(s) reservée(s)</label>
                                        <!--input onclick="deletetrajet(<?php echo $row->id;?>)" type="button" text="Supprimer" class="btn-deluge btn-padding" id=<?php echo $compteur;?> -->
                                      </div>
                                      <div class="col-md-6 border-left">
                                        <label class="control-label" for="login-username ">Montant total à payer</label></br>
                                        <label class="control-label" for="login-username" id="montant"><?php echo $row->prixplace*$row->place .' FCFA';?></label></br>
                                      </div>
                                    </div>

                                  </div></br>
                                  <div class="col-md-6" >
                                      <div class="col-md-12">
                                        <div class="col-md-6">
                                          <button id="btnR" class=" btn btn-sm btn-primary offset-top-25" >Modifier</button></br></br>
                                          <input type="hidden" id="place" name="place_disponible" value=<?php echo $row->place + $row->place_disponible;?>>
                                          <input type="hidden" id="id_trajet" name="id_trajet" value=<?php echo $row->trajet;?>>
                                          <input type="hidden" id="id" name="id" value=<?php echo $row->id;?>>
                                        </div>
                                        <div class="col-md-6">
                                        <?php if($row->status == "annuler"){
                                          ?>
                                          <button type="button" id="" onclick="annuler_reservation(<?php echo $row->id;?>,<?php echo $row->trajet;?>,<?php echo $row->place + $row->place_disponible;?>)" class="btn-right btn btn-sm btn-deluge offset-top-25" disabled>Annuler</button></br></br>
                                        <?php }
                                        else{ ?>
                                          <button type="button" id="" onclick="annuler_reservation(<?php echo $row->id;?>,<?php echo $row->trajet;?>,<?php echo $row->place + $row->place_disponible;?>)" class="btn-right btn btn-sm btn-deluge offset-top-25" text="">Annuler</button></br></br>
                                        <?php } ?>
                                        </div>
                                        
                                      </div>
                                      
                                    </div>
                                </div> 
                              </form>
                      <?php }
                    }
                      else
                      { ?>
                        <div>O DATA FOUND</div>
                      <?php } ?> 
                    </div>
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
