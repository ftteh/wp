<?php
    session_start();
    if(($_SESSION['type']!='admin') && ($_SESSION['type']!='manager')){
        header('Location: ../failed.html');
    }
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <style>
            body {
                text-align: center;
                align: center;
                width:50%;
				margin: 0em auto;
                background: #EECDA3;  /* fallback for old browsers */
                background: -webkit-linear-gradient(to right, #EF629F, #EECDA3);  /* Chrome 10-25, Safari 5.1-6 */
                background: linear-gradient(to right, #EF629F, #EECDA3); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                color: white;
                text-shadow: 2px 2px 4px #000000;

            }
            #enter {
                -webkit-box-sizing: content-box;
                -moz-box-sizing: content-box;
                box-sizing: content-box;
                width: 200px;
                height: 30px;
                cursor: pointer;
                margin: 15 auto;
                border: none;
                -webkit-border-radius: 61px;
                border-radius: 61px;
                color: rgba(255, 255, 255, 1);
                text-align: center;
                -o-text-overflow: clip;
                text-overflow: clip;
                letter-spacing: 1px;
                background-color: rgb(255, 0, 170);
                -webkit-box-shadow: 3px 3px 4px 0 rgba(0, 0, 0, 0.4);
                box-shadow: 3px 3px 4px 0 rgba(0, 0, 0, 0.4);
                text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.5);
                -webkit-transition: background-color 0.3s cubic-bezier(0, 0, 0, 0), color 0.3s cubic-bezier(0, 0, 0, 0), width 0.3s cubic-bezier(0, 0, 0, 0), border-width 0.3s cubic-bezier(0, 0, 0, 0), border-color 0.3s cubic-bezier(0, 0, 0, 0);
                -moz-transition: background-color 0.3s cubic-bezier(0, 0, 0, 0), color 0.3s cubic-bezier(0, 0, 0, 0), width 0.3s cubic-bezier(0, 0, 0, 0), border-width 0.3s cubic-bezier(0, 0, 0, 0), border-color 0.3s cubic-bezier(0, 0, 0, 0);
                -o-transition: background-color 0.3s cubic-bezier(0, 0, 0, 0), color 0.3s cubic-bezier(0, 0, 0, 0), width 0.3s cubic-bezier(0, 0, 0, 0), border-width 0.3s cubic-bezier(0, 0, 0, 0), border-color 0.3s cubic-bezier(0, 0, 0, 0);
                transition: background-color 0.3s cubic-bezier(0, 0, 0, 0), color 0.3s cubic-bezier(0, 0, 0, 0), width 0.3s cubic-bezier(0, 0, 0, 0), border-width 0.3s cubic-bezier(0, 0, 0, 0), border-color 0.3s cubic-bezier(0, 0, 0, 0);
            }

            #enter:hover {
                border: 2px solid rgba(255, 255, 255, 1);
                -webkit-border-radius: 40px;
                border-radius: 40px;
                background-color: rgb(255, 0, 170);
                background: rgba(255, 255, 255, 1);
                -webkit-box-shadow: none;
                box-shadow: none;
                color:rgb(255, 0, 170);
            }

            #enter:active {
                border: none;
                color: rgba(255, 255, 255, 1);
                background-color:rgb(255, 0, 170);
                -webkit-box-shadow: 3px 3px 4px 0 rgba(0, 0, 0, 0.4);
                box-shadow: 3px 3px 4px 0 rgba(0, 0, 0, 0.4);
                -webkit-transition: none;
                -moz-transition: none;
                -o-transition: none;
                transition: none;
            }
            input {
            margin :2px;
            display: inline-block;
            -webkit-box-sizing: content-box;
            -moz-box-sizing: content-box;
            box-sizing: content-box;
            width: 136px;
            height: 18px;
            padding: 6px 20px;
            border: none;
            -webkit-border-radius: 60px / 54px;
            border-radius: 60px / 54px;
            font: normal 18px/normal "Coda", Helvetica, sans-serif;
            color: rgb(255, 75, 201);
            -o-text-overflow: ellipsis;
            text-overflow: ellipsis;
            background: rgba(252,252,252,1);
            -webkit-box-shadow: 3px 3px 4px 0 rgba(0,0,0,0.4) ;
            box-shadow: 3px 3px 4px 0 rgba(0,0,0,0.4) ;
            text-shadow: 2px 2px 2px rgba(0,0,0,0.5) ;
            -webkit-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
            -moz-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
            -o-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
            transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
            text-align: center;
            }

            input:hover {
            margin :2px;
            float: none;
            width: 140px;
            -webkit-border-radius: 19px / 54px;
            border-radius: 19px / 54px;
            text-align: center;
            background: rgb(255, 75, 201);
            }

            input:focus {
            margin :2px;
            width: 136px;
            -webkit-border-radius: 32px / 54px;
            border-radius: 32px / 54px;
            color: rgb(255, 75, 201);
            background: rgba(255,253,232,1);
            text-align: center;
            text-shadow: 2px 2px 2px rgba(0,0,0,0.5) , 1px 1px 0 rgba(255,255,255,0.66) ;
            }

            h1{
            color: white;
            text-shadow: 1px 1px 2px black, 0 0 25px rgba(255, 0, 98, 0.788), 0 0 5px rgb(255, 75, 201);
            }

            /* nav bar */
            .sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

table{
	position:center;
	margin: 0em auto;
	border-color:transparent;
}
            </style>

</head>

<body>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a onclick="window.location.href='mview.php'">View Application</a>
  <a  onclick="window.location.href='mprofile.php?uid=<?php echo $_SESSION['uid']?>'">Profile</a>
  <a  onclick="window.location.href='../login/logout.php'">Log out</a>
</div>
<span style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776;Menu</span>
        <?php
		require("../config.php");
			$user=array(
				"uid"=>"",
				"uname"=>"",
				"pass"=>"",
				"name"=>"",
				"ic"=>"",
				"gender"=>"",
				"religion"=>"",
				"race"=>"",
				"email"=>"",
				"phone"=>"",
				"addr"=>"",
				"dept"=>"",
				"type"=>""
			);
				$sql = "SELECT * FROM user where uid='$_GET[uid]'";
				$result = mysql_query($sql);
				while($row = mysql_fetch_array($result))
					{
                        $user=array(
                                "uid"=>$row['uid'],
                                "uname"=>$row['uname'],
                                "pass"=>$row['pass'],
                                "name"=>$row['name'],
                                "ic"=>$row['ic'],
                                "gender"=>$row['gender'],
                                "religion"=>$row['religion'],
                                "race"=>$row['race'],
                                "email"=>$row['email'],
                                "phone"=>$row['phone'],
                                "addr"=>$row['addr'],
                                "dept"=>$row['dept'],
                                "type"=>$row['type']
                        );
					}




if(isset($_POST["uname"]) && isset($_POST["pass"]) && isset($_POST["name"])
&& isset($_POST["ic"]) && isset($_POST["gender"]) && isset($_POST["religion"]) && isset($_POST["race"])
&& isset($_POST["email"]) && isset($_POST["phone"]) && isset($_POST["addr"]) && isset($_POST["dept"])){

$sql2 = "UPDATE user SET uname='$_POST[uname]',pass='$_POST[pass]'
        ,name='$_POST[name]',ic='$_POST[ic]',gender='$_POST[gender]'
        ,religion='$_POST[religion]',race='$_POST[race]'
        ,email='$_POST[email]',phone='$_POST[phone]'
        ,addr='$_POST[addr]',dept='$_POST[dept]' where uid = $_POST[uid]";

$result2 = mysql_query($sql2);
if ($result2> 0) {
   echo "Your profile is updated";
}
else
   echo "Failed to update";
}
				//echo print_r($user);
mysql_close($con);
?>
    <div style="padding-top: 10%">
        <form action="<?php $_PHP_SELF ?>" method="POST">
        <h1>My profile</h1>
        <table border="1">
            <tr>
                <td align="center">User Id</td>
                <td align="center"><input type="text" disabled value="<?php echo $user["uid"]?>" ></td>
                <input type="text"   style="visibility:hidden" hidden name="uid" value="<?php echo $user["uid"]?>" >
                <td align="center">Username</td>
                <td align="center"><input type="text"   name="uname" value="<?php echo $user["uname"]?>" ></td>
            </tr>
            <tr>
                <td align="center">Password</td>
                <td align="center"><input type="text"   name="pass" value="<?php echo $user["pass"]?>" ></td>
                <td align="center">Name</td>
                <td align="center"><input type="text"   name="name" value="<?php echo $user["name"]?>" ></td>
            </tr>
            <tr>
                <td align="center">IC</td>
                <td align="center"><input type="text"   name="ic" value="<?php echo $user["ic"]?>" ></td>
                <td align="center">Gender</td>
                <td align="center"><input type="text"   name="gender" value="<?php echo $user["gender"]?>" ></td>
            </tr>
            <tr>
                <td align="center">Religion</td>
                <td align="center"><input type="text"   name="religion" value="<?php echo $user["religion"]?>" ></td>
                <td align="center">Race</td>
                <td align="center"><input type="text"   name="race" value="<?php echo $user["race"]?>" ></td>
            </tr>
            <tr>
                <td align="center">Email</td>
                <td align="center"><input type="text"   name="email" value="<?php echo $user["email"]?>" ></td>
                <td align="center">Phone</td>
                <td align="center"><input type="text"   name="phone" value="<?php echo $user["phone"]?>" ></td>
      		</tr>
            <tr>
                <td align="center">Department</td>
                <td align="center"><input type="text"   name="dept" value="<?php echo $user["dept"]?>" ></td>
                <td align="center">Address</td>
                <td align="center"><textarea cols="40" row="25" name="addr" column><?php echo $user["addr"]?>
                </textarea></td>
            </tr>
            <tr>
            	<td align="center" colspan="4"><input id="button" type="Submit" value="Submit"></td>
        	</tr>
        </table>
</form>

    </div>
    <script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
</body>

</html>