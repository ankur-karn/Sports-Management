<?php

    include("../auth_session.php");
    include("../header.php");

    $con=mysqli_connect("localhost","root","","sports");
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

    $result = mysqli_query($con,"SELECT * FROM member");
echo "<table>";

    echo "  <tr>
    <td>Members ID</td>
    <td>Members Name</td>
    <td>Email ID</td>
    <td>Phone</td>
    <td>Gender</td>
    <td>Age</td>
  </tr>";
    while($row = mysqli_fetch_array($result))
      {

      echo "<tr><td>" . $row['solo_id_roll']. "</td><td> " . $row['name']. "</td><td> " . $row['email']. "</td><td> " . $row['phone']. "</td><td> " . $row['gender']."</td><td> " . $row['age']. "</td></tr> "; //these are the fields that you have stored in your database table employee
      echo "<br />";
      }
 echo "</table>";
    mysqli_close($con);
    ?>

    </div>
</html>
