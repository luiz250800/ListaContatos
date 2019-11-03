<?php

abstract class AbstratoBS{
    protected abstract function getDAO();
    protected abstract function getConexao();

    public function buscaPorCodigo($codigo){
        try {
            return $this->getDAO()->buscaPorCodigo($this->getConexao(), $codigo);
        } catch (Exception $exc) {
            throw ($exc->getMessage());
        }
    }

    public function listaContatos(){
        try{
            return $this->getDAO()->listaContatos($this->getConexao());
        }catch(Exception $exc){
            throw ($exc->getMessage());
        }
    }

    public function inserirContato(PojoContato $objetoContato){
        try{
            //$telefone = $objetoContato->getCd_telefone_contato();
            //$telefoneInternacional = "+55 " . $telefone;
            //$objetoContato->setCd_telefone_contato($telefoneInternacional);
            //return $objetoContato;
            return $this->getDAO()->inserirContato($this->getConexao(), $objetoContato);
        }catch(Exception $exc){
            throw ($exc->getMessage());
        }
    }
    public function alterarContato(PojoContato $objetoContato){
        try{
            return $this->getDAO()->alterarContato($this->getConexao(), $objetoContato);
        }catch(Exception $exc){
            throw ($exc->getMessage());
        }
    }
    public function excluirContato($codigo){
        try{
            return $this->getDAO()->excluirContato($this->getConexao(), $codigo);
        }catch(Exception $exc){
            throw ($exc->getMessage());
        }
    }
}
?>