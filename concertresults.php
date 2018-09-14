<?php

require('header.php');
require('db.php');


$sql="SELECT * FROM EventsCompanies INNER JOIN CompanyServices ON EventsCompanies.Email = CompanyServices.EmailAddress WHERE ServiceName='Concert'";


$result=mysqli_query($con,$sql);

if($result)
{


echo "<table><caption><b>Top Suppliers</caption></b></br><tr><th>NO</th><th>Company Name</th><th>Head Office</th><th>Services</th><th>Email Address</th></tr>";

//Output data of each row

while($row=mysqli_fetch_assoc($result))
{


"<tr><td>".$row["CompanyID"]."</td><td>".
$row["CompanyName"]."</td><td>".

$row["HeadOffice"]."</td><td>".

$row["ServiceName"]."</td><td>".



$row["Email"]."</td></tr>";

}

echo "</table>";
}

else{

echo "O results";

}

