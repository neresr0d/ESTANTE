<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante/views/_cabecalho.php';
?>

<main id="conteudo-categoria">
  <div id="modal-categorias">
    <div id="btn-categorias">
      <h1>Adicionar Categorias</h1>
      <a class="btn-back" href="/estante/views/categorias.php"><img src="/estante/imgs/back-icon.svg" alt="" /></a>
    </div>

    <form action="/estante/controllers/cadastrar_categoria_controller.php" method="post" id="form-editCategorias">
      <div id="input-add">
        <input
          type="text"
          name="input-categorias"
          id="input-categorias"
          placeholder="Digite a Categoria" />
        <button id="btn-add-categoria" type="submit">Adicionar</button>
      </div>
    </form>
  </div>
</main>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante/views/_rodape.php';
?>
</body>

</html>