<?php
    include("auth_session.php");
    include("header.php");
?>
        <h1>Add Sport</h1>

        <form action="add-sport-sql.php" method="post">

            <p>
                <label for="sport_name">Sport Name:</label>
                <input type="text" name="sport_name" id="sport_name">
            </p>

            <input type="submit" value="Submit">
        </form>
</body>

</html>
