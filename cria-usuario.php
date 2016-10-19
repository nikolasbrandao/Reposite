<?php
include('conexao.php');

  $nome = $_POST['nome'];
  $usuario = $_POST['usuario'];
  $senha = $_POST['senha'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $endereco = $_POST['endereco'];
  $categoria = $_POST['categoria'];

  $criptografada = md5($senha);

  $comando = "insert into usuario (nome, usuario, senha, email, telefone, categoria)
  values ('$nome', '$usuario', '$criptografada', '$email', '$telefone', $categoria);";
  echo $comando;
  if($resultado = mysqli_query($conexao,$comando)){
        //header('location:index.php');
        echo "sucesso";
    }
  else{
        //header('location:index.php');
        echo "falha";
  }

  mysqli_close($conexao);
?>
