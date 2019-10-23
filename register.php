<?php
    session_start();
    $conn=mysqli_connect("localhost","root","surendra","mysql");

    if(isset($_POST['submit']))
    {
    $firstname= $_POST['firstname'];
    $lastname= $_POST['lastname'];
    $email= $_POST['email'];
    $gender=$_POST['gender'];
    $password=$_POST['password'];

    $sql="INSERT INTO  WEBUSER(email,password,fname,lname,gender) VALUES('$email','$password','$firstname','$lastname','$gender')";
    mysqli_query($conn,$sql);
    if(!$conn)
      echo "Error in executing the query";
    else
     {
      echo "Data inserted successfully!! ", $firstname;
    }
  }
  ?>
<!doctype html>
<html>
<head>
  <title>Form</title>
  </head>
<body>
<form action="register.php" method="POST" target="_blank" >
  Enter first name:
  <input type="text" name="firstname"  required>
  <br><br>
  
   Enter Last name:
  <input  type="text" name="lastname"  required>
  <br><br>
   Enter enter Email:
  <input type="text" name="email"  required>
  <br><br>
  Enter Password
   <input type="password" name="password" required>
<div>
  <input type="radio" value="Male" name="gender"><label>Male
   <input type="radio" value="Female" name="gender"><label>Female
   <br>
 <input type="Submit" name="submit">
 
</div>
</form>
</body>
</html> 