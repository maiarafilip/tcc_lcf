<html>
<head></head>
<body>
<?php include ('menu.php');
    include('conexao.php');
     ?>
    <form action="recebeFabricacao.php" method="POST">
        <h2>Cadastro da Fabricação</h2>

        <p>Produto: </label><br>
        <select name="produto">
            <option>Selecione</option>
            <?php
                $sql = "SELECT * FROM produto";
                $rs = mysqli_query($conn, $sql);
                while ($linha = mysqli_fetch_array($rs)) {
                    ?>
                    <option value="<?php echo $linha['id'] ?>"><?php echo $linha['descricao'] ?></option>
                <?php } ?>
        </select></p>
        <p>Materia Prima: </label><br>
        <select name="materiaprima">
            <option>Selecione</option>
            <?php
                $sql = "SELECT * FROM materiaprima";
                $rs = mysqli_query($conn, $sql);
                while ($linha = mysqli_fetch_array($rs)) {
                    ?>
                    <option value="<?php echo $linha['id'] ?>"><?php echo $linha['cor'] ?></option>
                <?php } ?>
        </select></p>
           
            <p>Quantidade: </label><br> <input type="number" name="quantidade"></p>
            <p>Data: </label><br><input type="date" name="data"></p>
        
                
            <div class="form-group">
        <input class="btn btn-secondary" type="reset" value="Limpar">
        <input class="btn btn-primary" type="submit" value="Cadastrar">
    </div>
    </form>
</body>
</html>