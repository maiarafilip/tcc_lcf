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
        
           
            <div class="form-group">
        <input class="btn btn-secondary" type="reset" value="Limpar">
        <input class="btn btn-primary" type="submit" value="Cadastrar">
    </div>
    </form>
</body>
</html>