<?php
    session_start();
    if(($_SESSION['type']!='admin')){
		header('Location: ../failed.html');
    }
?>



<html>
<title>Add User</title>
<head>
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
				color:#FF5F6D;
			}
		
			#enter:active {
				border: none;
				color: rgba(255, 255, 255, 1);
				background-color:#FF5F6D;
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
		  width: 150px;
		  height: 18px;
		  padding: 6px 20px;
		  border: none;
		  -webkit-border-radius: 60px / 54px;
		  border-radius: 60px / 54px;
		  font: normal 18px/normal "Coda", Helvetica, sans-serif;
		  color: rgba(223, 45,1,1);
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
		  background: rgba(223, 45,1,1);
		}
		
		input:focus {
			margin :2px;
		  width: 136px;
		  -webkit-border-radius: 32px / 54px;
		  border-radius: 32px / 54px;
		  color: rgba(223, 45, 1,1);
		  background: rgba(255,253,232,1);
		  text-align: center;
		  text-shadow: 2px 2px 2px rgba(0,0,0,0.5) , 1px 1px 0 rgba(255,255,255,0.66) ;
		}
		
		h1{
			color: white;
    		text-shadow: 1px 1px 2px black, 0 0 25px rgb(255, 0, 0), 0 0 5px rgb(223, 45, 1);
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
.view table{
				position: relative;
    			bottom: 0;
    			left: -400;
    			width: 300px; 
				border: 1px;
				border-color: white;
			}
			th, td {
				text-align: left;
				width:20%;
				height:9%
				border: 1px;
				border-color: white;
}
</style>
<body>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#" onclick="window.location.href='acreate.php'">Add User</a>
  <a href="#" onclick="window.location.href='aview.php'">View All Users</a>
  <a href="#" onclick="window.location.href='aprofile.php?uid=<?php echo $_SESSION['uid']?>'">Profile</a>
  <a href="#" onclick="window.location.href='../m/mmenu.php'">Manager Menu</a>
  <a href="#"  onclick="window.location.href='../l/lmenu.php'">Lecturer Menu</a>
  <a href="#" onclick="window.location.href='../../login/logout.php'">Log out</a>
</div>
<span style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776;Menu</span>

<h1>Add User</h1>
<form action="adduser.php" onsubmit='return formValidator()' method="post">
<table width="700">	
		<tr>
			<td colspan = "3" ><b>User Id</b><br><input id="" type="text" name="uid"></td>
		</tr>
		<tr>	
			<td colspan ='2'><b>Username</b><br><input id="box" type="text" name="uname"></td>
			<td><b>Password</b><br><input id="box" type="text" name="pass"></td>
		<tr>
			<td colspan = '2'><b>Name<br></b><input id="box" type="text" name="name"></td>
			<td><b>IC</b><br><input id="box" type="text" name="ic"></td>
		</tr>
		<tr><br><td colspan 3><br></td></tr>
		<tr>
			<td><b>Gender</b>
				<SELECT class = "box" name="gender" >
				<option value = "Male">Male
				<option value = "Female">Female</select></td>
			<td><b>Religion</b>
				<SELECT class = "box" name="religion" >
				<option value = "Islam" >Islam
				<option value = "Hindu" >Hindu
				<option value = "Buddha">Buddha
				<option value = "Christian">Christian
				<option value = "Others">Others</select></td>
			<TD><b>Race</b>
				<SELECT class = "box" name="race" >
				<option value = "Malay" >Malay
				<option value = "Chinese" >Indian
				<option value = "Indian">Chinese
				<option value = "Others">Others</select></TD>
		</tr>
		<tr><br><td colspan 3><br></td></tr>
		<tr>
			<td colspan ='2'><b>Email</b><br><input id="box" type="email" name="email"></td>
			<td><b>Phone</b><br><input id="box" type="tel" name="phone"></td>
		</tr>
		
		<tr>
			<td colspan='3'><b>Address</b><br><textarea name="addr" cols="30" rows="6"></textarea></td>
		<tr>
			<tr><br><td colspan 3><br></td></tr>
		<td colspan = "2"><b>Department</b><br>
		<SELECT class = "box" name="dept" >
			<option value = "ICT" >ICT
			<option value = "Software Engineering" >Software Engineering
			<option value = "Network and Security">Network and Security
			<option value = "Graphic and Multimedia">Graphic & Multimedia</select></td>

		<td><b>Type</b>
		<br>
		<select name="type" id="box">
			<option value="admin">Admin</option>
			<option value="manager">Manager</option>
			<option value="lecturer">Lecturer</option>
		</select></td></tr>
			<tr><br><td colspan 3><br></td></tr>
		<tr>
		<td><input id="enter" type="submit" value="Submit Form"></td>
		<td><input id="enter" type="reset" value="Clear Form"></td>
	</form>
<table>

<script type="text/javascript">
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
		var type = document.getElementsByName('type')[0].value;

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

		function isAlphabet(elem1) {
			var alphaExp = /^[a-zA-Z]+$/;
			if (elem1 == "") {
				alert("Please Enter Name");
				return false;
			}

			else if (elem1.match(alphaExp)) {
				return true;
			}
			else {
				alert("Please Enter Valid Name");
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
		if (isAlphabet(name)) {
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

function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

</script>
</body>

</html>