<?php
$servername ="localhost";
$username ="root";
$password = "";
$database_name ="restaurant";

$conn=mysqli_connect($servername,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
  die("Connection Failed:" .mysqli_connect_error());
}

if(isset($_POST['save']))
{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $sql_query = "INSERT INTO contactus (name,email,message) values ('$name','$email','$message')";

  if (mysqli_query($conn, $sql_query))
  {
    header('location:restaurant.html');
  }
  else {
    echo "Error: " .$sql . "" .mysqli_error($conn);
  }
  mysqli_close($conn);
}
 ?>
