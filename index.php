<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Loja de Games</title>
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

  <section class="container container-banner">
    <div id="carouselBanners" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="gerenciador/img/image1.jpg" class="d-block w-100 imagem-banner" alt="Game 1">
        </div>
        <div class="carousel-item">
          <img src="gerenciador/img/image2.jpg" class="d-block w-100 imagem-banner" alt="Game 2">
        </div>
        <div class="carousel-item">
          <img src="gerenciador/img/image3.jpg" class="d-block w-100 imagem-banner" alt="Game 3">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselBanners" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselBanners" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Próximo</span>
      </button>
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
                <img src="gerenciador/img/image1.jpg" class="card-img-top imagem-jogo-destaque" alt="Game 1">
                <div class="card-body">
                  <h5 class="card-title">Título do Jogo 1</h5>
                  <p class="card-text">R$29.99</p>
                  <a href="detalhe_produto.html" class="btn btn-primary">Detalhes</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <img src="gerenciador/img/image2.jpg" class="card-img-top imagem-jogo-destaque" alt="Game 2">
                <div class="card-body">
                  <h5 class="card-title">Título do Jogo 2</h5>
                  <p class="card-text">R$39.99</p>
                  <a href="detalhe_produto.html" class="btn btn-primary">Detalhes</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <img src="gerenciador/img/image3.jpg" class="card-img-top imagem-jogo-destaque" alt="Game 2">
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

        <div class="carousel-item">
          <div class="row">
            <div class="col-md-4">
              <div class="card">
                <img src="gerenciador/img/image4.jpg" class="card-img-top imagem-jogo-destaque" alt="Game 1">
                <div class="card-body">
                  <h5 class="card-title">Título do Jogo 4</h5>
                  <p class="card-text">R$29.99</p>
                  <a href="detalhe_produto.html" class="btn btn-primary">Detalhes</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <img src="gerenciador/img/image5.jpg" class="card-img-top imagem-jogo-destaque" alt="Game 2">
                <div class="card-body">
                  <h5 class="card-title">Título do Jogo 5</h5>
                  <p class="card-text">R$39.99</p>
                  <a href="detalhe_produto.html" class="btn btn-primary">Detalhes</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <img src="gerenciador/img/image6.jpg" class="card-img-top imagem-jogo-destaque" alt="Game 2">
                <div class="card-body">
                  <h5 class="card-title">Título do Jogo 6</h5>
                  <p class="card-text">R$39.99</p>
                  <a href="detalhe_produto.html" class="btn btn-primary">Detalhes</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselGames" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
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