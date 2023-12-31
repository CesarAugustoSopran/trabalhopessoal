<!DOCTYPE html>
<html>
<head>
    <title>Detalhes do Jogo</title>
    <!-- Adicione o link para a biblioteca Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="../estilos/estilo.css" rel="stylesheet">
</head>
<body>
    <?php

        session_start();

        if (!isset($_SESSION['username'])) {
            header("Location: index.php");
        }

        include("../conexao.php");
    ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">Gerenciador</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="lista_jogos.php">Jogos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="lista_banners.php">Banners</a>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav" style="display: flex!important;flex-basis: auto!important;flex-direction: row-reverse!important;">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/trabalhopessoal">Loja</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        <h1 class="text-center">Detalhes do Jogo</h1>
        <div class="card">
            <div class="card-body">
                <?php  
                    include("../conexao.php");
                    $dados = mysqli_query($conexao, "SELECT * FROM jogos where id = ".$_GET['id']); 
                    $jogo = mysqli_fetch_array($dados);
                ?>
                <form method="post" action="editar_jogo.php" enctype="multipart/form-data">
                    <input type="hidden" id="id" name="id" value="<?php print $jogo['id']; ?>">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Titulo:</label>
                        <input type="text" class="form-control" id="nome" name="nome" value="<?php print $jogo['nome']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="plataforma" class="form-label">Plataforma:</label>
                        <input type="text" class="form-control" id="plataforma" name="plataforma" value="<?php print $jogo['plataforma']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="preco" class="form-label">Preço (R$):</label>
                        <input type="number" class="form-control" id="preco" name="preco" value="<?php print $jogo['preco']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="avaliacoes" class="form-label">Avaliações dos criticos:</label>
                        <input type="number" class="form-control" id="avaliacoes" name="avaliacoes" value="<?php print $jogo['avaliacoes']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="classificacao" class="form-label">Classificação indicativa:</label>
                        <input type="number" class="form-control" id="classificacao" name="classificacao" value="<?php print $jogo['classificacao']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="descricao" class="form-label">Descrição:</label>
                        <textarea class="form-control" id="descricao" name="descricao"><?php print $jogo['descricao']; ?></textarea>
                    </div>
                    <div class="mb-3 d-flex justify-content-center">
                        <img src="img/<?php print $jogo['imagem']; ?>" class="img-fluid imagem-jogo-destaque" alt="Banner Imagem">
                    </div>
                    <div class="mb-3">
                        <label for="imagem" class="form-label">Imagem:</label>
                        <input type="file" class="form-control" id="imagem" name="imagem" value="" accept="image/*" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                    <a href="lista_jogos.php" class="btn btn-secondary">Voltar para a Listagem de Jogos</a>
                </form>
            </div>
        </div>
    </div>

    <!-- Adicione o link para a biblioteca Bootstrap JavaScript no final da página -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>