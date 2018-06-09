<?php 
require("../config.php");


if(isset($_GET["bookedHour"]) && isset($_GET["bookedDate"]) && isset($_GET["roomId"])){

$sql= "SELECT * from booking where (bookedHour = '$_GET[bookedHour]' AND bookedDate = '$_GET[bookedDate]' AND roomId = '$_GET[roomId]')";
$result=mysql_query($sql);
$got=false;
while($row = mysql_fetch_array($result)) {
	$got=true;
}

if ($got == true) {
	echo "free";
 }
 else
	echo "booked";
}
mysql_close($con);


?>











