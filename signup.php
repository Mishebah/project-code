<?php
include("header.php");
require('db.php');

echo "<h2><center>Event Companies Registration Portal</center></h2>";



    // If form submitted, insert values into the database.
	
	//Check whether data with the name companyname has been submitted
	
    if (isset($_POST['CompanyName']))
	{
		
		//Variables to hold our submitted data with post
		
		$companyname = stripslashes($_POST['CompanyName']); // removes backslashes
		$companyname = htmlspecialchars($companyname); 
		$companyname = mysqli_real_escape_string($con,$companyname); //escapes special characters in a string
		
		$location = stripslashes($_POST['HeadOffice']); // removes backslashes
		
		
		
		$chkbox=$_POST['chkbox'];
		$chkNew="";
		
		
		foreach ($chkbox as $chkNew1)
		
		{
		$chkNew.=$chkNew1.",";
		
		}
		
		
		
		
		$email = stripslashes($_POST['Email']);
		$email = mysqli_real_escape_string($con,$email);
		$password = stripslashes($_POST['Password']);
		$password = mysqli_real_escape_string($con,$password);
	

		$datecreated = date("Y-m-d H:i:s");
		

		
		
		
		//Our SQL statement that will execute
		
        $query = 
		
		"INSERT into `EventsCompanies` (CompanyName,HeadOffice,Services, Email, Password,DateCreated)

		VALUES ('$companyname', '$location','$chkNew','$email','".md5($password)."','$datecreated')";
       
	   
	   
	   
	   //Executing the sql query with the connection

   	   $result = mysqli_query($con,$query);
	   
	   //Check to see whether request was true or false
	   
        
		if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
		
        }else{
	echo "<div class='form'><h3>An Error Occured!!</h3></br>";
	}
}
	
?>

<!DOCTYPE html>
<html lang="en">
    <head>

    
    
    </head>
	
<body ng-app="">

<h2 style="color:green;">Enter Your Details Below</h2>
<form class="form-horizontal " name="registration" action="" method="post">


<h3 style="color:blue;">Basic Information</h3></br>

<div class="form-group">

<label class="control-label col-sm-2 col-offset" >Company Name:</label> 

<div class="col-sm-10">
<input class="form-control" type="text" name="CompanyName" placeholder="Enter your Company / Business Name" required ></br>

</div>
</div>

<div class="form-group">

<label class="control-label col-sm-2 col-offset">Head Office</label>

<div class="col-sm-10">

<input class="form-control" type="text" name="HeadOffice" placeholder=" Enter your Head Office" required ></br>
</div>
</div>




<div class="form-group">

<label class="control-label col-sm-2 col-offset" >Email Address:</label>
<div class="col-sm-10">
<input class="form-control" type="email" name="Email" id="inputEmail" placeholder="Enter your email" required autofocus ></br>

</div>

</div>




<div class="form-group">


<label class="control-label col-sm-2 col-offset">Password:</label>
<div class="col-sm-10">
<input class="form-control" type="password" name="Password" placeholder="Enter your password" required >

</div>
</div>


<label style="color:green;" ><h3>What types of event can you set up?:</h3></label></br> 

<input  type="checkbox" name="chkbox[]" value="Wedding"   ><label>Wedding</label></br>



<input type="checkbox" name="chkbox[]" value="Concert"  ><label>Concert</label></br>


<input  type="checkbox" name="chkbox[]" value="Small Gathering"  ><label>Small Gathering</label></br>






</br>




 <div class="form-group">
<div class="col-sm-offset-2 col-sm-1">

<button class="btn btn-default" type="submit">Register</button><a href="login.php">Login</a>

</div>
</div>
 
 
 
</form>
<br /><br />





</body>
</html>









