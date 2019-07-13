<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
      <?php
      $num = -10;
      $numAbs = abs($num);
      echo $numAbs ."<br>";
      echo "10^3 == " . pow($numAbs, 3) ."<br>";
      echo sqrt(144) ."<br>";
      echo "<br>";

      $world = "Monde!";
      echo "<h1>Hello, $world</h1>";
      echo "strtolower($world): " . strtolower($world) ."<br>";
      echo "strlen($world): " . strlen($world) ."<br>";
      echo $world[0] ."<br>";
      $superWorld = str_replace("Mo", "Panda", $world) . " Diplomatique";
      echo strtoupper($world) ."<br>";
      echo $superWorld ."<br>";
      echo substr($superWorld, 5, 15);
      ?>
    </div>
  </body>
</html>
