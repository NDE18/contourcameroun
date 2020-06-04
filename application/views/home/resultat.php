<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="<?= img_url('favicon.ico') ?>">
    <link rel="shortcut icon" href="<?= img_url('wallamre.png') ?>">
    <link rel="stylesheet" href="<?= css_url('style') ?>">
    <link rel="stylesheet" href="<?= css_url('slider') ?>">
    <link rel="stylesheet" href="http://code.sigasoft.com.br/sweetalert2/dist/sweetalert2.css">

    <link rel="stylesheet" href="<?= css_url('w3') ?>">
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://swish.swi-prolog.org/pengine/pengines.js"></script>
    <script type="text/javascript" src="http://code.sigasoft.com.br/sweetalert2/dist/sweetalert2.min.js"></script>

    <script type="text/javascript" src="<?= assets_url('jsLPSolver/src/solver.js') ?>"></script>
    <script type="text/javascript" src="<?= js_url('ammap') ?>"></script>
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

<div class="w3-center " style="background-color: rgb(84,33,0);" id="optimiserForm1">
    <h3 id="messages" style="font:  30px 'Open Sans Condensed'" class="w3-text-white">Please enter the following information</h3><br>
    <div class = "w3-row w3-center">
        <div class="w3-col m8 s1 form-lines w3-center">
            <div class = "w3-row">
                <div class="w3-col m4 w3-margin-top">
                    <label class = "w3-label ">The field's surface (m²) :</label>
                </div>
                <div class="w3-col m4 w3-margin-top">
                    <input class = "w3-required" type = "number" min="0" value="0" id="superficie" >
                </div>
            </div>
            <div class = "w3-row">
                <div class="w3-col m4 w3-margin-top">
                    <label class = "w3-label ">Budget (cash Fcfa):</label>
                </div>
                <div class="w3-col m4 w3-margin-top">
                    <input class = "" type = "number" min="0" value="0" id="budget">
                </div>
            </div>
            <div class = "w3-row">
                <div class="w3-col m4 w3-margin-top">
                    <label class = "w3-label ">Workforce:</label>
                </div>
                <div class="w3-col m4 w3-margin-top">
                    <input class = "" type = "number" min="0"value="0" id="mo">
                </div>
            </div>
        </div>
        <div class="w3-col m8 s1 w3-center">
            <div class = "w3-row">
                <div class="w3-col m4 w3-margin-top ">
                    <label class = "w3-label " id="semences"><input id="sem" class = "w3-checkbox" type="checkbox" value="semence" >Rejection/seed</label>
                </div>
            </div>
            <div id="nom" class="w3-col m8">

            </div>
        </div>
    </div>
    <button class="btn btnsuivant" id="1">Next</button>
</div>

<div class="w3-center " style="background-color: rgb(84,33,0);" id="optimiserForm2">
    <h3 id="messages" style="font:  30px 'Open Sans Condensed'" class="w3-text-white">Enter the quantity of equipment you have</h3><br>
    <form>
        <div class="w3-row ">
            <div class="w3-col m4 s1 ">
                <div class = "w3-row">
                    <div class="w3-col m6 w3-margin-top">
                        <label class = "w3-label ">Atomizer :</label>
                    </div>
                    <div class="w3-col m6 w3-margin-top">
                        <input class = "" type = "number" min="0" max="20"  value="0" id="equipement29">
                    </div>
                </div>
                <div class = "w3-row">
                    <div class="w3-col m6 w3-margin-top">
                        <label class = "w3-label ">Watering :</label>
                    </div>
                    <div class="w3-col m6 w3-margin-top">
                        <input class = "" type = "number" min="0" max="20"  value="0" id="equipement1">
                    </div>
                </div>
                <div class = "w3-row">
                    <div class="w3-col m6 w3-margin-top">
                        <label class = "w3-label ">Tarpaulin :</label>
                    </div>
                    <div class="w3-col m6 w3-margin-top">
                        <input class = "" type = "number" min="0" max="20" value="0" id="equipement2">
                    </div>
                </div>
                <div class = "w3-row">
                    <div class="w3-col m6 w3-margin-top">
                        <label class = "w3-label">Wheelbarrow :</label>
                    </div>
                    <div class="w3-col m6 w3-margin-top">
                        <input class = "" type = "number" min="0" max="20"  value="0" id="equipement3">
                    </div>
                </div>
                <div class = "w3-row">
                    <div class="w3-col m6 w3-margin-top">
                        <label class = "w3-label">Cords :</label>
                    </div>
                    <div class="w3-col m6 w3-margin-top">
                        <input class = "" type = "number" min="0" max="20"  value="0" id="equipement4">
                    </div>
                </div>
                <div class = "w3-row">
                    <div class="w3-col m6 w3-margin-top">
                        <label class = "w3-label">Daba :</label>
                    </div>
                    <div class="w3-col m6 w3-margin-top">
                        <input class = "" type = "number" min="0" max="20"  value="0" id="equipement5">
                    </div>
                </div>
                <div class = "w3-row">
                    <div class="w3-col m6 w3-margin-top">
                        <label class = "w3-label">String :</label>
                    </div>
                    <div class="w3-col m6 w3-margin-top">
                        <input class = "" type = "number" min="0" max="20"  value="0" id="equipement6">
                    </div>
                </div>
                <div class = "w3-row">
                    <div class="w3-col m6 w3-margin-top">
                        <label class = "w3-label">Barrel :</label>
                    </div>
                    <div class="w3-col m6 w3-margin-top">
                        <input class = "" type = "number" min="0" max="20"  value="0" id="equipement7">
                    </div>
                </div>
            </div>
            <div class="w3-col m4 s1 form-line">
                <div class = "w3-row">
                    <div class="w3-col m6 w3-margin-top">
                        <label class = "w3-label">Chopped :</label>
                    </div>
                    <div class="w3-col m6 w3-margin-top">
                        <input class = "" type = "number" min="0" max="20"  value="0" id="equipement8">
                    </div>
                </div>
                <div class = "w3-row">
                    <div class="w3-col m6 w3-margin-top">
                        <label class = "w3-label">Hoe :</label>
                    </div>
                    <div class="w3-col m6 w3-margin-top">
                        <input class = "" type = "number" min="0" max="20"  value="0" id="equipement9">
                    </div>
                </div>
                <div class = "w3-row">
                    <div class="w3-col m6 w3-margin-top">
                        <label class = "w3-label">Lime :</label>
                    </div>
                    <div class="w3-col m6 w3-margin-top">
                        <input class = "" type = "number" min="0" max="20"  value="0" id="equipement10">
                    </div>
                </div>
                <div class = "w3-row">
                    <div class="w3-col m6 w3-margin-top">
                        <label class = "w3-label">Machete :</label>
                    </div>
                    <div class="w3-col m6 w3-margin-top">
                        <input class = "" type = "number" min="0" max="20"  value="0" id="equipement11">
                    </div>
                </div>
                <div class = "w3-row">
                    <div class="w3-col m6 w3-margin-top">
                        <label class = "w3-label">Put ribbon :</label>
                    </div>
                    <div class="w3-col m6 w3-margin-top">
                        <input class = "" type = "number" min="0" max="20"  value="0" id="equipement31">
                    </div>
                </div>
                <div class = "w3-row">
                    <div class="w3-col m6 w3-margin-top">
                        <label class = "w3-label">Pair of boots :</label>
                    </div>
                    <div class="w3-col m6 w3-margin-top">
                        <input class = "" type = "number" min="0" max="20"  value="0" id="equipement12">
                    </div>
                </div>
                <div class = "w3-row">
                    <div class="w3-col m6 w3-margin-top">
                        <label class = "w3-label">Shovel :</label>
                    </div>
                    <div class="w3-col m6 w3-margin-top">
                        <input class = "" type = "number" min="0" max="20"  value="0" id="equipement13">
                    </div>
                </div>
            </div>
            <div class="w3-col m4 s1 form-line">
                <div class = "w3-row">
                    <div class="w3-col m6 w3-margin-top">
                        <label class = "w3-label">Pickaxe :</label>
                    </div>
                    <div class="w3-col m6 w3-margin-top">
                        <input class = "" type = "number" min="0" max="20"  value="0" id="equipement14">
                    </div>
                </div>
                <div class = "w3-row">
                    <div class="w3-col m6 w3-margin-top">
                        <label class = "w3-label">Dibble :</label>
                    </div>
                    <div class="w3-col m6 w3-margin-top">
                        <input class = "" type = "number" min="0" max="20"  value="0" id="equipement15">
                    </div>
                </div>
                <div class = "w3-row">
                    <div class="w3-col m6 w3-margin-top">
                        <label class = "w3-label">Sprout :</label>
                    </div>
                    <div class="w3-col m6 w3-margin-top">
                        <input class = "" type = "number" min="0" max="20"  value="0" id="equipement16">
                    </div>
                </div>
                <div class = "w3-row">
                    <div class="w3-col m6 w3-margin-top">
                        <label class = "w3-label">Wear all :</label>
                    </div>
                    <div class="w3-col m6 w3-margin-top">
                        <input class = "" type = "number" min="0" max="20"  value="0" id="equipement30">
                    </div>
                </div>
                <div class = "w3-row">
                    <div class="w3-col m6 w3-margin-top">
                        <label class = "w3-label">Sprayer :</label>
                    </div>
                    <div class="w3-col m6 w3-margin-top">
                        <input class = "" type = "number" min="0" max="20"  value="0" id="equipement17">
                    </div>
                </div>
                <div class = "w3-row">
                    <div class="w3-col m6 w3-margin-top">
                        <label class = "w3-label">Empty harvest bags :</label>
                    </div>
                    <div class="w3-col m6 w3-margin-top">
                        <input class = "" type = "number" min="0" max="20" value="0" id="equipement18">
                    </div>
                </div>
                <div class = "w3-row">
                    <div class="w3-col m6 w3-margin-top">
                        <label class = "w3-label">Bucket :</label>
                    </div>
                    <div class="w3-col m6 w3-margin-top">
                        <input class = "" type = "number" min="0" max="20"  value="0" id="equipement32">
                    </div>
                </div>
            </div>
        </div>
    </form>
            <button class="btn btnprecedent" id="2">Previous</button>
			<button class="btn btnsuivant" id="2">Next</button>
</div>

<div class="w3-center " style="background-color: rgb(84,33,0);" id="optimiserForm3">
    <h3 id="messages" style="font:  30px 'Open Sans Condensed'" class="w3-text-white">Enter the amount of fertilizer and maintenance products you have</h3><br>

    <form>
        <div class="w3-row ">
            <div class="w3-col m6 s1 ">
                <div class = "w3-row">
                    <div class="w3-col m6 w3-margin-top">
                        <label class = "w3-label ">Fungicides (liter) :</label>
                    </div>
                    <div class="w3-col m6 w3-margin-top">
                        <input class = "" type = "number" min="0" max="20"  value="0" id="equipement19">
                    </div>
                </div>
                <div class = "w3-row">
                    <div class="w3-col m6 w3-margin-top">
                        <label class = "w3-label ">Herbicide (liter) :</label>
                    </div>
                    <div class="w3-col m6 w3-margin-top">
                        <input class = "" type = "number" min="0" max="20" value="0" id="equipement20">
                    </div>
                </div>
                <div class = "w3-row">
                    <div class="w3-col m6 w3-margin-top">
                        <label class = "w3-label">Insecticide (liter) :</label>
                    </div>
                    <div class="w3-col m6 w3-margin-top">
                        <input class = "" type = "number" min="0" max="20"  value="0" id="equipement21">
                    </div>
                </div>
                <div class = "w3-row">
                    <div class="w3-col m6 w3-margin-top">
                        <label class = "w3-label">Pesticide (liter) :</label>
                    </div>
                    <div class="w3-col m6 w3-margin-top">
                        <input class = "" type = "number" min="0" max="20"  value="0" id="equipement22">
                    </div>
                </div>
                <div class = "w3-row">
                    <div class="w3-col m6 w3-margin-top">
                        <label class = "w3-label">Nematicide (liter) :</label>
                    </div>
                    <div class="w3-col m6 w3-margin-top">
                        <input class = "" type = "number" min="0" max="20"  value="0" id="equipement23">
                    </div>
                </div>
            </div>
            <div class="w3-col m6 s1 form-line">
                <div class = "w3-row">
                    <div class="w3-col m6 w3-margin-top">
                        <label class = "w3-label">Potash Chloride(kg) :</label>
                    </div>
                    <div class="w3-col m6 w3-margin-top">
                        <input class = "" type = "number" min="0" max="20"  value="0" id="equipement24">
                    </div>
                </div>
                <div class = "w3-row">
                    <div class="w3-col m6 w3-margin-top">
                        <label class = "w3-label">Manure(kg) :</label>
                    </div>
                    <div class="w3-col m6 w3-margin-top">
                        <input class = "" type = "number" min="0" max="20"  value="0" id="equipement25">
                    </div>
                </div>
                <div class = "w3-row">
                    <div class="w3-col m6 w3-margin-top">
                        <label class = "w3-label">Potash(kg) :</label>
                    </div>
                    <div class="w3-col m6 w3-margin-top">
                        <input class = "" type = "number" min="0" max="20"  value="0" id="equipement26">
                    </div>
                </div>
                <div class = "w3-row">
                    <div class="w3-col m6 w3-margin-top">
                        <label class = "w3-label">Ammonia sulphate(kg) :</label>
                    </div>
                    <div class="w3-col m6 w3-margin-top">
                        <input class = "" type = "number" min="0" max="20"  value="0" id="equipement27">
                    </div>
                </div>
                <div class = "w3-row">
                    <div class="w3-col m6 w3-margin-top">
                        <label class = "w3-label">Urea(kg) :</label>
                    </div>
                    <div class="w3-col m6 w3-margin-top">
                        <input class = "" type = "number" min="0" max="20"  value="0" id="equipement28">
                    </div>
                </div>
            </div>
        </div>
    </form>
			<button class="btn btnprecedent " id="3">Previous</button>
			<button class="btn btnsuivant" id="3">Validate</button>
</div>

<div class="w3-center " style="background-color: rgb(84,33,0);" id="optimiserForm4">
    <h1 id="resultat" style="font:  30px 'Open Sans Condensed'" class="w3-text-white">The optimal combination is as follows:</h1><br>
    <div class = "w3-row">
        <label class="w3-label" id="resultats" style="font:  30px 'Open Sans Condensed'"></label><br>
    </div>
    <button class="btn btnsuivant" id="4">Previous</button>
</div>

<div class="w3-center " style="background-color: rgb(84,33,0);">
    <div id="messager" style="color: rgb(84,33,0);">j</div><br>
</div>
<script>
/*function getData(pageName){

	alert('dddss');
	var posting = $.post("connexion/connexionDB.php", {
		culture: pageName
	});
	
	posting.done(function(data){
	alert(data);
	var val = localStorage.getItem("superficie");
	alert(val);
	$("#messager").html("<h1>"+localStorage.mo+"</h1>");
	});
	
	posting.fail(function(){
		alert("failed");
	});
}
	
$(window).load(
    function () {
	getData("ananas");
});*/

/*$('#1').click(function(){
    if(document.getElementById('superficie').options[document.getElementById('superficie').selectedIndex].value == 0){
        swal({
            title: "Oops", 
            text: "Please select the region", 
            type: "error",
            closeOnConfirm: false,
            confirmButtonText: "Ok",
            confirmButtonColor: "#C4FF33",
            html: $("<h1>")
            .text('Please enter area')
        });
    }
});*/

$(function(){
	$('#optimiserForm1').show();
	$('#optimiserForm2').hide();
	$('#optimiserForm3').hide();
    $('#optimiserForm4').hide();
    $('#nom').hide();
    var q=0;
    while(q<localStorage.length){
        var nomCulture = document.getElementById('nomCulture');
        var labelQuantite = document.getElementById('labelQuantie');
        var quantiteSem = document.getElementById('quantiteSem');

        var nom = document.createElement('label');
        //nom.innerHTML = culture[q];
        nom.id = q;
        nom.class = "w3-label";
        //nom.appendChild(document.createTextNode(culture[q]));

        var labels = document.createElement('label');

        labels.innerHTML = "Quantité(kg|pieds) :";

        var quantite = document.createElement('input');
        quantite.type="number";
        quantite.value = "0";
        //quantite.id = i;
        var valeur = localStorage.getItem(q);
        if(valeur!=null) {
            $('#nom').append("<div class='w3-row w3-center'> <div class='w3-col m2 w3-margin-top'><label class='w3-label'>" + valeur + "</label>" +
                "</div><div class='w3-col m3 w3-margin-top'><label class='w3-label w3-margin-top'>Quantity(kg|pieds):</label></div>" +
                "<div class='w3-col m3 w3-margin-top'><input type='number'min='0' value='0' id='"+valeur+"'></div></div>");
        }
        q+=2;
    }
});
var equipement= 0, countBudget= 0,countCrops= 0,valeurCrop='',countRendement= 0, countPourcentage= 0,exCrop="", valeurSemence,countSemence= 0,counter= 0,budgetTotal=0;;
var Budget = new Array(), quantiteEquipement = [0];
var equips = [0], crops = new Array(),pourcentages= new Array(),Rendement = new Array(), semence = new Array(), rendementCrop=new Array(), budgetCrop=new Array();
//Budget[0]=0;

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
               if(id==1){
                    var superficie = document.getElementById('superficie').value;
                    //alert(superficie);
                    if(superficie=="0"){
                        //alert('Veillez entrez la superificie');
                         swal({
                            title: "Oops", 
                            //text: "Please select the region", 
                            type: "error",
                            closeOnConfirm: false,
                            confirmButtonText: "Ok",
                            confirmButtonColor: "#C4FF33",
                            html: $("<h1>")
                            .text('The area value must be strictly greater than 0')
                        });
                    }else{
                        var next = parseInt(id) + 1;

                        $('#optimiserForm' + id).hide();
                        $('#optimiserForm' + next).slideDown();
                    }
                }else{
                    var next = parseInt(id) + 1;

                    $('#optimiserForm' + id).hide();
                    $('#optimiserForm' + next).slideDown();
               }
            }else {
                    var next = parseInt(id) + 1;
                    $('#optimiserForm' + id).hide();
                    $('#optimiserForm' + next).slideDown();
                var t = 0;
                for (var j = 1; j <= 32; j++) {
                    var equip = 'equipement' + j;
                    if (document.getElementById(equip).value != 0) {
                        equips[t] = equip;
                        quantiteEquipement[t] = document.getElementById(equip).value;
                        t++;
                    }
                }
                //alert(equips);
                for (var i = 0; i < localStorage.length; i++) {
                    if (i % 2 === 0) {
                        var crop = localStorage.getItem(i);
                        if (crop != null) {
                            crops[countCrops] = crop;
                            countCrops++;
                        }
                    } else {
                        var pourcent = localStorage.getItem(i);
                        if (pourcent != null) {
                            pourcentages[countPourcentage] = pourcent;
                            countPourcentage++;
                        }
                    }
                }
                //alert(pourcentages);
                for (var j = 0; j < crops.length; j++) {
                    var nameCrop = crops[j];
                    semence[j] = document.getElementById(nameCrop).value;
                }
                cropRendement();
                setTimeout("calculateBudget()", 1000);
                setTimeout("calculateRendement()",2000);
                setTimeout("calculatebudgetEachCrop()",3000);
                setTimeout("optimization()",4000);
            }
        });
        $('.btnprecedent').click(function(){
            var id = $(this).attr('id');
            var next = parseInt(id)-1;
            $('#optimiserForm'+id).hide();
            $('#optimiserForm'+next).show();

        });
        $('#semences').click(function(){
            if(document.getElementById('sem').checked==true){
                $('#nom').show();
            }else {
                $('#nom').hide();
            }
        });
    });
    function optimization(){
        var max="", budgetC="budget", mode,indiceResult=new Array(), tabVariable = new Array(),constraintSuperficie = new Array(), constraintBudget = new Array();
        var mos = document.getElementById('mo').value;
        var surface = document.getElementById('superficie').value;
        var montantBudget = document.getElementById('budget').value;

        if(mos>5){
            mos=5;
        }
        //alert('montantBudget '+montantBudget+' mos '+mos+' tabBudgets '+Budget+' tabCultures '+crops+' tabRendements '+Rendement+' tabPourcentages ');
        budgetTotal = 5000*mos;
        //budgetTotal=budgetTotal+ montantBudget;
        for(var i=0; i<crops.length; i++){
            tabVariable.push({"budget":budgetCrop[i], rendement:Rendement[i], superficie:1});
            budgetTotal = budgetTotal + Budget[i];
        }
        for(var i=0; i<crops.length; i++){
            //tabVariable.push({"budget":budgetCrop[i], rendement:Rendement[i], superficie:1});
            budgetTotal = budgetTotal + Budget[i];
        }
        budgetTotal=parseInt(budgetTotal)+ parseInt(montantBudget);
        var model = {
            "optimize": "rendement",
            "opType": "max",
            "constraints": {
                "superficie": {"max": surface},
                "budget":{"max":budgetTotal}
            },
            "variables": { },
        }
        console.log(budgetTotal);
        for(var i=0; i<crops.length; i++){
            var x=crops[i];
            model.variables[x]=tabVariable[i];
        }
        console.log(JSON.stringify(model.variables));
        console.log(JSON.stringify(model.constraints));
        var models = JSON.stringify(solver.Solve(model));
        mode = solver.Solve(model);
        var countResult = 0;
        var x1;
        console.log(mode.x1);
        $.each(mode, function(key, val){
            console.log('key '+key+' valeur: '+val);
            if((key!="feasible")&&(key!="result")){
                for(var i=0; i<crops.length; i++) {
                    if (key == crops[i]) {
                    $('#resultats').append('<h2 style="font:  30px "Open Sans Condensed"" class="w3-text-white"><a href="#">' + key + '</a> on an area of ' + Math.round(val*1000) + ' meter (s) square with a production of approximately ' + Math.round(val*rendementCrop[i]) + ' kg</h2>');
                    }
                }
            }
        });
        $('#resultats').append('<h2 style="font:  30px "Open Sans Condensed"" class="w3-text-white">Total profitability will be around '+Math.round(mode.result)+' F CFA</h2>');
        console.log('i '+indiceResult);
    }

    function calculateBudget(){
        var post = $.post('<?= site_url('resultat/equipment') ?>', {
            crop: crops,
            equip: equips,
            qEquip: quantiteEquipement,
            semence: semence
        }, function (data) {
            Budget = $.parseJSON(data);
            console.log(Budget);
        });
    }
    function calculateRendement(){
        var post = $.post('<?= site_url('resultat/rendement') ?>', {
            crop: crops,
            pourcentage: pourcentages
        }, function (data) {
            Rendement = $.parseJSON(data);
            console.log('rendement '+Rendement);
        });
    }
    function cropRendement(){
        var post = $.post('<?= site_url('resultat/rendementCrop') ?>', {
            crop: crops
        }, function (data) {
            rendementCrop = $.parseJSON(data);
            console.log('Crendement '+rendementCrop);
        });
    }
    function calculatebudgetEachCrop(){
        var post = $.post('<?= site_url('resultat/budgetEachCrop') ?>', {
            crop: crops
        }, function (data) {
            budgetCrop = $.parseJSON(data);
            console.log('budgetCrop '+budgetCrop);
        });
    }
</script>
</body>
</html>