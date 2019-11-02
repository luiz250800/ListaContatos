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

        }
    }
}
?>