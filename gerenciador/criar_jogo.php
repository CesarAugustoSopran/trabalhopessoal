<?php 
header('Content-Type: text/html; charset=utf-8');

$dataAtual = new DateTime();
$horarioAtual = new DateTime();
$dataFormatada = $dataAtual->format("Ymd");
$horarioFormatado = $horarioAtual->format("His");

$file = $_FILES['imagem']["name"];
$ext = pathinfo($file, PATHINFO_EXTENSION);

$nome = $_POST['nome'];
$plataforma = $_POST['plataforma'];
$preco = $_POST['preco'];
$avaliacoes = $_POST['avaliacoes'];
$classificacao = $_POST['classificacao'];
$descricao = addslashes($_POST['descricao']);
$imagem = $dataFormatada.$horarioFormatado.'.'.$ext;

include("../conexao.php");

var_dump("INSERT INTO jogos (`nome`, `plataforma`, `preco`, `avaliacoes`, `classificacao`, `descricao`, `imagem`) VALUES ('$nome', '$plataforma', '$preco', $avaliacoes, $classificacao, '$descricao', '$imagem');");

$inserirbanco = mysqli_query($conexao, "INSERT INTO jogos (`nome`, `plataforma`, `preco`, `avaliacoes`, `classificacao`, `descricao`, `imagem`) VALUES ('$nome', '$plataforma', '$preco', $avaliacoes, $classificacao, '$descricao', '$imagem');");
if ($inserirbanco) {
    if ($_FILES["imagem"]["error"] > 0) {
        echo "Erro no upload: " . $_FILES["imagem"]["error"];
    } else {
        move_uploaded_file($_FILES['imagem']["tmp_name"],'img/'.$imagem);
    }
}
header("location: lista_jogos.php");
?>