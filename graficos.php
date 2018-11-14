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
	echo "<div class='jumbotron jumbotron-fluid'>
    <div class='container'>
      <h1 class='display-4' id='Bg'>Gráficos Mensais</h1>
      <p class='lead'>Neste painel você pode visualizar os gráficos de acordo com o mês.</p>
    </div>
    </div>";
    echo "<div class='container'>
    <div class='row'>
    <div class='col-sm'>
    <a href='chart.html'><button type='button' style='width: 80%;' class='btn btn-info'> Gráficos Janeiro</button></a><br>
	<a href='chart.html'><button type='button' style='width: 80%;' class='btn btn-info'> Gráficos fevereiro </button></a><br>
	<a href='chart.html'><button type='button' style='width: 80%;' class='btn btn-info'> Gráficos março </button></a><br>
	<a href='chart.html'><button type='button' style='width: 80%;' class='btn btn-info'> Gráficos abril </button></a><br>
	<a href='chart.html'><button type='button' style='width: 80%;' class='btn btn-info'> Gráficos maio </button></a><br>
	<a href='chart.html'><button type='button' style='width: 80%;' class='btn btn-info'> Gráficos junho </button></a><br>
	<a href='chart.html'><button type='button' style='width: 80%;' class='btn btn-info'> Gráficos julho </button></a><br>
	<a href='chart.html'><button type='button' style='width: 80%;' class='btn btn-info'> Gráficos agosto </button></a><br>
	<a href='chart.html'><button type='button' style='width: 80%;' class='btn btn-info'> Gráficos setembro </button></a><br>
	<a href='#'><button type='button' style='width: 80%;' disabled class='btn btn-secondary'> Gráficos outubro </button></a><br>
	<a href='#'><button type='button' style='width: 80%;' disabled class='btn btn-secondary'> Gráficos novembro </button></a><br>
    <a href='#'><button type='button' style='width: 80%;' disabled class='btn btn-secondary'> Gráficos dezembro </button></a><br>
    </div>
    <div class='col-sm'>
    <br><br><a href='javascript:window.history.go(-1)' target='_blank'><img src='/img/return.png' height='100' width= '100'/></a><br>
	<font face='Comic Sans MS' color='black' size='4'>Menu Principal</font><br><br><br>
    </div>
	</div>";

?>

	</div>

</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>