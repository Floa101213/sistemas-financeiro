<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Usuários</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    


    <header class="header">
        <nav><h3>lista de usuario</h4></nav>
        <nav>user</nav>
        <nav>sair</nav>
    </header>
<form id="formulario">
    <table border>
        <thead>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>EMAIL</th>
                <th>CARGO</th>
            </tr>
        </thead>
        
        <tbody>
            <tr>
                <td>não registrado</td>
                <td>não registrado</td>
                <td>não registrado</td>
                <td>não registrado</td>

                <td>
                    <button type="#">EDITAR</button>
                </td>
                <td>
                    <button type="#">EXCLUIR</button>
                </td>
            </tr>
        </tbody>
        <tbody>
    <?php
include 'php/conexao.php';
    $sql = "SELECT * FROM tb_user";
    $query = $conexao->query($sql);

    if ($query->num_rows > 0) {
while ($row = $query->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['id_usuario'] . "</td>";
    echo "<td>" . $row['nome'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['cargo'] . "</td>";

    echo "<td><a href='php/editar_usuario.php?id=" . $row['id_usuario'] . "'>Editar</a></td>";

    echo "<td><a href='php/excluir_usuario.php?id=" . $row['id_usuario'] . "' onnclick=\"return confirm('Você tem certeza de que deseja excluir esse usuario?')\">Excluir</a></td>";
    echo "</tr>";

        }

    } else {
        echo "<tr><td colspan'6'>Usuario não encontrado.</td></tr>";
}

?>

</tbody>
</table>
</form>
</body>
</html>