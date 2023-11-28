<?php 
header('Content-Type: text/html; charset=utf-8');

$dados = mysqli_query($conexao, "SELECT * FROM banners WHERE id = $id;"); 
$banner = mysqli_fetch_array($dados);

$dataAtual = new DateTime();
$horarioAtual = new DateTime();
$dataFormatada = $dataAtual->format("Ymd");
$horarioFormatado = $horarioAtual->format("His");

$file = $_FILES['imagem']["name"];
$ext = pathinfo($file, PATHINFO_EXTENSION);

$nome = $_POST['nome'];
$jogo = $_POST['jogo'];
$id = $_POST['id'];
$imagem = $dataFormatada.$horarioFormatado.'.'.$ext;

include("../conexao.php");

$inserirbanco = mysqli_query($conexao, "UPDATE banners set `nome` = '$nome', `jogo` = '$jogo', `imagem` = '$imagem' WHERE id = $id;");
if ($inserirbanco) {
    if ($_FILES["imagem"]["error"] > 0) {
        echo "Erro no upload: " . $_FILES["imagem"]["error"];
    } else {
        move_uploaded_file($_FILES['imagem']["tmp_name"],'img/'.$imagem);
    }
}
header("location: excluir_imagem.php?arquivo=".$banner['imagem']."&pagina=lista_banners");
?>