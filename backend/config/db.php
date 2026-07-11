<?php

$host = "localhost";
$username = "employeeuser";
$password = "employee123";
$database = "employee_management";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

?>