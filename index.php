<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante/views/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante/models/livro.php';

$listagem_livro = Livro::listarLivro();
?>
<main id="conteudo-principal">
  <?php foreach ($listagem_livro as $livro): ?>
    <div class="card-livro">
      <img src="data:image; base64, <?= base64_encode($livro['capa']) ?>" alt="" class="capa_livro">
      <h1><?= $livro['titulo'] ?></h1>
      <span class="favorito-livro-icon">
        <form action="/estante/controllers/fav_livro_controller.php" method="post">
          <input type="hidden" name="id_livro" value="<?= $livro['id_livro'] ?>">
          <input type="hidden" name="id_usuario" value="<?= $_SESSION['id_usuario'] ?>">
          <button type="submit"><img src="/estante/imgs/bookmark-regular.svg" alt=""></button>
        </form>
      </span>
    </div>
  <?php endforeach; ?>
</main>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante/views/_rodape.php';
?>
</body>

</html>