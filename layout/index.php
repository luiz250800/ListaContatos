<?php
require_once "../Business/ContatoBS.php";
$contatoBS = new ContatoBS();
$listaContatos = $contatoBS->listaContatos();
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
        <form method="POST" action="../Requisicoes/inserirContato.php">
            <br>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label>Nome do contato</label>
                    <input type="name" class="form-control" name="nmContato" placeholder="Digite o nome do contato">
                </div>
                <div class="form-group col-md-4">
                    <label>Data de nascimento:</label>
                    <input type="text" name="dtNascimentoContato" id="data" class="form-control" name="dtNascimentoContato">
                </div>
                <div class="form-group col-md-4">
                    <label>Telefone do contato:</label>
                    <input type="text" name="telContato" id="telefone" class="form-control" placeholder="Digite o numero de telefone do contato">
                </div>
                <div class="form-group col-md-4">
                    <label>Celular do contato:</label>
                    <input type="text" name="celContato" id="celular" class="form-control" placeholder="Digite o numero de celular do contato">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <br>
            <br>
        </form>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Codigo do contato</th>
                    <th scope="col">Nome do contato</th>
                    <th scope="col">Data de nascimento</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Celular</th>
                    <th scope="col">Alterar/Excluir</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    foreach ($listaContatos as $linha => $link) {
                        ?>
                        <th scope="row"><?= $link['cd_contato'] ?></th>
                        <td><?= $link['nm_contato'] ?></td>
                        <td><?= $link['dt_nascimento_contato'] ?></td>
                        <td><?= $link['cd_telefone_contato'] ?></td>
                        <td><?= $link['cd_celular_contato'] ?></td>
                        <th scope="row">
                            <input type="submit" class="btn btn-primary" value="Alterar" onclick="alterar(<?= $link['cd_contato'] ?>)">
                            <input type="submit" class="btn btn-danger" value="Excluir" onclick="excluir(<?= $link['cd_contato'] ?>)">
                        </th>
                </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</body>
<script type="text/javascript">
    $(document).ready(function() {
        $('#telefone').mask('(00) 0000-0000');
        $('#celular').mask('(00) 0000-0000#');
        $('#data').mask('00/00/0000');
    });

    function alterar(cdContato = null) {
        if (cdContato == null) {
            alert('Codigo do contato não existe');
        } else {
            window.location.href = "alterar.php?cdContato=" + cdContato;
        }
    }

    function excluir(cdContato = null) {
        if (cdContato == null) {
            alert('Codigo do contato não existe');
        } else {
            window.location.href = "../Requisicoes/excluirContato.php?cdContato=" + cdContato;
        }
    }
</script>

</html>