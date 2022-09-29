<html>
<?php include('conexao.php'); ?>

<head></head>

<body>
    <?php include('menu.php'); ?>

    <div class="container">

    <h2>Listagem das Vendas</h2>

    <table class="table table-hover">
        <thead>
            <th>Produto</th>
            <th>Cliente</th>
            <th>Hora</th>
            <th>Data</th>
            <th>Valor</th>
            <th>Quantidade</th>
            <th>Forma de Pagamento</th>
            <th>Ação</th>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM vendas
            INNER JOIN produto ON produto.id = vendas.produto
            INNER JOIN cliente ON cliente.id = vendas.cliente";
            $rs = mysqli_query($conn, $sql);
            while ($linha = mysqli_fetch_array($rs)) {
            ?>
            <tr>
                <td><?php echo $linha['descricao'] ?></td>
                <td><?php echo $linha['nome'] ?></td>
                <td><?php echo $linha['hora'] ?></td>
                <td><?php echo $linha['data'] ?></td>
                <td><?php echo $linha['valor'] ?></td>
                <td><?php echo $linha['quantidade'] ?></td>
                <td><?php echo $linha['formadepagamento'] ?></td>
                <td><a href="" class="btn btn-secondary">Editar</a>
                <a href="#" onclick='confirmar("<?php echo $linha[0] ?>") ' class="btn btn-danger">Excluir</a>


                </td>
            </tr>
            <script>
                        function confirmar(cod) {
                            if (confirm('Você realmente deseja excluir essa linha?'))
                                location.href = 'excluiVendas.php?id=' + cod;
                        }
                    </script>
            <?php } ?>
        </tbody>

            </div>
</body>

</html>