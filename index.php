<?php
  $root = "http://localhost/becoder/";
  $assets_folder = $root."assets/";
  $css_folder = $assets_folder."css/";
  $images_folder = $assets_folder."images/";
  $library_css_folder = $assets_folder."library/css/";
  $library_js_folder = $assets_folder."library/js/";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=2, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo $library_css_folder;?>bootstrap.min.css" >
    <title>becoder</title>
    <style>
    .navbar .navbar-brand{
      margin-left:10% !important;
    }
    .navbar-nav > li{
      padding-left: 10px;
      padding-right: 10px;
    }
    .ml-auto .dropdown-menu {
      margin-top: 7px !important;
     left: auto !important;
     right: 0px;
   }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#becoderNavbarToggle" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="becoderNavbarToggle">
        <a class="navbar-brand" href="#">
          <img src="<?php echo $images_folder?>becoder_logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
        </a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Practice</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contests</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Resource</a>
          </li>
          <li class="nav-item" style="padding-right:20px;padding-left:20px">

          </li>

        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Leaderboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Notifications</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img src="<?php echo $images_folder?>becoder_logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
              becoder</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Ranking</a>
              <a class="dropdown-item" href="#">Profile</a>
              <a class="dropdown-item" href="#">Submission</a>
              <a class="dropdown-item" href="#">Note</a>
              <a class="dropdown-item" href="#">Setting</a>
              <a class="dropdown-item" href="#">Administration</a>
              <a class="dropdown-item" href="#">Logout</a>

            </div>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="<?php echo $library_js_folder;?>bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
