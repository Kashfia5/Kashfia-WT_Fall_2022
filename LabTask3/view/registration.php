<?php
include ("../control/process.php");

?>

<html>
    <head>
        <title>Registration</title>
</head>
<body>
    <h1>Registration Form</h1>
    

    

    <form action="" method="POST" enctype="multipart/form-data">
         <table>
             
         <tr><td>First Name:</td> 
       <td> <input type="text"  name="fname"></td></tr>
       <tr><td>Last Name:</td> 
       <td> <input type="text"  name="lname"></td></tr>
       <tr><td>Age:</td> 
       <td> <input type="text"  name="age"></td></tr>
       

       <tr><td>Designation:</td>
       <td><input type="radio" name="des" value="Junior Programmer">Junior Programmer 
       <input type="radio" name="des" value="Senior Programmer">Senior Programmer 
       <input type="radio" name="des" value="Project Lead">Project Lead</td></tr>
        

        <tr><td>Preferred Language:</td>
       <td><input type="checkbox" name="Java" value="Java">Java 
       <input type="checkbox" name="PHP" value="PHP">PHP 
       <input type="checkbox" name="C++" value="C++">C++</td><></tr>

       <tr><td>Email:</td> 
       <td> <input type="text"  name="mail"></td></tr>

       <tr><td>Password:</td> 
       <td> <input type="password"  name="password"></td>
       <td><?php
       echo $passwordError;
       ?>  </td>  
    </tr>
       

       <tr><td>Please choose file </td>
        <td><input type="file"  name="myfile"></td></tr>
       
       <tr><td><input type="submit" name="submit" value="Submit">
        <input type="submit"  name="submit" value="Reset"></td></tr>

</table>

</form>

</body>
</html>