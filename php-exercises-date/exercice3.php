 <?php 

//Voici les deux tableaux des jours et des mois traduits en français
 $nom_jour_fr = array("dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi");
 $mois_fr = Array("", "janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", 
 	"septembre", "octobre", "novembre", "décembre");
 list($nom_jour, $jour, $mois, $annee) = explode('/', date("w/d/n/Y"));
 echo "date du jour en français :$nom_jour_fr[$nom_jour] $jour $mois_fr[$mois] $annee " ;


 ?>