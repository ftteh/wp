<?php 
        $servername = "localhost";
        $username = "";
        $password = "";
        $dbname = "";
        
        // Create connection
        $con = mysql_connect($servername,$username,$password);
        if (!$con)
        {
        die('Could not connect: ' . mysql_error());
        }

        mysql_select_db($dbname, $con);

?>