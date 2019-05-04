<?php require_once($_SERVER['DOCUMENT_ROOT']."/becoder/config.php")?>
<body class="grey lighten-3">

  <!--Main Navigation-->
  <header>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-blue">
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
                <a class="nav-link" href="contest.php">Contests</a>
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
              <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#modalLRForm" href="#">Login/Register</a>
              </li>

              <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img src="?php echo $images_folder?>becoder_logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
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
              </li> -->
            </ul>
          </div>
        </nav>
    <!--/.Navbar-->

    </header>


    <!--Modal: Login / Register Form-->
<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog cascading-modal" role="document">
    <!--Content-->
    <div class="modal-content">

      <!--Modal cascading tabs-->
      <div class="modal-c-tabs">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
              Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user-plus mr-1"></i>
              Register</a>
          </li>
        </ul>

        <!-- Tab panels -->
        <div class="tab-content">
          <!--Panel 7-->
          <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

            <!--Body-->
            <div class="modal-body mb-1">
              <div class="md-form form-sm mb-5">
                <i class="fas fa-envelope prefix"></i>
                <input type="email" placeholder="email" id="modalLRInput10" class="form-control form-control-sm validate">
              </div>

              <div class="md-form form-sm mb-4">
                <i class="fas fa-lock prefix"></i>
                <input type="password" placeholder="password" id="modalLRInput11" class="form-control form-control-sm validate">
              </div>
              <div class="text-center mt-2">
                <button class="btn btn-info">Log in <i class="fas fa-sign-in ml-1"></i></button>
              </div>
            </div>
            <!--Footer-->
            <div class="login_connect_with">
                Or Connect With
              </div>
            <!--Footer-->
            <div class="modal-footer">
              <div class="social">
                <a class="circle github" href="#">
                    <i class="fab fa-github"></i>
                </a>
                <a id="google_login" class="circle google" href="#">
                    <i class="fab fa-google"></i>
                </a>
                <a id="facebook_login" class="circle facebook" href="#">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </div>
            </div>

          </div>
          <!--/.Panel 7-->

          <!--Panel 8-->
          <div class="tab-pane fade" id="panel8" role="tabpanel">

            <!--Body-->
            <div class="modal-body">
              <div class="md-form form-sm mb-5">
                <i class="fas fa-envelope prefix"></i>
                <input type="email" placeholder="email" id="modalLRInput12" class="form-control form-control-sm validate">
            
              </div>

              <div class="md-form form-sm mb-5">
                <i class="fas fa-lock prefix"></i>
                <input type="password" placeholder="password" id="modalLRInput13" class="form-control form-control-sm validate">
               
              </div>

              <div class="md-form form-sm mb-4">
                <i class="fas fa-lock prefix"></i>
                <input type="password" placeholder="Repeat password" id="modalLRInput14" class="form-control form-control-sm validate">
              </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                <label class="custom-control-label" for="defaultUnchecked">Accept the<a href="#" class="green-text font-weight-bold">
                              Terms and Conditions</a></label>
            </div>
              <div class="text-center form-sm mt-2">
                <button class="btn btn-info">Sign up <i class="fas fa-sign-in ml-1"></i></button>
              </div>

            </div>
              <div class="login_connect_with">
                Or Connect With
              </div>
            <!--Footer-->
            <div class="modal-footer">
              <div class="social">
                <a class="circle github" href="#">
                    <i class="fab fa-github"></i>
                </a>
                <a id="google_login" class="circle google" href="#">
                    <i class="fab fa-google"></i>
                </a>
                <a id="facebook_login" class="circle facebook" href="#">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </div>
            </div>
          </div>
          <!--/.Panel 8-->
        </div>

      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: Login / Register Form-->
