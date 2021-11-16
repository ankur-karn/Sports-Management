
     <?php

include("../auth_session.php");
    include("../header.php");
    
    $con=mysqli_connect("localhost","root","","sports");
    // Check connection
    if (mysqli_connect_errno())
    {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
    //------------------Profile------------------------------
    $result = mysqli_query($con,"SELECT * FROM member WHERE solo_id_roll = '{$_SESSION['username']}'");
    ?>
    <div class="ref">
<?php
    echo "<h2>Your Profile Information:</h2>";
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

 //--------------------Contestant----------------------------

 
      $result = mysqli_query($con,"SELECT * FROM contestant WHERE solo_id = '{$_SESSION['username']}'");
          echo "<h2>You are a contestant in These Sports Categories</h2>";
          echo "<table>";

          echo "  <tr>
    <td>Your Contestant ID</td>
    <td>Category ID</td>
  </tr>";
    while($row = mysqli_fetch_array($result))
      {

      echo "<tr><td>" . $row['contestant_id']. "</td><td> " . $row['category_id'].  "</td></tr> ";
      echo "<br />";
      }
 echo "</table>";
//----------------------Captain---------------------------
    $result = mysqli_query($con,"SELECT * FROM team WHERE captain_id = '{$_SESSION['username']}'");

    echo "<table>";
    echo "<br><h2>You are a captain of These teams:</h2>";
    echo "  <tr>
    <td>Team ID</td>
    <td>Team Name</td>
    </tr>";
    while($row = mysqli_fetch_array($result))
    {
        echo "<tr><td>" . $row['team_id']. "</td><td> " . $row['team_name']. "</td></tr> ";
      echo "<br />";
    }
    echo "</table>";
    
 //---------------------Events----------------------------
 $result = mysqli_query($con,"SELECT * FROM contestant_in_event JOIN contestant ON  contestant_in_event.contestant_id= contestant.contestant_id AND contestant.solo_id = '{$_SESSION['username']}'");
 
    echo "<table>";
    echo "<br><h2>Your Upcoming Events:</h2>";
    echo "  <tr>
    <td>Event ID</td>
    <td>Contestant ID</td>
    </tr>";
    while($row = mysqli_fetch_array($result))
    {
        echo "<tr><td>" . $row['event_id']. "</td><td> " . $row['contestant_id']. "</td></tr> ";
      echo "<br />";
    }
    echo "</table>";


    
    mysqli_close($con);
    ?>

</div>
</div>
</body>
</html>
