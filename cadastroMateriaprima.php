<html>
<head></head>
<body>
    <?php include ('menu.php'); ?>
<form action="recebeMateriaprima.php" method="POST">
        <h2>Cadastro de Materia-prima</h2>

            <p>Cor: </label><br> <input type="text" name="cor"></p>
            <p>Foto: </label><br><input type="text" name="foto"></p>
            <p>validade: </label><br> <input type="date" name="validade"></p>
            <p>Restrições: </label><br><input type="text" name="restrições"></p>
            <p>Descrições: </label><br> <input type="text" name="descrições"></p>
            <p>Dimensões: </label><br> <input type="text" name="dimensões"></p>
            <p>Caracteristicas: </label><br> <input type="text" name="caracteristicas"></p>
            <p>Indicações: </label><br><input type="text" name="indicações"></p>
            <p>Observações: </label><br> <input type="text" name="observacao"></p>
           
            <div class="form-group">
        <input class="btn btn-secondary" type="reset" value="Limpar">
        <input class="btn btn-primary" type="submit" value="Cadastrar">
    </div>
    </form>
</body>
</html>