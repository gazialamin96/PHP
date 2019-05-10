<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Basic Calculator</title>
  </head>
  <body>
    <form class="" action="basicCalculator.php" method="get">
        <input type="number" name="num1" value="" required><br>
        <input type="number" name="num2" value="" required><br>
        <input type="submit" name="" value="Submit">

    </form>

    Answer : <?php echo $_GET["num1"] + $_GET["num2"] ?> 

  </body>
</html>
