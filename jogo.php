<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Detalhes do Jogo</title>
  <!-- Inclua o Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="estilos/estilo.css" rel="stylesheet">
</head>

<body>

  <!-- Cabeçalho -->
  <header class="bg-dark text-light text-center py-3">
    <div class="d-flex justify-content-between align-items-center">
      <a href="/trabalhopessoal" class="ms-3" style="color: white;text-decoration: none;"><h1>Loja de Games</h1></a>
      <a href="/trabalhopessoal/gerenciador" class="me-3" style="color: white;text-decoration: none;">Gerenciador</a>
    </div>
  </header>

  <!-- Detalhes do Jogo -->
  <section class="container my-4" style="min-height: 750px">
    <div class="row">
      <?php  
        include("conexao.php");
        $dados = mysqli_query($conexao, "SELECT * FROM jogos where id = ".$_GET['id']); 
        $jogo = mysqli_fetch_array($dados);
      ?>
      <div class="col-md-6">
        <img src="gerenciador/img/<?php print $jogo['imagem']; ?>" class="img-fluid imagem-detalhe" alt="Game 1">
      </div>
      <div class="col-md-6">
        <h2 class="pb-4"><?php print $jogo['nome']; ?></h2>
        <p><strong>Preço:</strong> R$<?php print $jogo['preco']; ?></p>
        <p><strong>Plataforma:</strong> <?php print $jogo['plataforma']; ?></p>
        <p><strong>Classificação:</strong> <?php print $jogo['classificacao']; ?>+</p>

        <!-- Avaliação do Jogo -->
        <div class="mb-3">
          <h4>Avaliação</h4>
          <div class="star-rating">
            <!-- Adicione estrelas de acordo com a avaliação -->
            <?php  
              $estrelas = 0;
              while ($estrelas < doubleval($jogo['avaliacoes'])): 
                $estrelas++;
            ?>
              <span class="star">&#9733;</span>
            <?php 
              endwhile;
            ?>
          </div>
        </div>

        <!-- Sinopse do Jogo -->
        <div class="mb-3">
          <h4>Sinopse</h4>
          <p><?php print $jogo['descricao']; ?></p>
        </div>

        <!-- <a href="#" class="btn btn-primary">Adicionar ao Carrinho</a> -->
      </div>
    </div>
  </section>

  <!-- Rodapé -->
  <footer class="bg-dark text-light text-center py-3">
    <p>&copy; 2023 Loja de Games. Todos os direitos reservados.</p>
  </footer>

  <!-- Inclua o Bootstrap JS e o Popper.js (opcional, mas necessário para alguns recursos do Bootstrap) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>