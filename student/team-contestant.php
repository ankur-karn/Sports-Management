<?php
include("auth_session.php");
include("header.php");
?>

        <h1>Your team wants to participate in which sport category</h1>

        <form action="team-contestant-sql.php" method="post">

<p>
                <label for="category_id">Category ID:</label>
                <input type="text" name="category_id" id="category_id">
            </p>
<p>
                <label for="team_id">Your team ID: </label>
                <input type="text" name="team_id" id="team_id">
            </p>

            <input type="submit" value="Submit">
        </form>
</body>

</html>