<?php
include("../auth_session.php");
include("../header.php");
?>


<?php
    $con=mysqli_connect("localhost","root","","sports");
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

    $result = mysqli_query($con,"SELECT * FROM category");
echo "<table>";

    echo "  <tr>
    <td>Category ID</td>
    <td>Category Name</td>
    <td>Sports Name</td>
    <td>Gender</td>
    <td>Team Size</td>
  </tr>";
    while($row = mysqli_fetch_array($result))
      {

      echo "<tr><td>" . $row['category_id']. "</td><td> " . $row['category_name']. "</td><td> " . $row['sport_name']. "</td><td> " . $row['gender']. "</td><td> " . $row['team_size']. "</td></tr> ";
      echo "<br />";
      }
 echo "</table>";
    mysqli_close($con);
    ?>

    </div>
</html>
