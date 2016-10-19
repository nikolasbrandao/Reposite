<?php
  include('conexao.php');
  $usuario = $_POST['usuario'];
  $senha = $_POST['senha'];
  $criptografada = md5($senha);

	$comando = "select * from usuario where usuario = '$usuario' and senha = '$criptografada';";
  echo $comando;
  $resultado = mysqli_query($conexao,$comando);
  if($dados = mysqli_fetch_row($resultado)){
        session_start();
        $_SESSION['id'] = $dados[0];
        $_SESSION['nome'] = $dados[1];
        $_SESSION['usuario'] = $dados[3];
        $_SESSION['categoria'] = $dados[7];

        if($_SESSION['categoria'] == 1){
          //doador

        }else{
          //destinatario

        }
        echo "sucesso";
        //header('location:home.php');
    }
  else{
    echo "falha";
    //header('location:erro.php');
  }

  mysqli_close($conexao);
?>
