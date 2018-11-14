<?php 

function verifica($opcao){
   // $opcao=$_POST['opcao'];

	if($opcao == 1){
	
	header("location:celular.php");

	}elseif($opcao == 2) {
	header("location:email.php");
	} else {
        echo "Erro";
    }
}


?>