<?php
    include 'config/init.inc';
    include 'sections/header.inc';
    include 'sections/security.inc';
?>
    <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
            <h1>Módulo de Materias</h1>
            <hr>
            <ol class="breadcrumb">
                <li><a href="index.php">Inicio</a></li>
                <li class="active">Materias</li>
            </ol>
            <a class="btn btn-success" href="subjects/add.php">
                <i class="glyphicon glyphicon-plus"></i>
                Adicionar Materia
            </a>
            <hr>

            <?php if(isset($_SESSION['action'])): ?>
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>Aviso:</strong> 
                    La Materia se ha <?php echo $_SESSION['action']; ?> con exito!
                </div>
            <?php unset($_SESSION['action']); ?>
            <?php endif ?>

            <?php include 'db/connection.php'; ?>
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre Materia</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT * FROM materias";
                        $rsl = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_array($rsl)) {
                    ?>
                        <tr>
                            <td><?php echo $row['idm']; ?></td>
                            <td><?php echo $row['nombre']; ?></td>
                            <td>
                                <a class="btn btn-sm btn-default" 
                                    href="subjects/edit.php?idm=<?php echo $row['idm']; ?>">
                                    <i class="glyphicon glyphicon-pencil"></i>
                                </a>
                                <a class="btn btn-sm btn-danger" href="javascript:;" 
                                   data-id="<?php echo $row['idm']; ?>" 
                                   data-table="subjects">
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