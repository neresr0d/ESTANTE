<?php


require_once $_SERVER['DOCUMENT_ROOT'] . '/estante/views/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante/models/livro.php';

 if (isset($_SESSION['id_usuario'])) {
  $listagem_livro = Livro::listarLivro();
 } 
 else{
  $listagem_livro = [];
 }




?>
<main id="conteudo-principal">
  <?php if(isset($_SESSION['id_usuario'])):?>
    <?php if (!empty($listagem_livro)):?>
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
  <?php else: ?>
    <div class="paragrafo-index">
      <p >Adicione livros aos favoritos para exibí-los aqui</p>
    </div>
    <?php endif;?>
    <?php else: ?>
      <div class="paragrafo-index">
      <p >Logue com seu e-mail e senha ou, se não for cadastrado, crie seu cadastro</p>
  <?php endif; ?>
    </div>
    
</main>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante/views/_rodape.php';
?>
</body>

</html>