<?php
// including the database connection file
include_once("connect.php");

if(isset($_POST['update']))
{   
    $id = $_POST['id'];
    
    $name=$_POST['name'];
 
    $email=$_POST['email']; 
    $number=$_POST['number'];
    
    // checking empty fields
    if(empty($name) || empty($number) || empty($email)) {  
            
        if(empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if(empty($number)) {
            echo "<font color='red'>Number field is empty.</font><br/>";
        }
        
        if(empty($email)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }       
    } else {    
        //updating the table
        $sql = "UPDATE contactinfo SET name=:name, number=:number, email=:email WHERE id=:id";
        $query = $con->prepare($sql);
                
    $query->bindparam(':id', $id);
     $query->bindparam(':name', $name);
         $query->bindparam(':number', $number);
         $query->bindparam(':email', $email);
        $query->execute();
        
        // Alternative to above bindparam and execute
        //$query->execute(array(':id' => $id, ':name' => $name, ':email' => $email, ':number' => $number));
                
        //redirectig to the display page. In our case, it is index.php
        header("Location: display.php");
    }
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$sql = "SELECT * FROM contactinfo WHERE id=:id";
$query = $con->prepare($sql);
$query->execute(array(':id' => $id));

while($row = $query->fetch(PDO::FETCH_ASSOC))
{
    $name = $row['name'];
    $number = $row['number'];
    $email = $row['email'];
}
?>
<html>
<head>  
    <title>Edit Data</title>
</head>

<body>
    <a href="display.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo $name;?>"></td>
            </tr>
            <tr> 
                <td>Number</td>
                <td><input type="tel" name="number" value="<?php echo $number;?>"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="email" name="email" value="<?php echo $email;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>