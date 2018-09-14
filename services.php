<?php


include("auth.php"); //include auth.php file on all secure pages
require('header.php');
include("db.php");

echo "<h4 class='pull-right'>"."Welcome:"."<b>".$_SESSION['username']."</b>"."</h4>"; 

?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
</head>
<body>


<form class="form-horizontal" action="insertservices.php" method="post">  
<input class="form-control" type="text" name="ServiceName" />
<button class="btn btn-default" type="submit">Submit</button>

</form>

</body>
</html>




