<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante/models/livro.php';
$id_livro = $_POST['id_livro'];

$livro = new Livro($id_livro);
$livro->deletarLivro();

header('location: /estante/views/livros.php');
exit();
