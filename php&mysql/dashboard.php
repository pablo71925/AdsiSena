<?php
    include 'config/init.inc';
    include 'sections/header.inc';
    include 'sections/security.inc';
?>
    <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">
            <h1>CRUD (PHP&MYSQL)</h1>
            <hr>
            <a class="btn btn-lg btn-default btn-block" href="users.php">
                <i class="glyphicon glyphicon-user"></i>
                Módulo Usuario
            </a>
            <br>
            <a class="btn btn-lg btn-default  btn-block" href="subjects.php">
                <i class="glyphicon glyphicon-book"></i>
                Módulo Materias
            </a>
            <br>
            <a class="btn btn-lg btn-default  btn-block" href="notes.php">
                <i class="glyphicon glyphicon-calendar"></i>
                Módulo Notas
            </a>
            <br>
            <a class="btn btn-lg btn-default  btn-block" href="queries.php">
                <i class="glyphicon glyphicon-search"></i>
                Módulo Consultas
            </a>

        </div>
    </div>
<?php include 'sections/footer.inc'; ?>
