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
<body onload="script()">
<div class="page text-center">
      <!-- Page Header-->
<main class="page-content">
<section class="section-80 section-skew section-lg-top-90 section-lg-bottom-120 bg-overlay-green">
  <div class="skew-block"></div>
    <div class="shell text-sm-left">
    <div class="range range-xs-center range-sm-left">
        <div class="cell-xs-10 cell-lg-12">
        <h2>Nouveau trajet</h2>
        <hr class="divider divider-lg bg-dark-blue hr-sm-left-0">
        <div class="content form_border">
                    <form method="post" id="formTrajet" enctype="multipart/form-data" accept-charset="utf-8" action="validation_nouveau_trajet">
                        
                        <div class="form-group col-md-6">
                            <label class="control-label" for="voiture">La voiture</label>
                            <div class="inputWithIcon inputIconBg">
                              <input class="form-control form-validation-inside" id="voiture" type="text" name="voiture">
                              <i class="fa fa-car fa-lg fa-fw" aria-hidden="true"></i>
                            </div>
                            <span id="error_voiture" class="text-danger"></span>
                            <?php echo form_error('voiture')?>
                        </div>
                         <div class="form-group col-md-6"> 
                            <label class="control-label" for="depart">Ville de départ</label>
                            <div class="inputWithIcon inputIconBg">
                              <select class="form-control form-validation-inside" id="depart" type="select" name="depart">
                                <option selected disabled value="11">Select region</option>
                                <option value ="Adamawa">Adamawa </option >
                                <option value ="Centre">Centre </option >
                                <option value ="East">East</option >
                                <option value ="Far North">Far North</option >
                                <i class="fa fa-flag-o fa-lg fa-fw" aria-hidden="true"></i>
                              </select>
                            </div>
                            <span id="error_depart" class="text-danger"></span>
                            <?php echo form_error('depart')?>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label" for="datedepart">Date et heure de départ </label>
                            <div class="inputWithIcon inputIconBg">
                              <input class="form-control" id="datedepart" value="2019-01-12T19:30" type="datetime-local" name="datedepart">
                              <i class="fa fa-calendar fa-lg fa-fw" aria-hidden="true"></i>
                            </div>
                            <span id="error_datedepart" class="text-danger"></span>
                            <?php echo form_error('datedepart')?>
                        </div>
                        <div class="form-group col-md-6"> 
                            <label class="control-label" for="arrive">Ville d'arrivée</label>
                            <div class="inputWithIcon inputIconBg">
                              <select class="form-control form-validation-inside" id="arrive" type="select" name="arrive">
                                <option selected disabled value="11">Select region</option>
                                <option value ="Adamawa">Adamawa</option >
                                <option value ="Centre">Centre</option >
                                <option value ="East">East</option >
                                <option value ="Far North">Far North</option >
                                <i class="fa fa-flag-o fa-lg fa-fw" aria-hidden="true"></i>
                              </select>
                            </div>
                            <span id="error_arrive" class="text-danger"></span>
                            <?php echo form_error('arrive')?>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label" for="datearrive">Date et heure d'arrivée </label>
                            <div class="inputWithIcon inputIconBg">
                              <input class="form-control" id="datearrive" type="datetime-local" name="datearrive" value="2019-01-12T19:30">
                              <i class="fa fa-calendar fa-lg fa-fw" aria-hidden="true"></i>
                            </div>
                            <span id="error_datearrive" class="text-danger"></span>
                            <?php echo form_error('datearrive')?>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label" for="place">Nombre de place</label>
                            <div class="inputWithIcon inputIconBg">
                              <input class="form-control"  type="number" min="1" id="place" name="place">
                              <i class="fa fa-envelope fa-lg fa-fw" aria-hidden="true"></i>
                            </div>
                            <span id="error_place" class="text-danger"></span>
                            <?php echo form_error('place')?>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label" for="infos">Informations complémentaires</label>
                            <div class="inputWithIcon inputIconBg">
                              <textarea class="form-control" id="infos" name="infos"></textarea>
                            </div>
                            <span id="error_infos" class="text-danger"></span>
                            <?php echo form_error('infos')?>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label" for="prix">Prix de la place (F CFA)</label>
                            <div class="inputWithIcon inputIconBg">
                              <input class="form-control"  type="number" min="1" id="prix" name="prix">
                              <i class="fa fa-money fa-lg fa-fw" aria-hidden="true"></i>
                            </div>
                            <span id="error_prix" class="text-danger"></span>
                            <?php echo form_error('prix')?>
                        </div>
                        <div class="form-group col-md-6">
                          <button id="btnSave" class="btn-right btn btn-sm btn-primary offset-top-25">Enregistrer ce trajet</button>
                        </div>
                </form>
            </div>
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
    var element = document.getElementById("trajet");
    element.classList.add("active");
  }
</script>   
</body>
