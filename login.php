<?php 
session_start();
if(isset($_SESSION['uid']))
{
    header('location:admin/admindash');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align ="center"> Admin Login </h1>
    <form action="login.php" method="post">
        <table align="center">
            <tr>
                <td> Username: </td>
                <td> <input type="text" placeholder="enter username"  name="admin" required></td>
            </tr>
            <tr>
                <td> Password: </td>
                <td> <input type="password" placeholder="enter password" name="pass" required></td>
            </tr>
            <tr>
                <td colspan="2" align="center"> <input type="submit" name="submit" value="Login"></td>
            </tr>
        </table>
       <h3  align="right"> <a  href="index.php">Home Page</a></h3>
    </form>
</body>
</html>
 
 <?php
if(isset($_POST['submit']))
{
    include("db_con.php");
    global $con;
    global $temp;
    $user = $_POST['admin'];
    $pass = $_POST['pass'];
    $query = "SELECT * FROM admin";
    $run = mysqli_query($con,$query);
    if($run==true)
    {
        while($data = mysqli_fetch_assoc($run))
        {
            if($user == $data['Username'] && $pass == $data['Password'])
            {
                ?> <script>
                alert('Login Sussecfully');
                // window.open("login.php","_self");
                </script>
                <?php
                $temp=1;
                session_start();
                $_SESSION['uid'] = $data['Id'];
                echo"php";
                header('location:admin/admindash.php');
            }
        }
        if($temp!=1)
        {
            ?>
            <script>
            alert('Error');
            </script>
            <?php
        }
    }
}
?>