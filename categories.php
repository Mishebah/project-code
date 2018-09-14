<?php    
function fetch_category(){  
    $con = mysqli_connect('localhost','root','','collardb');
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }

    mysqli_select_db($con,"EPS4");
    $sql="SELECT * FROM EventCompanies";
    $result = mysqli_query($con,$sql);


    while($row = mysqli_fetch_array($result)) {
                  ?>

                        <table>
                            <tbody>
                                <tr style="text-align: left;">
                                    <th style="font-size: 13px;color: blueviolet;">
                                        <a href="" style="font-size: 13px;color: blueviolet;text-decoration: none;"><?php echo $row['ComapnyName'] ?></a>&nbsp;&nbsp;&nbsp;
                                        <a href="user.php?cat=<?php echo $row['Email'] ?>" style="font-size: 13px;color: blueviolet;text-decoration: none;"><?php echo $row['name'] ?></a>&nbsp;&nbsp;&nbsp;
                                        <a href="" style="font-size: 13px;color: blueviolet;text-decoration: none;"><?php echo $row['phone'] ?></a>
                                        <?php echo $row['HeadOffice'] ?>&nbsp;&nbsp;
                                        <?php echo $row['Services'] ?>&nbsp;&nbsp;
                                        <?php echo $row['residence'] ?><br/>

                                        <font style="color: #555;font-size: 17px;font-family: Helvetica;"><?php echo $row['job-description'] ?></font></th>
                                </tr>
                            </tbody>
                        </table>
                <?php
    }

    mysqli_close($con);

}

include 'db.php';
if($result = $con->query("SELECT Service FROM `EventsCompanies`")){
    if($result->num_rows){
}else{
        die($con->error);
  }
}              
 while($row = $result->fetch_assoc()){
?>
    <table class="table-profile">
    <tbody>
        <tr><th><a href="fetch-categories.php?prof=<?php echo $row['Services'] ?>" style="font-family: Verdana;"><?php echo $row['category'] ?>&nbsp;[<?php echo $row['counter'] ?>]</a></th><tr>                     
    </tbody>
    </table>
 <?php
}

?>
<button>Fetch</button>
<button style="border: none;background: #FFFFFF;cursor: pointer;" onclick="showUser();"><a href="" style="font-size: 14px;font-family: Verdana;color: #1a9bcb;font-weight: bold;text-decoration: none;">Fetch all</a></button>