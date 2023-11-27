<?php 
header('Content-Type: text/html; charset=utf-8');

$id = $_GET['id'];

include("../conexao.php");

$inserirbanco = mysqli_query($conexao, "DELETE FROM quartos WHERE id = $id;");
header("location: lista_quartos.php");
?>