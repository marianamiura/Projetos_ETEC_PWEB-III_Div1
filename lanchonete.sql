create database lanchonete;
use lanchonete;
create table usuarios
    (
        usuid int primary key auto_increment,
        usunome varchar(100),
        usulogin varchar(100),
        ususenha varchar(100),
        usulogado boolean default 0
    );
    
create table categorias (
    catid int PRIMARY key AUTO_INCREMENT,
    catnome varchar(150),
    catativo boolean DEFAULT 1
    );

insert into usuarios
(usunome,usulogin,ususenha)
VALUE
('RICARDO DA SILVA ZANATA','RICKS',MD5(123456)),
('ALFREDO ALEXANDRE DE OLIVEIRA','XANDAO',MD5(234567)),
('JOÃO LUIS CHAGAS SANCHES','JOHNNY',MD5(345678)),
('RICARDO AMORIM','AMORIM',MD5(456789));

insert into categorias
(catnome)
VALUE
('Promoção do dia'),
('Lanches'),
('Porções'),
('Bebidas');