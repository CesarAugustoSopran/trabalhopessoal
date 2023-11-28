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
  <?php
    include("conexao.php");
  ?>

  <!-- Cabeçalho -->
  <header class="bg-dark text-light text-center py-3">
    <div class="d-flex justify-content-between align-items-center">
      <a href="/trabalhopessoal" class="ms-3" style="color: white;text-decoration: none;"><h1>Loja de Games</h1></a>
      <a href="/trabalhopessoal/gerenciador" class="me-3" style="color: white;text-decoration: none;">Gerenciador</a>
    </div>
  </header>

  <section class="container container-banner">
    <div id="carouselBanners" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <?php  
          $primeiro = 'active';
          $dados2 = mysqli_query($conexao, "SELECT * FROM banners"); 
          while ($banner = mysqli_fetch_array($dados2)): 
        ?>
          <div class="carousel-item <?php print $primeiro;$primeiro=''; ?>">
            <a href="jogo.php?id=<?php print $banner['jogo']; ?>"><img src="gerenciador/img/<?php print $banner['imagem']; ?>" class="d-block w-100 imagem-banner" alt="<?php print $banner['nome']; ?>"></a>
          </div>
        <?php 
          endwhile;
        ?>
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
          <div class="row d-flex justify-content-center">
            <?php  
              $quebra = 0;
              $dados = mysqli_query($conexao, "SELECT * FROM jogos"); 
              while ($jogo = mysqli_fetch_array($dados)): 
            ?>
            <?php 
              if (($quebra % 3) === 0 && $quebra !== 0) {
                print '
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row d-flex justify-content-center">';
              }
              $quebra++;
             ?>
              <div class="col-md-4">
                <div class="card">
                  <img src="gerenciador/img/<?php print $jogo['imagem']; ?>" class="card-img-top imagem-jogo-destaque" alt="Game 1">
                  <div class="card-body">
                    <h5 class="card-title"><?php print $jogo['nome']; ?></h5>
                    <p class="card-text">R$<?php print $jogo['preco']; ?></p>
                    <a href="jogo.php?id=<?php print $jogo['id']; ?>" class="btn btn-primary" style="width: 100%">Detalhes</a>
                  </div>
                </div>
              </div>
            <?php 
              endwhile;
            ?>
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