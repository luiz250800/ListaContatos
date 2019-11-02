<?php

require_once "../Pojo/PojoUsuarioContato.php";

abstract class AbstratoDAO
{
    private $INSERIR_CONTATO = "INSERT INTO tb_contato(nm_contato, dt_nascimento_contato, cd_telefone_contato, cd_celular_contato) VALUES (?,?,?,?);";
    private $ALTERAR_CONTATO = "UPDATE tb_contato set nm_contato = ?, dt_nascimento_contato = ?, cd_telefone_contato = ?, cd_celular_contato = ? WHERE cd_contato=?";
    private $DELETAR_CONTATO = "DELETE FROM tb_contato WHERE cd_contato=?";
    private $LISTA_CONTATOS = "SELECT * FROM tb_contato;";
    private $BUSCA_CONTATO = "SELECT * FROM tb_contato WHERE cd_contato=:cdContato;";

    protected abstract function getNomePojo();

    public function buscaPorCodigo(Conexao $con, $codigo) {
        try {
            $query = Conexao::getConexao()->prepare($this->BUSCA_CONTATO);
            $query->bindValue(":cdContato", $codigo);
            $query->execute();
            return $query->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $exc) {
            return $exc->getMessage();
        }
    }

    public function listaContatos(Conexao $con){
        try {
            $query = Conexao::getConexao()->prepare($this->LISTA_CONTATOS);
            $query->execute();
            return $query->fetchAll();
        } catch (Exception $exc) {
            return $exc->getMessage();
        }
    }
}