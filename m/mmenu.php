<?php
    session_start();
    if(($_SESSION['type']!='admin') && ($_SESSION['type']!='manager')){
        header('Location: ../failed.html');
    }
?>

<html>
<title>Manager Menu</title>

<head>
		<style>
				body {
					text-align: center;
					align: center;
					border-radius: 20%;
					width: 35%;
					height: 98%;
					margin: 3em auto;
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
					margin: 20 auto;
					margin-left: 3px;
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
<br>

<body>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a onclick="window.location.href='mview.php'">View Application</a>
  <a  onclick="window.location.href='mprofile.php?uid=<?php echo $_SESSION['uid']?>'">Profile</a>
  <a  onclick="window.location.href='../login/logout.php'">Log out</a>
</div>
<span style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776;Menu</span>

	<h1>Manager Menu</h1>
	<br>
	<button id="enter" onclick="window.location.href='mview.php'">View Application</a>
	<button id="enter" onclick="window.location.href='mprofile.php?uid=<?php echo $_SESSION['uid']?>'">Profile</a>
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