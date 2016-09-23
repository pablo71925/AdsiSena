<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo $base_url; ?>">CRUD PHP&MYSQL</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <?php if($_SESSION['rol'] == 'Instructor'): ?>
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Módulos <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo $base_url;?>/users.php">Usuarios</a></li>
            <li><a href="<?php echo $base_url;?>/subjects.php">Materias</a></li>
            <li><a href="<?php echo $base_url;?>/notes.php">Notas</a></li>
            <li><a href="<?php echo $base_url;?>/queries.php">Consultas</a></li>
          </ul>
        </li>
      </ul>
    <?php endif; ?>
      <ul class="nav navbar-nav navbar-right">
        <li>
          <img src="<?php echo $base_url.''.$_SESSION['foto']; ?>"
                style="border: 1px solid silver; border-radius: 50%; height: 48px; width: 48px;">
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['nombres']; ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo $base_url;?>/profile.php">Mi Perfil</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?php echo $base_url.'/exit.php'; ?>">Cerrar Sesión</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>