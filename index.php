<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System.</title>
</head>
<body>
    <h3 align="right"><a href="login.php">LogIn Admin</a></h3>
    <h1 align="center"> Welcome to the Student Records.</h1>
    <form action="admin/serach.php" method="post">
    <table align="center">
     <tr>
     <td colspan="2" align="center">  <h2> Student Information  </h2> </td>
        </tr> 
        <tr > 
            <td align="right" style="width:50%"> <h3>Standard : </h3></td><td ><select>
                    <option value="1"> <h3> </h3></option>
                    <option value="2"> <h3>B.A</h3></option>
                    <option value="3"> <h3>B.S.C</h3></option>
                    <option value="4"> <h3>B.tech</h3></option>
                    <!-- <option value="5"> <h3>5th </h3></option>
                    <option value="6"> <h3>6th </h3></option>
                    <option value="7"> <h3>7th </h3></option>
                    <option value="8"> <h3>8th </h3></option>
                    <option value="9"> <h3>9th </h3></option>
                    <option value="10"> <h3>10th </h3></option>
                    <option value="11"> <h3>11th </h3></option>
                    <option value="12"> <h3>12th </h3></option> --> 
                    </td> 
              </tr>
        <tr >
            <td align="right"> <h3> Enter RollNo :  </h3> </td><td align="center"> <input type="text" name="roll" placeholder="enter roll no" required></td>
         </tr>
        <tr>
       <td  colspan="2"> <input  style="margin-left:145px" type="submit" name="submit" value="Serach"></td> 
        </tr>
        </table>
        </form>
</body>
</html>