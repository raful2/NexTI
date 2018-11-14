<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="style.css" rel="stylesheet" id="bootstrap" type="text/css" >

	<title></title>
</head>
<body id="LoginForm">
<form align="center" method="post" action="ver.php">
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Selecione como você quer recuperar a sua senha.</h1>
    <p class="lead">Você pode recupera-la por meio do celular ou email cadastrado.</p>
  </div>
</div>
  <div class="form-row align-items-center">
    <div class="col-auto my-1">
      <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preferência</label><br><br><br>
      <select name="opcao" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option selected>Como deseja receber a sua senha?</option>
        <option value="1">Celular</option>
        <option value="2">E-mail</option>
      </select>
    </div>
    <div class="col-auto my-1">
      <div class="custom-control custom-checkbox mr-sm-2">
        <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
        <br><br><br><label class="custom-control-label" for="customControlAutosizing">Lembrar preferências</label>
      </div>
    </div>
    <div class="col-auto my-1">
    <br><br><br>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </div><br><br><br><br>
</form>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>