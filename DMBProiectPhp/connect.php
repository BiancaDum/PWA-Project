<?php

    $connection = new mysqli('localhost', 'root', '', 'phproject1');

    if(!$connection){
        die(mysqli_error($connection));
    }
?>