<?php
    include '../config/init.inc';
    include '../sections/header.inc';
    include '../sections/security.inc';
?>

<div class="row">
    <div class="col-md-8 col-md-offset-2 text-center">
        <h1>Adicionar Notas</h1>
        <hr>
        <ol class="breadcrumb">
            <li><a href="../index.php">Inicio</a></li>
            <li><a href="../notes.php">Notas</a></li>
            <li class="active">Adicionar</li>
        </ol>
        <hr>
        <?php 
          include '../db/connection.php'; 
          $slq_a = "SELECT * FROM usuarios WHERE rol = 'Aprendiz'";
          $slq_m = "SELECT * FROM materias";

          $rsla = mysqli_query($conn, $slq_a);
          $rslm = mysqli_query($conn, $slq_m);

        ?>
        <form action="" method="post">

            <div class="form-group">
                <select class="form-control" name="uid">
                  <option value="">Seleccione el Aprendiz..</option>
                  <?php while($row = mysqli_fetch_array($rsla)) { ?>
                    <option value="<?php echo $row['idu']; ?>">
                    <?php echo $row['nombres']; ?></option>
                  <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <select class="form-control" name="mid">
                  <option value="">Seleccione la Materia..</option>
                  <?php while($row = mysqli_fetch_array($rslm)) { ?>
                    <option value="<?php echo $row['idm']; ?>">
                    <?php echo $row['nombre']; ?></option>
                  <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <input type="number" class="form-control" min="0" max="5" 
                       name="nt1" placeholder="Nota 1" step="any" required 
                       <?php if (isset($_POST['nt1'])): ?>
                           value='<?php echo $_POST['nt1']; ?>'
                       <?php endif ?> >
            </div>
            <div class="form-group">
                <input type="number" class="form-control" min="0" max="5" 
                       name="nt2" placeholder="Nota 2" step="any" required 
                       <?php if (isset($_POST['nt2'])): ?>
                           value='<?php echo $_POST['nt2']; ?>'
                       <?php endif ?> >
            </div>
            <div class="form-group">
                <input type="number" class="form-control" min="0" max="5" 
                       name="nt3" placeholder="Nota 3" step="any" required 
                       <?php if (isset($_POST['nt3'])): ?>
                           value='<?php echo $_POST['nt3']; ?>'
                       <?php endif ?> >
            </div>
            
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Guardar">
                <input type="reset" class="btn btn-default" value="Limpiar">
            </div>

        </form>
        
        <?php
            if($_POST) {
                $uid = $_POST['uid'];
                $mid = $_POST['mid'];
                $nt1 = $_POST['nt1'];
                $nt2 = $_POST['nt2'];
                $nt3 = $_POST['nt3'];

                if ($uid == '' || $mid == '' || $nt1 == '' || $nt2 == '' || $nt3 == '') {
                    echo '<div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>Error:</strong> 
                            Debe llenar todos los Campos.
                        </div>';
                } else {
                    $sql = "INSERT INTO notas VALUES (
                            DEFAULT, $nt1, $nt2, $nt3, $uid, $mid)";
                    if(mysqli_query($conn, $sql)) {
                        $_SESSION['action'] = 'Adicionada';
                        echo "<script>";
                        echo "window.location.replace('../notes.php');";
                        echo "</script>";
                    }
                }

                
            }
        ?>
        <?php include '../db/disconnection.php'; ?>
    </div>
</div>

<?php include '../sections/footer.inc'; ?>
