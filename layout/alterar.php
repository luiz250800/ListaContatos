<?php
$cd_contato = $_GET['cdContato'];
require_once "../Business/ContatoBS.php";
$contatoBS = new ContatoBS();
$objetoContato = $contatoBS->buscaPorCodigo($cd_contato);
?>
<!DOCTYPE html>
<html>

<head>

    <script src="js/jquery.js"></script>
    <script src="js/jquery.mask.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<br>
    <div class="container col-md-10 border border-black" style="text-align: center">
        <form method="POST" action="../Requisicoes/alterarContato.php?cdContato=<?=$_GET['cdContato']?>">
        <br>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label>Nome do contato</label>
                    <input type="name" class="form-control" name="nmContato" value="<?=$objetoContato['nm_contato']?>" placeholder="Digite o nome do contato">
                </div>
                <div class="form-group col-md-4">
                    <label>Data de nascimento:</label>
                    <input type="text" name="dtNascimentoContato" id="data" class="form-control" name="dtNascimentoContato" value="<?=$objetoContato['dt_nascimento_contato']?>">
                </div>
                <div class="form-group col-md-4">
                    <label>Telefone do contato:</label>
                    <input type="text" name="telContato" id="telefone" class="form-control" value="<?=$objetoContato['cd_telefone_contato']?>" placeholder="Digite o numero de telefone do contato">
                </div>
                <div class="form-group col-md-4">
                    <label>Celular do contato:</label>
                    <input type="text" name="celContato" id="celular" class="form-control" value="<?=$objetoContato['cd_celular_contato']?>" placeholder="Digite o numero de celular do contato">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Alterar</button>
            <br>
            <br>
        </form>
    </div>
</body>
<script type="text/javascript">
    $(document).ready(function() {
        $('#telefone').mask('(00) 0000-0000');
        $('#celular').mask('(00) 0000-0000#');
        $('#data').mask('00/00/0000');
    });
</script>
</html>