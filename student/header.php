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
        <p>Logged in as <?php echo $_SESSION['username']; ?>!</p>
        <p><a href="logout.php">Logout</a></p>
    </div>
    <div>
            <a href="profile.php">View profile</a><br>
            <a href="sports-list.php">View sports list</a><br>
            <a href="category-list.php">View category list</a><br>
            <a href="solo-contestant.php">Participate as contestant</a><br>
            <a href="team-contestant.php">Participate your team</a><br>
            <a href="create-team.php">Create your team</a><br>
    </div>
