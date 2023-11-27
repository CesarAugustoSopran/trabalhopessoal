<?php 
header('Content-Type: text/html; charset=utf-8');

$nome = $_POST['nome'];
$plataforma = $_POST['plataforma'];
$preco = $_POST['preco'];
$avaliacoes = $_POST['avaliacoes'];
$classificacao = $_POST['classificacao'];
$descricao = $_POST['descricao'];
$id = $_POST['id'];

include("../conexao.php");

$inserirbanco = mysqli_query($conexao, "UPDATE jogos set `nome` = '$nome', `plataforma` = '$plataforma', `preco` = $preco, `avaliacoes` = $avaliacoes, `classificacao` = $classificacao, `descricao` = '$descricao' WHERE id = $id;");
header("location: lista_jogos.php");
?>