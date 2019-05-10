<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Mad libs</title>
  </head>
  <body>
    <form class="" action="madLibs.php" method="post">
        <input type="text" name="name" value="" required><br>
        <input type="text" name="love" value="" required><br>
        <input type="text" name="future" value="" required><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
      $name = isset($_POST["name"]);
      $love = isset($_POST["love"]);
      $future = isset($_POST["future"]);

      echo "I am $name <br>";
      echo "I love $love <br>";
      echo "I wanna be a $future<br>";



     ?>

  </body>
</html>
