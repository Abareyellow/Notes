<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>

    <?php
    //Write a PHP Program to make use of constant, verify that its value did not change.
    $language = "PHP";
    $language = "Python";
    echo $language;
    define("Language", "PHP");
    echo Language;
    ?> 
  </body>
</html>