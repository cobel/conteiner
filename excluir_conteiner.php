<html>
<head>
    <meta charset="utf-8">

    <link href="css/style.css" rel="stylesheet" />

</head>

    <form method="post">
        Código <input type='text' name='procurarcodigo'>
        <input type=submit name='procurar' value='Procurar'>
        <hr>
    </form>

    <?php
    include("conn.php");

        if (isset ($_POST['procurar'])) {
            $pesquisa = $_POST['procurarcodigo'];
            $sql = "SELECT * FROM tbconteineres WHERE '$pesquisa'=numconteiner;";
            $result = mysqli_query($con, $sql);
            while ($reg = mysqli_fetch_array($result)) {
                echo "<form method='post' name='consulta'>";
                echo "<br/>Conteiner <input type='text' name='txtconteiner' value='". $reg['numconteiner'] . "'>";
                echo "<br/>Cliente <input type='text' name='txtcliente' value='". $reg['cliente'] . "'>";
                echo "<br/>Tipo <input type='text' name='txttipo' value='". $reg['tipo'] . "'>";
                echo "<br/>Status <input type='text' name='txtstatus' value='". $reg['status'] . "'>";
                echo "<br/>Categoria <input type='text' name='txtcategoria' value='". $reg['categoria'] . "'>";
                echo "<br/><input type='submit' name='excluir' value='Excluir'>";
                echo "</form>";
            }
        }

        if (isset ($_POST['excluir'])) {
            include("conn.php");
            $codigo = $_POST['txtconteiner'];
            $sql = "DELETE FROM tbconteineres WHERE numconteiner = '$codigo';";
            $result = mysqli_query($con, $sql);
            $mysqli_close($con);
            echo "<br/>Registro excluído com sucesso!";
        }
    ?>

</html>