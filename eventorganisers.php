<?php
require_once("header.php");
require_once("db.php");
echo "<h3><b>Event Companies Portal</h3></b></br>";
echo "<center><p style='color:blue';><b>Are you an Events Supplier? Sign Up Today <a href='signup.php'>Click Here</a> </b></p></center></br>";


$sql="SELECT CompanyID,CompanyName,HeadOffice,Services,Email 

FROM EventsCompanies";

$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result) > 0)
{


echo "<table><caption><b>Top Suppliers</caption></b></br><tr><th>NO</th><th>Company Name</th><th>Head Office</th><th>Specialises in:</th><th>Email Address</th></tr>";

//Output data of each row

while($row=mysqli_fetch_assoc($result))
{

echo 
"<tr><td>".$row["CompanyID"]."</td><td>".
$row["CompanyName"]."</td><td>".

$row["HeadOffice"]."</td><td>".

$row["Services"]."</td><td>".



$row["Email"]."</td></tr>";

}

echo "</table>";
}

else{

echo "O results";

}
mysqli_close($con);






?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Events Suppliers</title>
    <link rel="stylesheet" type="text/css" href="main.css">
    </head>
	
<body>


</body>
</html>