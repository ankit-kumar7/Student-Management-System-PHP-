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
    <title>Display</title>
</head>
<body>
<h1 align = "center"> Details Of All Students </h1>
    <h3 align = "right"><a href="admindash.php"> Back to Admin page </a></h3>
    <h3 align ="right"> <a href="../logout.php"> Logout </a></h3>
<form action = "show.php" method="post" enctype="multipart/form-data">
    <!-- <table align = "center"> -->
    <?php
        include("../db_con.php");
        $query = "SELECT * FROM student";
        $run = mysqli_query($con,$query);
        if($run==true)
        {
            ?>
            <table align="center" width="80%" border=1>
            <tr >
               <th > No. </th>
               <th> RollNo </th>
               <th> Name </th>
               <th> Standard </th>
               <th> Conatct </th>
               <th> Address </th>
               <th> Image </th>
           </tr>
         <?php
            $count=1;
            while($data = mysqli_fetch_assoc($run))
            {
             ?>
             <tr>
                <td><?php echo $count ?></td>
                <td><?php echo $data['RollNo']; ?></td>
                <td><?php echo $data['Name']; ?></td>
                <td><?php echo $data['Standard']; ?></td>
                <td><?php echo $data['Contact']; ?></td>
                <td><?php echo $data['Address']; ?></td>
                <td align ="center"><img src="../Images/<?php echo $data['Image'];?>" style = "width:100px;height:100px;" alt="Profile"></td>
                </tr>
            <?php
            $count = $count+1;
            }
            if($count == 1)
            {
                ?>
                <tr>
                    <th colspan="7" >No data found.</th>
                    </tr>
                </table>
                    <?php
            }
            ?>

            <?php
            // header('location: update.php');
        }

     ?>
</body>
</html>