<?php
include("header.php");
echo "<center><h3>Welcome to the Event Planning Portal</h3></center>";

?>
<body ng-app="">

<label style="color:red" ><h3>What type of event are you planning?:</h3></label></br> 


<form class="form-group" action="results.php" method="post">


<input  type="radio" name="radio" value="Wedding"/><label>Wedding</label>




<input type="radio" name="radio" value="Concert"/><label>Concert Event</label>



<input  type="radio" name="radio" value="Product"/><label>Product Launch Event</label>


<div class="form-group">
<div class="col-sm-offset-2 col-sm-1">

<button class="btn btn-default" type="submit" name="submit">Submit</button>

</div>
</div>
 
 
 
</form>

