<?php
$username = $_POST['username'];
$password = $_POST['password'];

include("../conexao.php");

$dados = mysqli_query($conexao, "SELECT * FROM usuarios WHERE nome = '$username' limit 1");

if ($dados->num_rows === 1) {
    $login = mysqli_fetch_array($dados);

    if ($password === $login['senha']) {
        session_start();
        $_SESSION['username'] = $username;
        header("Location: lista_jogos.php");
    } else {
        echo "Senha incorreta";
    }
} else {
    echo "Nome de usuário não encontrado";
}
?>