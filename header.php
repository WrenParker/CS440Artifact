<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Music App</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/index.php">Music App</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/new.php">New</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/popular.php">Popular</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" name="form" action="" method="post">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search-bar" id="search-bar">
      <button class='btn btn-outline-success my-2 my-sm-0' type='submit' role='button'>Search</button>
      <?php
      $url = "/search.php";
      if(isset($_POST['search-bar'])){
        $url = $url . "/" . $_POST['search-bar'];
        header("Location: {$url}");
      } ?>
    </form>

  </div>
</nav>
  </body>
</html>
