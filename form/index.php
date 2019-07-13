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
          <form action="index.php" method="get">
            <div class="form-group">
              <label for="name">Name:</label>
              <input
                type="text"
                class="form-control mb-4"
                id="name"
                name="name" />
              <button
                class="btn btn-warning"
                type="submit">Submit</button>
            </div>
          </form>
          <?php
            echo $_GET["name"];
          ?>
        </div>
      </div>
    </div>
  </body>
</html>
