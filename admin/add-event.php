<?php
    include("auth_session.php");
    include("header.php");
?>
        <h1>Add event</h1>

        <form action="add-event-sql.php" method="post">

<p>
                <label for="event_name">Event Name:</label>
                <input type="text" name="event_name" id="event_name">
            </p>
<p>
                <label for="event_day">Event day: </label>
                <input type="text" name="event_day" id="event_day">
            </p>

            <input type="submit" value="Submit">
        </form>
</body>

</html>
