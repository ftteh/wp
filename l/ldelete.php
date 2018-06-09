
<?php 
require("../config.php");

$bid=$_GET['bid'];
// The SQL statement that deletes the record
$sql = "DELETE FROM booking where bid='$bid'";
$result=mysql_query($sql);


if ($result> 0) {
	echo "Your booking is deleted";
 }
 else
	echo "Failed to delete";

mysql_close($con);

?>






