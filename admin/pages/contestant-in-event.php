<?php
    include("../auth_session.php");
    include("../header.php");
?>
        <h1>Add Contestant to event</h1>

        <form action="contestant-in-event-sql.php" method="post">

<p>
                <label for="event_id">Event ID:</label>
                <input type="text" name="event_id" id="event_id">
            </p>
<p>
                <label for="contestant_id">Contestant ID: </label>
                <input type="text" name="contestant_id" id="contestant_id">
            </p>

            <input type="submit" value="Submit">
        </form>
</body>

</html>
