<?php 
header('Content-Type: text/html; charset=utf-8');

$dataAtual = new DateTime();
$horarioAtual = new DateTime();
$dataFormatada = $dataAtual->format("Ymd");
$horarioFormatado = $horarioAtual->format("His");

$nome = $_POST['nome'];
$plataforma = $_POST['plataforma'];
$preco = $_POST['preco'];
$avaliacoes = $_POST['avaliacoes'];
$classificacao = $_POST['classificacao'];
$descricao = $_POST['descricao'];
$imagem = $dataFormatada.$horarioFormatado.str_replace('image/', '', $_FILES["imagem"]["type"]);

include("../conexao.php");

$inserirbanco = mysqli_query($conexao, "INSERT INTO jogos (`nome`, `plataforma`, `preco`, `avaliacoes`, `classificacao`, `descricao`, `imagem`) VALUES ('$nome', '$plataforma', '$preco', $avaliacoes, $classificacao, '$descricao', '$imagem');");
if ($inserirbanco) {
    if ($_FILES["imagem"]["error"] > 0) {
        echo "Erro no upload: " . $_FILES["imagem"]["error"];
    } else {
        // Mover o arquivo para o diretório desejado
        $_FILES["imagem"]["tmp_name"] = $imagem;
    
        $diretorio_destino = "../img";
        $caminho_destino = $diretorio_destino . basename($_FILES["imagem"]["name"]);
    
        if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $caminho_destino)) {
            echo "Upload bem-sucedido! O arquivo foi salvo em: " . $caminho_destino;
        } else {
            echo "Erro ao mover o arquivo para o diretório de destino.";
        }
    }
}
header("location: lista_jogos.php");
?>