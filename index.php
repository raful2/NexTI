<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="style.css" rel="stylesheet" id="bootstrap" type="text/css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<html>
  <head>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
  </head>
<body id="LoginForm">
<div class="container">
<div align="center"><h1 class="form-heading">Formulario de Login</h1></div>
<div class="login-form">
<div class="main-div" align="center">
    <div class="panel" align="center">
   <h2>Entrar</h2>
   <p>Por favor, informe suas credenciais</p>
   </div>
    <form id="Login" action="action.php" method="post">

        <div class="form-group">


            <input type="user" name="login" class="form-control" REQUIRED="REQUIRED" id="inputEmail" placeholder="Login">

        </div>

        <div class="form-group">

            <input type="password" name="senha" class="form-control" id="inputPassword" placeholder="Password"> <br>   <button type="submit" class="btn btn-primary">Login</button>
         <a href="cadastrar.php" > <input class="btn btn-primary" value="Cadastrar">  </button></a>	

        </div>
        <div class="forgot" align="center">
        <a href="esqueciasenha.php">Esqueci a Senha</a>
</div>
    

    </form>
    </div>

</div></div></div>


</body>
</html>
