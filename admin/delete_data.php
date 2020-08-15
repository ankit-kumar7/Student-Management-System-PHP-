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
$id = $_GET['id'];

$qry = "DELETE FROM `student` WHERE `Id`='$id'";

$run = mysqli_query($con,$qry);

if($run==true)
{
    ?><script>
    alert('Delete Sussecfully');
    window.open("delete.php","_self");
    </script>
    <?php
}

?>
