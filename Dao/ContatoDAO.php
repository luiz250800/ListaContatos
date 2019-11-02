<?php

require_once "../Pojo/PojoUsuarioContato.php";
require_once "AbstratoDAO.php";

class ContatoDAO extends AbstratoDAO
{
    protected function getNomePojo() {
        return "tb_contato";
    }
}