<?php

class PojoUsuarioContato
{
    private $nm_contato;
    private $dt_nascimento_contato;

    public function getNm_contato()
    {
        return $this->nm_contato;
    }
    public function setNm_contato($nm_contato)
    {
        $this->nm_contato = $nm_contato;
    }
    public function getDt_nascimento_contato()
    {
        return $this->dt_nascimento_contato;
    }
    public function setDt_nascimento_contato($dt_nascimento_contato)
    {
        $this->dt_nascimento_contato = $dt_nascimento_contato;
    }
}
