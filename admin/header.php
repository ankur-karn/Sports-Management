<!DOCTYPE html>
<html lang="en">

<head>

  <style>
    <?php include '../styleit/style.css'; ?>
    table, th, td {
  /* <link rel="stylesheet" href="../styleit/style.css"> */
  border:1px solid black;
}
</style>

</head>
  <body>
    <div>IIITDM Jabalpur Sports Manager</div>
    <div>
    <p>Logged in as admin <?php echo $_SESSION['username']; ?>&emsp;<a href="../logout-admin.php">logout</a></p>
    </div>
    <div>
            <a href="sports-list.php">View sports list</a>&emsp;
            <a href="category-list.php">View category list</a>&emsp;
            <a href="members-list.php">View members list</a>&emsp;
            <a href="team-list.php">View Team list</a>&emsp;
            <a href="contestant-list.php">View Contestant list</a>&emsp;
            <a href="add-sport.php">Add Sports</a>&emsp;
            <a href="add-category.php">Add category</a>&emsp;
            <a href="add-event.php">Add event</a>&emsp;
            <a href="contestant-in-event.php">Add Contestant to event</a>&emsp;
    </div>
