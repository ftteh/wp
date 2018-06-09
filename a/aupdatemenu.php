<?php
    session_start();
    if(($_SESSION['type']!='admin')){
		header('Location: ../failed.html');
    }
?>
<style type="text/css">
	body {
		text-align: center;
		align: center;
		border-radius: 20%;
		width: 35%;
		height: 98%;
		margin: 3em auto;
		background: #FF5F6D;  /* fallback for old browsers */
		background: -webkit-linear-gradient(to right, #FFC371, #FF5F6D);  /* Chrome 10-25, Safari 5.1-6 */
		background: linear-gradient(to right, #FFC371, #FF5F6D); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
		color:white;
		color: white;
    	text-shadow: 2px 2px 4px #000000;

	}
	#enter {
		-webkit-box-sizing: content-box;
		-moz-box-sizing: content-box;
		box-sizing: content-box;
		width: 100px;
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
		background-color: #FF5F6D;
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
		background-color: #FF5F6D;
		background: rgba(255, 255, 255, 1);
		-webkit-box-shadow: none;
		box-shadow: none;
		color: #FF5F6D;
	}

	#enter:active {
		border: none;
		color: rgba(255, 255, 255, 1);
		background-color: #FF5F6D;
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
  color: rgb(243, 45, 0);
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
  background: rgba(232,249,255,1);
  color: rgb(243, 45, 0);
}

input:focus {
	margin :2px;
  width: 136px;
  -webkit-border-radius: 32px / 54px;
  border-radius: 32px / 54px;
  color: rgba(243,42,0,1);
  background: rgba(255,253,232,1);
  text-align: center;
  text-shadow: 2px 2px 2px rgba(0,0,0,0.5) , 1px 1px 0 rgba(255,255,255,0.66) ;
}


	/* input {
		background: transparent;
		border: 1px solid #ffffff;
		border-radius: 10px;
		text-align: center;
		color:white
	} */
	h1{
		color: white;
    text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
	}


/* for nav bar */
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
	margin: 1em auto;
}
</style>
<html>
<title>Teacher Application Form</title>

<head>

</head>
<br>

<body>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#" onclick="window.location.href='acreate.php'">Add User</a>
  <a href="#" onclick="window.location.href='aview.php'">View All Users</a>
  <a href="#" onclick="window.location.href='aprofile.php?uid=<?php echo $_SESSION['uid']?>'">Profile</a>
  <a href="#" onclick="window.location.href='../m/mmenu.php'">Manager Menu</a>
  <a href="#"  onclick="window.location.href='../l/lmenu.php'">Lecturer Menu</a>
  <a href="#" onclick="window.location.href='../login/logout.php'">Log out</a>
</div>
<span style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776;Menu</span>
	<script>

		function formValidator() {

			var username = document.getElementsByName('uname')[0].value;;
			var name = document.getElementsByName('name')[0].value;
			var password = document.getElementsByName('pass')[0].value;
			var userid = document.getElementsByName('uid')[0].value;
			var ic = document.getElementsByName('ic')[0].value;
			var gender = document.getElementsByName('gender')[0].value;
			var religion = document.getElementsByName('religion')[0].value;
			var race = document.getElementsByName('race')[0].value;
			var email = document.getElementsByName('email')[0].value;
			var phone = document.getElementsByName('phone')[0].value;
			var dept = document.getElementsByName('dept')[0].value;

			function emailValidator(elem) {
				var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

				if (re.test(String(email).toLowerCase()))
					return true;
				else {
					alert("please enter valid email");
					return false;
				}
			}

			function phoneRestriction(elem, min) {
				var uInput = elem;

				if (uInput.length == min) {
					return true;
				} else {
					alert("Please Enter 10 Digit Number For Phone Number. Example: 0126128332");
					return false;
				}
			}
			function icRestriction(elem, min) {
				var uInput = elem;

				if (uInput.length == min) {
					return true;
				} else {
					alert("Please Enter 12 Digit Number For IC Number. Example: 960311145273");
					return false;
				}
			}

			function userNameRestriction(elem, min) {
				var uInput = elem;
				if (uInput == "") {
					alert("Please Enter Username");
					return false;
				}
				if (uInput.length >= min) {
					return true;
				} else {
					alert("Please Enter Minimum 4 Characters For Username ");
					return false;
				}
			}

			function isAlphabet(elem1, elem2, elem3, elem4, elem5) {
				var alphaExp = /^[a-zA-Z]+$/;
				if (elem1 == "" || elem2 == "" || elem3 == "" || elem4 == "" || elem5 == "") {
					alert("Please Enter Name, Gender, Religion, Race and Department");
					return false;
				}

				else if (elem1.match(alphaExp) && elem2.match(alphaExp) && elem3.match(alphaExp) && elem4.match(alphaExp) && elem5.match(alphaExp)) {
					return true;
				}
				else {
					alert("Please Enter Valid Name, Gender, Religion, Race and Department");
					return false;
				}
			}
			function isEmpty(elem1, elem2) {
				if (elem1 == "") {
					alert("Please Enter User Id");
					return false;
				}
				else if (elem2 == "") {
					alert("Please Enter Password");
					return false;
				}
				else { return true; }
			}

			if (isAlphabet(name, gender, religion, race, dept)) {
				if (userNameRestriction(username, 4)) {
					if (isEmpty(userid, password)) {
						if (emailValidator(email)) {
							if (phoneRestriction(phone, 10)) {
								if (icRestriction(ic, 12)) {

									return true;
								}
							}
						}
					}
				}
			}

			return false;

		}
	</script>

	<h1>Update Application</h1>
		<?php
		require("../config.php");
			$uinfo=array(
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
				if(isset($_GET["uid"])){
				$sql = "SELECT * FROM user where uid='$_GET[uid]'";
				$result = mysql_query($sql);
				while($row = mysql_fetch_array($result))
					{
						$uinfo=array(
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
				}
		?>
		<form action="aupdate.php" onsubmit="return formValidator()" method="post">
					<table border="1">
					<tr>
						<td align="center"><b>User Id</b></td>
						<td align="center"><input id="box" type="text" name="uid" value="<?php echo $uinfo["uid"]?>"></td>
						<td align="center"><b>Username</b></td>
						<td align="center"><input id="box" type="text" name="uname" value="<?php echo $uinfo["uname"]?>"></td>
					</tr>
					<tr>
						<td align="center"><b>Password</b></td>
						<td align="center"><input id="box" type="text" name="pass" value="<?php echo $uinfo["pass"]?>"></td>
						<td align="center"><b>Name</b></td>
						<td align="center"><input id="box" type="text" name="name" value="<?php echo $uinfo["name"]?>"></td>
					</tr>
					<tr>
						<td align="center"><b>IC</b></td>
						<td align="center"><input id="box" type="text" name="ic" value="<?php echo $uinfo["ic"]?>" ></td>
						<td align="center"><b>Gender</b></td>
						<td align="center"><input id="box" type="text" name="gender" value="<?php echo $uinfo["gender"]?>"></td>
					</tr>
					<tr>
						<td align="center"><b>Religion</b></td>
						<td align="center"><input id="box" type="text" name="religion" value="<?php echo $uinfo["religion"]?>"></td>
						<td align="center"><b>Race</b></td>
						<td align="center"><input id="box" type="text" name="race" value="<?php echo $uinfo["race"]?>"></td>
					</tr>
					<tr>
						<td align="center"><b>Email</b></td>
						<td align="center"><input id="box" type="email" name="email" value="<?php echo $uinfo["email"]?>"></td>
						<td align="center"><b>Phone</b></td>
						<td align="center"><input id="box" type="tel" name="phone" value="<?php echo $uinfo["phone"]?>"></td>
					</tr>
					<tr>
						<td align="center" colspan="4"><b>Address</b>
						<textarea name="addr" cols="30" rows="15" ><?php echo $uinfo["addr"]?></textarea></td>
					</tr>
					<tr>
						<td align="center" colspan="4"><b>Department</b>
						<input id="box" type="text" name="dept" value="<?php echo $uinfo["dept"]?>"></td>
					</tr>
					<tr>
						<td align="center" colspan="4"><b>Type</b>
						<?php
						echo '<select id="box" name="type">';

							if($uinfo['type']=="admin"){
								echo "<option selected value='admin'>Admin</option>";
								echo "<option value='manager'>Manager</option>";
								echo "<option value='lecturer'>Lecturer</option>";
							}
							else if($uinfo['type']=="manager"){
								echo "<option value='admin'>Admin</option>";
								echo "<option selected value='manager'>Manager</option>";
								echo "<option value='lecturer'>Lecturer</option>";
							}
							else if($uinfo['type']=="lecturer"){
								echo "<option value='admin'>Admin</option>";
								echo "<option value='manager'>Manager</option>";
								echo "<option selected value='lecturer'>Lecturer</option>";
							}
							echo '</select>';
							mysql_close($con);
						?>
						<br>
						<br>
						<input id="enter" type="submit" value="Submit Form">
						<input id="enter" type="reset" value="Clear Form"></td>
					</tr>
					</table>
				</form>
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