<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Form Submit System</title>
  </head>
  <body>

    <form  action="form.php" method="get">
      Name : <input type="text" name="name" required><br/>
      ID : <input type="number" name="age" required><br/>
      <input type="submit">
    </form>

    <?php
     echo "My name is :";
      echo $_GET["name"];
      echo "<br/>";
      echo "Now my age is : ";
      echo $_GET["age"];
     ?>

  </body>
</html>
