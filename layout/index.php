<?php
require_once "../Business/ContatoBS.php";
$contatoBS = new ContatoBS();
$listaContatos = $contatoBS->listaContatos();

foreach($listaContatos as $linha){
    echo $link['nm_contato'];
}
?>

