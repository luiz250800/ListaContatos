<?php

require_once "../Conexao/Conexao.php";
require_once "../Pojo/PojoUsuarioContato.php";

class ContatoDAO
{
    public static $conexao;
    private $INSERIR_CONTATO = "INSERT INTO tb_contato(nm_contato, dt_nascimento_contato, cd_telefone_contato, cd_celular_contato) VALUES (?,?,?,?);";
    private $ALTERAR_CONTATO = "UPDATE tb_contato set nm_contato = ?, dt_nascimento_contato = ?, cd_telefone_contato = ?, cd_celular_contato = ? WHERE cd_contato=?";
    private $DELETAR_CONTATO = "DELETE FROM tb_contato WHERE cd_contato=?";
    private $LISTA_CONTATOS = "SELECT * FROM tb_contato;";
    private $BUSCA_CONTATO = "SELECT * FROM tb_contato where cd_contato=?;";

    


}