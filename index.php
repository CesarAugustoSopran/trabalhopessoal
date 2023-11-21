<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Loja de Games</title>
  <!-- Inclua o Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

  <!-- Cabeçalho -->
  <header class="bg-dark text-light text-center py-3">
    <h1>Loja de Games</h1>
    <p>Encontre os melhores jogos aqui!</p>
  </header>

  <section class="container my-4">
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img src="banner1.jpg" class="card-img-top" alt="Banner 1">
          <div class="card-body">
            <h5 class="card-title">Promoção 1</h5>
            <p class="card-text">Descrição da promoção 1.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="banner2.jpg" class="card-img-top" alt="Banner 2">
          <div class="card-body">
            <h5 class="card-title">Promoção 2</h5>
            <p class="card-text">Descrição da promoção 2.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="banner3.jpg" class="card-img-top" alt="Banner 3">
          <div class="card-body">
            <h5 class="card-title">Promoção 3</h5>
            <p class="card-text">Descrição da promoção 3.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Área "Sobre o Site" -->
  <section class="bg-light py-4">
    <div class="container">
      <h2 class="text-center mb-4">Sobre o Site</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam convallis, elit sit amet tristique accumsan,
        libero nunc bibendum nulla, nec fermentum velit dolor non purus. Suspendisse potenti.</p>
    </div>
  </section>

  <!-- Carrossel de Jogos -->
  <section class="container my-4">
    <h2 class="text-center mb-4">Jogos em Destaque</h2>
    <div id="carouselGames" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row">
            <div class="col-md-4">
              <div class="card">
                <img src="img/image1.jpg" class="card-img-top" alt="Game 1" style="height: 350px; width: auto;">
                <div class="card-body">
                  <h5 class="card-title">Título do Jogo 1</h5>
                  <p class="card-text">R$29.99</p>
                  <a href="detalhe_produto.html" class="btn btn-primary">Detalhes</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <img src="img/image2.jpg" class="card-img-top" alt="Game 2" style="height: 350px; width: auto;">
                <div class="card-body">
                  <h5 class="card-title">Título do Jogo 2</h5>
                  <p class="card-text">R$39.99</p>
                  <a href="detalhe_produto.html" class="btn btn-primary">Detalhes</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <img src="img/image3.jpg" class="card-img-top" alt="Game 2" style="height: 350px; width: auto;">
                <div class="card-body">
                  <h5 class="card-title">Título do Jogo 2</h5>
                  <p class="card-text">R$39.99</p>
                  <a href="detalhe_produto.html" class="btn btn-primary">Detalhes</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Adicione mais itens de carrossel conforme necessário -->
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselGames" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselGames" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Próximo</span>
      </button>
    </div>
  </section>

  <!-- Conteúdo da Página -->

  <!-- Seu conteúdo da loja de games iria aqui -->

  <!-- Rodapé -->
  <footer class="bg-dark text-light text-center py-3">
    <p>&copy; 2023 Loja de Games. Todos os direitos reservados.</p>
  </footer>

  <!-- Inclua o Bootstrap JS e o Popper.js (opcional, mas necessário para alguns recursos do Bootstrap) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>