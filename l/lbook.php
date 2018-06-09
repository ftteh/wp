<?php

require("../config.php");

$bookerId=$_POST["bookerId"];
$bookedDate=$_POST["bookedDate"];
$status=$_POST["status"];
$roomId=$_POST["roomId"];



//for updating the booking
if(isset($_POST['t1']) && $_POST['t1']=="ubooked"){$t1="booked";}else{$t1="free";}
if(isset($_POST['t2']) && $_POST['t2']=="ubooked"){$t2="booked";}else{$t2="free";}
if(isset($_POST['t3']) && $_POST['t3']=="ubooked"){$t3="booked";}else{$t3="free";}
if(isset($_POST['t4']) && $_POST['t4']=="ubooked"){$t4="booked";}else{$t4="free";}
if(isset($_POST['t5']) && $_POST['t5']=="ubooked"){$t5="booked";}else{$t5="free";}

//for updating the bookingslot
if(isset($_POST['t1'])){$bt1="booked";}else{$bt1="free";}
if(isset($_POST['t2'])){$bt2="booked";}else{$bt2="free";}
if(isset($_POST['t3'])){$bt3="booked";}else{$bt3="free";}
if(isset($_POST['t4'])){$bt4="booked";}else{$bt4="free";}
if(isset($_POST['t5'])){$bt5="booked";}else{$bt5="free";}



$result = mysql_query("INSERT INTO `booking` (`bid`, `bookerId`, `bookedDate`, `status`, `roomId`,`t1`,`t2`,`t3`,`t4`,`t5`) 
    VALUES ('','$bookerId','$bookedDate','$status','$roomId','$t1','$t2','$t3','$t4','$t5');");

$got=false;
$sql = "SELECT * FROM bookingslot where date='$bookedDate'";
$result = mysql_query($sql);
while($row = mysql_fetch_array($result)){
    $got=true;
}
if($got){
    $sql2 = "UPDATE bookingslot SET t1='$bt1',t2='$bt2'
    ,t3='$bt3',t4='$bt4',t5='$bt5' where date = '$bookedDate'";

    $result2 = mysql_query($sql2);
}
else{
    $result2 = mysql_query("INSERT INTO `bookingslot` (`date`, `rid`,`t1`,`t2`,`t3`,`t4`,`t5`) 
    VALUES ('$bookedDate','$roomId','$bt1','$bt2','$bt3','$bt4','$bt5');");
}
if ($result> 0 && $result2 >0) {
   echo "Your booking is saved for reviewed";
}
else
   echo "Failed to insert";

mysql_close($con);
?>




