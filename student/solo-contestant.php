<?php
include("auth_session.php");
include("header.php");
?>

        <h1>You want to participate in which sport category</h1>

        <form action="solo-contestant-sql.php" method="post">

<p>
                <label for="category_id">Category ID:</label>
                <input type="text" name="category_id" id="category_id">
            </p>
<p>
                <label for="solo_id">Your Solo ID: </label>
                <input type="text" name="solo_id" id="solo_id">
            </p>

            <input type="submit" value="Submit">
        </form>
</body>

</html>
