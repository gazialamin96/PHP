<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    echo "<h1>Gazi's Website</h1>";
    echo '<p align="center">This is my Website</p>';
    echo "<hr>";


    $nameStudent = "Gazi Al-Amin";
    $ageStudent = 22;

    echo "My name is $nameStudent<br/>";
    echo " & I am $ageStudent<sup>rd</sup> yraers old <br/>";
    echo "I want to know something new somthing fressh <br/>";
    echo "<hr>";

    $nameStudent = "Gazi Arman Hossain Robin";
    $ageStudent = 17;

    echo "My Younger Brother name is $nameStudent<br/>";
    echo " & his $ageStudent<sup>rd</sup> yraers old <br/>";
    echo "I want to know something new somthing fressh <br/>";

    echo "<hr>";

    echo "Working with string ::: <br/> ";
    $nameOfWebsites = "Gazi's Website";
    $upper= strtoupper($nameOfWebsites);
    echo "$upper <br/>";

    $lower = strtolower($upper);
    echo "$lower <br/>";

    $lenthOfString =strlen($nameOfWebsites);
    echo "Lenth of the string is $lenthOfString <br/>";

    $replace = str_replace("Website", "Static Web Page", $nameOfWebsites);
    echo "$replace <br/>";

    $subName = substr($replace,14);
    echo "Gazi's $subName <br/>";

    echo "Working with numbers : <br/>";
    echo abs(-500); //absolute value is 500
    echo "<br/>";
    echo pow(2,3);
    echo "<br/>";
    echo sqrt(144); //squire root
    echo "<br/>";
    echo max(2,14,45,63,100,258);
    echo "<br/>";
    echo min(2,14,45,63,100,258);
    echo "<br/>";
    echo round(3.44); //its result will be 3
    echo "<br/>";
    echo round(3.75); //it's result will be 4
    echo "<br/>";
    echo ceil(6.01);
    echo "<br/>";
    echo floor(6.99);
    echo "<br/>";

    
     ?>

  </body>
</html>
