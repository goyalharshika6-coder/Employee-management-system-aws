<?php
include("../backend/config/db.php");

$id = $_GET['id'];

$sql = "SELECT * FROM employees WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">

<h1>Edit Employee</h1>

<form action="../backend/controllers/updateEmployee.php"
      method="POST"
      enctype="multipart/form-data">

<input type="hidden"
       name="id"
       value="<?php echo $row['id']; ?>">

<input type="text"
       name="name"
       value="<?php echo $row['name']; ?>"
       required>

<input type="email"
       name="email"
       value="<?php echo $row['email']; ?>"
       required>

<input type="text"
       name="department"
       value="<?php echo $row['department']; ?>"
       required>

<p>Current Photo</p>

<img src="uploads/<?php echo $row['photo']; ?>"
     width="100">

<br><br>

<input type="file"
       name="photo">

<button type="submit">

Update Employee

</button>

</form>

<br>

<a href="view_employee.php" class="btn">

Back

</a>

</div>

</body>
</html>