<html>

<head>
<?php include('conexao.php'); ?>
<?php include('menu.php'); ?>

<link href="Listagem.css" rel="stylesheet">
</head>

<body>

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
                <a href="#" onclick='confirmar("<?php echo $linha[0] ?>") ' class="btn btn-danger">Excluir</a>
                </td>
            </tr>

            <script>
                        function confirmar(cod) {
                            if (confirm('Você realmente deseja excluir essa linha?'))
                                location.href = 'excluiFabricacao.php?id=' + cod;
                        }
                    </script>

            <?php } ?>
        </tbody>
    </table>

</body>

</html>