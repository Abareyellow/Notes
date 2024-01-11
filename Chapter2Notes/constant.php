<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <h1>PHP Constants</h1>
    <?php
    define("Name", "Katie Schwerer");
    echo Name;
    echo "<br>";
    define("Age", 23);
    echo Age;
    echo "<br>";
    define("students", ["Katie", "Kevin", "Kyle"]);
    echo students[0];

    function myfun() {
      echo "<br>";
      echo students[2];
    }
    myfun();
    ?> 
  </body>
</html>