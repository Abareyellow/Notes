<html>
  <head>
    <title>PHP Chapter 1 Problem 4</title>
  </head>
  <body>

    <form action="#" method="get">
      <input type="number" name="nume">
      <input type="submit" name="sub">
    </form>
    <?php
    // Write a PHP program to get a number from user to display its cube and square simple

    if(isset($_GET['sub'])){
      $n =  $_GET['nume'];
      echo "Square of ".$n." is ".($n*$n);
      echo "<br>";
      echo "Cube of ".$n." is ".($n*$n*$n);
    }
      ?> 
  </body>
</html>