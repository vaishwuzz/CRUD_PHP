<?php
//including the database connection file
include_once("connect.php");

//fetching data in descending order (lastest entry first)
$result = $con->query("SELECT * FROM contactinfo ORDER BY id DESC");
?>

<html>
<head>  
    <title>Homepage</title>
</head>

<body>
<a href="index.php">Add New Data</a><br/><br/>

    <table width='80%' border=0>

    <tr bgcolor='#CCCCCC'>
        <td>Name</td>
        <td>Email</td>
        <td>Number</td>
        <td>Update</td>
    </tr>
    <?php   
    while($row = $result->fetch(PDO::FETCH_ASSOC)) {        
        echo "<tr>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['number']."</td>";  
        echo "<td><a href=\"edit.php?id=$row[id]\">Edit</a> | <a href=\"delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";       
    }
    ?>
    </table>
</body>
</html>