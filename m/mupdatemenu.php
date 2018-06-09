<?php
    session_start();
    if(($_SESSION['type']!='admin') && ($_SESSION['type']!='manager')){
        header('Location: ../failed.html');
    }
?>
<style>
		body {
			text-align: center;
			align: center;
			border-radius: 20%;
			width:50%;
			margin: 0em auto;
			background: #EECDA3;  /* fallback for old browsers */
			background: -webkit-linear-gradient(to right, #EF629F, #EECDA3);  /* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to right, #EF629F, #EECDA3); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
			color: white;
			text-shadow: 2px 2px 4px #000000;

		}

		table{
			margin: 0em auto;
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

				table,tr,th{
				text-align: center;
				padding: 10px;
			}
			table{
				position:center;
    			bottom: 0;
    			left: -200;
    			width: 300px;
    			border-color:transparent;
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

</style>
<html>
<title>Booking Update Form</title>

<head>

</head>
<br>

<body>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a onclick="window.location.href='mview.php'">View Application</a>
  <a  onclick="window.location.href='mprofile.php?uid=<?php echo $_SESSION['uid']?>'">Profile</a>
  <a  onclick="window.location.href='../login/logout.php'">Log out</a>
</div>
<span style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776;Menu</span>

	<h1>Update Application</h1>
		<?php
		require("../config.php");
			$roominfo=array(
				"rid"=>"",
				"level"=>"",
				"size"=>"",
				"aircon"=>"",
				"dept"=>"",
				"status"=>""
			);
			$bookingInfo=array(
				"bid"=>"",
				"bookerId"=>"",
				"bookedDate"=>"",
				"status"=>"",
				"roomId"=>"",
				"t1"=>"",
				"t2"=>"",
				"t3"=>"",
				"t4"=>"",
				"t5"=>"",
			);
				if(isset($_GET["rid"]) && isset($_GET["bid"])){
				$sql = "SELECT * FROM classroom where rid='$_GET[rid]'";
				$result = mysql_query($sql);
				while($row = mysql_fetch_array($result))
					{
						$roominfo=array(
							"rid"=>$row['rid'],
							"level"=>$row['level'],
							"size"=>$row['size'],
							"aircon"=>$row['aircon'],
							"dept"=>$row['dept'],
							"status"=>$row['status']
						);
					}
				//the booking chunk

				$sql2 = "SELECT * FROM booking where bid='$_GET[bid]'";
				$result2 = mysql_query($sql2);
				while($row2 = mysql_fetch_array($result2))
					{
						$bookingInfo=array(
							"bid"=>$row2['bid'],
							"bookerId"=>$row2['bookerId'],
							"bookedDate"=>$row2['bookedDate'],
							"status"=>$row2['status'],
							"roomId"=>$row2['roomId'],
							"t1"=>$row2['t1'],
							"t2"=>$row2['t2'],
							"t3"=>$row2['t3'],
							"t4"=>$row2['t4'],
							"t5"=>$row2['t5']
						);
					}
				}
				//echo print_r($roominfo);
				//echo print_r($bookingInfo);
		?>
		<form action="mupdate.php" onsubmit=" return formValidator()" method="post">

		<input type="text" style="visibility:hidden" name="bid" value="<?php echo $bookingInfo["bid"]?>" >
		<br>
		<table  border="1">
		<tr>
			<td align="center" colspan="4"><b>Booking ID</b>
			<input type="text" disabled value="<?php echo $bookingInfo["bid"]?>" ></td>
		</tr>
		<!-- room info start here -->
		<tr>
			<td align="center"><b>Room Id</b></td>
			<td align="center"><input id="box" type="text" disabled name="roomId" value="<?php echo $bookingInfo["roomId"]?>" ></td>
			<td align="center"><b>Level</b></td>
			<td align="center"><input id="box" type="text" name="level" disabled value="<?php echo $roominfo["level"]?>" ></td>
		</tr>
		<tr>
			<td align="center"><b>Size</b></td>
			<td align="center"><input id="box" type="text" name="size" disabled value="<?php echo $roominfo["size"]?>" ></td>
			<td align="center"><b>Aircon avaibility</b></td>
			<td align="center"><input id="box" type="text" name="aircon" disabled value="<?php echo $roominfo["aircon"]?>" ></td>
		</tr>
		<!-- booking start here -->
		<tr>
			<td align="center"><b>At Department</b></td>
			<td align="center"><input id="box" type="text" name="dept" disabled value="<?php echo $roominfo["dept"]?>" ></td>
			<td align="center"><b>Booking Date</b></td>
			<td align="center"><input id="box"  disabled  type="date" name="bookedDate" value="<?php echo $bookingInfo["bookedDate"]?>" ></td>
		</tr>

		<?php
				echo<<<EOT
				<table border>
				<tr >
					<td colspan="5" align="center">Available slots</td>
				</tr>
				<tr>
					<td>8.00-8.50</td>
					<td>9.00-9.50</td>
					<td>10.00-10.50</td>
					<td>11.00-11.50</td>
					<td>12.00-12.50</td>
				</tr>
EOT;
				$result2 = mysql_query("SELECT * FROM bookingslot where date='".$bookingInfo["bookedDate"]."' and rid='".$_GET['rid']."'");
				$bookingslot=array(
					"t1"=>"",
					"t2"=>"",
					"t3"=>"",
					"t4"=>"",
					"t5"=>""
				);
				while($row2 = mysql_fetch_array($result2))
					{
						$bookingslot=array(
							"t1"=>$row2['t1'],
							"t2"=>$row2['t2'],
							"t3"=>$row2['t3'],
							"t4"=>$row2['t4'],
							"t5"=>$row2['t5']
						);
					}
					if($bookingslot["t1"]=="booked" && $bookingInfo['t1']=="free")
						echo '<td align="center"><p>Booked</p><input value="booked" checked style="visibility:hidden" name="t1" type="checkbox"></td>';
					else if($bookingInfo['t1']=="booked"){
						echo '<td align="center"><p>User Booked</p><input value="ubooked" checked  name="t1" type="checkbox"></td>';
					}	
					else	
						echo '<td align="center"><p>Free</p><input name="t1" value="ubooked" type="checkbox"></td>';

					if($bookingslot["t2"]=="booked"  && $bookingInfo['t2']=="free")
						echo '<td align="center"><p>Booked</p><input value="booked" checked style="visibility:hidden" name="t2" type="checkbox"></td>';
					else if($bookingInfo['t2']=="booked"){
							echo '<td align="center"><p>User Booked</p><input value="ubooked" checked  name="t2" type="checkbox"></td>';
					}
					else	
						echo '<td align="center"><p>Free</p><input name="t2" value="ubooked" type="checkbox"></td>';
	
					if($bookingslot["t3"]=="booked"  && $bookingInfo['t3']=="free")
						echo '<td align="center"><p>Booked</p><input value="booked" checked style="visibility:hidden" name="t3" type="checkbox"></td>';
					
					else if($bookingInfo['t3']=="booked"){
						echo '<td align="center"><p>User Booked</p><input value="ubooked" checked  name="t3" type="checkbox"></td>';
					}	
					else	
						echo '<td align="center"><p>Free</p><input name="t3" value="ubooked" type="checkbox"></td>';
		
					if($bookingslot["t4"]=="booked"  && $bookingInfo['t4']=="free")
						echo '<td align="center"><p>Booked</p><input value="booked" checked style="visibility:hidden" name="t4" type="checkbox"></td>';
					else if($bookingInfo['t4']=="booked"){
						echo '<td align="center"><p>User Booked</p><input value="ubooked" checked  name="t4" type="checkbox"></td>';
					}
					else	
						echo '<td align="center"><p>Free</p><input name="t4" value="ubooked" type="checkbox"></td>';
			
					if($bookingslot["t5"]=="booked" && $bookingInfo['t5']=="free")
						echo '<td align="center"><p>Booked</p><input value="booked" checked style="visibility:hidden" name="t5" type="checkbox"></td>';
					else if($bookingInfo['t5']=="booked"){
							echo '<td align="center"><p>User Booked</p><input value="ubooked" checked  name="t5" type="checkbox"></td>';
					}
					else	
						echo '<td align="center"><p>Free</p><input name="t5" value="ubooked" type="checkbox"></td>';

				echo<<<EOT
				<tr><select name="status" id="">
				<option value="approved">Approve</option>
				<option value="rejected">Reject</option>
				</select>
				</tr>
				<tr>
				<td colspan="5" align="center">
				<input id="enter"  type="submit" value="Update">
				</tr>
				</table>
EOT;
				mysql_close($con);
				?>


		<!-- hidden for submission -->
		<input id="box" style="visibility:hidden"  type="date" name="bookedDate" value="<?php echo $bookingInfo["bookedDate"]?>" >
		<input id="box" style="visibility:hidden" type="text"  name="roomId" value="<?php echo $bookingInfo["roomId"]?>" >
	</form>
	</table>
	<script>
		function calc(){   //calculate the duration
			var bookedHour=document.getElementsByName("bookedHour")[0].value;
			var finishHour=document.getElementsByName("finishHour")[0].value;
			var date=document.getElementsByName("bookedDate")[0].value;
			var duration=document.getElementsByName("duration")[0].value;

			if(date !=="" && finishHour!== "" && bookedHour !== ""){
			var diff=Math.abs(new Date(date+' '+finishHour) - new Date(date+' '+bookedHour));
			diff=(diff/3600/1000);
			diff=diff.toFixed(2);
			document.getElementsByName("duration")[0].value=diff;
			}
			else{
				alert("Please choose all the booking date, time start , and time end");
			}
		}
		function formValidator(){
			var bookedDate=document.getElementsByName("bookedDate")[0].value;
			var selectedDate=new Date(bookedDate);
			var today=new Date();

			if(selectedDate<today){
				alert("Can't go back in time");
				return false;
			}
			else
				return true;
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