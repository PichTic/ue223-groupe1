var options = {
  url: "/form_find_words.php",
  params: {
    langue: 'FR',
    submit: $('#get_Trad').attr('name'),
  },
  searchContain: true
}

$('#from').on('change', function(){
  options.params.langue = $(this).val();
});


$('#mot').flexdatalist(options);