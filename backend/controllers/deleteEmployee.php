<?php

include("../config/db.php");

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "DELETE FROM employees WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {

        header("Location: ../../frontend/view_employee.php");
        exit();

    } else {

        echo "Error : " . mysqli_error($conn);

    }

}

?>