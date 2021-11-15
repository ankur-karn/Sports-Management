<?php
    include("../auth_session.php");
    include("../header.php");

    $con=mysqli_connect("localhost","root","","sports");
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

    $result = mysqli_query($con,"SELECT * FROM event");
echo "<table>";

    echo "  <tr>
    <td>Event ID</td>
    <td>Event Name</td>
    <td>Event Day</td>
  </tr>";
    while($row = mysqli_fetch_array($result))
      {

      echo "<tr><td>" . $row['event_id']. "</td><td> " . $row['event_name']. "</td><td> " . $row['event_day']. "</td></tr> ";
      echo "<br />";
      }
 echo "</table>";
    mysqli_close($con);
    ?>

    </div>
</html>
