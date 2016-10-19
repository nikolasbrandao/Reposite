<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Reposite</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <script src="js/jquery-2.2.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>  </head>
  <body>
    <main>

        <div class="panel panel-primary col-md-4 col-md-offset-4" >
            <div class="panel-heading">
              <div class="panel-title text-center">reposite.com.br</div>
            </div>

            <div class="panel-body">

              <form class="form-horizontal" action="cria-usuario.php" method="post">
                <div class="row input-group">
                  <label for="">Digite seu nome</label>
                  <input type="text" name="nome" value="" placeholder="nome" class="form-control">
                </div>
                <div class="row input-group">
                  <label for="">Digite seu email</label>
                  <input type="email" name="email" value="" placeholder="Email" class="form-control">
                </div>
                <div class="row input-group">
                  <label for="">Digite sua senha</label>
                  <input type="password" name="senha" value="" placeholder="Senha" class="form-control">
                </div>
                    <input class="btn btn-primary form-control" type="submit" value="criar conta">
                </form>
            </div>
        </div>
    </main>
  </body>
</html>
