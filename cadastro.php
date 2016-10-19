<!DOCTYPE html>
<html lang="en">
<head>
  <title>Reposite</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="css/cadastro.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse" >
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Reposite</a>
    </div>
    <ul class="nav navbar-nav" class="collapse navbar-collapse" class="lead" id="myNavbar">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="quemsomos.php" >Quem Somos</a></li>
        <li><a href="contato.php">Contato</a></li>
        <li><a href="cadastro_produto.php">Produto</a></li>
          <li><a href="necessidades.php">Necessidades</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="cadastro.php"><span class="glyphicon glyphicon-user"></span> Cadastro</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Entrar</a></li>
    </ul>
  </div>
</nav>
 <div class="container">
  <div class="row">
    <div class="col-md-6">

          <form class="form-horizontal" action="cria-usuario.php" method="POST">
          <fieldset>
            <div id="legend">
              <legend class="cad">Faça seu Cadastro</legend>
            </div>
            <div class="control-group">
              <label class="control-label" for="username">Nome</label>
              <div class="controls">
                <input type="text" id="username" name="nome" placeholder="" class="form-control input-lg">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="usuario">Usuario</label>
              <div class="controls">
                <input type="text" id="usuario" name="usuario" placeholder="" class="form-control input-lg">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="end">Endereço</label>
              <div class="controls">
                <input type="text" id="end" name="endereco" placeholder="" class="form-control input-lg">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="fone">Telefone</label>
              <div class="controls">
                <input type="number" id="fone" name="telefone" placeholder="" class="form-control input-lg">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="email">Email</label>
              <div class="controls">
                <input type="email" id="email" name="email" placeholder="" class="form-control input-lg">
              </div>
              <div class="control-group radio">
                <label>
                    <input type="radio" name="categoria" value="0"> Destinatario
                </label>
                <label>
                    <input type="radio" name="categoria" value="1" checked> Doador
                </label>
              </div>

            <div class="control-group">
              <label class="control-label" for="password_confirm">Password</label>
              <div class="controls">
                <input type="password" id="password_confirm" name="senha" placeholder="" class="form-control input-lg">
              </div>
            </div>

              <div class="controls">
                <button class="btn btn-success">Cadastrar</button>
              </div>
            </div>
          </fieldset>
        </form>
    </div>
     <div class="col-md-6">
         <img src="image/cad.png" class="img-responsive" alt="Imagem Responsiva">
          </div>
  </div>
</div>

</body><br>

<?php include("rodape.php") ?>
</html>
