<?php
require("../config.php"); 

$uid=$_POST['uid'];
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$name=$_POST['name'];
$ic=$_POST['ic'];
$gender=$_POST['gender'];
$religion=$_POST['religion'];
$race=$_POST['race'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$addr=$_POST['addr'];
$dept=$_POST['dept'];
$type=$_POST['type'];

// echo print_r($_POST);
$sql = "UPDATE user SET uname='$uname',pass='$pass',name='$name',ic='$ic',gender='$gender',religion='$religion',
race='$race',email='$email',phone='$phone',addr='$addr',dept='$dept'
,type='$type' where uid = $uid";

$result = mysql_query($sql);
if ($result> 0) {
   echo "Selected profile is updated";
}
else
   echo "Failed to update";

mysql_close($con);
?>