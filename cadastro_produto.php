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
    
          <form class="form-horizontal" action="" method="POST">
          <fieldset>
            <div id="legend">
              <legend class="cad">Cadastre seu Produto</legend>
            </div>
            <div class="control-group">
              <label class="control-label" for="username">Produto</label>
              <div class="controls">
                <input type="text" id="name" name="name" placeholder="" class="form-control input-lg">
              </div>
            </div>
            <div class="control-group">
              <label for="descr" class="label-control">Tipo</label><br>
                <input type="radio" name="tipoEletronico" value="generico" checked>Eletronico<br>
                <input type="radio" name="tipoRoupa" value="especifico" >Roupas<br>
                   <input type="radio" name="tipoLivro" value="especifico" >Livros<br>
                   <input type="radio" name="tipoSapatos" value="especifico" >Sapatos<br>
                   <input type="radio" name="tipodeCasa" value="especifico" >Domésticos<br>
         </div>
            <div class="control-group">
              <label class="control-label" for="end">Descrição do Produto</label>
              <div class="controls">
                <textareatype="text" id="end" name="descricao" placeholder="" class="form-control input-lg"></textarea>
              </div>
            </div>      
                         <div class="controls">
                <button class="btn btn-success">Cadastrar</button>
              </div>

            </div>

          </fieldset>
             <div class="col-md-6">
         <img src="image/produto.png" class="img-responsive" alt="Imagem Responsiva">
          </div>
        </form>
    </div> 
  </div>
  </div>

<?php include("rodape.php") ?>

</body>
</html>
