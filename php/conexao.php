<?php 

//informações para conectar no banco de dados

$servidor = 'localhost';
$usuario = 'root';
$senha = 'root';
$db = 'db_contabilidade';

$conexao = new mysqli($servidor,$usuario,$senha,$db);

if ($conexao->connect_error) {
    die('Você se fudeu'. $conexao->connect_error);

}




?>