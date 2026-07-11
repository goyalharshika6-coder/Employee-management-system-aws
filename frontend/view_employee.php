<?php

include("../backend/config/db.php");

$sql = "SELECT * FROM employees ORDER BY id DESC";

$result = mysqli_query($conn, $sql);

?>

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

<?php

while($row=mysqli_fetch_assoc($result))
{

?>

<tr>

<td><?php echo $row['id']; ?></td>

<td>

<img src="uploads/<?php echo $row['photo']; ?>" width="60">

</td>

<td><?php echo $row['name']; ?></td>

<td><?php echo $row['email']; ?></td>

<td><?php echo $row['department']; ?></td>

<td>

<a href="edit_employee.php?id=<?php echo $row['id']; ?>" class="btn">

Edit

</a>

<br><br>

<a href="../backend/controllers/deleteEmployee.php?id=<?php echo $row['id']; ?>" class="btn">

Delete

</a>

</td>

</tr>

<?php

}

?>

</table>

<br>

<a href="index.php" class="btn">

Back

</a>

</div>

</body>

</html>