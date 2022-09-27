<html>
<?php include('conexao.php'); ?>

<head></head>

<body>
    <?php include('menu.php'); ?>

    <div class="container">

    <h2>Listagem da Fabricação</h2>

      <table class="table table-hover">
        <thead>
            <th>Produto</th>
            <th>Materia prima</th>
            <th>Quantidade</th>
            <th>Data</th>
            <th>Ação</th>
        </thead>
        <tbody>
        <?php
            $sql = "SELECT * FROM fabricacao
            INNER JOIN produto ON produto.id = fabricacao.produto
            INNER JOIN materiaprima ON materiaprima.id = fabricacao.materiaprima";
            $rs = mysqli_query($conn, $sql);
            while ($linha = mysqli_fetch_array($rs)) {
            ?>
            <tr>
                <td><?php echo $linha['descricao'] ?></td>
                <td><?php echo $linha['cor'] ?></td>
                <td><?php echo $linha['quantidade'] ?></td>
                <td><?php echo $linha['data'] ?></td>
                <td>Editar
                    Excluir
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

</body>

</html>