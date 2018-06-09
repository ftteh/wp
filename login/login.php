<?php 

require("../config.php");

$correct=false;
if(isset($_POST["uname"]) && isset($_POST["pass"])){

    $sql= "SELECT * from user where uname='$_POST[uname]' and pass='$_POST[pass]'";

    $result=mysql_query($sql);
    while($row = mysql_fetch_array($result)){
        $correct=true;
        $uinfo=[$row['uid'],$row['type']];
            
        $uinfo=array(
            'type'=>$row['type'],
            'uid'=>$row['uid']
        );
    }
    if($correct){
        session_start();
  
        $_SESSION["type"]=$uinfo['type'];
        $_SESSION["uid"]=$uinfo['uid'];


        if($_SESSION['type']=='admin'){
            header('Location: ../a/amenu.php');
        }
        else if($_SESSION['type']=='manager'){
            header('Location: ../m/mmenu.php');
        }
        else if($_SESSION['type']=='lecturer'){
            header('Location: ../l/lmenu.php');
        }

    }
}
if(!$correct)
{
    echo "Incorrect credential";
}

mysql_close($con);
?>











