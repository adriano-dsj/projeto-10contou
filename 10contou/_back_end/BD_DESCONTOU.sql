/**
 * AUTOR: ADRIANO DA SILVA JORGE
 * SCRIPT DESENVOLVIDO PARA: MySql 5.7
 * ATUALIZAÇÃO: 03/07/2020
 */

create database BD_DESCONTOU
default character set utf8
default collate utf8_general_ci;

use BD_DESCONTOU;

create table tb_clientes(
    codCliente char(14) not null,
    nomeCliente varchar(50) not null,
    emailCliente varchar(50) not null,
    celular varchar(15) not null,
    senha varchar(30) not null,
    constraint pk_codCliente primary key (codCliente)
) default charset = utf8;

create table tb_endereco_clientes(
    codEnderecoCliente char(14) not null,
    codCliente char(14) not null,
    unidadeFederativa char(2) not null,
    municipio varchar(40) not null,
    bairro varchar (40) not null,
    endereco varchar(40) not null,
    numero smallint not null,
    constraint  pk_codEnderecoCliente primary key (codEnderecoCliente),
    constraint  fk_codCliente foreign key (codCliente) references tb_clientes(codCliente)
) default charset = utf8;

create table tb_fornecedores(
    codFornecedor char(14) not null,
    razaoSocial varchar(80) not null,
    cnpj char(14) not null,
    inscricaoEstadual varchar(14) not null,
    segmento varchar(11) not null,
    email varchar(50) not null,
    telefone varchar(15) not null,
    senha varchar(30) not null,
    whatsapp varchar(15),
    siteFornecedor varchar(30),
    constraint  pk_codFornecedor primary key (codFornecedor)
) default charset = utf8;

create table tb_endereco_fornecedor(
    codEnderecoFornecedor char(14) not null,
    codFornecedor char(14) not null,
    unidadeFederativa char(2) not null,
    municipio varchar(40) not null,
    bairro varchar (40) not null,
    endereco varchar(40) not null,
    numero smallint not null,
    constraint  pk_codEnderecoFornecedor primary key (codEnderecoFornecedor),
    constraint  fk_codFornecedor foreign key (codFornecedor) references tb_fornecedores(codFornecedor)
) default charset = utf8;

create table tb_produtos(
    codProduto char(14) not null,
    codFornecedor char(14) not null,
    nomeProduto varchar(50),
    descricao varchar(255),
    preco decimal(7,2),
    constraint  pk_codProduto primary key (codProduto)
) default charset = utf8;
