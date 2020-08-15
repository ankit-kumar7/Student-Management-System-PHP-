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

include("../db_con.php");
 if(isset($_POST['submit']))
{
$id = $_POST['id'];    
$roll = $_POST['rollno'];
$name = $_POST['name'];
$stnd = $_POST['standard'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$imagename = $_FILES['img']['name'];
$tempname = $_FILES['img']['tmp_name'];
move_uploaded_file($tempname,"../Images/$imagename");
$qry = "UPDATE `student` SET `RollNo`='$roll',`Name`= '$name',`Standard`= '$stnd',`Contact`= '$contact',`Address`= '$address',`Image`= '$imagename' WHERE `Id`= '$id'";
$run = mysqli_query($con,$qry);
if($run==true)
{
    ?>
    <script>
    alert("Update Sussecfully");
    window.open('update.php','_self');
    </script>
    <?php
}
}


?>
