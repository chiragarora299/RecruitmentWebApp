<?php
include("connect.php");
?>

<!DOCTYPE html>    
<html>    
<head>    
    <title>Login Form</title>    
</head>    
<body>        
    <form action="data.php" method="POST" >    
        REG ID NO<input type="text" name="regid" id="Uname" placeholder="Reg_ID" required>    
         USER NAME <input type="name" name="name" id="Pass" placeholder="NAME" required>    
        CONTACT <input type="contact" name="contact" id="Pass" placeholder="CONTACT" required>    
         EMAIL ID <input type="email" name="email" id="Pass" placeholder="EMAIL" required>    
        GENDER <font color ='white'>
        <input type="radio" name="R1">MALE<input type="radio" name='R1' >FEMALE  </font>    
        JOB ROLE <input type="jobrole" name="jobrole" id="Pass" placeholder="JOB ROLE " required>    
      COLLAGE NAME<input type="collagename" name="collagename" id="Pass" placeholder="COLLAGE NAME" required>    
       <input type="submit"  id="button"name="submit" value="submit">        
            
    </form>     

<?php

if(isset($_POST['submit']))
{
$regid=$_POST['regid'];
$name=$_POST['name'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$gender=$_POST['R1'];
$jobrole=$_POST['jobrole'];
$collagename=$_POST['collagename'];


$data= mysqli_query($conn,"INSERT INTO candidate VALUES('','$regid','$name','$contact','$email','$gender','$jobrole','$collagename')") ;

}
?>
    
</body>    
</html>   
