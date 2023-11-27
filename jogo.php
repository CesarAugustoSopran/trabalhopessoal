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
    <h1>Loja de Games</h1>
    <p>Encontre os melhores jogos aqui!</p>
  </header>

  <!-- Detalhes do Jogo -->
  <section class="container my-4">
    <div class="row">
      <div class="col-md-6">
        <img src="img/image1.jpg" class="img-fluid imagem-detalhe" alt="Game 1">
      </div>
      <div class="col-md-6">
        <h2 class="pb-4">Título do Jogo 1</h2>
        <p><strong>Preço:</strong> R$29.99</p>
        <p><strong>Descrição:</strong> Uma breve descrição do jogo...</p>
        <p><strong>Plataforma:</strong> PlayStation 4</p>
        <p><strong>Classificação:</strong> 18+</p>

        <!-- Avaliação do Jogo -->
        <div class="mb-3">
          <h4>Avaliação</h4>
          <div class="star-rating">
            <!-- Adicione estrelas de acordo com a avaliação -->
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
          </div>
        </div>

        <!-- Sinopse do Jogo -->
        <div class="mb-3">
          <h4>Sinopse</h4>
          <p>Uma sinopse mais detalhada do jogo...</p>
        </div>

        <a href="#" class="btn btn-primary">Adicionar ao Carrinho</a>
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