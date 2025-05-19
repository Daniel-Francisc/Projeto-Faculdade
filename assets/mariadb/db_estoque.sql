create database if not exists db_estoque;
use db_estoque;

create table if not exists tb_fornecedor(
id_fornecedor int not null auto_increment primary key,
nome_fornecedor varchar(100) not null,
cnpj varchar(14) not null,
email varchar(50) not null,
contato varchar(11) not null
);

create table if not exists tb_distribuidora(
id_distribuidora int not null auto_increment primary key,
nome_distribuidora varchar(100) not null,
cnpj varchar(14) not null,
email varchar(50) not null,
contato varchar(11) not null
);

create table if not exists tb_produto(
id_produto int not null auto_increment primary key,
nome_produto varchar(100) not null,
descricao_produto varchar(1000),
horario_entrada datetime default current_timestamp(),
qtd_produto int not null default 0,
id_distribuidora int not null,
id_fornecedor int not null,
valor_uni float not null,
valor_total float not null,
n_lote int not null,
dt_validade date,
foreign key (id_fornecedor) references tb_fornecedor(id_fornecedor),
foreign key (id_distribuidora) references tb_distribuidora(id_distribuidora)
)