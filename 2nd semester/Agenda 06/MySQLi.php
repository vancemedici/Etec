<?php
$hostname = "localhost";
$dbname = "school";
$username = "root";
$password = "74364";
$connection = new mysqli($hostname, $username, $password, $dbname);
if ($connection->connect_errno) {
    echo "Falha ao conectar: (".$connection->connect_errno.")".$connection->connect_error;
}
?>