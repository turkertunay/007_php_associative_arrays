<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  <form action="007_associative_arrays.php" method="post">
    <input type="text" name="student">
    <input type="submit">

  </form>

  <?php
        $grades = array("Barış"=>"A+", "Cem"=>"B-", "Erkin"=>"C+");
        echo $grades[$_POST["student"]];

   ?>
  <br>


  </body>
</html>
