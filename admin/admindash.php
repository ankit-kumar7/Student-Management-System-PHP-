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
    <title>Admin Dashboard</title>
</head>
<body>
    <h1 align = "center"> Welcome To the Admin Dashboard </h1>
    <h3 align ="right"> <a href="../logout.php"> Logout </h3>
    <table align="center">
        <tr>
            <td> 1. </td>
            <td> <a href="Insert.php"> Insert Student Details</td>
        </tr>
        <tr>
            <td> 2. </td>
            <td> <a href="show.php"> Display All Student Details</td>
        </tr>
        <tr>
            <td> 3. </td>
            <td> <a href="Delete.php"> Delete Student Details</td>
        </tr>
        <tr>
            <td> 4. </td>
            <td> <a href="Update.php"> Update Student Details</td>
        </tr>
</body>
</html>