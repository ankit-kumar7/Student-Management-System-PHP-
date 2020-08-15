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
    <title>Insert</title>
</head>
<body>
    <form action = "insert.php" method="post" enctype="multipart/form-data">
    <h1 align = "center"> Welcome To the Admin Dashboard </h1>
    <h3 align = "right"><a href="admindash.php"> Back to Admin page </a></h3>
    <h3 align ="right"> <a href="../logout.php"> Logout </a></h3>
    <table align="center">
        <tr>
            <td> Roll No: </td>
            <td> <input type="number_format" name="rollno" placeholder = "enter roll no" required>
        </tr>
        <tr>
            <td> Name: </td>
            <td> <input type="text" name="name" placeholder = "enter name" required>
        </tr>
        <tr>
            <td> Standard: </td>
            <td> <input type="text" name="standard" placeholder = "enter standrad" required>
        </tr>
        <tr>
            <td> Contact: </td>
            <td> <input type="text" name="contact" placeholder = "enter contact" required>
        </tr>
        <tr>
            <td> Address: </td>
            <td> <input type="text" name="address" placeholder = "enter address" required>
        </tr>
        <tr>
            <td> Image: </td>
            <td> <input type="file" name="img">
                    <tr>
            <td colspan="2" align ="center"> <input type="submit" name="submit" value="Submit">
        </tr>
    </table>
    </form>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
include("../db_con.php");

$rollno = $_POST['rollno'];
$name = $_POST['name'];
$standard = $_POST['standard'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$imagename = $_FILES['img']['name'];
$tempname = $_FILES['img']['tmp_name'];
move_uploaded_file($tempname,"../Images/$imagename");

$qry="INSERT INTO `student`(`RollNo`,`Name`,`Standard`,`Contact`,`Address`,`Image`) 
       VALUES ('$rollno','$name','$standard','$contact','$address','$imagename')";

$run = mysqli_query($con,$qry);
if($run==true)
{
    ?>
    <script>
        alert('Inserted Sussecfully');
    </script>
    <?php
}
else
{
    ?>
    <script>
        alert('Inserted Sussecfully');
    </script>
    <?php
}


}
?>
