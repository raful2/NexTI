<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="style.css" rel="stylesheet" id="bootstrap" type="text/css" >

	<title></title>
</head>
<body id="LoginForm">
<div class="container">
	<div class="display-5">
		<?php 
		
include 'login.php';

if(login($_POST['login'], $_POST['senha']) == false){
	echo "<br><br><br><br><br><br><br><br><br><div class='alert alert-info' role='alert'>Dados incorretos, tente novamente.</div>";
	echo "<a href='index.php'><button type='button' class='btn btn-light'>Clique aqui para voltar</button></a><br><br><br><br><br><br><br><br><br><br><br><br>";
}else{ 
	//header('Location: logado.php');
	echo "<div class='jumbotron jumbotron-fluid'>
	<div class='container'>
	  <h1 class='display-4' id='Bg'>Menu Principal</h1>
	  <p class='lead'>Selecione a opção desejada.</p>
	</div>
  </div>";
  echo "<div class='container' align='center'>
  <div class='row'>
    <div class='col-sm'>
	<br><br><a href='minhascontas.php'><img src='img\icone1.png' height='150' width= '150'/></a><br>
	<font face='Comic Sans MS' color='black' size='4'>Minhas contas</font><br><br><br>
    </div>
    <div class='col-sm'>
	<br><br><a href='graficos.php'><img src='img\icone2.png' height='150' width= '150'/></a><br>
    <font face='Comic Sans MS' color='black' size='4'>Gráficos</font><br><br><br>
    </div>
	<div class='col-sm'>
	<br><br><a href='index.php' onclick='javascript:window.close()' target='_blank'><img src='img\icone4.png' height='150' width= '150'/></a><br>
    <font face='Comic Sans MS' color='black' size='4'>Deslogar</font><br><br><br>
  </div>
  </div>
</div>";

}

?>

	</div>

</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>


