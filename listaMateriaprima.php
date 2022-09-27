<html>
<?php include('conexao.php'); ?>

<head></head>

<body>
    <?php include('menu.php'); ?>

     <div class="container">

    <h2>Listagem da materia prima</h2>

    <table class="table table-hover">
        <thead>
            <th>cor</th>
            <th>foto</th>
            <th>validade</th>
            <th>restrições</th>
            <th>descrições</th>
            <th>dimensões</th>
            <th>caracteristicas</th>
            <th>indicações</th>
            <th>observacao</th>
            <th>Ação</th>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM materiaprima";
            $rs = mysqli_query($conn, $sql);
            while ($linha = mysqli_fetch_array($rs)) {
            ?>
            <tr>
                <td><?php echo $linha['cor'] ?></td>
                <td><?php echo $linha['foto'] ?></td>
                <td><?php echo $linha['validade'] ?></td>
                <td><?php echo $linha['restricoes'] ?></td>
                <td><?php echo $linha['descricoes'] ?></td>
                <td><?php echo $linha['dimensoes'] ?></td>
                <td><?php echo $linha['caracteristicas'] ?></td>
                <td><?php echo $linha['indicacoes'] ?></td>
                <td><?php echo $linha['observacao'] ?></td>
                <td>Editar
                    Excluir
                </td>
            </tr>
            <?php } ?>

</body>

</html>