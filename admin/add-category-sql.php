<?php
    include("auth_session.php");
    include("header.php");

	$db=mysqli_connect('localhost','root','','sports');


	if($db === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

	//if registration button is clicked

        $sname =  $_REQUEST['sname'];
        $cname =  $_REQUEST['cname'];
        $gender =  $_REQUEST['gender'];
        $tsize = $_REQUEST['tsize'];

        $sql = "INSERT INTO category  VALUES (NULL,'$sname','$cname','$gender','$tsize')";
	if(mysqli_query($db, $sql))
	{
        echo "CREATED NEW CATEGORY";
    } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($db);
        }

        // Close connection
        mysqli_close($db);
?>
