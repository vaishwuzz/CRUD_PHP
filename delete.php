<?php
//including the database connection file
include("connect.php");

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$sql = "DELETE FROM contactinfo WHERE id=:id";
$query = $con->prepare($sql);
$query->execute(array(':id' => $id));

//redirecting to the display page (index.php in our case)
header("Location:display.php");
?>