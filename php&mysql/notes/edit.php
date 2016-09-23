<?php
    include '../config/init.inc';
    include '../sections/header.inc';
    include '../sections/security.inc';
?>

<div class="row">
    <div class="col-md-8 col-md-offset-2 text-center">
        <h1>Modificar Notas</h1>
        <hr>
        <ol class="breadcrumb">
            <li><a href="../index.php">Inicio</a></li>
            <li><a href="../notes.php">Notas</a></li>
            <li class="active">Modificar</li>
        </ol>
        <hr>
        <?php include '../db/connection.php'; ?>
        <?php if (isset($_GET['idn'])): ?>
        <?php

          $idn = $_GET['idn'];
          
          $slq_a = "SELECT * FROM usuarios WHERE rol = 'Aprendiz'";
          $slq_m = "SELECT * FROM materias";
          $sql   = "SELECT * FROM notas WHERE idn = $idn";

          $rsla = mysqli_query($conn, $slq_a);
          $rslm = mysqli_query($conn, $slq_m);
          $rsl  = mysqli_query($conn, $sql);

          while($row = mysqli_fetch_array($rsl)) {
        ?>
        <form action="" method="post">
            
            <div class="form-group">
                <select class="form-control" name="uid">
                  <option value="">Seleccione el Aprendiz..</option>
                  <?php while($rowa = mysqli_fetch_array($rsla)) { ?>
                    <option value="<?php echo $rowa['idu']; ?>" 
                    <?php if($rowa['idu'] == $row['uid']) echo "selected"; ?> >
                    <?php echo $rowa['nombres']; ?></option>
                  <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <select class="form-control" name="mid">
                  <option value="">Seleccione la Materia..</option>
                  <?php while($rowm = mysqli_fetch_array($rslm)) { ?>
                    <option value="<?php echo $rowm['idm']; ?>" 
                    <?php if($rowm['idm'] == $row['mid']) echo "selected"; ?> >
                    <?php echo $rowm['nombre']; ?></option>
                  <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <input type="number" class="form-control" min="0" max="5" 
                       name="nt1" placeholder="Nota 1" step="any" required 
                       value='<?php echo $row['nt1']; ?>' >
            </div>
            <div class="form-group">
                <input type="number" class="form-control" min="0" max="5" 
                       name="nt2" placeholder="Nota 2" step="any" required 
                       value='<?php echo $row['nt2']; ?>' >
            </div>
            <div class="form-group">
                <input type="number" class="form-control" min="0" max="5" 
                       name="nt3" placeholder="Nota 3" step="any" required 
                       value='<?php echo $row['nt3']; ?>' >
            </div>

            <div class="form-group">
                <input type="hidden" name="idn" value="<?php echo $row['idn']; ?>">
                <input type="submit" class="btn btn-success" value="Modificar">
                <input type="reset" class="btn btn-default" value="Limpiar">
            </div>

        </form>
        
        <?php
            if($_POST) {
                $idn = $_POST['idn'];
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
                    $sql = "UPDATE notas SET nt1 = $nt1, nt2 = $nt2, nt3 = $nt3, uid = $uid, mid = $mid WHERE idn = $idn";
                    if(mysqli_query($conn, $sql)) {
                        $_SESSION['action'] = 'Modificada';
                        echo "<script>";
                        echo "window.location.replace('../notes.php');";
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
            No se puede cargar las notas.
          </div>
        <?php endif ?>
        <?php include '../db/disconnection.php'; ?>
    </div>
</div>

<?php include '../sections/footer.inc'; ?>
