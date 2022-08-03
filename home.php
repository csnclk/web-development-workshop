<?php 
  session_start();
  if(!isset($_SESSION['user'])){
    header("Location: index.php");
  }

  $user = $_SESSION['user'];

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>chatter | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">chatter</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
            </ul>
            <span class="navbar-text">
              <?php echo $user; ?>
              <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
            </span>
          </div>
        </div>
      </nav>

      <div>
          <div class="m-3">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            <button class="btn btn-primary mt-3">Upload</button>
        </div>
      </div>

      <div class="m-3">
        <div class="card">
            <div class="card-header">
              username@gmail.com
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <p>A well-known quote, contained in a blockquote element.</p>
                <footer class="blockquote-footer"><cite title="Source Title">21-07-2022</cite></footer>
              </blockquote>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              username@gmail.com
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <p>A well-known quote, contained in a blockquote element.</p>
                <footer class="blockquote-footer"><cite title="Source Title">21-07-2022</cite></footer>
              </blockquote>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              username@gmail.com
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <p>A well-known quote, contained in a blockquote element.</p>
                <footer class="blockquote-footer"><cite title="Source Title">21-07-2022</cite></footer>
              </blockquote>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              username@gmail.com
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <p>A well-known quote, contained in a blockquote element.</p>
                <footer class="blockquote-footer"><cite title="Source Title">21-07-2022</cite></footer>
              </blockquote>
            </div>
          </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>