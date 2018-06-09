<?php

require("../config.php");


$bookedDate=$_POST["bookedDate"];
$bid=$_POST['bid'];
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

$old="SELECT * FROM booking where bid='$bid'";
$oldresult=mysql_query($old);
while($row=mysql_fetch_array($oldresult)){
    if($row['t1']=="booked" && $t1=="free"){$bt1="free";}
    if($row['t2']=="booked" && $t2=="free"){$bt2="free";}
    if($row['t3']=="booked" && $t3=="free"){$bt3="free";}
    if($row['t4']=="booked" && $t4=="free"){$bt4="free";}
    if($row['t5']=="booked" && $t5=="free"){$bt5="free";}
}

$sql = "UPDATE booking SET t1='$t1',t2='$t2',t3='$t3',t4='$t4',t5='$t5' where bid = $bid";
$result = mysql_query($sql);

$sql2 = "UPDATE bookingslot SET t1='$bt1',t2='$bt2'
    ,t3='$bt3',t4='$bt4',t5='$bt5' where date = '$bookedDate'";

$result2 = mysql_query($sql2);

if ($result> 0 && $result2 >0) {
   echo "Your booking is updated for reviewed";
}
else
   echo "Failed to save";
mysql_close($con);
?>




