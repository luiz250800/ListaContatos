<?php
$cdContato = $_GET['cdContato'];
require_once "../Business/ContatoBS.php";
$contatoBS = new ContatoBS();
$exclusao = $contatoBS->excluirContato($cdContato);
if ($exclusao) {
    echo "<script>
        window.location.href = '../layout/index.php';
        </script>";
} else {
    echo "<script>alert('Erro ao excluir dado');
        window.location.href = '../layout/index.php'
        </script>";
}
