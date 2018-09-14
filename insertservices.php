<?php
include("auth.php"); //include auth.php file on all secure pages
require('header.php');
include("db.php");

echo "<h4 class='pull-right'>"."Welcome:"."<b>".$_SESSION['username']."</b>"."</h4>"; 



if(IsSet($_POST['ServiceName']))

{

$ServiceName = stripslashes($_POST['ServiceName']); 

$EmailAddress=stripslashes($_SESSION['username']);



 $query = 
		
		"INSERT into `CompanyServices` (ServiceName,EmailAddress)

		VALUES ('$ServiceName','$EmailAddress')";
       
	   
	   
	   
	   //Executing the sql query with the connection

   	   $result = mysqli_query($con,$query);
	   
	   //Check to see whether request was true or false
	   
        
		if($result){
            echo "<div class='form'><h3>Service Entered</h3><a href='services.php'>Enter Any Other Services</a></div>";
		
        }else{
	echo "<div class='form'><h3>An Error Occured!!</h3><a href='services.php'>Re-Enter the Service</a></div>";
	}
}
	
?>




