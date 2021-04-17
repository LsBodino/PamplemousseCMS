function MaxTexte(objettextarea,maxlength){
    if (objettextarea.value.length > maxlength) {
      objettextarea.value = objettextarea.value.substring(0, maxlength);
      alert('Votre texte ne doit pas dépasser '+maxlength+' caractères! Merci. :)');
     }
  }