<?php

require_once "../Conexao/Conexao.php";
require_once "../Pojo/PojoContato.php";
require_once "../Dao/ContatoDAO.php";
require_once "AbstratoBS.php";

class ContatoBS extends AbstratoBS{
    private $dao = null;
    private $con = null;

    public function __construct() {
        $this->con = new Conexao();
        $this->dao = new ContatoDAO();
    }

    protected function getConexao() {
        return $this->con;

    }

    protected function getDAO() {
        return $this->dao;
    }

    public function populaContato($nm_contato, $dt_nascimento_contato, $telefone_contato, $celular_contato){
        $pojoContato = new PojoContato();
        $pojoContato->setNm_contato($nm_contato);
        $pojoContato->setDt_nascimento_contato($dt_nascimento_contato);
        $pojoContato->setCd_telefone_contato($telefone_contato);
        $pojoContato->setCd_celular_contato($celular_contato);
        return $pojoContato;
    }

    public function alteraContato($cd_contato, $nm_contato, $dt_nascimento_contato, $telefone_contato, $celular_contato){
        $existe = $this->dao->buscaPorCodigo($this->con, $cd_contato);
        if($existe){
            $pojoContato = new PojoContato();
            $pojoContato->setCd_contato($cd_contato);
            $pojoContato->setNm_contato($nm_contato);
            $pojoContato->setDt_nascimento_contato($dt_nascimento_contato);
            $pojoContato->setCd_telefone_contato($telefone_contato);
            $pojoContato->setCd_celular_contato($celular_contato);
            return $pojoContato;
        }else{
            return false;
        }
    }
}

?>