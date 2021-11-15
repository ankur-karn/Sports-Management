<?php

    include("auth_session.php");
    include("header.php");

	$db=mysqli_connect('localhost','root','','sports');


	if($db === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

	//if registration button is clicked

	$event_name=mysqli_real_escape_string($db,$_POST['event_name']);
	$event_day=mysqli_real_escape_string($db,$_POST['event_day']);
	$sql="INSERT INTO 'event' VALUES ('','$event_name','$event_day')";
	if(mysqli_query($db, $sql))
	{
        echo "CREATED NEW EVENT";
    } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($db);
        }

        // Close connection
        mysqli_close($db);
        ?>
?>
