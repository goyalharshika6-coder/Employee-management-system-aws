<?php

include("../config/db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $department = mysqli_real_escape_string($conn, $_POST['department']);

    $photo = $_FILES['photo']['name'];
    $tempPhoto = $_FILES['photo']['tmp_name'];

    $uploadFolder = "../../frontend/uploads/";

    if (!is_dir($uploadFolder)) {
        mkdir($uploadFolder, 0777, true);
    }

    move_uploaded_file($tempPhoto, $uploadFolder . $photo);

    $sql = "INSERT INTO employees(name,email,department,photo)
            VALUES('$name','$email','$department','$photo')";

    if(mysqli_query($conn,$sql)){
        header("Location: ../../frontend/view_employee.php");
        exit();
    }
    else{
        echo "Database Error : ".mysqli_error($conn);
    }

}

?>