<?php 
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';

if (isset($_POST['btn-editar'])): // Clicou no botão cadastrar
  $nome = mysqli_escape_string($connect, $_POST['nome']);
  $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
  $email = mysqli_escape_string($connect, $_POST['email']);
  $idade = mysqli_escape_string($connect, $_POST['idade']);

  $id = mysqli_escape_string($connect, $_POST['id']);

  $sql = "UPDATE clientes SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', idade ='$idade' WHERE id = '$id'";

  if (mysqli_query($connect, $sql)):
    $_SESSION['mensagem'] = "Atualizado com suceesso!";
    header('Location: ../index.php');
  else:
    $_SESSION['mensagem'] = "Erro ao Atualizar";
    header('Location: ../index.php');
  endif;
endif;


?>