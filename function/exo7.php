 <?php  
 function agegenre(){

 	$genre= $_POST['genre'];
 	$age=$_POST['age'];
 	$i=18;

 	// if($genre=homme && $age>18){
 	// 	echo "Vous êtes un homme et vous êtes majeur";
 	// }
 	// else if($genre=homme && $age<18){
 	// 	echo "Vous êtes un homme et vous êtes mineur";
 	// }else if($genre=femme && $age<18){
 	// 	echo "Vous êtes une femme et vous êtes mineur";
 	// }
 	// else{
 	// 	echo "Vous êtes une femme et vous êtes mageur";
 	// }
 	if($age>$i){
 		echo "Vous êtes un $genre et vous êtes mageur ";
 	}else{
 		echo "Vous êtes un $genre et vous êtes mineur";
 	}
 }
 agegenre();
