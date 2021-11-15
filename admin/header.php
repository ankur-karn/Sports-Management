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
    <p>Logged in as admin <?php echo $_SESSION['username']; ?>!</p>
    <p><a href="../logout-admin.php">Logout</a></p>
    </div>
    <div>
            <a href="sports-list.php">View sports list</a><br>
            <a href="category-list.php">View category list</a><br>
            <a href="members-list.php">View members list</a><br>
            <a href="team-list.php">View members list</a><br>
            <a href="contestant-list.php">View members list</a><br>
            <a href="add-sport.php">Add Sports</a><br>
            <a href="add-category.php">Add category</a><br>
            <a href="add-event.php">Add event</a><br>
            <a href="contestant-in-event.php">Add Contestant to event</a><br>
    </div>
