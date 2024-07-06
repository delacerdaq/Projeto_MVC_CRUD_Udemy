CREATE DATABASE projeto_mvc;

USE projeto_mvc;

CREATE TABLE client (
    id int not null auto_increment primary key,
    nome varchar(25) not null ,
    email varchar(40) not null ,
    cpf varchar(11) not null ,
    birth varchar(8) not null ,
    endereco varchar(200) not null ,
    phone int not null 
);