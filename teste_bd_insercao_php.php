<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>aaaaaaaaaaaa</title>
</head>

<body>
    <?php
        include "conexao_bd.php";
        $nome = $_POST['nome'];
        $sobre = $_POST['sobre'];
        $prod = $_POST['prod'];
        $sql = "insert into e32.banco values (default,
        '$nome','$sobre','$prod');";
        $result = pg_query($con,$sql);
        $linhas = pg_affected_rows($result);
        if($linhas>0)
            echo "Produto gravado!";
        else
        {
            echo "Erro na gravação<br>";
            echo pg_last_error();
        }
        pg_close($con);
    ?>
</body>

</html>
