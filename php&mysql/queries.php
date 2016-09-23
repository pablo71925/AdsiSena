<?php
    include 'config/init.inc';
    include 'sections/header.inc';
    include 'sections/security.inc';
?>
    <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
            <h1>Módulo de Consultas</h1>
            <hr>

             <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#subjects" aria-controls="subjects" role="tab" 
                       data-toggle="tab">Consulta por Materia</a>
                </li>
                <li role="presentation">
                    <a href="#documents" aria-controls="documents" role="tab" 
                       data-toggle="tab">Consulta por Documento</a>
                </li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="subjects">
                <?php 
                  include 'db/connection.php'; 
                  $slq_m = "SELECT * FROM materias";
                  $rslm = mysqli_query($conn, $slq_m);
                ?>
                    <br>
                    <div class="form-group">
                        <select class="form-control" name="mid" id="qsubjects">
                          <option value="">Seleccione la Materia..</option>
                          <?php while($row = mysqli_fetch_array($rslm)) { ?>
                            <option value="<?php echo $row['idm']; ?>">
                            <?php echo $row['nombre']; ?></option>
                          <?php } ?>
                        </select>
                    </div>
                    <br>
                    <div class="table-responsive dataload"></div>
                 <?php include 'db/disconnection.php'; ?>   
                </div>

                <div role="tabpanel" class="tab-pane fade" id="documents">
                    <br>
                    <div class="form-group">
                      <input type="number" class="form-control" name="document" id="doc" placeholder="Ingrese Documento de Identidad">
                    </div>
                    <br>
                    <div class="table-responsive datadoc"></div>
                </div>
              </div>

            
        </div>
    </div>
<?php include 'sections/footer.inc'; ?>