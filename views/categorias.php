<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante/views/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante/models/categoria.php';

$listagem_categoria = Categoria::listarCategoria();
?>

<main id="conteudo-categoria">
    <div id="modal-categorias">
        <div id="btn-categorias">
            <h1>Getenciar Categorias</h1>
            <a id="add-categoria" href="add_categorias.php">Adicionar</a>
            <a class="btn-back" href="/estante/views/perfil.php"><img src="/estante/imgs/back-icon.svg" alt="" /></a>
        </div>

        <div id="tabela-categorias">
            <?php foreach ($listagem_categoria as $categoria): ?>
                <div class="linhas-categoria">
                    <p><?= $categoria['nome'] ?></p>
                    <div class="acoes-categoria">
                        <a href="/estante/views/editar-categorias.php?id_categoria=<?= $categoria['id_categoria'] ?>" class="btn-edit">
                            <img src="/estante/imgs/edit-icon.svg" alt=""></img>
                        </a>
                        <form action="/estante/controllers/del_categoria_controller.php" method="post" onsubmit="return confirm('Você tem certeza que quer deletar esta Categoria?')">
                            <input type="hidden" name="id_categoria" value="<?= $categoria['id_categoria'] ?>">
                            <button type="submit" class="btn-delet">
                                <img src="/estante/imgs/delete-icon.svg" alt="">
                            </button>
                        </form>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante/views/_rodape.php';
?>
</body>

</html>