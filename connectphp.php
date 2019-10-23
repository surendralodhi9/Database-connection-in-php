<?php  
$host = 'localhost';  
$user = 'root';  
$pass = 'surendra'; 
$db='mysql';
$conn = mysqli_connect($host, $user, $pass,$db);  
if(! $conn )  
{  
  die('Could not connect: ' . mysqli_error());  
}

echo 'Connected successfully';  
mysqli_close($conn);  
?>  