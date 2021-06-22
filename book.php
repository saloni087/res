<?php
$servername="localhost";
$username="root";
$password="";
$database_name="restaurant";
$conn=mysqli_connect($servername,$username,$password,$database_name);
if(!$conn)
{
  die("Connection Failed:" . mysqli_connect_error());
}
if(isset($_POST['save']))
{
  $day = $_POST['day'];
  $hour = $_POST['hour'];
  $name = $_POST['name'];
  $mobile = $_POST['mobile'];
  $persons = $_POST['persons'];

  $sql_query = "INSERT INTO booking (day,hour,name,mobile,persons) VALUES ('$day','$hour','$name','$mobile','$persons')";

  if(mysqli_query($conn, $sql_query))
  {
    header('location:restaurant.html');
  }
  else
  {
      echo "Error: " . $sql . "" . mysqli_error($conn);
  }
  mysqli_close($conn);
}
?>
