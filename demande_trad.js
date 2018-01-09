$('demande_trad').on('clik', function(){

	var errors = [];
	var mot_trad = $('mot').val();
	var lang_trad = $('lang_trad option:selected').val();
	var lang_cible = $('lang_cible option:selected').val();

	if(!checkLength(mot_trad)){
		errors.push('Le mot qui doit être traduit doit avoir entre 2 et 254 caractères');
	}

	if (!checkWords(mot_trad) && mot_trad.length > 1) {
		errors.push('Le mot rentré ne doit contenir que des lettres');
	}

	$('trad').html(lang_cible+' '+lang_trad);

});