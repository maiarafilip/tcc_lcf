<html>
<?php include('conexao.php'); ?>

<head></head>

<body>
    <?php include('menu.php'); ?>

    <div class="container">

    <h2>Listagem de clientes</h2>

    <table class="table table-hover">
        <thead>
            <th>Nome do cliente</th>
            <th>E-mail do cliente</th>
            <th>fone do cliente</th>
            <th>cidade</th>
            <th>Rua</th>
            <th>Bairro</th>
            <th>UF</th>
            <th>Cep</th>
            <th>Ação</th>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM luvacf.cliente
            INNER JOIN endereço ON endereço.id = cliente.endereco";
            $rs = mysqli_query($conn, $sql);
            while ($linha = mysqli_fetch_array($rs)) {
            ?>
            <tr>
                <td><?php echo $linha['nome'] ?></td>
                <td><?php echo $linha['email'] ?></td>
                <td><?php echo $linha['fone'] ?></td>
                <td><?php echo $linha['cidade'] ?></td>
                <td><?php echo $linha['rua'] ?></td>
                <td><?php echo $linha['bairro'] ?></td>
                <td><?php echo $linha['uf'] ?></td>
                <td><?php echo $linha['cep'] ?></td>


                <td><a href="editaCliente.php?codCliente=<?php echo $linha[0]?>" class="btn btn-secondary">Editar</a>
                    <a href="excluiCLiente.phpx" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    
</body>

</html>