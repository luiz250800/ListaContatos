<?php
$nm_contato = $_POST['nmContato'];
$dt_nascimento_contato = $_POST['dtNascimentoContato'];
$telefone_contato = $_POST['telContato'];
$celular_contato = $_POST['celContato'];

require_once "../Business/ContatoBS.php";
$contatoBS = new ContatoBS();

$objetoContato = $contatoBS->populaContato($nm_contato, $dt_nascimento_contato, $telefone_contato, $celular_contato);
$insercao = $contatoBS->inserirContato($objetoContato);
if($insercao){
    echo "<script>
    window.location.href = '../layout/index.php';
    </script>";
}else{
    echo "<script>alert('Erro ao inserir dado');
    window.location.href = '../layout/index.php'
    </script>";
}