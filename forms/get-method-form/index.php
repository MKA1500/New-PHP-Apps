<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Form</title>
  </head>
  <body>
    <div class="container pt-5">
      <h2 class="text-center mb-3">Check your grade:</h2>
      <div class="row">
        <div class="offset-md-3 col-md-6">
          <form action="index.php" method="get">
            <div class="form-group">
              <label for="name">Your Name:</label>
              <input
                type="text"
                class="form-control mb-4"
                id="name"
                name="name" />
            </div>
            <button
              class="btn btn-warning"
              type="submit">Submit</button>
            <a class="btn btn-danger" href="../">Back</a>
          </form>
          <div class="mt-4">
            <?php
              $yourName = $_GET["name"];
              $grades = array(
                "Boris" => "3",
                "Maciej" => "4+",
                "Nikolai" => "4",
                "Agatha" => "5",
                "Vladimir" => "5+",
                "Angela" => "5",
                "Jarosław" => "2",
                "Victor" => "4",
                "Jane" => "3+",
                "Asia" => "4-"
              );
              echo $yourName . ",<br>";
              echo "your grade is: " . $grades[$yourName];
            ?>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
