<html>
<head></head>
<body>
    <?php include ('menu.php'); ?>
    
    <form action="recebeProduto.php" method="POST">
        <h2>Cadastro do Produto</h2>

            <p>Material: </label><br> <input type="text" name="material"></p>
            <p>Tamanho: </label><br><input type="text" name="tamanho"></p>
            <p>Categoria </label><br> <input type="text" name="categoria"></p>
            <p>Valor: </label><br> <input type="text" name="preco"></p>
            <p>Validade: </label><br><input type="date" name="validade"></p>
            <p>Foto: </label><br> <input type="text" name="foto"></p>
            <p>Descrição: </label><br><input type="text" name="descricao"></p>
            <p>Observação: </label><br> <input type="text" name="observacao"></p>
           
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>