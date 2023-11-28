<?php 
header('Content-Type: text/html; charset=utf-8');

$id = $_GET['id'];

include("../conexao.php");

$dados = mysqli_query($conexao, "SELECT * FROM banners WHERE id = $id;"); 
$banner = mysqli_fetch_array($dados);

$inserirbanco = mysqli_query($conexao, "DELETE FROM banners WHERE id = $id;");

header("location: excluir_imagem.php?arquivo=".$banner['imagem']."&pagina=lista_banners");
?>