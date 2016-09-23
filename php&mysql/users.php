<?php
    include 'config/init.inc';
    include 'sections/header.inc';
    include 'sections/security.inc';
?>
    <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
            <h1>Módulo de Usuarios</h1>
            <hr>
            <ol class="breadcrumb">
                <li><a href="index.php">Inicio</a></li>
                <li class="active">Usuarios</li>
            </ol>
            <a class="btn btn-success" href="users/add.php">
                <i class="glyphicon glyphicon-plus"></i>
                Adicionar Usuario
            </a>
            <hr>

            <?php if(isset($_SESSION['action'])): ?>
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>Aviso:</strong> 
                    El Usuario se ha <?php echo $_SESSION['action']; ?> con exito!
                </div>
            <?php unset($_SESSION['action']); ?>
            <?php endif ?>

            <?php include 'db/connection.php'; ?>
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>Documento</th>
                        <th>Nombre Completo</th>
                        <th>Correo Electrónico</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT * FROM usuarios";
                        $rsl = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_array($rsl)) {
                    ?>
                        <tr>
                            <td><?php echo $row['idu']; ?></td>
                            <td><?php echo $row['nombres']; ?></td>
                            <td><?php echo $row['correo']; ?></td>
                            <td>
                                <?php if($row['estado'] == 'Activo'): ?>
                                    <span class="label label-success">
                                        <i class="glyphicon glyphicon-user"></i>
                                    </span>
                                <?php else: ?>
                                    <span class="label label-danger">
                                        <i class="glyphicon glyphicon-user"></i>
                                    </span>
                                <?php endif ?>
                            </td>
                            <td>
                                <a class="btn btn-sm btn-default" 
                                    href="users/show.php?idu=<?php echo $row['idu']; ?>">
                                    <i class="glyphicon glyphicon-search"></i>
                                </a>
                                <a class="btn btn-sm btn-default" 
                                    href="users/edit.php?idu=<?php echo $row['idu']; ?>">
                                    <i class="glyphicon glyphicon-pencil"></i>
                                </a>
                                <a class="btn btn-sm btn-danger" href="javascript:;" 
                                   data-id="<?php echo $row['idu']; ?>" 
                                   data-table="users">
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