<?php
    include '../config/init.inc';
    include '../sections/header.inc';
    include '../sections/security.inc';
?>

<div class="row">
    <div class="col-md-8 col-md-offset-2 text-center">
        <h1>Consultar Usuarios</h1>
        <hr>
        <ol class="breadcrumb">
            <li><a href="../index.php">Inicio</a></li>
            <li><a href="../users.php">Usuarios</a></li>
            <li class="active">Consultar</li>
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
          <table class='table table-striped table-hover text-left'>
            <tbody>
              <tr>
                <th>Documento de Identidad</th>
                <td><?php echo $row['idu']; ?></td>
              </tr>
              <tr>
                <th>Nombre Completo</th>
                <td><?php echo $row['nombres']; ?></td>
              </tr>
              <tr>
                <th>Fecha Nacimiento</th>
                <td><?php echo $row['fnacimiento']; ?></td>
              </tr>
              <tr>
                <th>Correo Electrónico</th>
                <td><?php echo $row['correo']; ?></td>
              </tr>
              <tr>
                <th>Foto</th>
                <td><img src="<?php echo $base_url.$row['foto']; ?>" width="120px"></td>
              </tr>
              <tr>
                <th>Rol</th>
                <td><?php echo $row['rol']; ?></td>
              </tr>
              <tr>
                <th>Estado:</th>
                <td><?php echo $row['estado']; ?></td>
              </tr>
            </tbody>
          </table>
        <?php } ?>
        <?php else: ?>
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Error:</strong> 
            No se puede consultar el usuario.
          </div>
        <?php endif ?>

        <?php include '../db/disconnection.php'; ?>
    </div>
</div>

<?php include '../sections/footer.inc'; ?>
