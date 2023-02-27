<?php
//connection
$connection = mysqli_connect('localhost', 'root', '', 'website');

if (!$connection) {
    echo 'Connection Error!';
}

