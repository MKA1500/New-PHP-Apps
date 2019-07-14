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
      <div class="row">
        <div class="offset-md-3 col-md-6">
          <form action="./index.php" method="post">
            <div class="form-group">
              <label for="name">Name:</label>
              <input
                type="text"
                class="form-control mb-4"
                id="name"
                name="name" />
            </div>
            <div class="form-group">
              <label for="age">Age:</label>
              <input
                type="number"
                class="form-control mb-4"
                id="age"
                name="age" />
            </div>
            <div class="form-group">
              <label for="languages[]">Languages:</label>
              <div class="row">
                <div class="col-sm-4">
                  <label>
                    <input type="checkbox" name="languages[]" value="Deutsch"> Deutsch
                  </label>
                </div>
                <div class="col-sm-4">
                  <label>
                    <input type="checkbox" name="languages[]" value="English"> English
                  </label>
                </div>
                <div class="col-sm-4">
                  <label>
                    <input type="checkbox" name="languages[]" value="Italiano"> Italiano
                  </label>
                </div>
                <div class="col-sm-4">
                  <label>
                    <input type="checkbox" name="languages[]" value="Lietuvos"> Lietuvos
                  </label>
                </div>
                <div class="col-sm-4">
                  <label>
                    <input type="checkbox" name="languages[]" value="Polski"> Polski
                  </label>
                </div>
                <div class="col-sm-4">
                  <label>
                    <input type="checkbox" name="languages[]" value="Svenska"> Svenska
                  </label>
                </div>
              </div>
            </div>
            <button
              class="btn btn-warning"
              type="submit">Submit</button>
          </form>
          <div class="mt-4">
            <?php
              echo "name: " .$_POST["name"] . "<br>";
              echo "age: " .$_POST["age"] . "<br>";
              $languages = $_POST["languages"];
              $langNum = count($languages);
              echo "languages: ";
              if ($langNum > 0):
                echo $langNum ."<br>";
              else:
                echo "<br>";
              endif;
              foreach ($languages as &$value) {
                  echo "- " . $value . "<br>";
              }
            ?>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
