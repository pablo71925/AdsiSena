<?php
    include '../config/init.inc';
    include '../sections/header.inc';
    include '../sections/security.inc';
?>

<div class="row">
    <div class="col-md-8 col-md-offset-2 text-center">
        <h1>Modificar Usuarios</h1>
        <hr>
        <ol class="breadcrumb">
            <li><a href="../index.php">Inicio</a></li>
            <li><a href="../users.php">Usuarios</a></li>
            <li class="active">Modificar</li>
        </ol>
        <hr>
        <?php include '../db/connection.php'; ?>
        <?php if (isset($_GET['idu'])): ?>
        <?php

          $idu = $_GET['idu'];
          $sql = "SELECT * FROM usuarios WHERE idu = $idu";

          $rsl = mysqli_query($conn, $sql);
          while($row = mysqli_fetch_array($rsl)) {
        ?>
        <form action="" method="post">
            <div class="form-group">
                <input type="number" class="form-control" name="idu"
                       placeholder="Documento de Indentidad" required
                       value='<?php echo $row['idu']; ?>' readonly>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="nombres"
                       placeholder="Nombre Completo" required
                       value='<?php echo $row['nombres']; ?>'>
            </div>
            <div class="form-group">
                <input type="date" class="form-control" name="fnacimiento"
                       placeholder="Fecha de Nacimiento"
                       value='<?php echo $row['fnacimiento']; ?>'>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="correo"
                       placeholder="Correo Electrónico"
                       value='<?php echo $row['correo']; ?>'>
            </div>
            <div class="form-group">
                <select class='form-control' name='estado'>
                  <option value="Activo" 
                          <?php if($row['estado'] == 'Activo') echo "selected"; ?>> 
                          Activo 
                  </option>
                  <option value="Inactivo" 
                          <?php if($row['estado'] == 'Inactivo') echo "selected"; ?>> 
                          Inactivo 
                  </option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Modificar">
                <input type="reset" class="btn btn-default" value="Limpiar">
            </div>

        </form>
        
        <?php
            if($_POST) {
                $idu         = $_POST['idu'];
                $nombres     = $_POST['nombres'];
                $fnacimiento = $_POST['fnacimiento'];
                $correo      = $_POST['correo'];
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
                    $sql = "UPDATE usuarios SET nombres = '$nombres', fnacimiento = '$fnacimiento', correo = '$correo', estado = '$estado' WHERE idu = $idu";
                    if(mysqli_query($conn, $sql)) {
                        $_SESSION['action'] = 'Modificado';
                        echo "<script>";
                        echo "window.location.replace('../users.php');";
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
            No se puede cargar el usuario.
          </div>
        <?php endif ?>
        <?php include '../db/disconnection.php'; ?>
    </div>
</div>

<?php include '../sections/footer.inc'; ?>
