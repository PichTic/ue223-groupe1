/*************Appel AJAX************/
function search_request(mot,langueOrigine,langueCible){
	$.ajax({
		url: 'search_Trad_request.php',
		type: 'POST',
		data: {
			mot: mot,
			langueOrigine: langueOrigine,
			langueCible: langueCible,
		}
	}).done(function(data){
		if(data == ""){
			$("#trad").val('Mot non trouvé.');
		}
		else {
			$("#trad").val(data);
		}
	});
}
/**********************************/

//Fonction utilisée lors de l'appui sur le bouton
function search_button_pressed(){
	var langueOrigine = $('#from').val();
	var langueCible = $('#to').val();
	var mot = $('#mot').val();
	
	//On exécute l'appel AJAX
	search_request(mot,langueOrigine,langueCible);
}

	
//A l'appui du bouton, on exécute la fonction
$("#get_Trad").click(function(){
	search_button_pressed();
});