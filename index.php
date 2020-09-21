<?php
  session_start();
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <title>Login</title>
  </head>
  <body>
    <div class="container p-3">
      <h1 class="display-2">Login</h1>
      <hr>
      <form action="forum.php" method="post">
        <div class="row">
          <div class="col-12 mb-3">
            <div class="col-md-4">
              <label for="username">Email address</label>
              <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
            </div>
            <small class="col-auto text-muted">
              Valid values: mkamadeus, pisangman
            </small>
          </div>
          <div class="col-12 mb-3">
            <div class="col-md-4">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password" aria-describedby="emailHelp">
              <small class="col-auto text-muted">
                Any values are accepted
              </small>
            </div>
          </div>
          <div class="col-12 mb-3">
            <div class="col-md-4 text-danger">
              <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </div>
          </div>
          <div class="col-12 mb-3">
            <div class="col-md-4 text-danger text-center">
              <?php
              if($_SESSION['status']=='invalid') {
                echo 'Invalid credentials/session';
              }
              ?>
            </div>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
