var options = {
  url: "./form_find_words.php",
  params: {
    langue: 'FR',
    submit: $('#get_Trad').attr('name'),
  },
  searchContain: true,
  searchIn: ['FR']
}

$('#from').on('change', function(){
  options.params.langue = $(this).val();
  options.searchIn = [$(this).val()];
});


$('#mot').flexdatalist(options);