/*************Appel AJAX************/
function search_request(mot,langueOrigine,langueCible){
	$.ajax({
		url: './php/search_Trad_request.php',
		type: 'POST',
		data: {
			mot: mot,
			langueOrigine: langueOrigine,
			langueCible: langueCible,
		}
	}).done(function(data){
		var data = JSON.parse(data);

		if(data.status == 'failed'){
			$("#trad").val('Mot non trouvé.');
		}else {
			$("#trad").val(data.content[0][langueCible]);
		}
	}).fail(function(){
		$("#retourSearch").html('<p>Une erreur est survenue, réessayer</p>');
	});
}
/**********************************/

//Fonction utilisée lors de l'appui sur le bouton
function search_button_pressed(){
	var langueOrigine = $('#from').val();
	var langueCible = $('#to').val();
	var mot = $('#mot').val();

	//avertissement langues similaires
	if(langueCible==langueOrigine){
		$('#retourSearch').html("<p><strong>Attention vous utilisez la même langue pour traduire !</strong></p>");
	}else if(checkWords(mot)==false){
		$("#mot-flexdatalist").val("");
		$("#mot-flexdatalist").attr('placeholder','Rentrez un mot valide');
	}else{
		search_request(mot,langueOrigine,langueCible);
	}
}


//A l'appui du bouton, on exécute la fonction
$("#get_Trad").on('click', function(){
	search_button_pressed();
});