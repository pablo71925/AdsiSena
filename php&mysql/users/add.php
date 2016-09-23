<?php
    include '../config/init.inc';
    include '../sections/header.inc';
    include '../sections/security.inc';
?>

<div class="row">
    <div class="col-md-8 col-md-offset-2 text-center">
        <h1>Adicionar Usuarios</h1>
        <hr>
        <ol class="breadcrumb">
            <li><a href="../index.php">Inicio</a></li>
            <li><a href="../users.php">Usuarios</a></li>
            <li class="active">Adicionar</li>
        </ol>
        <hr>
        <form action="" method="post">
            <div class="form-group">
                <input type="number" class="form-control" name="idu"
                       placeholder="Documento de Indentidad" required
                       <?php if (isset($_POST['idu'])): ?>
                           value='<?php echo $_POST['idu']; ?>'
                       <?php endif ?> >
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="nombres"
                       placeholder="Nombre Completo" required 
                       <?php if (isset($_POST['nombres'])): ?>
                           value='<?php echo $_POST['nombres']; ?>'
                       <?php endif ?> >
            </div>
            <div class="form-group">
                <input type="date" class="form-control" name="fnacimiento"
                       placeholder="Fecha de Nacimiento" 
                       <?php if (isset($_POST['fnacimiento'])): ?>
                           value='<?php echo $_POST['fnacimiento']; ?>'
                       <?php endif ?> >
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="correo"
                       placeholder="Correo Electrónico"
                       <?php if (isset($_POST['correo'])): ?>
                           value='<?php echo $_POST['correo']; ?>'
                       <?php endif ?> >
            </div>
            <div class="form-group">
                <input type="hidden" class="form-control" name="rol" value="Aprendiz">
                <input type="hidden" class="form-control" name="estado" value="Activo">
                <input type="submit" class="btn btn-success" value="Guardar">
                <input type="reset" class="btn btn-default" value="Limpiar">
            </div>

        </form>
        <?php include '../db/connection.php'; ?>
        <?php
            if($_POST) {
                $idu         = $_POST['idu'];
                $nombres     = $_POST['nombres'];
                $fnacimiento = $_POST['fnacimiento'];
                $correo      = $_POST['correo'];
                $foto        = 'public/photos/nofoto.png';
                $clave       = md5('aprendiz');
                $rol         = $_POST['rol'];
                $estado      = $_POST['estado'];

                if ($idu == '' || $nombres == '') {
                    echo '<div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>Error:</strong> 
                            Debe llenar los campos Documento y Nombre Completo.
                        </div>';
                } else {
                    $sql = "INSERT INTO usuarios VALUES (
                            $idu, '$nombres', '$fnacimiento', '$correo', '$foto', '$clave', '$rol', '$estado')";
                    if(mysqli_query($conn, $sql)) {
                        $_SESSION['action'] = 'Adicionado';
                        echo "<script>";
                        echo "window.location.replace('../users.php');";
                        echo "</script>";
                    }
                }

                
            }
        ?>
        <?php include '../db/disconnection.php'; ?>
    </div>
</div>

<?php include '../sections/footer.inc'; ?>
