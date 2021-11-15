<?php
    include("../auth_session.php");
    include("../header.php");

    $db=mysqli_connect('localhost','root','','sports');


	if($db === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

	//if registration button is clicked

	$event_id=mysqli_real_escape_string($db,$_POST['event_id']);
	$contestant_id=mysqli_real_escape_string($db,$_POST['contestant_id']);
	$sql="INSERT INTO contestant_in_event VALUES ('$event_id','$contestant_id')";
	if(mysqli_query($db, $sql))
	{
        echo "Added contestant to event";
    } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($db);
        }

        // Close connection
        mysqli_close($db);
        
?>
