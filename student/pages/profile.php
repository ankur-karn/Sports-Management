<?php

    include("../auth_session.php");
    include("../header.php");

    $con=mysqli_connect("localhost","root","","sports");
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

    $result = mysqli_query($con,"SELECT * FROM member WHERE solo_id_roll = '{$_SESSION['username']}'");
echo "<table>";


    while($row = mysqli_fetch_array($result))
      {

      echo "<tr><td>Your ID</td><td>" . $row['solo_id_roll']. "</td></tr>";
      echo "<tr><td>Name</td><td>" . $row['name']. "</td></tr>";
      echo "<tr><td>Email</td><td>" . $row['email']. "</td></tr>";
      echo "<tr><td>Password</td><td>" . $row['password']. "</td></tr>";
      echo "<tr><td>Phone</td><td>" . $row['phone']. "</td></tr>";
      echo "<tr><td>Gender</td><td>" . $row['gender']. "</td></tr>";
      echo "<tr><td>Age</td><td>" . $row['age']. "</td></tr>";
      echo "<br />";
      }
 echo "</table>";
    mysqli_close($con);
    ?>

    </div>
</body>
</html>
