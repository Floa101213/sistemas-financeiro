<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tela de login</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/index.css">
    
    <script src="https://kit.fontawesome.com/c0f408d1cc.js" crossorigin="anonymous"></script>

</head>
<body>
    
<?php
include 'conexao.php';


$id = intval($_GET['id']);
$sql = "SELECT * FROM tb_user WHERE id_usuario = $id";
$result = $conexao ->query($sql);
$row = $result->fetch_assoc();
?>

    <div class="container text-center">
        <div class="row" style="margin-top: 10%;">
          <div class="col-sm-12 col-md-4">
            
          </div>
          <div class="col">
            <i class="fa-solid fa-coins"></i>

            <h1 class="h1">cadastre-se</h1>
            <form action="php/editar_usuario.php" method="post">
                <div class="mb-3">
                  <label for="name"  class="form-label">Nome</label>
                  <input type="text" value="<?php echo $row['nome']; ?>" class="form-control" id="name" name="nome" aria-describedby="emailHelp">
                  
<!-- for adicionar o nome, email, cargo, e no id a mesma coisa   type tem adcionar em englsh o estilo  a ser seguido--> 

                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">email</label>
                  <input type="email" value="<?php echo $row['email']; ?>" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                  
                </div>
                <div class="mb-3">
                  <label for="position" class="form-label">Cargo</label>
                  <input type="text" value="<?php echo $row['cargo']; ?>" class="form-control" id="position" name="cargo" aria-describedby="emailHelp">
                  
                </div>
            
                <button type="submit" class="btn aula btn-sucess">Atulizar</button>

                <a  href="../listar_usuario.php" type="button" class="btn btn-sucess"  id="a">voltar</a>
                

            
              </form>
          </div>
          <div class="col-sm-12 col-md-4">
            
          </div>
        </div>
      </div>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>