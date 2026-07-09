<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="container">

    <h1>Add Employee</h1>

    <form action="../backend/controllers/addEmployee.php" method="POST" enctype="multipart/form-data">

        <input type="text" name="name" placeholder="Enter Employee Name" required>

        <input type="email" name="email" placeholder="Enter Email" required>

        <input type="text" name="department" placeholder="Enter Department" required>

        <input type="file" name="photo" required>

        <br><br>

        <button type="submit">Save Employee</button>

    </form>

    <br>

    <a href="index.php" class="btn">Back to Home</a>

</div>

</body>

</html>