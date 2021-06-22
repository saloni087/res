<?php

  session_start();

  $servername="localhost";
  $username="root";
  $password="";
  $database_name="restaurant";

  $conn=mysqli_connect($servername,$username,$password,$database_name);

  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $pass = $_POST['password'];
  $password = md5($pass);

  $s = "select * from register where name = '$name'";

  $result = mysqli_query($conn, $s);
  $num = mysqli_num_rows($result);
  if($num == 1)
  {
    echo "Username already taken";
  }
  else
  {
    $reg = "insert into register (name,email,mobile,password) values ('$name','$email','$mobile','$password')";
    mysqli_query($conn, $reg);
    header('location:login.html');
  }
  mysqli_close($conn);
?>
