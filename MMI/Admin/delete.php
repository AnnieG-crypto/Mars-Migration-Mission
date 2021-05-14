<?php
//including the database connection file
include("config.php");

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM users WHERE id=$id");

//redirecting to the display page (Admin.php in our case)
header("Location: http://127.0.0.1/MMI/Admin.php");
?>