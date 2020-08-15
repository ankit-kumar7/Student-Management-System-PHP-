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
    <title>Delete</title>
</head>
<body>
<h1 align = "center"> Welcome To the Delete page </h1>
    <h3 align = "right"><a href="admindash.php"> Back to Admin page </a></h3>
    <h3 align ="right"> <a href="../logout.php"> Logout </a></h3>
<form action = "delete.php" method="post" enctype="multipart/form-data">
    <table align = "center">
        <tr>
            <th> Enter Standard </th>
            <td><input type="text" name = "standard" placeholder = "enter standard" required></td>
            <th> Enter Name </th>
            <td> <input type = "text" name = "name"placeholder = "enter name" required></td>
            <td> <input type = "submit" name = "submit" value = "Search"></tr>
    </table> 
    <?php

    if(isset($_POST['submit']))
    {
        include("../db_con.php");
        $stnd = $_POST['standard'];
        $name = $_POST['name'];
        $query = "SELECT * FROM `student` WHERE Standard = '$stnd' AND Name = '$name'";
        $run = mysqli_query($con,$query);
        if($run==true)
        {
            ?>
            <table align="center"  border="1" width="80%" style = "width:320px;margin-top=40px;">  
            <tr >
               <th > No. </th>
               <th> RollNo </th>
               <th> Name </th>
               <th> Standard </th>
               <th> Conatct </th>
               <th> Address </th>
               <th> Image </th>
               <th> Delete </th>
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
                <td align="center"><img src="../Images/<?php echo $data['Image'];?>" style = "width:100px;height:100px;" alt="Profile"></td>
                <td><a href ="delete_data.php ?id=<?php echo $data['Id']?>"> Delete </a></td>
              </tr>
            <?php
            $count = $count+1;
            }
            if($count == 1)
            {
                ?>
                <tr>
                    <th colspan="8" >No data found.</th>
                    </tr>
                </table>
                    <?php
            }
            ?>

            <?php
            // header('location: update.php');
        }

}

     ?>
</body>
</html>