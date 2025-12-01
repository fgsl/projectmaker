<?php
use ProjectMaker\Interface\Usuario;

require 'vendor\autoload.php';

$usuario = new Usuario();
$usuario->nome = $_POST['nome'];
$usuario->funcao = $_POST['funcao'];
$usuario->email = $_POST['email'];
if (!$usuario->cadastrarNoApp()){
    echo "NÃO CONSEGUIU CADASTRAR!";
} else {
    header('Location: index.php');
}






