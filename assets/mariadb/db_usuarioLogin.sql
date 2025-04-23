create database db_usuarioLogin;
use db_usuarioLogin;

create table if not exists tb_cargos (
id_cargo int not null auto_increment primary key,
descricao varchar(50) not null
);

create table if not exists tb_usuario (
id_usuario int not null auto_increment primary key,
nome_usuario varchar(150) not null,
email_usuario varchar(150) not null,
senha_usuario varchar(32) not null,
ultimo_acesso datetime,
id_cargo int not null,
foreign key (id_cargo) references tb_cargos(id_cargo)
);

insert into tb_cargos values (null,'Administrador'),(null,'Gerente');
insert into tb_usuario values (null,'Rogerinho','rogerinho@admin.com',md5(123456)null,1);