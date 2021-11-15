

     <?php
include("../auth_session.php");
include("../header.php");
?>
<div class="ref">

<h1>Enroll your Team as a Captain</h1>

        <form action="create-team-sql.php" method="post">

<p>
                <label for="team_name">Team Name:</label>
                <input type="text" name="team_name" id="team_name">
            </p>
<p>
    <label for="solo_id">Your ID: </label>
                <input type="text" name="solo_id" id="solo_id">
            </p>
            
            <input type="submit" value="Submit">
        </form>
    </div>
</body>

</html>
