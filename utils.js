//functions utilitaires

/**
 * function qui controle la longueure d'un mot
 * @param {string} mot
 * @return {bool}
 */
 function checkLength(mot){
   console.log(mot);
  if (mot.length > 255 || mot.length < 2) {
    return false;
  }
  return true;
 }

/**
 * function qui affiche les messages d'erreurs
 * @param {array} errors
 * @param {string} selector
 */
 function returnErrors(errors, selector){
   var msg = 'Attention : <ul>';
   errors.forEach(function(el) {
    msg += '<li>' + el + '</li>';
  });
  msg += '</ul>';
  $(selector).html(msg);
 }


/**
 * function qui control que le mot est bien composé que de lettres
 * @param {string} mot
 */
 function checkWords(mot){
   if(!/^[a-zA-ZÀ-ÖØ-öø-ÿ\-']{2,254}$/u.test(mot)){
    return false;
   }
   return true;
 }
