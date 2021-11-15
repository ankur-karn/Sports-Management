<?php
    include("../auth_session.php");
    include("../header.php");

	$db=mysqli_connect('localhost','root','','sports');


	if($db === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

	//if registration button is clicked

	$category_id=mysqli_real_escape_string($db,$_POST['category_id']);
	$team_id=mysqli_real_escape_string($db,$_POST['team_id']);
	$sql="INSERT INTO 'contestant' VALUES ('','$category_id','$team_id',NULL)";
	if(mysqli_query($db, $sql))
	{
        echo "CONGRATULATIONS,YOUR TEAM IS NOW A CONTESTANT IN THIS CATEGORY";
    } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($db);
        }

        // Close connection
        mysqli_close($db);
        ?>
?>
