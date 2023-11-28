<?php 
header('Content-Type: text/html; charset=utf-8');

$id = $_GET['id'];

include("../conexao.php");

$dados = mysqli_query($conexao, "SELECT * FROM jogos WHERE id = $id;"); 
$jogo = mysqli_fetch_array($dados);

$inserirbanco = mysqli_query($conexao, "DELETE FROM jogos WHERE id = $id;");

header("location: excluir_imagem.php?arquivo=".$jogo['imagem']."&pagina=lista_jogos");
?>