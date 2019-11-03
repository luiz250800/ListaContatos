<?php

require_once "../Pojo/PojoUsuarioContato.php";

abstract class AbstratoDAO
{

    private $INSERIR_CONTATO = "INSERT INTO tb_contato(nm_contato, dt_nascimento_contato, cd_telefone_contato, cd_celular_contato) VALUES (:nomeContato,:dtNascimentoContato,:cdTelefoneContato,:cdCelularContato);";
    private $ALTERAR_CONTATO = "UPDATE tb_contato set nm_contato = :nomeContato, dt_nascimento_contato = :dtNascimentoContato, cd_telefone_contato = :cdTelefoneContato, cd_celular_contato = :cdCelularContato WHERE cd_contato=:codigo";
    private $EXCLUIR_CONTATO = "DELETE FROM tb_contato WHERE cd_contato=:codigo";
    private $LISTA_CONTATOS = "SELECT * FROM tb_contato;";
    private $BUSCA_CONTATO = "SELECT * FROM tb_contato WHERE cd_contato=:codigo;";

    

    public function buscaPorCodigo(Conexao $con, $codigo) {
        try {
            $query = Conexao::getConexao()->prepare($this->BUSCA_CONTATO);
            $query->bindValue(":codigo", $codigo);
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

    public function inserirContato(Conexao $con, PojoContato $objetoContato){
        try{
            $query = Conexao::getConexao()->prepare($this->INSERIR_CONTATO);
            $query->bindValue(":nomeContato", $objetoContato->getNm_contato());
            $query->bindValue(":dtNascimentoContato", $objetoContato->getDt_nascimento_contato());
            $query->bindValue(":cdTelefoneContato", $objetoContato->getCd_telefone_contato());
            $query->bindValue(":cdCelularContato", $objetoContato->getCd_celular_contato());
            return $query->execute();
        }catch(Exception $exc){
            return $exc->getMessage();
        }
    }

    public function alterarContato(Conexao $con, PojoContato $objetoContato){
        try{
            $query = Conexao::getConexao()->prepare($this->ALTERAR_CONTATO);
            $query->bindValue(":codigo", $objetoContato->getCd_contato());
            $query->bindValue(":nomeContato", $objetoContato->getNm_contato());
            $query->bindValue(":dtNascimentoContato", $objetoContato->getDt_nascimento_contato());
            $query->bindValue(":cdTelefoneContato", $objetoContato->getCd_telefone_contato());
            $query->bindValue(":cdCelularContato", $objetoContato->getCd_celular_contato());
            return $query->execute();
        }catch(Exception $exc){
            return $exc->getMessage();
        }
    }

    public function excluirContato(Conexao $con, $codigo){
        try{
            $query = Conexao::getConexao()->prepare($this->EXCLUIR_CONTATO);
            $query->bindValue(":codigo", $codigo);
            return $query->execute();
        }catch(Exception $exc){
            throw ($exc->getMessage());
        }
    }
}