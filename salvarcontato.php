<?php

include('conexao.php');

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

$dados = mysqli_query($conexao, 
"INSERT INTO contatos(nome, telefone, email, mensagem) VALUES('".$nome."','".$telefone."','".$email."','".$mensagem."')");


header("location: index.php")

?>