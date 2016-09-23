<?php include '../db/connection.php'; ?>
<table class="table table-bordered table-striped table-hover">
    <thead>
        <tr>
            <th>Documento</th>
            <th>Nombre Completo</th>
            <th>Nota 1</th>
            <th>Nota 2</th>
            <th>Nota 3</th>
            <th>Promedio</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $idm = $_GET['idm'];
            $sql = "SELECT * FROM listanotas WHERE idm = $idm";
            $rsl = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($rsl)) {
        ?>
            <tr>
                <td><?php echo $row['idu']; ?></td>
                <td><?php echo $row['nombres']; ?></td>
                <td><?php echo $row['nt1']; ?></td>
                <td><?php echo $row['nt2']; ?></td>
                <td><?php echo $row['nt3']; ?></td>
                <?php if($row['promedio'] >= 3.5): ?>  
                <td class="success lead">
                <?php else: ?>
                <td class="danger lead">
                <?php endif ?>
                    <?php echo number_format($row['promedio'], 1); ?>
                </td>
            </tr>
        <?php
            }
        ?>
    </tbody>
</table>
<?php include '../db/disconnection.php'; ?>