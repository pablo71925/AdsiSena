<?php
    include 'config/init.inc';
    include 'sections/header.inc';
    include 'sections/security.inc';
?>
    <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
            <h1>Módulo de Notas</h1>
            <hr>
            <ol class="breadcrumb">
                <li><a href="index.php">Inicio</a></li>
                <li class="active">Notas</li>
            </ol>
            <a class="btn btn-success" href="notes/add.php">
                <i class="glyphicon glyphicon-plus"></i>
                Adicionar Notas
            </a>
            <hr>

            <?php if(isset($_SESSION['action'])): ?>
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>Aviso:</strong> 
                    La Nota se ha <?php echo $_SESSION['action']; ?> con exito!
                </div>
            <?php unset($_SESSION['action']); ?>
            <?php endif ?>

            <?php include 'db/connection.php'; ?>
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>Documento</th>
                        <th>Nombre Completo</th>
                        <th>Nota 1</th>
                        <th>Nota 2</th>
                        <th>Nota 3</th>
                        <th>Materia</th>
                        <th>Promedio</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT * FROM listanotas";
                        $rsl = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_array($rsl)) {
                    ?>
                        <tr>
                            <td><?php echo $row['idu']; ?></td>
                            <td><?php echo $row['nombres']; ?></td>
                            <td><?php echo $row['nt1']; ?></td>
                            <td><?php echo $row['nt2']; ?></td>
                            <td><?php echo $row['nt3']; ?></td>
                            <td><?php echo $row['nombre']; ?></td>
                            <?php if($row['promedio'] >= 3.5): ?>  
                            <td class="success lead">
                            <?php else: ?>
                            <td class="danger lead">
                            <?php endif ?>
                                <?php echo number_format($row['promedio'], 1); ?>
                            </td>
                            <td>
                                <a class="btn btn-sm btn-default" 
                                    href="notes/edit.php?idn=<?php echo $row['idn']; ?>">
                                    <i class="glyphicon glyphicon-pencil"></i>
                                </a>
                                <a class="btn btn-sm btn-danger" href="javascript:;" 
                                   data-id="<?php echo $row['idn']; ?>" 
                                   data-table="notes">
                                    <i class="glyphicon glyphicon-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
            <?php include 'db/disconnection.php'; ?>
        </div>
    </div>
<?php include 'sections/footer.inc'; ?>