<?php
require('db.php');
include("auth.php"); //include auth.php file on all secure pages
require('header.php');

if(strlen($_SESSION['username'])==0)
    {   
header('location:login.php');
}
else{

if(isset($_POST['submit']))
{

$low=$_POST['Low'];	
$medium=$_POST['Medium'];	
$high=$_POST['High'];
$id=$_SESSION['username'];
$ret="INSERT into `ConcertRates` (CoEmail,Low,Medium,High) VALUES ('$id','$low','$medium','$high')";

$result=mysqli_query($con,$ret);


if($result){
            echo "<div class='form'><h3>You have successfully set your Concert Rates</h3><br/></div>";
		
        }else{
	echo "<div class='form'><h3>Error::the rate already exists/Invalid format</h3></br>";
	}
}

}


?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Wedding Rates</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p>Welcome!</p><p><b> <?php echo $_SESSION['username']; ?>! </b></p>

<p style="color:red">This is the Concert Event Rates Table Page.</p>


<form method="post" >

<input type="text"  name="Low" placeholder="What is your Low Rate">
<input type="text"  name="Medium" placeholder="What is your Medium Rate">
<input type="text"  name="High" placeholder="What is your High Rate">
<button type="submit" name="submit">Submit</button>


</form>


<p><a href="user-profile.php">Home</a></p>
<a href="logout.php">Logout</a>


<br /><br /><br /><br />

</div>
</body>
</html>