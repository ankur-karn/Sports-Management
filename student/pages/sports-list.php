<?php
include("../auth_session.php");
include("../header.php");
?>

 <div class="ref">

<?php
    $con=mysqli_connect("localhost","root","","sports");
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

    $result = mysqli_query($con,"SELECT * FROM sports");
echo "<table>";

      echo "  <tr>
    <td>Sport Name</td>
  </tr>";
    while($row = mysqli_fetch_array($result))
      {

      echo "<tr><td>" . $row['sport_name']. "</td></tr> "; //these are the fields that you have stored in your database table employee
      echo "<br />";
      }
 echo "</table>";
    mysqli_close($con);
    ?>

    </div>
</html>
