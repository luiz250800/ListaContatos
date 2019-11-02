<?php
$cd_contato = $_GET['cd_contato'];
require_once "../Business/ContatoBS.php";
$contatoBS = new ContatoBS();
$objetoContato = $contatoBS->buscaPorCodigo($cd_contato);
?>

<?=$objetoContato['nm_contato']?>