<?php
include 'conexao.php';


$id = intval($_GET['id']);
$sql = "DELETE FROM tb_user WHERE id_usuario = $id";
$result = $conexao ->query($sql);


if ($result) {
    echo "<script> alert('Usuario excluido com sucesso'); window.location.href = '../listar_usuario.php'; </script>"; 
}



  
$conexao->close();
?>