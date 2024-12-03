<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistema Financeiro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <script src="https://kit.fontawesome.com/c0f408d1cc.js" crossorigin="anonymous"></script>
</head>
<body>
    <div style="color: writer">
    <?php
     session_start();
     if (isset($_SESSION['id'])) {
       $id = $_SESSION['id'];
       echo "olá $id";
        } else{
         echo "<script>alert('Usuário precisar logar'); history.back();</script>";
        }  
    
    ?>
    </div>


    
    <div class="tela">

        <h1><Strong>TELA DE LANÇAMENTO</Strong></h1>
    
    <p><strong>Seja bem vindo a tela de lançamento!!! escolha uma opção:</strong></p>

    
    
    <div style="display: flex; flex-direction: column; align-items:center; gap: 20px; margin-top: 50px;">
        <a href="categoria.html" class="btn btn-success">Categoria</a>
        <a href="lançamento.html" class="btn btn-success">Lançamento</a>
        <a href="listar_usuario.php" class="btn btn-success">Usuarios</a>
    </div>
    
</div>


</body>