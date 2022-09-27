<html>
<head></head>
<body>
    <?php include ('menu.php'); ?>
    
    <form action="recebeFornecimento.php" method="POST">
        <h2>Cadastro do Fornecimento</h2>

            <p>Fornecedor: </label><br> <input type="text" name="fornecedor"></p>
            <p>Materia prima: </label><br><input type="text" name="materiaprima"></p>
            <p>Hora: </label><br> <input type="time" name="hora"></p>
            <p>Data: </label><br><input type="date" name="data"></p>
            <p>Valor: </label><br> <input type="number_format " name="valor"></p>
        
           
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>