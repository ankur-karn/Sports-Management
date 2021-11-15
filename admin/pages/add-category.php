<?php
    include("../auth_session.php");
    include("../header.php");
?>
        <h1>Add Category</h1>

        <form action="add-category-sql.php" method="post">


          <label for="sport_name"><b>Sport Name(already in list)</b></label>
          <input type="text" placeholder="Enter Sport's name" name="sname" required /><br>

          <label for="category_name"><b>New Category name</b></label>
          <input type="text" placeholder="Enter new category name" name="cname" required /><br>

          <label for="gender"><b>Gender</b></label>
          <input type="text" placeholder="male or female" name="gender" required /><br>

          <label for="team_size"><b>Team Size (1 for solo)</b></label>
          <input type="text" placeholder="Numerical value" name="tsize" required /><br>

            <input type="submit" value="Submit">
        </form>
</body>

</html>
