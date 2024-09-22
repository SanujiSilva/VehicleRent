<?php
	include_once 'config.php';
 ?>


<!DOCTYPE html>
<html>
  <head>
 
    <link rel="stylesheet" type="text/css" href="../css/New_register.css" >
    <title>Register Details </title>

  </head>
  
  <body>
  
    <h2  class="font">  Budget Vehicle Dealers </h2>

      <img class="logo" src="../images/car.png" style="float:left;" width=100 height=80 > 
      <img class="login" src="../images/user.png" style="float:right" width="100" height="100" >
      <button class="login1" style="float:right" width=100 height=100  onclick="location.href='../html/login.html';">  Log in  </button>
 
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
  <button class="bttn1" type="button"  onclick="location.href='../../IT22101488/html/Booking.html';">Booking</button>
	<button class="bttn1" type="button"  onclick="location.href='../../IT22209702/html/feedback.html';">Feedback</button>
</div>

	<br>
	<button style="width:150px;height:80px;background-color:pink;"><a href="../../IT22082374/html/New_vehicle_register.html">Add New Vehicle</a></button>
	<br>

	<br>
	<button style="width:150px;height:80px;background-color:pink;"><a href="../../IT22082374/html/New_register.html">Add New User</a></button>
	<br>

<b><br><br>
   <center> 
    <div class="box">
     <div class="productData"style="border-style:groove;border-color:black;width:800px;" >

      
        <table border="1" width="100%">
         <tr>
		  <th class="col1">ID</th>
		  <th class="col1">Name</th>
		  <th class="col1">Address</th>
		  <th class="col1">Mobile</th>
		  <th class="col1">	NIC </th>
		  <th class="col1">	Email </th>
		  <th class="coll">Password</th>
		  <th class="coll">Operation</th>
		  
	     </tr>
		
		
		
	<?php
		$sql = "SELECT * FROM register";
		$result = $conn->query($sql);
		
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				echo "<tr>
				<td>".$row["ID"]."</td>
				<td>".$row["Name"]."</td>
				<td>".$row["Address"]."</td>
				<td>".$row["Mobile"]."</td>
				<td>".$row["NIC"]."</td>
				<td>".$row["Email"]."</td>
				<td>".$row["Password"]."</td>
				<td>
				<button style='background-color:lime;'> <a href='update.php? updateid=$row[ID] &fname=$row[Name] &add=$row[Address] &mobile=$row[Mobile] &NIC=$row[NIC] &mail=$row[Email] &rpw=$row[Password]'>Update</a></button>
				<button style='background-color:red;'> <a href='delete.php? deleteid=$row[ID]'>Delete</a></button>
				</td>
				</tr>";
			}
		}
		else{
			echo "no results";
		}
		echo "</table>";
		
		$conn->close();
	?>
	
	
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