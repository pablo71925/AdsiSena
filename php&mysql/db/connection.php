<?php
    $conn = mysqli_connect('localhost', 'root', 'admin', 'adsi901197');
    if(mysqli_connect_errno()) {
        echo "Error: ".mysqli_connect_error();
    }
