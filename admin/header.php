<!DOCTYPE html>
<html lang="en">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
<head>
<link rel="stylesheet" href="../style.css"/>
  <style>
    <?php include '../../styleit/style.css'; ?>
    table, th, td {
  border:1px solid black;
}
</style>

</head>
  <body>
  <div class="main">
     <div class="title">
     <center> <h1> IIITDM Jabalpur Sports Manager </h1> </center>
     </div>
    <div>
    <p> Hi ADMIN <?php echo $_SESSION['username']; ?>&emsp; </p> <button class="logout"> <a href="../logout-admin.php">Logout</a></button> 
    </div>
    <div class="bar">
          <div class="item"> <a href="sports-list.php">Sports list</a>&emsp; </div>
          <div class="item"> <a href="category-list.php">Category list</a>&emsp; </div>
          <div class="item"> <a href="members-list.php">Members list</a>&emsp; </div>
          <div class="item"> <a href="team-list.php">Team list</a>&emsp; </div>
          <div class="item"> <a href="contestant-list.php">Contestant list</a>&emsp; </div>
          <div class="item"><a href="event-list.php">Event list</a>&emsp; </div>
          <div class="item"><a href="add-sport.php">Add Sports</a>&emsp; </div>
          <div class="item"><a href="add-category.php">Add Category</a>&emsp; </div>
          <div class="item"><a href="add-event.php">Add event</a>&emsp; </div>
          <div class="item"><a href="contestant-in-event.php">Add Contestant to event</a>&emsp; </div>
            <!-- <a href="../logout-admin.php">Logout</a> -->
    </div>
</div>