<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="<?= img_url('logo.ico') ?>">
    <link rel="shortcut icon" href="<?= img_url('wallamre.png') ?>">
    <link rel="stylesheet" href="<?= css_url('bootstrap') ?>">
    <link rel="stylesheet" href="<?= css_url('w3') ?>">
    <link rel="stylesheet" href="http://code.sigasoft.com.br/sweetalert2/dist/sweetalert2.css">
    <link rel="stylesheet" href="<?= css_url('normalize') ?>">
    <link rel="stylesheet" href="<?= css_url('main') ?>">
    <link rel="stylesheet" href="<?= css_url('jquery.steps') ?>">
    <script src="<?= js_url('modernizr-2.6.2.min')?>"></script>
    <script src="<?= js_url('jquery-1.9.1.min')?>"></script>
    <script src="<?= js_url('jquery.cookie-1.3.1')?>"></script>
    <script src="<?= js_url('jquery.steps')?>"></script>

    <title>Wallamre</title>

</head>
<body>
    <head>
        <h1 class=""><img src="<?= img_url('wallam.png') ?>" alt=""></h1>
        <ul class="w3-navbar w3-purple">
            <div class="w3-center">
                <li class="w3-navitem"><a class="w3-hover-teal w3-amber" href="<?= base_url() ?>">Home</a></li>
                <!--li><a class="w3-hover-teal" href="#">Link 1</a></li>
                <li><a class="w3-hover-teal" href="#">Link 2</a></li>
                <li><a class="w3-hover-teal" href="#">Link 3</a></li-->
            </div>
        </ul>
    </head>
    
    <div class=""> 
        <div class="w3-col s4 ">
            <div id="wizard">
                <h2>First Step</h2>
                <section>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ut nulla nunc. Maecenas arcu sem, hendrerit a tempor quis, 
                        sagittis accumsan tellus. In hac habitasse platea dictumst. Donec a semper dui. Nunc eget quam libero. Nam at felis metus. 
                        Nam tellus dolor, tristique ac tempus nec, iaculis quis nisi.</p>
                </section>

                <h2>Second Step</h2>
                <section>
                    <p>Donec mi sapien, hendrerit nec egestas a, rutrum vitae dolor. Nullam venenatis diam ac ligula elementum pellentesque. 
                        In lobortis sollicitudin felis non eleifend. Morbi tristique tellus est, sed tempor elit. Morbi varius, nulla quis condimentum 
                        dictum, nisi elit condimentum magna, nec venenatis urna quam in nisi. Integer hendrerit sapien a diam adipiscing consectetur. 
                        In euismod augue ullamcorper leo dignissim quis elementum arcu porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Vestibulum leo velit, blandit ac tempor nec, ultrices id diam. Donec metus lacus, rhoncus sagittis iaculis nec, malesuada a diam. 
                        Donec non pulvinar urna. Aliquam id velit lacus.</p>
                </section>

                <h2>Third Step</h2>
                <section>
                    <p>Morbi ornare tellus at elit ultrices id dignissim lorem elementum. Sed eget nisl at justo condimentum dapibus. Fusce eros justo, 
                        pellentesque non euismod ac, rutrum sed quam. Ut non mi tortor. Vestibulum eleifend varius ullamcorper. Aliquam erat volutpat. 
                        Donec diam massa, porta vel dictum sit amet, iaculis ac massa. Sed elementum dui commodo lectus sollicitudin in auctor mauris 
                        venenatis.</p>
                </section>

                <h2>Forth Step</h2>
                <section>
                    <p>Quisque at sem turpis, id sagittis diam. Suspendisse malesuada eros posuere mauris vehicula vulputate. Aliquam sed sem tortor. 
                        Quisque sed felis ut mauris feugiat iaculis nec ac lectus. Sed consequat vestibulum purus, imperdiet varius est pellentesque vitae. 
                        Suspendisse consequat cursus eros, vitae tempus enim euismod non. Nullam ut commodo tortor.</p>
                </section>
            </div>
        </div>
        <div class="w3-col s8 w3-center w3-khaki" id="firstDiv">
        </br>
            <h3 id="message" style="font:  50px 'Open Sans Condensed'" class="text-center w3-text-white">Determine your optimal crop</h3></br>
            <Label class="w3-label" id="regionLabel" style="font:  30px 'Open Sans Condensed'"></Label></br>
            <Label class="w3-label" id="alert" style="font:  20px 'Open Sans Condensed'"></Label>
            <h2 class="w3-label" id="culture" style="font:  30px 'Open Sans Condensed'"></h2>
            <label class="w3-label" id="optimiser" style="font:  30px 'Open Sans Condensed'"></label>
            <div class="w3-row ">
            <div class="w3-col m4 w3-text-white">
                <h3 class="w3-khaki">j</h3>
            </div>
            <div class="w3-col m4 w3-center">
                <select class="w3-select w3-border " id="region" onclick="Select()">
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
                <div class="w3-center w3-khaki" id="firstDiv">
        </br>
     <!--h3 id="message" style="font:  50px 'Open Sans Condensed'" class="w3-text-white">Determine your optimal crop</h3><br>
     
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
             </select-->
          
            <!--select class="w3-select w3-border" id="periode" onclick="Select()">
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
           </div-->
        </div>
   </div>
</div>

<div class="w3-center " style="background-color: rgb(84,33,0);">
    <div id="messager" style="color: rgb(84,33,0);">j</div><br>
</div>
<script type="text/javascript">
    $(function ()
        {
            $("#wizard").steps({
                headerTag: "h2",
                bodyTag: "section",
                next:"N",
                stepsOrientation: "vertical"
            });
        });
</script>
</body>
</html>