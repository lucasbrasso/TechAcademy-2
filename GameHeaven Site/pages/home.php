<?php
$url = "http://localhost/TechAcademy-2/GameHeaven%20Site/api/banners.php";

$dadosApi = file_get_contents($url);

$dadosBanner = json_decode($dadosApi);

?>
<div class="container destaque">
  <h2>Descobrir</h2>
</div>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2100">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <?php
    foreach ($dadosBanner as $dados) {
    ?>
      <div class="carousel-item active">
        <a href="game/<?= $dados->id_game ?>">
          <img src="<?= $dados->imagem ?>" class="d-block w-100" alt="<?= $dados->nome ?>">
        </a>
      </div>
    <?php
    }
    ?>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container biblioteca">
  <h2>Biblioteca de Jogos</h2>
</div>
<div class="row">
  <?php
  foreach ($dadosJogos as $dados) {
  ?>
      <div class="col-12 col-md-4">
        <div class="jogoBanner">
          <a href="game/<?= $dados->id ?>" title="<?= $dados->nome ?>">
            <img src="<?= $dados->poster ?>" alt="<?= $dados->nome ?>" class="card-img-top">
          </a>
          <p><strong><?= $dados->nome ?></strong></p>
          <div class="jogoDetalhes">
          <ul>
            <li>
              <a href="game/<?= $dados->jogo ?>" title="Jogar Agora" target="_blank"> 
                <svg xmlns="http://www.w3.org/2000/svg" width="15px" viewBox="0 0 384 512"><path fill="#eee" d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z"/></svg>
                Jogar
              </a>
            </li>
            <li>
              <a href="game/<?= $dados->id ?>" title="Detalhes sobre o jogo">
                <svg xmlns="http://www.w3.org/2000/svg" width="25px" viewBox="0 0 512 512"><path fill="#eee" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
                Detalhes
              </a>
            </li>
          </ul>  
          </div>
      </div>
    </div>
    <?php
  }
  ?>
</div>