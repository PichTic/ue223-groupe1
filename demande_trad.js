$('demande_trad').on('clik', function(){

	var errors = [];
	var mot_trad = $('#mot').val();
	var lang_trad = $('#lang_trad option:selected').val();
	var lang_cible = $('#lang_cible option:selected').val();

	if(!checkLength(mot_trad)){
		errors.push('Le mot qui doit être traduit doit avoir entre 2 et 254 caractères');
	}

	if (!checkWords(mot_trad) && mot_trad.length > 1) {
		errors.push('Le mot rentré ne doit contenir que des lettres');
	}

	if(lang_trad == lang_cible){
		errors.push('Vous avez choisi la même langue de traduction que celle de départ')
	}

	if(errors.length > 0){
		returnErrors(errors, '#retourAjout2');
	}
	if(errors.length == 0){
		var trads = $.post("form2.php", $('#form_trad').serialize());

		trads.done(function(data){
			var data = JSON.parse(data);
			console.log(data);
			$("#trad").html(data.content);
		});

		trads.fail(function(){
			$("#retourAjout2").html('<p>Une erreur est survenue, réessayer</p>');
		});
	}

});