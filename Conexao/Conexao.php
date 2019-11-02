<?php

class Conexao {
    public static $conexao;

    public function __construct(){

    }

    public static function getConexao(){
        if (!isset(self::$conexao)) {
            self::$conexao = new PDO('mysql:host=localhost;
            dbname=db_lista_contatos', 
            'user', '');
        }
  
        return self::$conexao;
    }
}
?>