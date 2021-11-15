<div class="ref">

        <?php
    include("../auth_session.php");
    include("../header.php");
    $db=mysqli_connect('localhost','root','','sports');

    
    if($db === false){
            die("ERROR: Could not connect. "
            . mysqli_connect_error());
        }
        
	//if registration button is clicked
        
	$sport_name=mysqli_real_escape_string($db,$_POST['sport_name']);
	$sql="INSERT INTO sports(sport_name) VALUES ('$sport_name')";
	if(mysqli_query($db, $sql))
	{
                echo "sport has been added";
    } else{
            echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($db);
        }
        
        // Close connection
        mysqli_close($db);
        
        ?>
        </div>
