<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="../style.css"/>
    <style>
    table, th, td {
    border:1px solid black;
    }
    </style>
</head>
  <body>
    <div>IIITDM Jabalpur Sports Manager</div>

    <div>
        <p>Logged in as <?php echo $_SESSION['username']; ?>&emsp;<a href="../logout.php">logout</a></p>
        <p></p>
    </div>
    <div>
            <a href="profile.php">Profile</a>&emsp;
            <a href="sports-list.php">Sports list</a>&emsp;
            <a href="category-list.php">Category list</a>&emsp;
            <a href="solo-contestant.php">Participate as contestant</a>&emsp;
            <a href="team-contestant.php">Participate as team</a>&emsp;
            <a href="create-team.php">Register your team</a>
    </div>
