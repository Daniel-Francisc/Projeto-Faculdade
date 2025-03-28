create database if not exists db_cliente;
use db_cliente;

create table if not exists tb_nivel(
id_nivel int not null auto_increment primary key,
descricao_nivel varchar(50) not null
);

create table if not exists tb_cliente(
id_cliente int not null auto_increment primary key,
nome varchar(100) not null,
sobrenome varchar(100) not null,
email varchar(100) not null,
senha varchar(32) not null,
dt_nascimento date not null,
dt_inscricao date not null,
pts_compra int default 0,
exp_compra int default 0,
id_nivel int not null,
foreign key (id_nivel) references tb_nivel(id_nivel)
);

create table if not exists tb_produtos(
id_produto int not null auto_increment primary key,
produto varchar(100) not null,
qtd_produto int default 0
);

create table if not exists tb_historico(
id_venda int not null auto_increment primary key,
n_venda int not null,
dt_compra datetime not null,
id_cliente int not null,
id_produto int not null,
qtd_venda int default 1,
foreign key (id_cliente) references tb_cliente(id_cliente),
foreign key (id_produto) references tb_produtos(id_produto)
);