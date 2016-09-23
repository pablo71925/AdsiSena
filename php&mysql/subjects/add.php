<?php
    include '../config/init.inc';
    include '../sections/header.inc';
    include '..sections/security.inc';
?>

<div class="row">
    <div class="col-md-8 col-md-offset-2 text-center">
        <h1>Adicionar Materias</h1>
        <hr>
        <ol class="breadcrumb">
            <li><a href="../index.php">Inicio</a></li>
            <li><a href="../subjects.php">Materias</a></li>
            <li class="active">Adicionar</li>
        </ol>
        <hr>
        <form action="" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="nombre"
                       placeholder="Nombre de la Materia" required
                       <?php if (isset($_POST['nombre'])): ?>
                           value='<?php echo $_POST['nombre']; ?>'
                       <?php endif ?> >
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Guardar">
                <input type="reset" class="btn btn-default" value="Limpiar">
            </div>

        </form>
        <?php include '../db/connection.php'; ?>
        <?php
            if($_POST) {
                $nombre = $_POST['nombre'];

                if ($nombre == '') {
                    echo '<div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>Error:</strong> 
                            Debe llenar el campo Nombre de la Materia.
                        </div>';
                } else {
                    $sql = "INSERT INTO materias VALUES (DEFAULT, '$nombre')";
                    if(mysqli_query($conn, $sql)) {
                        $_SESSION['action'] = 'Adicionada';
                        echo "<script>";
                        echo "window.location.replace('../subjects.php');";
                        echo "</script>";
                    }
                }
                
            }
        ?>
        <?php include '../db/disconnection.php'; ?>
    </div>
</div>

<?php include '../sections/footer.inc'; ?>
