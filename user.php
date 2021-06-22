<?php

session_start();

?>
<html>
<head>
<style>

body{
     font-family: latha;
     color:white;
     background: linear-gradient(
     rgba(0,0,0,0.65), rgba(0,0,0,00.65), rgba(0,0,0,0.38), rgba(0,0,0,0.0)
     )
      ,url(image/12.jpg) no-repeat;
      background-size: cover;
   }

   .box{width:900px;
   float: right;
   border-bottom: 1px solid none;}

  .box ul li{
   width:120px;
   float:left;
   margin: 15px 15px;
   text-align:center;
   }

.box ul li a{text-decoration: none;
           color:white;}


.box ul li a:hover{
  color:white;
  border-bottom: 3px solid blue;
}

.wd img{
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 100%;
}
.wd{
   width: 350px;
   height: 625px;
   background-color: black;
   opacity: 0.9;
   padding: 55px;
}

.wd h1{
  text-align: center;
  text-transform: upercase;
  font-weight: 100px;
  color: #fc424e;
}
.wd h4{
  text-align: justify;
  color:gray;
  font-weight: bold;
  font-size: 20px;
}

.wd h2{
    text-align: center;
    text-transform: uppercase;
    font-weight: normal;
    margin: 40px auto;
}

.opt form ,input[type="button"]{
background-color: black;
color:white;
padding:10px;
margin:-14px auto;
padding-left:50px;
padding-right:50px;
text-align: center;
}

.submit-btn{
  width: 85%;
  padding: 10px 30px;
  cursor: pointer;
  display: block;
  margin: 5%;
  background: linear-gradient(to right,#ff105f,#ffad06);
  border: 0;
  outline: none;
  border-radius: 30px;
}


</style>
</head>
<body>

   <div class="box" style="font-size: 20px">
      <ul type="none">
         <li><a href="login.html"> Log In</a></li>
         <li><a href="menu.html"> Menu</a></li>
         <li><a href="order.html"> Online Order</a></li>
         <li><a href="res_form.html"> Booking</a></li>
         <li><a href="contact.html"> Contact Us</a></li>


     </ul>
   </div>

 <div class="wd">
   <h1> Welcome! <?php
    echo $_SESSION['name'];
    ?>
    </h1>
   <img src="image/welcome.gif" alt="">
   <br><br>
   <h4><i>Start where you are. Use what you have. Do what you can</i><br></h4>
   <form action="logout.php" method="post">
    <button type="submit" name="save" class="submit-btn">Log Out</button>
  </form>
 </div>
</body>
</html>
