<!DOCTYPE html>
<html lang="en">

<head><style>
table, th, td {
  border:1px solid black;
}
</style></head>
  <body>
    <div>IIITDM Jabalpur Sports Manager</div>
    <div>
    <p>Logged in as admin <?php echo $_SESSION['username']; ?>&emsp;<a href="../logout-admin.php">logout</a></p>
    </div>
    <div>
            <a href="sports-list.php">Sports list</a>&emsp;
            <a href="category-list.php">Category list</a>&emsp;
            <a href="members-list.php">Members list</a>&emsp;
            <a href="team-list.php">Team list</a>&emsp;
            <a href="contestant-list.php">Contestant list</a>&emsp;
            <a href="add-sport.php">Add Sports</a>&emsp;
            <a href="add-category.php">Add Category</a>&emsp;
            <a href="add-event.php">Add event</a>&emsp;
            <a href="contestant-in-event.php">Add Contestant to event</a>&emsp;
    </div>
