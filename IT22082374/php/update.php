<?php
	include_once 'config.php';
 ?>

 <?php
	$id=$_GET["updateid"];
	 $name = $_GET["fname"];
	 $address =  $_GET["add"];
	 $mobile = $_GET["mobile"];
	 $NIC = $_GET["NIC"];
	 $mail = $_GET["email"];
	 $pwd = $_GET["rpw"];
?>

<!DOCTYPE html>
<html>
  <head>
 
    <link rel="stylesheet" type="text/css" href="../css/New_register.css" >
    <script  src="../js/New_register.js"> </script>
    <title> New Register </title>

  </head>
  
  <body>
  
    <h2  class="font"> Budget Vehicle Dealers</h2>

      <img class="logo" src="../images/car.png" style="float:left;" width=100 height=80 > 
      <img class="login" src="../images/user.png" style="float:right" width="100" height="100" >
      <button class="login1" style="float:right" width=100 height=100  onclick="location.href='../../IT22082374/html/login.html';">  Log in   </button>

   <ul class="menu">

     <h2>
	 
      <li class="menu"> <a href="../../IT22266064/html/home.html"> Home </a></li>
      <li class="menu"> <a href="../../IT22266064/html/VehicleFleet.html"> Vehicle Fleet </a> </li>
      <li class="menu"> <a href="../../IT22209702/html/Payment.html"> Payment </a> </li>
      <li class="menu"> <a href="../../IT22101488/html/Services.html"> Service </a> </li>
      <li class="menu"> <a href="../../IT22082374/html/New_register.html"> Register</a> </li>
      <li class="menu"> <a href="../../IT22082442/html/About.html"> About </a> </li>
      <li class="menu"> <a href="../../IT22082442/html/contactus.html"> Contact Us </a> </li>
		
     </h2>
   
   </ul>
 
   <br> 


<div class="layout">
		<button class="bttn1" type="button" id="btn1" onclick="location.href='../../IT22101488/html/Booking.html';">Booking</button>
		<button class="bttn1" type="button" id="btn1" onclick="location.href='../../IT22209702/html/feedback.html';">Feedback</button>
</div>


   <center> 
    <div class="box">
     <div class="productData" >

       <form action="../php/register.php" onsubmit="return checkPassword()" method="POST"  style="border-style:groove;" target="_self"  >
   
       <h1> Update Registration </h1>
  
  
       <input type="image" img  src="../images/user.png" style="float:center;" width=120 height=100 > 

       <br>
         <b>
		  
           <label> Full Name </label> <br>
	       <input type="text" class="log" id="fname" name="fname" style="width:350px;"  placeholder="Enter your full name here" required value="<?php echo "$name"?>">  <br><br>
           Address <br>
           <textarea class="log" id="add" name="add" rows="5"	cols="50" style="width:350px;" placeholder="Enter your home address" required value="<?php echo "$address"?>"></textarea><br><br>
	       Mobile Number <br>
	       <input type="phone" class="log" id="mobile" name="mobile" style="width:350px;" pattern="[0-9]{10}"  placeholder="7xxxxxxxx" required value="<?php echo "$mobile"?>" >  <br><br>
	       NIC Number <br>
	       <input type="text" class="log" id="NIC" name="NIC" style="width:350px;" pattern="[0-9]{12}"  placeholder="xxxxxxxxxxx"required value="<?php echo "$NIC"?>">  <br><br>
	       Email <br>
	       <input type="email" class="log" id="email" name="email" style="width:350px;" pattern="[a-zA-Z0-9#%_+-]+@[a-z0-9]+\.[a-z]{2,3}" placeholder="Email" required value="<?php echo "$mail"?>" >  <br> <br> 
	       Password <br>
	       <input  type="password" class="log" id="pw" name="pw" style="width:350px;" pattern="[a-zA-z0-9@#$%^&*]{6,12}"  placeholder="6-12 characters" required value="<?php echo "$pwd"?>" > <br> <br>
	       Confirm Password <br>
	       <input  type="password" class="log" id="rpw" name="rpw" style="width:350px;" pattern="[a-zA-z0-9@#$%^&*]{6,12}" placeholder="6-12 characters" required > <br> <br> 
		   
           <button class="set" type="Submit"> UPDATE </button>  
		   
		    
		 
         </b>	
		 
      </form>
     </div>
    </div>
   </center>

   <div class="footer">

		<button class="bttn2" type="button" ><a href="https://www.facebook.com/login/"><img src="../images/a.png"  height="40" width="40"></a> </button>
		<button class="bttn2" type="button" ><a href="hhttps://twitter.com/login?lang=en"><img src="../images/c.png"  height="40" width="40"></a></button>
		<button class="bttn2" type="button" ><a href="https://www.instagram.com/accounts/login/?hl=en"><img src="../images/b.png"  height="40" width="40"></a></button>
		<button class="bttn2" type="button" ><a href="https://accounts.google.com/"><img src="../images/d.png" height="40" width="40"></a></button>

		<button class="bttn3" type="button" ><img src="../images/e.png"  height="40" width="40"></button>
		<button class="bttn3" type="button" ><img src="../images/f.png"  height="40" width="40"></button>
		<button class="bttn3" type="button" ><img src="../images/g.png"  height="40" width="40"></button>
		<button class="bttn3" type="button" ><img src="../images/h.png" height="40" width="40"></button>

   </div>
  </body>
</html>