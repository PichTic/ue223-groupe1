var options = {
  url: "./php/form_find_words.php",
  params: {
    langue: 'FR',
    submit: $('#get_Trad').attr('name'),
  },
  searchContain: true,
  searchIn: 'FR',
  noResultsText: 'Pas de résultats pour "{keyword}"',
  cache: false
}

var autoComplete = $('#mot').flexdatalist(options);

$('#from').on('change', function(){
  options.params.langue = $(this).val();
  options.searchIn = $(this).val();
  //vide l'in d'autocomplétion
  autoComplete.flexdatalist('reset');
  //réinstancie le champ avec les nouvelles conf
  autoComplete.flexdatalist(options);
});
