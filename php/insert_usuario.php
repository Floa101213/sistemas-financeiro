<?php 

include 'conexao.php';

//receber dados do formulario

$nome = $_POST['nome'];
$email = $_POST['email'];
$cargo = $_POST['cargo'];
$senha = $_POST['senha'];

$sql = "INSERT INTO tb_user VALUES (null,'$nome','$email','$cargo','$senha')";

if ($conexao->query($sql)) {
    echo "<script> alert('inserido com sucesso!'); history.back(); </script>";
}
else {

    echo "falha na conexão com o
 banco de dados";
}

/*
create table tb_user(
id_usuario int auto_increment primary key,
nome varchar(40),
email varchar(45),
cargo varchar(45),
senha text
);*/


?>