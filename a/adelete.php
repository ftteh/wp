<?php 
require("../config.php");

$uid=$_GET['uid'];
// The SQL statement that deletes the record
$sql = "DELETE FROM user where uid='$uid'";
$result=mysql_query($sql);


if ($result> 0) {
	echo "The selected user is deleted";
 }
 else
	echo "Failed to delete";

mysql_close($con);

?>






