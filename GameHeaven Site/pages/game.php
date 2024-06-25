<?php
$dados = $dadosJogos->$codigo;
?>
<div class="jogo">
    <div class="container">
        <h1><?= $dados->nome ?></h1>
        <div class="row">
            <div class="col-12 col-md-3">
                <img src="<?= $dados->poster ?>" alt="<?= $dados->nome ?>" class="w-100">
            </div>
            <div class="col-12 col-md-6">
                <h3>Detalhes</h3>
                <p>
                    <?= $dados->descricao ?>
                    <br>
                    <strong><?= $dados->tags ?></strong>
                </p>
            </div>
            <div class="col-12 col-md-3 text-center">
                <div class="jogoPlay">
                    <?php
                    $dadosGame = file_get_contents("http://localhost/TechAcademy-2/GameHeaven%20Site/api/games.php");
                    $dadosGame = json_decode($dadosGame);
                    $game = $dadosGame->$codigo;
                    ?>
                    <img src="<?= $dados->text ?>">
                    <br>
                    <a href="game/<?= $game->jogo ?>" target="_blank" alt="JogoTexto">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25px" viewBox="0 0 384 512">
                            <path fill="#eee" d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                        </svg>
                        Jogar Agora
                    </a>
                </div>
            </div>
            <div class="row">
                <h3>Imagens do jogo</h3>
                <?php
                $dadosFotos = file_get_contents("http://localhost/TechAcademy-2/GameHeaven%20Site/api/fotos.php");
                $dadosFotos = json_decode($dadosFotos);
                $dados = $dadosFotos->$codigo;

                $i = 1;
                foreach ($dados as $foto) {
                ?>
                    <div class="col-12 col-md-3">
                        <a href="<?= $foto->foto ?>" title="Imagem" data-fslightbox>
                            <img src="<?= $foto->foto ?>" alt="Imagem" class="w-100">
                        </a>
                    </div>
                <?php
                    $i++;
                }
                ?>

            </div>
        </div>
        <ul>
            <h4>Ficha Técnica</h4>
            <li>
                <p><strong>Plataforma:</strong> Computador</p>
            </li>
            <li>
                <p><strong>Sistema Operacional:</strong> Windows e MAC</p>
            </li>
            <li>
                <p><strong>Engine:</strong> Construct 3</p>
            </li>
        </ul>
        <h5 class="text-center"><?= $game->dev ?></h5>
    </div>

</div>