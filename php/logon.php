<?php 
//recebendo os dados da tela de login



$email = $_POST ['email'];
$password = $_POST ['senha'];


//link da conexão

include 'conexao.php';

//pegar os dados do banco 



$sql = "SELECT * FROM tb_user WHERE email = '$email'"; 


$query = $conexao->query($sql);

$resultado = $query->fetch_assoc();


$email_banco = $resultado['email'];
$senha_banco = $resultado['senha'];


if ($email == $email_banco && $passaword == $senha_banco ) {

 header('location: tela inicial.html ');

}
else {

echo "<script> alert('Usuario ou senha ivalida'); history.black(); </script>";

}

?>