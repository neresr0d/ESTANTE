<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante/models/usuario.php';

$nome = $_POST['nome-cadastro'];
$email = $_POST['email-cadastro'];
$senha = $_POST['senha-cadastro'];
$senha = password_hash($senha, PASSWORD_DEFAULT);

if (!empty($_FILES['foto_perfil']['tmp_name'])) {
    $foto_perfil = file_get_contents($_FILES['foto_perfil']['tmp_name']);
};

$usuario = new Usuario();
$usuario->nome = $nome;
$usuario->email = $email;
$usuario->senha = $senha;
$usuario->foto_perfil = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/estante/imgs/perfil_icon.svg');

$id_usuario = $usuario->cadastrarUsuario();

header('Location: /estante/views/login.php');
exit();
