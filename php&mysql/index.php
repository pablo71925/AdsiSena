<?php
    include 'config/init.inc';
    include 'sections/header.inc';
    if(!isset($_SESSION['idu'])) {
?>
    <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center">
            <h1>CRUD (PHP&MYSQL)</h1>
            <h3 class="text-muted">Ingreso de Usuarios</h3>
            <hr>
            
            <form method="post" action="">
              <div class="form-group">
                <input type="email" class="form-control" name="correo" placeholder="Correo Electrónico">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="clave" placeholder="Contraseña">
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <br>
            <?php include 'db/connection.php'; ?>
            <?php 
                if ($_POST) {
                    $correo = $_POST['correo'];
                    $clave = md5($_POST['clave']);

                    $sql = "SELECT * FROM usuarios
                            WHERE correo = '$correo'
                            AND clave = '$clave' LIMIT 1";

                    $rsl = mysqli_query($conn, $sql);
                    $nrw = mysqli_num_rows($rsl);
                    
                    if($nrw > 0) {
                        while($row = mysqli_fetch_array($rsl)) {
                            $_SESSION['idu']     = $row['idu'];
                            $_SESSION['nombres'] = $row['nombres'];
                            $_SESSION['foto']    = $row['foto'];
                            $_SESSION['rol']     = $row['rol'];
                        }

                        if($_SESSION['rol'] == 'Instructor') {
                            echo '<script>
                                    window.location.replace("dashboard.php");
                                </script>';
                        } 
                        if($_SESSION['rol'] == 'Aprendiz') {
                            echo '<script>
                                    window.location.replace("student.php");
                                </script>';
                        }
                        
                    } else {
                        echo '<div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert">
                                    <span>&times;</span>
                                </button>
                                Correo Electrónico/Contraseña son incorrectas.
                            </div>';
                    }

                }
            ?>
            <?php include 'db/disconnection.php'; ?>
        </div>
    </div>
    <?php 
        } else {
            if($_SESSION['rol'] == 'Instructor') {
                echo "<script>window.location.replace('dashboard.php');</script>";
            }
            if($_SESSION['rol'] == 'Aprendiz') {
                echo "<script>window.location.replace('student.php');</script>";
            }
        }
    ?>
<?php include 'sections/footer.inc'; ?>
