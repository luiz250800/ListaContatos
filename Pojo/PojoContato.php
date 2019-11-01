<?php

include ("PojoUsuarioContato.php");

class PojoContato extends PojoUsuarioContato
{
    private $cd_contato;
    private $cd_telefone_contato;
    private $cd_celular_contato;

    public function getCd_contato()
    {
        return $this->cd_contato;
    }
    public function setCd_contato($cd_contato)
    {
        $this->cd_contato = $cd_contato;
    }
    public function getCd_telefone_contato()
    {
        return $this->cd_telefone_contato;
    }
    public function setCd_telefone_contato($cd_telefone_contato)
    {
        $this->cd_telefone_contato = $cd_telefone_contato;
    }
    public function getCd_celular_contato()
    {
        return $this->cd_celular_contato;
    }
    public function setCd_celular_contato($cd_celular_contato)
    {
        $this->cd_celular_contato = $cd_celular_contato;
    }
}
