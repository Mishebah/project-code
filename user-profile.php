<?php


include("auth.php"); //include auth.php file on all secure pages
require('header.php');
include("db.php");

echo "<h4 class='pull-right'>"."Welcome:"."<b>".$_SESSION['username']."</b>"."</h4>"; 


echo "<div class='pull-left'>".

"<a class='nav' href='services.php'>Services</a>".
"<a class='nav' href='weddingrates.php'>Wedding Event Rates</a>".
"<a  class='nav' href='concertrates.php'>Concert Event Rates</a>".
"<a  class='nav' href='logout.php'>Logout</a>".

"</div>"."</br>"."</br>";


if(IsSet($_SESSION["username"])) 
{
$sql="SELECT * FROM EventsCompanies WHERE Email='".$_SESSION['username']."'";
$result=mysqli_query($con,$sql);
$cnt=1;

while($row=mysqli_fetch_array($result))
{
echo 

"<h3 style='color:green'>"."Your Profile Information:"."</h3>"."</br>".

"<label> Name:</label>"."<button class='btn' >".$row["CompanyName"]."</button>"."</br>".

"<label> Head Office:</label>"."<button class='btn'>".$row["HeadOffice"]."</button>"."</br>".

"<label> Specialises in:</label>"."<button class='btn'>".$row["Services"]."</button>"."</br>".



"<label> Email</label>"."<button class='btn'>".$row["Email"]."</button>"."</br>".


"<label> Date Registered:</label>"."<button class='btn'>".$row["DateCreated"]."</button>"."</br>";


}
}








if(IsSet($_SESSION["username"])) 
{
$sql="SELECT * FROM EventsCompanies INNER JOIN WeddingRates ON EventsCompanies.Email = WeddingRates.CoEmail WHERE Email='".$_SESSION['username']."'";
$result=mysqli_query($con,$sql);
$cnt=1;

while($row=mysqli_fetch_array($result))
{
echo 
"<div class='row'>".


"<div class='col-sm-6'>".

"<h3 style='color:green'>"."Your Wedding Rates Information:"."</h3>"."</br>".


"<label>Low Rates:</label>"."<button class='btn'>".$row["Low"]."</button>"."</br>".

"<label>Medium Rates</label>"."<button class='btn'>".$row["Medium"]."</button>"."</br>".

"<label>High Rates</label>"."<button class='btn'>".$row["High"]."</button>"."</br>".


"</div>".


"</div>"; /*End of row div*/

}
}

if(IsSet($_SESSION["username"])) 
{
$sql="SELECT * FROM EventsCompanies INNER JOIN ConcertRates ON EventsCompanies.Email = ConcertRates.CoEmail WHERE Email='".$_SESSION['username']."'";
$result=mysqli_query($con,$sql);
$cnt=1;

while($row=mysqli_fetch_array($result))
{
echo 
"<div class='row'>".


"<div class='col-sm-12'>".

"<h3 style='color:green'>"."Your Concert Rates Information:"."</h3>"."</br>".


"<label>Low Rates:</label>"."<button class='btn'>".$row["Low"]."</button>"."</br>".

"<label>Medium Rates</label>"."<button class='btn'>".$row["Medium"]."</button>"."</br>".

"<label>High Rates:</label>"."<button class='btn'>".$row["High"]."</button>"."</br>".


"</div>".


"</div>"; /*End of row div*/

}
}









else{

echo "O results";
}


?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
</head>
<body>
</div>


</body>
</html>
