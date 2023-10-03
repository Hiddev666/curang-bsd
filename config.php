<?php
$server = 'localhost';
$username = 'root';
$password = '';
$db_name = 'bsd_combobox';

$conn = mysqli_connect($server, $username, $password, $db_name);

if(!$conn) {
    echo "Database connection failed!";
}

?>