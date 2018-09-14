<?php

require('header.php');
require('db.php');

if(isset($_POST['submit']))
{

if($_POST['radio']=='Wedding')

{

header("Location: weddingresults.php");


}

if($_POST['radio']=='Concert')

{

header("Location: concertresults.php");


}


}mysqli_close($con);




?>