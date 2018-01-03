$('#ajout_Trad').on('click', function(){


  var trad_FR = $('#ajout_FR').val();
  var trad_EN = $('#ajout_EN').val();
  var trad_ES = $('#ajout_ES').val();
  var errors = [];


  if(!checkLength(trad_FR)){
    errors.push('Un mot en Français doit être ajouté et être compris entre 2 et 254 caractères');
  }
  if(!checkLength(trad_EN)){
    errors.push('Un mot en Anglais doit être ajouté et être compris entre 2 et 254 caractères');
  }
  if(!checkLength(trad_ES)){
    errors.push('Un mot en Espagnol doit être ajouté et être compris entre 2 et 254 caractères');
  }

  if(!checkWords(trad_FR) && trad_FR.length > 1){
    errors.push('Le mot en Français ne doit contenir que des lettres');
  }
  if(!checkWords(trad_EN) && trad_EN.length > 1){
    errors.push('Le mot en Anglais ne doit contenir que des lettres');
  }
  if(!checkWords(trad_ES) && trad_ES.length > 1){
    errors.push('Le mot en Anglais ne doit contenir que des lettres');
  }

  if(errors.length > 0) {
    returnErrors(errors, '#retourAjout');
  }
  if(errors.length == 0) {
    var trads = $.post( "form.php", $( "#formAjouter" ).serialize() + '&ajout_Trad=' );

    trads.done(function(data) {
      var data = JSON.parse(data);
      console.log(data);
      $("#retourAjout").html(data.content);
    });

    trads.fail(function() {
      $("#retourAjout").html('<p>Une erreure est survenue, reesayer</p>');
    })
  }
});