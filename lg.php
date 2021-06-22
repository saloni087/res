<?php

  session_start();

  $servername="localhost";
  $username="root";
  $password="";
  $database_name="restaurant";

  $conn=mysqli_connect($servername,$username,$password,$database_name);

  $email = $_POST['email'];
  $pass = $_POST['password'];
  $password = md5($pass);

  $s = "select * from register where email = '$email' && password = '$password'";

  $result = mysqli_query($conn, $s);
  $num = mysqli_num_rows($result);
  if($num == 1)
  {
    $_SESSION['email'] = $email;
    //$rs = "select name from register where email = '$email'";
    //$sql = mysqli_query($conn, $rs);
    $row = mysqli_fetch_array($result);
    $username = $row["name"];
    $_SESSION['name'] = $username;
    header('location:user.php');
  }
  else
  {
    /*$log = "insert into login (email,password) values ('$email','$password')";
    mysqli_query($conn, $log);
    echo "Logged In successfull!!";*/
    echo "You are not registered. Kindly register !!";
    header('location:login.html');
  }
  mysqli_close($conn);
?>
