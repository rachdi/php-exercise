<?php 

function comparaison($prompt1 = '12' ,$prompt2 = '100' ){
	if($prompt1>$prompt2){
		echo "Le premier nombre est plus grand ";
	}else if($prompt1<$prompt2){
		echo "Le premier nombre est plus petit ";
	}else{
		echo "Les deux nombres sont identiques";
	}
}
comparaison();



?>