<?php require_once($_SERVER['DOCUMENT_ROOT']."/becoder/config.php")?>
<body class="grey lighten-3">

  <!--Main Navigation-->
  <header>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php">
        <img src="<?php echo $images_folder?>becoder_logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
      </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#becoderNavbarToggle" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="becoderNavbarToggle">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Practice</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="specificContests.php">Contests</a>
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
    <!--/.Navbar-->

    </header>
