<?php 
header('Content-Type: text/html; charset=utf-8');

$dados = mysqli_query($conexao, "SELECT * FROM jogos WHERE id = $id;"); 
$jogo = mysqli_fetch_array($dados);

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
$descricao = $_POST['descricao'];
$id = $_POST['id'];
$imagem = $dataFormatada.$horarioFormatado.'.'.$ext;

include("../conexao.php");

$inserirbanco = mysqli_query($conexao, "UPDATE jogos set `nome` = '$nome', `plataforma` = '$plataforma', `preco` = $preco, `avaliacoes` = $avaliacoes, `classificacao` = $classificacao, `descricao` = '$descricao', `imagem` = '$imagem' WHERE id = $id;");
if ($inserirbanco) {
    if ($_FILES["imagem"]["error"] > 0) {
        echo "Erro no upload: " . $_FILES["imagem"]["error"];
    } else {
        move_uploaded_file($_FILES['imagem']["tmp_name"],'img/'.$imagem);
    }
}
header("location: excluir_imagem.php?arquivo=".$jogo['imagem']."&pagina=lista_jogos");
?>