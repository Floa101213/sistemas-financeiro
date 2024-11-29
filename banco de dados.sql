create database db_contabilidade;
use db_contabilidade;
create table tb_usuario(
id_usuario int auto_increment primary key,
nome varchar(40),
email varchar(45),
cargo varchar(45),
senha varchar(40)
);
create table tb_categoria(
id_categoria int auto_increment primary key,
nm_catgoria varchar(40),

ds_categoria varchar(30)
);
create table tb_lançamento (
id_lancamento int auto_increment primary key,
nm_lancamento varchar(45),
ds_lancamento varchar(40),
fk_usuario int,
fk_categoria int,
foreign key (fk_usuario) references tb_user (id_usuario),
foreign key (fk_categoria) references tb_categoria (id_categoria)
);
