<!DOCTYPE html>
<html>
<head>
    <title>Detalhes da Reserva</title>
    <!-- Adicione o link para a biblioteca Bootstrap CSS -->
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
                        <a class="nav-link" href="lista_quartos.php">Quartos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="lista_reservas.php">Reservas</a>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav" style="display: flex!important;flex-basis: auto!important;flex-direction: row-reverse!important;">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/hotelaria">Hotelaria</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <?php  
        include("../conexao.php");
        $dados = mysqli_query($conexao, "SELECT * FROM reservas where id = ".$_GET['id']); 
        $reserva = mysqli_fetch_array($dados);

        $dados = mysqli_query($conexao, "SELECT * FROM quartos where id = ".$reserva['id_quarto']); 
        $quarto = mysqli_fetch_array($dados);
    ?>

    <div class="container mt-4">
        <h1 class="text-center">Detalhes da Reserva</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Reserva #<?php print $reserva['id']; ?></h5>
                <p><strong>Nome do Hóspede:</strong> <?php print $reserva['nome']; ?></p>
                <p><strong>E-mail do Hóspede:</strong> <?php print $reserva['email']; ?></p>
                <p><strong>Data de Check-in:</strong> <?php print $reserva['data_in']; ?></p>
                <p><strong>Data de Check-out:</strong> <?php print $reserva['data_out']; ?></p>
                <p><strong>Número de Hóspedes:</strong> <?php print $reserva['hospedes']; ?></p>
                <p><strong>Custo total:</strong> R$ <?php print $reserva['custo']; ?></p>

                <!-- Detalhes do Quarto -->
                <h5 class="mt-4">Detalhes do Quarto Reservado</h5>
                <p><strong>Tipo de Quarto:</strong> <?php print $quarto['tipo']; ?></p>
                <p><strong>Descrição do Quarto:</strong> <?php print $quarto['descricao']; ?></p>

                <a href="excluir_reserva.php?id=<?php print $reserva['id']; ?>" class="btn btn-danger">Cancelar Reserva</a>
                <a href="lista_reservas.php" class="btn btn-secondary">Voltar para Listagem de Reservas</a>
            </div>
        </div>
    </div>

    <!-- Adicione o link para a biblioteca Bootstrap JavaScript no final da página -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>