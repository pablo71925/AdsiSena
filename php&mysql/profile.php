<?php
    include 'config/init.inc';
    include 'sections/header.inc';
    include 'sections/security.inc';
?>
    <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
            <h1>Mi Perfil</h1>
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

            <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#mod1" aria-controls="mod1" role="tab" 
                       data-toggle="tab">Datos Básicos</a>
                </li>
                <li role="presentation">
                    <a href="#mod2" aria-controls="mod2" role="tab" 
                       data-toggle="tab">Cambiar Contraseña</a>
                </li>
                <li role="presentation">
                    <a href="#mod3" aria-controls="mod3" role="tab" 
                       data-toggle="tab">Cambiar Imagen de Perfil</a>
                </li>
              </ul>

              <?php include 'db/connection.php'; ?>
              <!-- Tab panes -->
              <div class="tab-content">

                <!-- mod1 -->
                <?php
                  $sql = "SELECT * FROM usuarios WHERE idu = $_SESSION[idu]";

                  $rsl = mysqli_query($conn, $sql);
                  while($row = mysqli_fetch_array($rsl)) {
                ?>
                <div role="tabpanel" class="tab-pane active" id="mod1">
                <h3>Datos Básicos</h3>
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
                            <input type="submit" class="btn btn-success" name="modificardatos" value="Modificar Datos">
                            <input type="reset" class="btn btn-default" value="Limpiar">
                        </div>
                    </form>
                </div>
                <?php } ?>

                <!-- mod2 -->
                <div role="tabpanel" class="tab-pane fade" id="mod2">
                    <h3>Cambiar Contraseña</h3>
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="password" class="form-control" name="clave"
                                   placeholder="Contraseña" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="confirmar"
                                   placeholder="Confirmar Contraseña" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" name="modificarclave" value="Modificar Contraseña">
                            <input type="reset" class="btn btn-default" value="Limpiar">
                        </div>
                    </form>
                </div>

                <!-- mod3 -->
                <div role="tabpanel" class="tab-pane fade" id="mod3">
                    <h3>Cambiar Imagen de Perfil</h3>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="file" class="form-control" name="foto"
                                   placeholder="Foto" accept="image/*" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" name="modificarfoto" value="Modificar Imagen">
                            <input type="reset" class="btn btn-default" value="Limpiar">
                        </div>
                    </form>
                </div>

            </div>
                    <!-- modificardatos  -->
                    <?php
                        if(isset($_POST['modificardatos'])) {
                            $idu         = $_POST['idu'];
                            $nombres     = $_POST['nombres'];
                            $fnacimiento = $_POST['fnacimiento'];
                            $correo      = $_POST['correo'];

                            if ($nombres == '' || $fnacimiento == '' || $correo == '') {
                                echo '<div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <strong>Error:</strong> 
                                        Todos los campos son obligatorios.
                                    </div>';
                            } else {
                                $sql = "UPDATE usuarios SET nombres = '$nombres', fnacimiento = '$fnacimiento', correo = '$correo' WHERE idu = $idu";
                                if(mysqli_query($conn, $sql)) {
                                    $_SESSION['action'] = 'Modificado';
                                    $_SESSION['nombres'] = $nombres;
                                    echo "<script>";
                                    echo "window.location.replace('profile.php');";
                                    echo "</script>";
                                }
                            }
                        }
                    ?>
                    <!-- modificarclave  -->
                    <?php
                        if(isset($_POST['modificarclave'])) {
                            $clave     = $_POST['clave'];
                            $confirmar = $_POST['confirmar'];

                            if ($clave == '' || $confirmar == '' || $clave != $confirmar) {
                                echo '<div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <strong>Error:</strong> 
                                        Todos los campos son obligatorios.
                                        <br>
                                        Las contraseñas no son iguales.
                                    </div>';
                            } else {
                                $clave = md5($clave);
                                $sql = "UPDATE usuarios SET clave = '$clave' WHERE idu = $_SESSION[idu]";
                                if(mysqli_query($conn, $sql)) {
                                    $_SESSION['action'] = 'Modificado';
                                    echo "<script>";
                                    echo "window.location.replace('profile.php');";
                                    echo "</script>";
                                }
                            } 
                        }
                    ?>
                    <!-- modificarfoto  -->
                    <?php
                        if(isset($_POST['modificarfoto'])) {

                            if (!$_FILES['foto']['tmp_name']) {
                                echo '<div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <strong>Error:</strong> 
                                        Debe seleccionar una foto.
                                    </div>';
                            } else {
                                $ruta = 'public/photos/'.$_FILES['foto']['name'];
                                move_uploaded_file($_FILES['foto']['tmp_name'], $ruta);

                                $sql = "UPDATE usuarios SET foto = '$ruta' WHERE idu = $_SESSION[idu]";
                                if(mysqli_query($conn, $sql)) {
                                    $_SESSION['action'] = 'Modificado';
                                    $_SESSION['foto']   = $ruta;
                                    echo "<script>";
                                    echo "window.location.replace('profile.php');";
                                    echo "</script>";
                                }
                            } 
                        }
                    ?>
        <?php include 'db/disconnection.php'; ?>
        </div>
    </div>
<?php include 'sections/footer.inc'; ?>