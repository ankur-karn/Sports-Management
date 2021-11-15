<?php
    include("../auth_session.php");
    include("../header.php");

	$db=mysqli_connect('localhost','root','','sports');


	if($db === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

	//if registration button is clicked

	$team_name=mysqli_real_escape_string($db,$_POST['team_name']);
	$solo_id=mysqli_real_escape_string($db,$_POST['solo_id']);
	$sql="INSERT INTO team VALUES (NULL,'$team_name','$solo_id')";
	if(mysqli_query($db, $sql))
	{
        echo "CONGRATULATIONS,YOUR TEAM HAS BEEN REGISTERED";
    } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($db);
        }

        // Close connection
        mysqli_close($db);

?>
