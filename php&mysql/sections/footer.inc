        <div class="row">
            <br><br>
            <div class="col-md-4 col-md-offset-4 text-center">
                <hr>
                <h4 class="text-muted"> &copy; Todos los derechos reservados <?php echo date('Y'); ?></h4>
            </div>
        </div>
    </section>
    <script src="<?php echo $assets_js; ?>jquery-1.12.4.min.js"></script>
    <script src="<?php echo $assets_js; ?>bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('body').on('click', 'a[data-id]', function(event) {
                event.preventDefault();
                if(confirm('Realmente desea eliminar este registro?')) {
                    $id  = $(this).attr('data-id');
                    $tbl = $(this).attr('data-table');
                    if($tbl == 'users') {
                        window.location.replace('users/destroy.php?idu='+$id);
                    }
                    if($tbl == 'subjects') {
                        window.location.replace('subjects/destroy.php?idm='+$id);
                    }
                    if($tbl == 'notes') {
                        window.location.replace('notes/destroy.php?idn='+$id);
                    }
                }
            });
            // -----------------------------------------
            $('body').on('change', '#qsubjects', function(event) {
                event.preventDefault();
                $idm = $(this).val();
                if($idm != '') {
                    $.get('subjects/ajax.php', {idm: $idm}, function(data) {
                        $('.dataload').html(data);
                    });
                }
            });
            // -----------------------------------------
            $('body').on('keyup', '#doc', function(event) {
                event.preventDefault();
                $doc = $(this).val();
                if($doc.length > 5) {
                    $.get('subjects/ajaxdoc.php', {doc: $doc}, function(data) {
                        $('.datadoc').html(data);
                    });
                }
            });
            // -----------------------------------------

        });
    </script>
</body>
</html>