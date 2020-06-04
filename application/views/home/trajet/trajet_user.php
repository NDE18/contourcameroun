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
                <h2>Trajet(s) enregistré(s)</h2>
                <hr class="divider divider-lg bg-primary hr-sm-left-0">
                <div class="content ">
                    <form id="container" action="nouveau_trajet" method="" class="form-inline">
                      <div class="form-group">
                        <button class="btn btn-primary submit">Nouveau trajet</button>
                      </div>
                    </form>
                    <div id="displaylist">
                    <?php
                      $compteur=0;
                      if($fetch_data->num_rows() > 0)
                          {
                            $item = $fetch_data->num_rows();
                            $num_paging = $item/5;
                            $num_paging = ceil($num_paging);
                            foreach($fetch_data->result() as $row)
                            { if($compteur % 2 ) { ?>
                              <form id="form_detail" action="get_trajet" method="post">
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
                                      <label class="control-label" for="login-username" id="place-restante"><?php echo $row->nombreplace.' places restantes';?> </label></br>
                                      <input onclick="deletetrajet(<?php echo $row->id;?>)" type="button" text="Supprimer" class="btn-deluge btn-padding" id=<?php echo $compteur;?>>
                                      <button class="btn-right btn-primary btn-padding">Modifier</button>
                                      <input type="hidden" id="id_trajet" name="id_trajet" value=<?php echo $row->id;?>>
                                    </div>
                                    
                                  </div>
                                </div> 
                              </form>
                            <?php }
                            else { ?>
                              <form id="form_details" action="get_trajet" method="post">
                                <div class="border-bottom container-striped" id="container-striped">
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
                                      <label class="control-label" for="login-username" id="place-restante"><?php echo $row->nombreplace.' places restantes';?> </label></br>
                                      <input onclick="deletetrajet(<?php echo $row->id;?>)" type="button" text="Supprimer" class="btn-deluge btn-padding" id=<?php echo $compteur;?>>
                                      <button class="btn-right btn-primary btn-padding">Modifier</button>
                                      <input type="hidden" id="id_trajet" name="id_trajet" value=<?php echo $row->id;?>>
                                    </div>
                                    
                                  </div>
                                </div> 
                              </form>
                       <?php }
                        $compteur++;
                      }
                       for($num = 1; $num <= $num_paging; $num++)
                       { 
                       //echo $halaman;
                       ?>
                         <a href=""><?php echo $num. " "; ?></a>
                            }
                       
                      <?php }
                      }
                      else
                      { ?>
                        <div>O DATA FOUND</div>
                      <?php } ?> 
                    </div>
                    <div id='pagination'></div>
                </div>
            </div>
        </div>
    </div>
  </section>
</main>
</div>
<script type="text/javascript">
      function script(){
        var element = document.getElementById("trajet");
        element.classList.add("active");
      }
</script>   
</body>
