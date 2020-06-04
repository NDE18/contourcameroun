<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="<?= img_url('favicon.ico') ?>">
	<link rel="shortcut icon" href="<?= img_url('wallamre.png') ?>">
	<link rel="stylesheet" href="<?= css_url('style') ?>">
	<link rel="stylesheet" href="<?= css_url('slider') ?>">
    <link rel="stylesheet" href="<?= css_url('bootstrap') ?>">
    <link rel="stylesheet" href="http://code.sigasoft.com.br/sweetalert2/dist/sweetalert2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="<?= css_url('w3') ?>">
	<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="https://swish.swi-prolog.org/pengine/pengines.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script type="text/javascript" src="<?= js_url('ammap') ?>"></script>
    <script type="text/javascript" src="<?= js_url('bootstrap') ?>"></script>
    <!--script type="text/javascript" src="<?= js_url('jquery.bootstrap.wizard') ?>"></script>
    <script type="text/javascript" src="<?= js_url('jquery.bootstrap.wizard.min') ?>"></script-->
    <!--script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script-->
    <script type="text/javascript" src="http://code.sigasoft.com.br/sweetalert2/dist/sweetalert2.min.js"></script>
    <!--script type="text/javascript" src="<?= js_url('sweetalert') ?>"></script-->
    <script type="text/javascript" src="<?= assets_url('themes/light.js') ?>"></script>
    <script type="text/javascript" src="<?= assets_url('maps/js/cameroonLow.js') ?>"></script>
	
    <title>Agriculture</title>
    <style>
        #periode, #region, #sol, #qualite, #eclairage, #ombrage, #pente, #vent, #eau {
            display: none;
        }
    </style>
</head>
<body class="page1 w3-white" >

<header>
    <div class="container_12">
        <div class="grid_12">
            <div class="h_phone">

                <!-- Besoin d'aide? Contactez nous au xxxxxxxxxxxxxxxx -->
            </div>
            <h1><a href="<?= base_url() ?>"><img src="<?= img_url('path4698.png') ?>" alt=""></a></h1>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="menu_block">
        <div class="container_12">
            <div class="grid_12">
                <div class="socials"><a href="#"></a><a href="#"></a></div>

                <nav class="">
                    <ul class="sf-menu">
                        <li class="current"><a href="http://wallamre.msacad.com">Home</a></li>
                        <!--li class="with_ul"><a href="#">A propos</a></li>
                        <li><a href="#">Services</a>

                        </li>
                        <li><a href="#">Produits</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contacts</a></li-->
                    </ul>
                </nav>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>


</header>

<div class="w3-center  " style="background-color: rgb(84,33,0);" id="firstDiv">
    <br>
 <h3 id="message" style="font:  50px 'Open Sans Condensed'" class="w3-text-white">Determine your optimal crop</h3><br>
 <!--div id="rootwizard">
	<div class="navbar">
	  <div class="navbar-inner">
	    <div class="container">
	<ul>
	  	<li><a href="#tab1" data-toggle="tab">First</a></li>
		<li><a href="#tab2" data-toggle="tab">Second</a></li>
		<li><a href="#tab3" data-toggle="tab">Third</a></li>
		<li><a href="#tab4" data-toggle="tab">Forth</a></li>
		<li><a href="#tab5" data-toggle="tab">Fifth</a></li>
		<li><a href="#tab6" data-toggle="tab">Sixth</a></li>
		<li><a href="#tab7" data-toggle="tab">Seventh</a></li>
	</ul>
	 </div>
	  </div>
	</div>
    <div id="bar" class="progress">
      <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
    </div>
	<div class="tab-content">
	    <div class="tab-pane" id="tab1">
	      1
	    </div>
	    <div class="tab-pane" id="tab2">
	      2
	    </div>
		<div class="tab-pane" id="tab3">
			3
	    </div>
		<div class="tab-pane" id="tab4">
			4
	    </div>
		<div class="tab-pane" id="tab5">
			5
	    </div>
		<div class="tab-pane" id="tab6">
			6
	    </div>
		<div class="tab-pane" id="tab7">
			7
	    </div>
		<ul class="pager wizard">
			<li class="previous first" style="display:none;"><a href="#">First</a></li>
			<li class="previous"><a href="#">Previous</a></li>
			<li class="next last" style="display:none;"><a href="#">Last</a></li>
		  	<li class="next"><a href="#">Next</a></li>
		</ul>
	</div>
</div-->
		<Label class="w3-label" id="regionLabel" style="font:  30px 'Open Sans Condensed'"></Label>
		<Label class="w3-label" id="alert" style="font:  20px 'Open Sans Condensed'"></Label>
		<h2 class="w3-label" id="culture" style="font:  30px 'Open Sans Condensed'"></h2>
		<label class="w3-label" id="optimiser" style="font:  30px 'Open Sans Condensed'"></label>
	<div class="w3-row ">
       <div class="w3-col m4 w3-text-white">
          <h3 style="color: rgb(84,33,0);">j</h3>
       </div>
       <div class="w3-col m4">
         <select class="w3-select w3-border" id="region" onclick="Select()">
           <option selected disabled value="11">Select region</option>
           <option value ="1">Adamawa </option >
           <option value ="2">Centre </option >
           <option value ="3">East</option >
           <option value ="4">Far North</option >
           <option value ="5">Littoral</option >
           <option value ="6">North </option >
           <option value ="7">North West</option >
           <option value ="8">West</option >
           <option value ="9">South</option >
           <option value ="10">South West</option >
         </select>
      
          <select class="w3-select w3-border" id="periode" onclick="Select()">
            <option selected disabled value="13">Select period</option>
            <option value ="1">January </option >
            <option value ="2">February </option >
            <option value ="3">March</option >
            <option value ="4">April</option >
            <option value ="5">May</option >
            <option value ="6">June </option >
            <option value ="7">July</option >
            <option value ="8">August</option >
            <option value ="9">September</option >
            <option value ="10">October</option >
            <option value ="11">November</option >
            <option value ="12">December</option >
          </select>
        
          <select class="w3-select w3-border" id="sol" onclick="Select()">
            <option selected disabled value="7">Select soil type</option>
            <option value ="1">Clayey</option >
            <option value ="2">Limestone</option >
            <option value ="3">Humifaire</option >
            <option value ="4">Slimy</option >
            <option value ="5">Sandy</option >
            <option value ="6">Sandy clay</option >
          </select>
		  
		  <select class="w3-select w3-border" id="qualite" onclick="Select()">
            <option selected disabled value="4">Select soil quality</option>
            <option value ="1">Black</option >
            <option value ="2">Light</option >
            <option value ="3">Rich in organic matter</option >
		   </select>
		   
		   <select class="w3-select w3-border" id="eau" onclick="Select()">
            <option selected disabled value="5">Select water quantity</option>
            <option value ="1">Very little</option >
            <option value ="2">Little</option >
            <option value ="3">Suffissament</option >
            <option value ="4">Very much</option >
		   </select>
		   
		   <select class="w3-select w3-border" id="eclairage" onclick="Select()">
            <option selected disabled value="4">Select the lighting moment</option>
            <option value ="1">Never</option >
            <option value ="2">Some hours of the day</option >
            <option value ="3">All day</option >
		   </select>
		   
		   <select class="w3-select w3-border" id="ombrage" onclick="Select()">
            <option selected disabled value="4">Select the shading moment</option>
            <option value ="1">Never</option >
            <option value ="2">Some hours of the day</option >
            <option value ="3">All day</option >
		   </select>
		   
		   <select class="w3-select w3-border" id="vent" onclick="Select()">
            <option selected disabled value="4">Select the wind level</option>
            <option value ="1">Low</option >
            <option value ="2">Average</option >
            <option value ="3">High</option >
		   </select>
		   
		   <select class="w3-select w3-border" id="pente" onclick="Select()">
            <option selected disabled value="5">Select the slope level</option>
            <option value ="1">Flat</option >
            <option value ="2">Low</option >
            <option value ="3">Average</option >
            <option value ="4">High</option >
		   </select>
		  <div class="w3-col m4 w3-text-white">
			<h3 style="color: rgb(84,33,0);">j</h3>
		  </div>
       </div>
	   <div class="w3-col m4">

        </div>
	   </div>
	   <div class="w3-center" id="divButtonValidate">
	   		<button class="btn w3-center"  id="valider">Validate</button>
	   </div>
</div>

<div class="w3-center " style="background-color: rgb(84,33,0);">
	<div id="messager" style="color: rgb(84,33,0);">j</div><br>
</div>

<script type="text/x-prolog">
:- include(wallamres).
</script>

<script>
	var pengine = new Pengine({
				application: "swish",
				//format: "JSON",
				chunk: 1000,
				server: "https://swish.swi-prolog.org/pengine",
                ask: "identify",
                onoutput: handleOutput,
                onabort: handleAbort
            });
			
			var culture = ["Chou","Carotte","Ananas","Plantain"];
			var pourcentage = [82,72,63,59];
			var pourcentages = [];
			var cultures = [];
            var mot="", valCulture="";
			var j=0, k=0, pourcent=0,cult= 0,q=0;
			var p="";
            localStorage.clear();

           /*for(var i =0; i< 2*pourcentage.length; i++){
               if(i % 2 ===0) {
                   $("#culture").append("<h2 class='colonne1'>" + culture[k] + "</br></h2>");
                   storeData(i, culture[k]);
                   cult++;
                   k++;
               }else {
                   $("#culture").append("<h2 class='colonne2'>" + pourcentage[q] + "%</h2></br>")
                   q++;
                   storeData(i, pourcentage[q]);
                   pourcent++;
               }
                var idButton = document.getElementById('valider');
                idButton.style.display='none';
                $("#optimiser").html("<a href='<?= site_url('resultat') ?>' class='optimiser'>Cliquez ici</a> <h1>Pour connaitre la culture optimale<h1>");
           }*/
            function handleOutput() {
                mot=this.data.toString();
				$("#messagess").append("<h3>"+mot.length+" " + JSON.stringify(this.data)+ "</h3>");
				//document.getElementById("valider").disabled = true;
				for(var i=0; i<this.data.length; i++){
                    //mot=this.data;
					//$("#regionLabel").html("<h1>" + this.data+ "</h1>");
                }
				if((mot!="region")&&(mot!='periode')&&(mot!='sol')&&(mot!='qualite')&&(mot!='eau')&&(mot!='eclairage')&&(mot!='ombrage')&&(mot!='pente')&&(mot!='vent')&&(mot!='altitude')){

				}
				//$("#message").html("<h3>" + mot+ "</h3>");
                if(mot=="region"){
                   // swal('Congratulations!', 'Your message has been successfully sent', 'success');
                    var ids = document.getElementById('region');
                    ids.style.display='block';
					$("#regionLabel").html("<h1>In which region is your space?</h1>");
					//$("#valider").hide();
                }
                else if(mot=='periode'){
                    var ids = document.getElementById('periode');
                    ids.style.display='block';
					$("#regionLabel").html("<h1>In which month do you want to plant or sow?</h1>");
					//$("#valider").hide();
                }
                else if(mot=='sol'){
                    var ids = document.getElementById('sol');
                    ids.style.display='block';
					$("#regionLabel").html("<h1>What type of soil is it?</h1>");
					//$("#valider").hide();
                }
				else if(mot=='qualite'){
                    var ids = document.getElementById('qualite');
                    ids.style.display='block';
					$("#regionLabel").html("<h1>What is the quality of the soil?</h1>");
					//$("#valider").hide();
                }
				else if(mot=='eau'){
                    var ids = document.getElementById('eau');
                    ids.style.display='block';
					$("#regionLabel").html("<h1>What is the presence of water?</h1>");
					//$("#valider").hide();
                }
				else if(mot=='eclairage'){
                    var ids = document.getElementById('eclairage');
                    ids.style.display='block';
					$("#regionLabel").html("<h1>At what time of the day is your floor lit up?</h1>");
					//$("#valider").hide();
                }
				else if(mot=='ombrage'){
                    var ids = document.getElementById('ombrage');
                    ids.style.display='block';
                    $("#regionLabel").html("<h1>At what time of day is there shade?</h1>");
                    //$("#valider").hide();
                }
                else if(mot=='altitude'){
                    var ids = document.getElementById('altitude');
                    ids.style.display='block';
                    $("#regionLabel").html("<h1>What is the altitude of your land?</h1>");
                    //$("#valider").hide();
                }
				else if(mot=='vent'){
					var ids = document.getElementById('vent');
					ids.style.display='block';
					$("#regionLabel").html("<h1>What is the power of the wind that crosses your land?</h1>");
					//$("#valider").hide();
				}
				else if(mot=='pente'){
					var ids = document.getElementById('pente');
					ids.style.display='block';
					$("#regionLabel").html("<h1>How is the slope of your land?</h1>");
					//$("#valider").hide();
				}
				else{
                    $("#message").html("The appropriate crop(s) with their success percentage is (are):");
                    $("#regionLabel").html("");
                    //alert('qqqqq');
                    culture[k]=this.data;
                    /*if(culture[k]==="cul"){
                        k=0;
                    }
                    else{*/
                    if(k % 2 ===0){
                        $("#culture").append("<h2 class='colonne1'>"+culture[k]+ "</br></h2>");
                        valCulture = culture[k];
                        //cultures[cult] = culture[k];
                        //cult++;
                        storeData(k, culture[k]);
                    }
                    else{
                        $("#culture").append("<h2 class='colonne2'>"+culture[k].toFixed(2)+ "%</h2></br>");
                        storeData(k, culture[k]);
                    }
                    k++;
                    pourcent++;
                    var idButton = document.getElementById('valider');
                    idButton.style.display='none';
                    $("#optimiser").html("<a href='<?= site_url('resultat') ?>' class='optimiser'>Click here</a> <h1 style='font:  30px 'Open Sans Condensed'' class='w3-text-white'>To know optimal crop</h1>");
                    //}
                }
            }
            function handleAbort() {
                $("#err").html("<h4>Aborted</h4>");
            }

			
            function selectValue(){

                if(mot=='periode'){
                    var val = document.getElementById('periode');
                    var valeur = val.options[val.selectedIndex].value;
                    mot="";
                    pengine.respond(valeur);
                    val.style.display='none';
                }
                else if(mot=='region'){
                    var val = document.getElementById('region');
                    var valeur = val.options[val.selectedIndex].value;
                    mot="";
                    pengine.respond(valeur);
                    val.style.display='none';
                }
                else if(mot=='sol'){
                    var val = document.getElementById('sol');
                    var valeur = val.options[val.selectedIndex].value;
                    mot="";
                    pengine.respond(valeur);
                    val.style.display='none';
                }
				 else if(mot=='qualite'){
                    var val = document.getElementById('qualite');
                    var valeur = val.options[val.selectedIndex].value;
                    mot="";
                    pengine.respond(valeur);
                    val.style.display='none';
                }
				else if(mot=='eau'){
                    var val = document.getElementById('eau');
                    var valeur = val.options[val.selectedIndex].value;
                    mot="";
                    pengine.respond(valeur);
                    val.style.display='none';
                }
				else if(mot=='eclairage'){
                    var val = document.getElementById('eclairage');
                    var valeur = val.options[val.selectedIndex].value;
                    mot="";
                    pengine.respond(valeur);
                    val.style.display='none';

                }
				else if(mot=='ombrage'){
                    var val = document.getElementById('ombrage');
                    var valeur = val.options[val.selectedIndex].value;
                    mot="";
                    pengine.respond(valeur);
                    val.style.display='none';
                }
                else if(mot=='altitude'){
                    var val = document.getElementById('altitude');
                    var valeur = val.options[val.selectedIndex].value;
                    mot="";
                    pengine.respond(valeur);
                    val.style.display='none';
                }
				else if(mot=='vent'){
					var val = document.getElementById('vent');
					var valeur = val.options[val.selectedIndex].value;
					mot="";
					pengine.respond(valeur);
					val.style.display='none';
				}
				else if(mot=='pente'){
					var val = document.getElementById('pente');
					var valeur = val.options[val.selectedIndex].value;
					mot="";
					pengine.respond(valeur);
					val.style.display='none';
				}
            }
    $('#valider').click(function(){
                if (mot=="region"){
                    if(document.getElementById('region').options[document.getElementById('region').selectedIndex].value == 11){
                    //swal('Error!', 'Please select the region', 'error');
                    swal({
                          title: "Oops", 
                          text: "Please select the region", 
                          type: "error",
                          closeOnConfirm: false,
                          confirmButtonText: "Ok",
                          confirmButtonColor: "#C4FF33",
                          html: $("<h1>")
                            .text('Please select the region')
                        });
                        
                    }else if(document.getElementById('region').options[document.getElementById('region').selectedIndex].value != 11){
                        selectValue();
                    }
                }
                if (mot == "periode"){
                    if(document.getElementById('periode').options[document.getElementById('periode').selectedIndex].value == 13){
                    swal({
                          title: "Oops", 
                          //text: "Please select the region", 
                          type: "error",
                          closeOnConfirm: false,
                          confirmButtonText: "Ok",
                          confirmButtonColor: "#C4FF33",
                          html: $("<h1>")
                            .text('Please select the period')
                        });
                    }else if(document.getElementById('periode').options[document.getElementById('periode').selectedIndex].value != 13){
                        selectValue();
                }
                }
                if (mot == "sol") {
                    if(document.getElementById('sol').options[document.getElementById('sol').selectedIndex].value == 7){
                    swal({
                          title: "Oops", 
                          //text: "Please select the region", 
                          type: "error",
                          closeOnConfirm: false,
                          confirmButtonText: "Ok",
                          confirmButtonColor: "#C4FF33",
                          html: $("<h1>")
                            .text('Please select soil type')
                        });
                    }else if(document.getElementById('sol').options[document.getElementById('sol').selectedIndex].value != 7){
                        selectValue();
                    }
                }
                if (mot == "qualite"){
                    if(document.getElementById('qualite').options[document.getElementById('qualite').selectedIndex].value == 4){
                    swal({
                          title: "Oops", 
                          //text: "Please select the region", 
                          type: "error",
                          closeOnConfirm: false,
                          confirmButtonText: "Ok",
                          confirmButtonColor: "#C4FF33",
                          html: $("<h1>")
                            .text('Please select soil quality')
                        });
                    }else if(document.getElementById('qualite').options[document.getElementById('qualite').selectedIndex].value != 4){
                        selectValue();
                    }
                }
                if (mot == "eau"){
                    if(document.getElementById('eau').options[document.getElementById('eau').selectedIndex].value == 5){
                    swal({
                          title: "Oops", 
                          //text: "Please select the region", 
                          type: "error",
                          closeOnConfirm: false,
                          confirmButtonText: "Ok",
                          confirmButtonColor: "#C4FF33",
                          html: $("<h1>")
                            .text('Please select water level')
                        });
                    }else if(document.getElementById('eau').options[document.getElementById('eau').selectedIndex].value != 5){
                        selectValue();
                    }
                }
                if (mot == "eclairage"){
                    if(document.getElementById('eclairage').options[document.getElementById('eclairage').selectedIndex].value == 4){
                    swal({
                          title: "Oops", 
                          //text: "Please select the region", 
                          type: "error",
                          closeOnConfirm: false,
                          confirmButtonText: "Ok",
                          confirmButtonColor: "#C4FF33",
                          html: $("<h1>")
                            .text('Please select lighting moment')
                        });
                    }else if(document.getElementById('eclairage').options[document.getElementById('eclairage').selectedIndex].value != 4){
                        selectValue();
                    }
                }
                if (mot =="ombrage"){
                    if(document.getElementById('ombrage').options[document.getElementById('ombrage').selectedIndex].value == 4){
                     swal({
                          title: "Oops", 
                          //text: "Please select the region", 
                          type: "error",
                          closeOnConfirm: false,
                          confirmButtonText: "Ok",
                          confirmButtonColor: "#C4FF33",
                          html: $("<h1>")
                            .text('Please select shading moment')
                        });
                    }else if(document.getElementById('ombrage').options[document.getElementById('ombrage').selectedIndex].value != 4){
                        selectValue();
                    }
                }
                if(mot == "vent"){
                    if(document.getElementById('vent').options[document.getElementById('vent').selectedIndex].value == 4){
                   swal({
                          title: "Oops", 
                          //text: "Please select the region", 
                          type: "error",
                          closeOnConfirm: false,
                          confirmButtonText: "Ok",
                          confirmButtonColor: "#C4FF33",
                          html: $("<h1>")
                            .text('Please select wind power')
                        });
                    }else if(document.getElementById('vent').options[document.getElementById('vent').selectedIndex].value != 4){
                        selectValue();
                    }
                }
                if (mot == "pente"){
                    if(document.getElementById('pente').options[document.getElementById('pente').selectedIndex].value == 5){
                    swal({
                          title: "Oops", 
                          //text: "Please select the region", 
                          type: "error",
                          closeOnConfirm: false,
                          confirmButtonText: "Ok",
                          confirmButtonColor: "#C4FF33",
                          html: $("<h1>")
                            .text('Please select the slope')
                        });
                    }else if(document.getElementById('pente').options[document.getElementById('pente').selectedIndex].value != 5){
                        selectValue();
                    }
                }

                
    });

	function storeData(culture,pourcentage){
        localStorage.setItem(culture, pourcentage);
	}

    $(function(){
        $('#optimiser').click(function(){
            $(this,'#culture').hide();
            var ids = document.getElementById('culture');
            ids.style.display='none';
            var id = document.getElementById('message');
            id.style.display='none';
            var i = document.getElementById('regionLabel');
            i.style.display='none';
            $("#optimiserForm1").slideDown();
            $('.carousel').carousel();
        });
        $('.btnsuivant').click(function(){

            var id = $(this).attr('id')

            if(id != '3') {
                    var next = parseInt(id) + 1;

                    $('#optimiserForm' + id).hide();
                    $('#optimiserForm' + next).slideDown();
               // }
            }else{
                alert("fini");
				if(!localStorage){
					alert('impossible');
				}
				else{
					alert("possible");
				}
				
				storeData();
				var le = localStorage.getItem("superficie");
				alert(le);
				$("#message").html("<h1>"+le+"</h1>")
            }

        });
        $('.btnprecedent').click(function(){
            var id = $(this).attr('id');
            var next = parseInt(id)-1;
            $('#optimiserForm'+id).hide();
            $('#optimiserForm'+next).show();

        });
        var q=0;
        $('#semences').click(function(){
            //$("#semences").html("<h1>"+culture.length+"</h1>");
            while(q<culture.length){
                var nomCulture = document.getElementById('nomCulture');
                var labelQuantite = document.getElementById('labelQuantie');
                var quantiteSem = document.getElementById('quantiteSem');

                var nom = document.createElement('label');
                //nom.innerHTML = culture[q];
                nom.id = q;
                nom.class = "w3-label";
                nom.appendChild(document.createTextNode(culture[q]));

                var labels = document.createElement('label');

                labels.innerHTML = "Quantité(kg|pieds) :";

                var quantite = document.createElement('input');
                quantite.type="number";
                quantite.value = "0";
                //quantite.id = i;
                $('#nom').append("<div class='w3-row w3-center'> <div class='w3-col m2 w3-margin-top'><label class='w3-label'>"+culture[q]+"</label>" +
                        "</div><div class='w3-col m3 w3-margin-top'><label class='w3-label w3-margin-top'>Quantité(kg|pieds):</label></div>" +
                        "<div class='w3-col m3 w3-margin-top'><input type='number'min='0' value='0' id=quantite"+q+"></div></div>");
                q+=2;
            }
        });
    });
</script>
<script type="text/javascript">
	$(document).ready(function() {
			  	$('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
					var $total = navigation.find('li').length;
					var $current = index+1;
					var $percent = ($current/$total) * 100;
					$('#rootwizard .progress-bar').css({width:$percent+'%'});
				}});
			});
</script>
</body>
</html>