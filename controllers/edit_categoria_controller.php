<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante/models/categoria.php';

$id_categoria = $_POST['id_categoria'];
$nome_categoria = $_POST['input-edit-categorias'];

$categoria = new Categoria($id_categoria);
$categoria->nome_categoria = $nome_categoria;
$categoria->atualizarCategoria();

header('Location: /estante/views/categorias.php');
exit();
