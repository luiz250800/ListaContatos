<?php
$cd_contato = $_GET['cdContato'];
$nm_contato = $_POST['nmContato'];
$dt_nascimento_contato = $_POST['dtNascimentoContato'];
$telefone_contato = $_POST['telContato'];
$celular_contato = $_POST['celContato'];

require_once "../Business/ContatoBS.php";
$contatoBS = new ContatoBS();

$objetoContato = $contatoBS->alteraContato($cd_contato, $nm_contato, $dt_nascimento_contato, $telefone_contato, $celular_contato);
if($objetoContato != false){
    $alteracao = $contatoBS->alterarContato($objetoContato);
    if ($alteracao) {
        echo "<script>
        window.location.href = '../layout/index.php';
        </script>";
    } else {
        echo "<script>alert('Erro ao inserir dado');
        window.location.href = '../layout/index.php'
        </script>";
    }
}else{
    echo "<script>alert('Usuario não existe');
        window.location.href = '../layout/index.php'
        </script>";
}

