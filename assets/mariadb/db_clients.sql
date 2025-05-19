create database if not exists db_clients;
use db_clients;
create table if not exists tb_fornecedor(
id_fornecedor int not null primary key,
fornecedor varchar(50) not null
);
create table if not exists tb_produtos(
id_produto int not null primary key,
produto varchar(50) not null,
descricao varchar(2000) not null,
id_fornecedor int not null,
valor_total float not null,
imagem varchar(200) not null,
cor varchar(20) not null,
foreign key (id_fornecedor) references tb_fornecedor(id_fornecedor)  
);