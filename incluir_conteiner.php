<html>
    <head>
        <meta charset="utf-8">

        <link href="css/style.css" rel="stylesheet">
    </head>

    <form method="post">
        Cliente <input type="text" name="txtcliente"><br/>
        Número do Contêiner <input type="text" name="txtconteiner" pattern="([A-Z]{4})([0-9]{7})"><br/>
        Tipo <select name="tipo">
            <option value="20">20</option>
            <option value="40">40</option>
        </select><br/>
        Status <select name="status">
            <option value="C">Cheio</option>
            <option value="V">Vazio</option>
        </select><br/>
        Categoria <select name="categoria">
            <option value="I">Importação</option>
            <option value="E">Exportação</option>
        </select><br/><br/>
        <input type="submit" name="gravar" value="Gravar">
    </form>

    <?php
        if (!empty($_REQUEST['txtcliente'])) {
            $cliente = $_POST['txtcliente'];
            $conteiner = $_POST['txtconteiner'];
            $tipo = $_POST['tipo'];
            $status = $_POST['status'];
            $categoria = $_POST['categoria'];
            include ("conn.php");
            $sql = "INSERT INTO tbconteineres VALUES ('$cliente', '$conteiner', '$tipo', '$status', '$categoria')";
            $result = mysqli_query($con, $sql);
            mysqli_close($con);
        }
    ?>

</html>