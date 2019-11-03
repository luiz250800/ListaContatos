create database db_lista_contatos;
use db_lista_contatos;
-- drop database db_lista_contatos;

create table tb_contato(
	cd_contato int not null auto_increment,
    nm_contato varchar(50),
    dt_nascimento_contato char(10),
    cd_telefone_contato varchar(18),
    cd_celular_contato varchar(18),
    primary key (cd_contato)
);