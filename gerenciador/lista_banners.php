<!DOCTYPE html>
<html>
<head>
    <title>Listagem de Banners</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
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
        <h1 class="text-center">Listagem de Banners</h1>
        <div class="d-grid gap-2 col-6 mx-auto">
            <a href="novo_banner.php" class="btn btn-info">Criar</a>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Titulo do banner</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php  
                    $dados = mysqli_query($conexao, "SELECT * FROM banners"); 
                    while ($banner = mysqli_fetch_array($dados)): 
                ?>
                    <tr>
                        <td><?php print $banner['nome']; ?></td>
                        <td>
                            <a href="detalhes_banner.php?id=<?php print $banner['id']; ?>" class="btn btn-info">Detalhes</a>
                            <a href="excluir_banner.php?id=<?php print $banner['id']; ?>" class="btn btn-danger">Excluir</a>
                            <!-- <button class="btn btn-danger" data-toggle="modal" data-target="#confirmDeleteModal1">Excluir</button> -->
                        </td>
                    </tr>
                <?php 
                    endwhile;
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>