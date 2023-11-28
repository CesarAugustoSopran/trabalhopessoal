<?php 
header('Content-Type: text/html; charset=utf-8');

$dataAtual = new DateTime();
$horarioAtual = new DateTime();
$dataFormatada = $dataAtual->format("Ymd");
$horarioFormatado = $horarioAtual->format("His");

$file = $_FILES['imagem']["name"];
$ext = pathinfo($file, PATHINFO_EXTENSION);

$nome = $_POST['nome'];
$jogo = $_POST['jogo'];
$imagem = $dataFormatada.$horarioFormatado.'.'.$ext;

include("../conexao.php");

$inserirbanco = mysqli_query($conexao, "INSERT INTO banners (`nome`, `jogo`, `imagem`) VALUES ('$nome', $jogo, '$imagem');");
if ($inserirbanco) {
    if ($_FILES["imagem"]["error"] > 0) {
        echo "Erro no upload: " . $_FILES["imagem"]["error"];
    } else {
        move_uploaded_file($_FILES['imagem']["tmp_name"],'img/'.$imagem);
    }
}
header("location: lista_banners.php");
?>