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

$result = mysql_query("
INSERT INTO `user` (`uid`, `uname`, `pass`, `name`, `ic`, `gender`, `religion`, `race`, `email`, `phone`, `addr`, `dept`,`type`) VALUES 
('$uid','$uname','$pass','$name','$ic','$gender','$religion','$race','$email','$phone','$addr','$dept','$type');");

if ($result> 0) {
   echo "The user is added";
}
else
   echo "Failed to add the user";

mysql_close($con);
?>




