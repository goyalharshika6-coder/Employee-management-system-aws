<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Employees</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="container">

    <h1>Employee List</h1>

    <table>

        <tr>
            <th>ID</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Email</th>
            <th>Department</th>
            <th>Action</th>
        </tr>

        <tr>
            <td>1</td>
            <td>
                <img src="images/default-user.png" width="60" height="60">
            </td>
            <td>Harshika Goyal</td>
            <td>harshika@gmail.com</td>
            <td>Cloud</td>

            <td>
                <a href="edit_employee.php" class="btn">Edit</a>
                <a href="delete_employee.php" class="btn">Delete</a>
            </td>

        </tr>

    </table>

    <br>

    <a href="index.php" class="btn">⬅ Back to Home</a>

</div>

</body>

</html>