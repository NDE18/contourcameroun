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
                <h2>Modifier reservation</h2>
                <hr class="divider divider-lg bg-primary hr-sm-left-0">
                <div class="content ">
                    <div id="displaylist">
                    <?php
                      if($fetch_data->num_rows() > 0)
                          { 
                        foreach($fetch_data->result() as $row){ ?>
                              <form id="form_modifier_reservation" action="modifier_reservation" method="post">
                                <div class="border-bottom container-striped" id="container"></br>
                                  <div class="col-md-6 border-left">  
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
                                      <div class="border-bottom container-striped" id="containers">
                                        <label class="control-label" for="login-username">Information</label></br>
                                        <label class="control-label data-font" for="login-username" id="vehicule"><?php echo $row->infos;?></label>
                                      </div></br>
                                    </div> 
                                  </div>
                                  <div class="col-md-6 text-center">
                                    <div class="col-md-6 border-left" id="containers">
                                      <div class="col-md-6">
                                        <label class="control-label" for="login-username" id="montant"><?php echo $row->place;?></label></br>
                                        <label class="control-label" for="login-username "id="place-price">place(s) reservée(s)</label>
                                        <label class="control-label" for="login-username" id="montant"><?php echo $row->prixplace .' FCFA';?></label></br>
                                        <label class="control-label" for="login-username "id="place-price">/place</label>
                                        <!--input onclick="deletetrajet(<?php echo $row->id;?>)" type="button" text="Supprimer" class="btn-deluge btn-padding" id=<?php echo $compteur;?> -->
                                        <input type="hidden" id="id_trajet" name="id_trajet" value=<?php echo $row->id;?>>
                                      </div>
                                      <div class="col-md-6 border-left">
                                        <label class="control-label" for="login-username ">Montant total à payer</label></br>
                                        <label class="control-label" for="login-username" id="montant"><?php echo $row->prixplace*$row->place .' FCFA';?></label></br>
                                        <label class="control-label data-font" for="login-username" id="place-restante"><?php echo $row->place_disponible.'/'. $row->nombreplace;?> </label></br>
                                        <label class="control-label" for="login-username" id="place-restante">Place(s) restante(s)</label></br>
                                      </div>
                                    </div>

                                  </div></br>
                                  <div class="col-md-6" >
                                      <div class="col-md-12">

                                        <div class="col-md-6">
                                          <label class="control-label" for="login-username" id="place_reserve">Nombre de place</label>
                                         </br><input class="form-control" id="place_reserve" name="place_reserve" type="number" min="0" max=<?php echo $row->place+$row->place_disponible;?> id="place">
                                        </div>
                                        <div class="col-md-6">
                                          </br><input type="checkbox" name="conditions_generales" id="conditions_generales">
                                          <a href="">J'ai lu et j'accepte les conditions générales</a>
                                          <button id="btnModifReserve" class="btn-right btn btn-sm btn-primary offset-top-25">Ok</button></br></br>
                                          <input type="hidden" id="id_trajet" name="id_trajet" value=<?php echo $row->trajet;?>>
                                          <input type="hidden" id="id_trajet" name="id_reservation" value=<?php echo $row->id;?>>
                                          <input class="form-control" name="place_disponible" type="hidden" value=<?php echo $row->place+$row->place_disponible;?> id="place">
                                          <input class="form-control" name="id_trajet" type="hidden" value=<?php echo $row->trajet;?> id="place">
                                        </div>
                                        
                                      </div>
                                      
                                    </div>
                                </div> 
                              </form>
                      <?php 
                      }
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
