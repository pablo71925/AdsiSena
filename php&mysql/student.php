<?php
    include 'config/init.inc';
    include 'sections/header.inc';
    include 'sections/security.inc';
?>
<div class="row">
    <div class="col-md-8 col-md-offset-2 text-center">
        <h1>Mis Notas</h1>
        <hr>
<?php include 'db/connection.php'; ?>
<table class="table table-bordered table-striped table-hover">
    <thead>
        <tr>
            <th>Materia</th>
            <th>Nota 1</th>
            <th>Nota 2</th>
            <th>Nota 3</th>
            <th>Promedio</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $sql = "SELECT * FROM listanotas WHERE idu = $_SESSION[idu]";
            $rsl = mysqli_query($conn, $sql);
            $nrw = mysqli_num_rows($rsl);
            if($nrw > 0) {
            while($row = mysqli_fetch_array($rsl)) {
        ?>
            <tr>
                <td><?php echo $row['nombre']; ?></td>
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
                $nombres = $row['nombres'];
            }
            } else {
                echo "<tr>";
                echo "<td colspan='5'>No existen notas asignadas a este documento.</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>
<?php include 'db/disconnection.php'; ?>
    </div>
</div>
<?php include 'sections/footer.inc'; ?>