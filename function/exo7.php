 <?php  
 function agegenre(){

 	$genre= $_POST['genre'];
 	$age=$_POST['age'];
 	$i=18;

 	
 	if($age>$i){
 		echo "Vous êtes un $genre et vous êtes mageur ";
 	}else{
 		echo "Vous êtes un $genre et vous êtes mineur";
 	}
 }
 agegenre();
