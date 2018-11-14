<?php 

function login($login,$senha){

	if($login != "admin" || $senha != "admin"){
	
	return false;

	}else{
		return true;
	}
}


?>