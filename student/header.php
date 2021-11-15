<!DOCTYPE html>
<html lang="en">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet"> 
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
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
       <p> Hi <?php echo $_SESSION['username']; ?>! &emsp; </p><button class="logout"> <a href="../logout.php">Logout</a> </button>
    </div>
    <div class="bar">
           <div class="item" style="margin-right: 15px"> <a href="profile.php">Profile</a> </div>
           <div class="item"><a href="sports-list.php">Sports list</a></div> 
           <div class="item"><a href="category-list.php">Category list</a></div>
           <div class="item"><a href="solo-contestant.php">Participate as contestant</a></div>
           <div class="item"><a href="team-contestant.php">Participate your team</a></div>
           <div class="item" style="margin-right: 10px"><a href="create-team.php">Create your team</a></div>
          </div>
      </div>
