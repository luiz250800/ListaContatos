<?php

require_once "../Conexao/Conexao.php";
require_once "AbstratoBS.php";
require_once "../Dao/ContatoDAO.php";

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
}

?>