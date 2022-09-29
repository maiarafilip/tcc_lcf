<!DOCTYPE html>
<html lang="pt">
    
<head>
    <meta charset="UTF-8">
    <?php include ('menu.php'); ?>
    
    <form action="recebeFornecedor.php" method="POST">
    <div class="container">

    <h2>Fornecedor</h2>
</head>

<body>
    <form action="dados_fornecedor.html" method="POST">
        <p>
            <strong>Cadastro do fornecedor</strong>
            <p>Nome completo: </label><br> <input type="text" name="nome"></p>
            <p>Telefone:</label><br> <input type="text" name="fone"></p>
            <p>Email: </label><br><input type="text" name="email"></p>
            <p>Endereço: </label><br><input type="text" name="endereço"></p>
            <p>Material: </label><br><input type="text" name="material"></p>
            <p>Observação: </label><br><input type="text" name="comentarios"></p>
            <div class="form-group">
        <input class="btn btn-secondary" type="reset" value="Limpar">
        <input class="btn btn-primary" type="submit" value="Cadastrar">
    </div>
    </form>
</body>

</html>