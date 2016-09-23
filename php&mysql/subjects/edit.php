<?php
    include '../config/init.inc';
    include '../sections/header.inc';
    include '../sections/security.inc';
?>

<div class="row">
    <div class="col-md-8 col-md-offset-2 text-center">
        <h1>Modificar Materias</h1>
        <hr>
        <ol class="breadcrumb">
            <li><a href="../index.php">Inicio</a></li>
            <li><a href="../subjects.php">Materias</a></li>
            <li class="active">Modificar</li>
        </ol>
        <hr>
        <?php include '../db/connection.php'; ?>
        <?php if (isset($_GET['idm'])): ?>
        <?php

          $idm = $_GET['idm'];
          $sql = "SELECT * FROM materias WHERE idm = $idm";

          $rsl = mysqli_query($conn, $sql);
          while($row = mysqli_fetch_array($rsl)) {
        ?>
        <form action="" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="nombre"
                       placeholder="Nombre de la Materia" required
                       value='<?php echo $row['nombre']; ?>'>
            </div>

            <div class="form-group">
                <input type="hidden" name="idm" value="<?php echo $row['idm']; ?>">
                <input type="submit" class="btn btn-success" value="Modificar">
                <input type="reset" class="btn btn-default" value="Limpiar">
            </div>

        </form>
        
        <?php
            if($_POST) {
                $idm    = $_POST['idm'];
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
                    $sql = "UPDATE materias SET nombre = '$nombre' WHERE idm = $idm";
                    if(mysqli_query($conn, $sql)) {
                        $_SESSION['action'] = 'Modificada';
                        echo "<script>";
                        echo "window.location.replace('../subjects.php');";
                        echo "</script>";
                    }
                }
            }
        ?>
        <?php } ?>
        <?php else: ?>
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Error:</strong> 
            No se puede cargar la materia.
          </div>
        <?php endif ?>
        <?php include '../db/disconnection.php'; ?>
    </div>
</div>

<?php include '../sections/footer.inc'; ?>
