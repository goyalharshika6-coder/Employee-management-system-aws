<?php

include("../config/db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST['id'];
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $department = mysqli_real_escape_string($conn, $_POST['department']);

    // Check if new photo is uploaded
    if (!empty($_FILES['photo']['name'])) {

        $photo = $_FILES['photo']['name'];
        $tempPhoto = $_FILES['photo']['tmp_name'];

        $uploadFolder = "../../frontend/uploads/";

        move_uploaded_file($tempPhoto, $uploadFolder . $photo);

        $sql = "UPDATE employees
                SET name='$name',
                    email='$email',
                    department='$department',
                    photo='$photo'
                WHERE id='$id'";

    } else {

        $sql = "UPDATE employees
                SET name='$name',
                    email='$email',
                    department='$department'
                WHERE id='$id'";
    }

    if (mysqli_query($conn, $sql)) {
        header("Location: ../../frontend/view_employee.php");
        exit();
    } else {
        echo "Error : " . mysqli_error($conn);
    }
}

?>