 $(document).ready(function ()
{  
    function showerror(message,spanid,inputid){

        error_label = message;
        $('#'+spanid).text(error_label);
        $('#'+inputid).addClass('has-error');

    }
    function removerror(message,spanid,inputid) {
        error_label = message;
        $('#'+spanid).text(error_label);
        $('#'+inputid).removeClass('has-error');

        return $('#'+inputid).val();
    }

    function url_redirect(options){
    var $form = $("<form />");
    
    $form.attr("action",options.url);
    
    $("main").append($form);
    $form.submit();
    }

    $('#btnSave').click(function()
    {
    	//var ici=this;
    	//var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        var url = $('#formTrajet').attr('action');
        var data = $('#formTrajet').serialize();
    	
                var voiture=($.trim($('#voiture').val()).length == 0)?showerror(msg='Le champ marque de la voiture est requit !',idspan='error_voiture',inputid='voiture'):removerror(msg='',idspan='error_voiture',inputid='voiture');
				var depart=($.trim($('#depart').val()).length == 0)?showerror(msg='Le champ ville de départ est requit !',idspan='error_depart',inputid='depart'):removerror(msg='',idspan='error_depart',inputid='depart');
                var datedepart=($.trim($('#datedepart').val()).length == 0)?showerror(msg='Le champ date de départ est requit',idspan='error_datedepart',inputid='datedepart'):removerror(msg='',idspan='error_datedepart',inputid='datedepart');
                var arrive=($.trim($('#arrive').val()).length == 0)?showerror(msg='Le champ ville d arrivée est requit',idspan='error_arrive',inputid='arrive'):removerror(msg='',idspan='error_arrive',inputid='arrive');
                var datearrive=($.trim($('#datearrive').val()).length == 0)?showerror(msg='Le champ date d arrivée est requit',idspan='error_datearrive',inputid='datearrive'):removerror(msg='',idspan='error_datearrive',inputid='datearrive');
                var place=($.trim($('#place').val()).length == 0)?showerror(msg='Le champ nombre de place est requit',idspan='error_place',inputid='place'):removerror(msg='',idspan='error_place',inputid='place');
                var infos=($.trim($('#infos').val()).length == 0)?showerror(msg='Le champ information est requit',idspan='error_infos',inputid='infos'):removerror(msg='',idspan='error_infos',inputid='infos');
				var prix=($.trim($('#prix').val()).length == 0)?showerror(msg='Le champ prix de la place est requit',idspan='error_prix',inputid='prix'):removerror(msg='',idspan='error_prix',inputid='prix');
				
                 //alert(data);
				 $.ajax({
                    type: 'post',
                    url: url,
                    data: data,
                    async : false,
                    success: function(response) {
					var t=JSON.parse(response);

                         if(t.etat==1) {
                            swal({
                                type: 'success',
                                title: 'Succès...',
                                text: t.message,
                                closeOnConfirm: false,
                                confirmButtonText: "Ok",
                                confirmButtonColor: "#98c013",
                                footer: 'B2KTECH'
                              }).then((result) => {
                                if(result.value){
                                    return true;
                                }
                                return false;
                            });
                            //url_redirect({url: "ouvrir_session"});
                            }
                         else
                         {
                            swal({
                                type: 'error',
                                title: 'Oops...',
                                text: t.message,
                                closeOnConfirm: false,
                                confirmButtonText: "Ok",
                                confirmButtonColor: "#98c013",
                                footer: 'B2KTECH'
                              });
                            return false;
                         }
                   	}
                });
	return true;
    });

    $('#btn_reservation').click(function(){
        var url = 'form_reservation'//$('#form_reservation').attr('action');
        var data = $('#form_reservation').serialize();
        alert(url);
        $.ajax({
            type: 'post',
            url: url,
            data: data,
            async : false
            });
    });

    $('#btnReserve').click(function(){
      if(document.getElementById("conditions").checked != true){
        swal({
              type: 'error',
              title: 'Oops...',
              text: 'Veuillez lire les conditions générales',
              closeOnConfirm: false,
              confirmButtonText: "Ok",
              confirmButtonColor: "#98c013",
              footer: 'B2KTECH'
            });
      }
      else{
        var url = $('#save_reservation').attr('action');
        var data = $('#save_reservation').serialize();
        $.ajax({
            type: 'post',
            url: url,
            data: data,
            async : false
            /*success: function(response) {
              var t=JSON.parse(response);

                  if(t.etat==1) {
                    swal({
                        type: 'success',
                                title: 'Succès...',
                                text: t.message,
                                closeOnConfirm: false,
                                confirmButtonText: "Ok",
                                confirmButtonColor: "#98c013",
                                footer: 'B2KTECH'
                              }).then((result) => {
                                if(result.value){
                                    return true;
                                }
                                return false;
                            });

                          }
                         else
                         {
                            swal({
                                type: 'error',
                                title: 'Oops...',
                                text: t.message,
                                closeOnConfirm: false,
                                confirmButtonText: "Ok",
                                confirmButtonColor: "#98c013",
                                footer: 'B2KTECH'
                              });
                            return false;
                         }
                       }*/
            });
      }
    });
    $('#btnAnnulerReser').click(function(){
       var url = 'annuler_reservation';
       var data = $('#formmodifier_reservation').serialize();
       alert(document.getElementById('#id_trajet').value());
      /*Swal.fire({
        title: 'Avertissement',
        text: "Voulez-vous supprimer ce trajet?",
        type: 'question',
        showCancelButton: true,
        confirmButtonColor: '#98c013',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Annuler',
        confirmButtonText: 'Oui, supprimer !',
        closeOnConfirm: false
      }).then((result) => {
        if (result.value) {*/
          //alert(data);
          $.ajax({
            type: 'post',
            url: url,
            data: data,
            async : false,
            success: function () {
              //var t=JSON.parse(response);
              Swal.fire("Effectué!", "Resrvation supprimée avec succés!", "success");
            },
            error: function (xhr, ajaxOptions, thrownError) {
              Swal.fire("Erreur de suppression!", "Reéssayez s'il vous plait", "error");
            }
          });
    });

    $('#btnModifReserve').click(function(){
      if(document.getElementById("conditions_generales").checked != true){
        swal({
              type: 'error',
              title: 'Oops...',
              text: 'Veuillez lire les conditions générales',
              closeOnConfirm: false,
              confirmButtonText: "Ok",
              confirmButtonColor: "#98c013",
              footer: 'B2KTECH'
            });
      }
      else{
        var url = $('#form_modifier_reservation').attr('action');
        var data = $('#form_modifier_reservation').serialize();
        alert(data);
        $.ajax({
                  type: 'post',
                  url: url,
                  data: datas,
                  success: function(msg){
                    swal("Effectué!", "Trajet supprimé avec succés!", "success");
                  }
                  /*error: function (xhr, ajaxOptions, thrownError) {
                    swal("Erreur de suppression!", "Reéssayez s'il vous plait", "error");
                  }*/
                });
      }
    });
}); 

function deletetrajet(data){
      var url = 'supprimer_trajet';
      var data = {id_trajet:data};
      //alert(url);
      Swal.fire({
        title: 'Avertissement',
        text: "Voulez-vous supprimer ce trajet?",
        type: 'question',
        showCancelButton: true,
        confirmButtonColor: '#98c013',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Annuler',
        confirmButtonText: 'Oui, supprimer !'
      }).then((result) => {
        if (result.value) {
          //alert(data);
          $.ajax({
            type: 'post',
            url: url,
            data: data,
            async : false,
            success: function () {
              //var t=JSON.parse(response);
              Swal.fire("Effectué!", "Trajet supprimé avec succés!", "success");
              location.reload(); 
            },
            error: function (xhr, ajaxOptions, thrownError) {
              Swal.fire("Erreur de suppression!", "Reéssayez s'il vous plait", "error");
            }
          });
        }
        })
    }

    /*function reserver_trajet(data){
      //alert(data);
      var url = 'form_reservation';//$('#form_reservation').attr('action');
      var data =  $('#new_resrvation').serialize();
      $.ajax({
            type: 'post',
            url: url,
            data: data,
            async : false
            });
    }*/

function annuler_reservation(reservation,trajet,place){
      //alert(reservation+" "+ trajet+" "+place);
      var url = 'annuler_reservation';
      var data = {id_reservation:reservation,id_trajet:trajet,place_disponible:place};
      //alert(url);
      /*Swal.fire({
        title: 'Avertissement',
        text: "Voulez-vous supprimer ce trajet?",
        type: 'question',
        showCancelButton: true,
        confirmButtonColor: '#98c013',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Annuler',
        confirmButtonText: 'Oui, supprimer !',
        closeOnConfirm: false
      }).then((result) => {
        if (result.value) {*/
          $.ajax({
            type: 'post',
            url: url,
            data: data,
            async : false,
            success: function () {
              //var t=JSON.parse(response);
              swal("Effectué!", "Trajet supprimé avec succés!", "success");
              location.reload();  
            },
            error: function (xhr, ajaxOptions, thrownError) {
              Swal.fire("Erreur de suppression!", "Reéssayez s'il vous plait", "error");
            }
          });
        //}
        //})
    }

/*function form_modifier_reservation($data){
  var url = 'formmodifier_reservation';
  var datas = {id_reservation:data};
  alert(datas);
  $.ajax({
            type: 'post',
            url: url,
            data: datas,
            success: function(msg){
              alert(msg);
            }
            error: function (xhr, ajaxOptions, thrownError) {
              Swal.fire("Erreur de suppression!", "Reéssayez s'il vous plait", "error");
            }
          });
}*/