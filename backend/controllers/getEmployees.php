<?php

include("../config/db.php");

$sql = "SELECT * FROM employees ORDER BY id DESC";

$result = mysqli_query($conn, $sql);

?>