<?php
    session_start();
    if(($_SESSION['type']!='admin')){
		header('Location: ../failed.html');
    }
?>

<html>
	<title>Admin Menu</title>
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
					margin: 20 auto;
					border: none;
					-webkit-border-radius: 61px;
					border-radius: 61px;
					color: rgba(255, 255, 255, 1);
					text-align: center;
					-o-text-overflow: clip;
					text-overflow: clip;
					letter-spacing: 1px;
					background-color: #d80303;
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
					text-align: center;
					background: rgba(255, 255, 255, 1);
					-webkit-box-shadow: none;
					box-shadow: none;
					margin: 20 auto;
					color:#d80303
				}
			
				#enter:active {
					border: none;
					color: rgba(255, 255, 255, 1);
					text-align: center;
					-webkit-box-shadow: 3px 3px 4px 0 rgba(0, 0, 0, 0.4);
					box-shadow: 3px 3px 4px 0 rgba(0, 0, 0, 0.4);
					-webkit-transition: none;
					-moz-transition: none;
					-o-transition: none;
					transition: none;
					margin: 20 auto;
			
				}
			
				input {
				margin :2px;
			  display: inline-block;
			  -webkit-box-sizing: content-box;
			  -moz-box-sizing: content-box;
			  box-sizing: content-box;
			  width: 140px;
			  height: 18px;
			  padding: 6px 20px;
			  border: none;
			  -webkit-border-radius: 60px / 54px;
			  border-radius: 60px / 54px;
			  font: normal 18px/normal "Coda", Helvetica, sans-serif;
			  color: rgba(223, 45, 1,1);
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
			  width: 144px;
			  -webkit-border-radius: 19px / 54px;
			  border-radius: 19px / 54px;
			  text-align: center;
			  background: rgba(232,249,255,1);
			}
			
			input:focus {
				margin :2px;
			  width: 140px;
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
				table,tr,th{
				text-align: center;
				padding: 10px;

				
			}
			table{
				position: relative;
    			bottom: 0;
    			left: -400;	
    			width: 300px; 
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
</style>
	</head>
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
			<?php
			require("../config.php");
			
			if(isset($_POST["name"]) || isset($_POST["sort"]) || isset($_POST["all"])){
			   
				if(isset($_POST["name"])){
					$sql = " SELECT * from user
					where user.name like '%$_POST[name]%'";
				}
				else if(isset($_POST["sort"])=='sort'){
					$sql="SELECT * from user order by type";}

				else if(isset($_POST["all"])=='all'){
						$sql="SELECT * from user";}
            
				$result = mysql_query($sql);
				$once=true;
				if ($result) {
					while($row = mysql_fetch_array($result)) {
						if($once)
						{
							echo "<table><tr><th>User Id</th><th>Username</th><th>Password</th><th>Name</th>
								<th>IC</th><th>Gender</th><th>Religion</th><th>Race</th>
								<th>Email</th><th>Phone</th><th>Address</th><th>Dept</th><th>Type</th><th>Opt</th></tr>";
							$once=false;
						}
						echo "<tr><td>".$row['uid']."</td><td>".$row['uname']."</td><td>".$row['pass']."</td>
							<td>".$row['name']."</td><td>".$row['ic']."</td><td>".$row['gender']."</td>
							<td>".$row['religion']."</td><td>".$row['race']."</td><td>".$row['email']."</td>
							<td>".$row['phone']."</td><td>".$row['addr']."</td><td>".$row['dept']."</td>
							<td>".$row['type']."</td><td><button id=\"enter\" onclick='window.location.href=\"adelete.php?uid=$row[uid]\"'>Delete</button></td>
							<td><button id=\"enter\" onclick='window.location.href=\"aupdatemenu.php?uid=$row[uid]\"'>Update</button></td><td></td></tr>";
					}
					if(!$once)
					echo "</table>";
				}
				else {
					echo "0 results";
				}
				}
				mysql_close($con);
			 ?>
		<h1>View User</h1>
		<form action="<?php $_PHP_SELF ?>" method="POST">
			<input type="text" required name="name" id="box">
			<input id="box" type="submit" value="Search by name">
			</form>
			
			<form action="<?php $_PHP_SELF ?>" method="POST">
			<input style="visibility:hidden" hidden type="text" name="sort" id="box" value="sort">
			<br>
			<input id="box" type="submit" value="Sort User Type">
		</form>
		<form action="<?php $_PHP_SELF ?>" method="POST">
				<input hidden type="text" style="visibility:hidden" name="all" id="box" value="all">
				<br>
				<input id="box" type="submit" value="View all">
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