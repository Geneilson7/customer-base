<?php 
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';

if (isset($_POST['btn-deletar'])): // Clicou no botão cadastrar

  $id = mysqli_escape_string($connect, $_POST['id']);

  $sql = "DELETE FROM clientes WHERE id = '$id'";

  if (mysqli_query($connect, $sql)):
    $_SESSION['mensagem'] = "Deletado com suceesso!";
    header('Location: ../index.php');
  else:
    $_SESSION['mensagem'] = "Erro ao Deletar";
    header('Location: ../index.php');
  endif;
endif;


?>