<?php 
if(isset($_POST['submit']))
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
</head>
<body>
    <h1 align="center"> Details of the Student </h1>

<?php
include("../db_con.php");
$roll = $_POST['roll'];

$qry = "SELECT * FROM `student` WHERE `RollNo` = '$roll'";

$run = mysqli_query($con,$qry);



if($run==true)
{
    $data = mysqli_fetch_assoc($run);
    ?>
    <table align="center" border = "1" width="80%" style = "margin-top=40px;">
    <tr align ="center">
      <th> RollNo </th>
      <th> Name </th>
      <th> Standard </th>
      <th> Conatct </th>
      <th> Address </th>
      <th> Image </th>
    </tr>
    <?php 
    if($data!=null)
    {
        ?>
    <tr align ="center">
        <td><?php echo $data['RollNo'];?></td>
        <td><?php echo $data['Name'];?></td>
        <td><?php echo $data['Standard'];?></td>
        <td><?php echo $data['Contact'];?></td>
        <td><?php echo $data['Address'];?></td>
        <td align="center"><img src="../Images/<?php echo $data['Image'];?>" style = "width:100px;height:100px;" alt="Profile"></td>
    </tr>
    <?php
    }
    else
    {
        ?>
       <h3> <tr>
            <th colspan="6" >No data found.</th>
        </tr></h3>
        <?php
    }
    ?>
    </tbale>
    <h3 align = "right"><a href="../index.php">Back</a></h3>
    <?php

}

}
else
{
    header('location:../index.php');
}
?>

</body>
</html>