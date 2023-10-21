var fieldalias="mot de passe"
// On Déclare dans la variable fieldalias le type de texte entré

function verify(element1, element2)
// La fonction reçois en paramètre les 2 éléments
 {
  var passed=false
// On va donner à la variable passed la valeur false (fausse).

   if (element1.value=='')
// si le premier champ est vide (Propriété value vide)
   {
    alert("Veuillez entrer votre "+fieldalias+" dans le premier champ!")
// c'est pas bien il faut le remplir :-)
// On ouvre donc une boite d'alerte grâce à la méthode alert de l'objet window
    element1.focus()
// et on y place le curseur grâce à la méthode focus
   }

// puis on va faire exactement la même chose pour le second champ
   else if (element2.value=='')
   {
    alert("Veuillez confirmer votre "+fieldalias+" dans le second champ!")
    element2.focus()
   }

   else if (element1.value!=element2.value)
/* Si les valeurs des 2 éléments ne sont pas égales (on utilise donc l'opérateur
  de comparaison d'inégalité != */
   {
    alert("Les deux "+fieldalias+" ne condordent pas")
// toujours la boite d'alerte
    element1.select()
// Et la on utilise la méthode select qui permet de selectionner la valeur écrite.
   }

   else
   passed=true
   return passed
 }
// fin du script -->