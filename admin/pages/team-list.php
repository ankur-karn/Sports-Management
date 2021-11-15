<?php

    include("../auth_session.php");
    include("../header.php");

    $con=mysqli_connect("localhost","root","","sports");
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

    $result = mysqli_query($con,"SELECT * FROM team");
echo "<table>";

    echo "  <tr>
    <td>Team ID</td>
    <td>Team Name</td>
    <td>Captain's ID</td>
  </tr>";
    while($row = mysqli_fetch_array($result))
      {

      echo "<tr><td>" . $row['team_id']. "</td><td> " . $row['team_name']. "</td><td> " . $row['captain_id']. "</td></tr> "; //these are the fields that you have stored in your database table employee
      echo "<br />";
      }
 echo "</table>";
    mysqli_close($con);
    ?>

    </div>
</html>
