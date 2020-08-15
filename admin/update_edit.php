<?php

session_start();
if($_SESSION['uid'])
{
    echo "";
}
else
{
    header('location:../login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
<h1 align = "center"> Welcome To the Update page </h1>
    <h3 align = "right"><a href="admindash.php"> Back to Admin page </a></h3>
    <h3 align ="right"> <a href="../logout.php"> Logout </a></h3>
<form action = "update_data.php" method="post" enctype="multipart/form-data">
<?php 
include("../db_con.php");
global $id;
$id = $_GET['id'];
$qry = "SELECT * FROM `student` WHERE `Id` = '$id'";

$run = mysqli_query($con,$qry);

if($run==true)
{
    while($data=mysqli_fetch_assoc($run))
    {
        $img = $data['Image'];
?>
    <a href="?id=<?php echo $data['Id']; ?>"></a>
    <table align = "center">
    <tr>
            <td> Roll No: </td>
            <td> <input type="number_format" name="rollno" value="<?php echo $data['RollNo']?>">
        </tr>
        <tr>
            <td> Name: </td>
            <td> <input type="text" name="name" value="<?php echo $data['Name']?>">
        </tr>
        <tr>
            <td> Standard: </td>
            <td> <input type="text" name="standard" value="<?php echo $data['Standard']?>">
        </tr>
        <tr>
            <td> Contact: </td>
            <td> <input type="text" name="contact" value="<?php echo $data['Contact']?>">
        </tr>
        <tr>
            <td> Address: </td>
            <td> <input type="text" name="address" value="<?php echo $data['Address']?>">
        </tr>
        <tr>
            <td> Image: </td>
            <td> <input type="file" name="img"></td>
                    <tr>
                    <input type="hidden" name="id" value="<?php echo $data['Id'];?>">
            <td colspan="2" align ="center"> <input type="submit" name="submit" value="Update"></td>
        </tr>
    </table>
    <?php
    
    }
}
?>
    </form>
</body>
</html>