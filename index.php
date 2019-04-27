<?php
  $root = "http://localhost/becoder/";
  $assets_folder = $root."assets/";
  $css_folder = $assets_folder."css/";
  $images_folder = $assets_folder."images/";
  $library_mdb_css_folder = $assets_folder."library/mdb/css/";
  $library_mdb_js_folder = $assets_folder."library/js/";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=2, shrink-to-fit=no">
  <link rel="icon" href="<?php echo $images_folder?>becoder_logo.jpg" type="image/gif" sizes="16x16">
  <title>becoder</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="<?php echo $library_mdb_css_folder;?>bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="<?php echo $library_mdb_css_folder;?>mdb.min.css" rel="stylesheet">
  <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="<?php echo $library_mdb_js_folder;?>bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="<?php echo $librarymdb__js_folder;?>mdb.min.js"></script>
  <style>
    /*becoder style*/
    .becoder_tutorial_header > h3{
      filter:blur(1px);
      font-size: 20px;
    }
    .becoder_tutorial_header{
      filter:blur(1px);
      margin-bottom: 3px;
    }

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
    /* TEMPLATE STYLES */

     main {
         padding-bottom: 2rem;
     }

     .extra-margins {
         margin-top: 1rem;
         margin-bottom: 2.5rem;
     }

     .jumbotron {
         text-align: center;
     }

     .navbar {
         background-color: #3b295a;
     }

     footer.page-footer {
         background-color: #3b295a;
         margin-top: 2rem;
     }
     .navbar .btn-group .dropdown-menu a:hover {
         color: #000 !important;
     }
     .navbar .btn-group .dropdown-menu a:active {
         color: #fff !important;
     }
   </style>
</head>


<body class="grey lighten-3">

  <!--Main Navigation-->
  <header>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="<?php echo $images_folder?>becoder_logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
      </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#becoderNavbarToggle" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="becoderNavbarToggle">
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
    <!--/.Navbar-->

  </header>


  <!--Main Navigation-->
  <div class="row wow fadeIn" data-wow-delay="0.2s">
    <div class="col-md-12">
      <div class="jumbotron">
        <h2 class="h2-responsive">Learn to be a Coder</h2>
        <br>
        <p>In communications and information processing, code is a
        system of rules to convert information—such as a letter, word, sound,
        image, or gesture—into another form or representation, sometimes
        shortened or secret, for communication through a communication channel
         or storage in a storage medium.</p>
        <hr>
        <p>Register and get access to code</p>
        <a  href="" class="btn btn-outline-unique" rel="nofollow">Register
          <i class="fas fa-download right"></i>
        </a>
        <a href="" class="btn btn-unique btn-ptc"
          rel="nofollow">Log in <i class="fas fa-book right"></i></a>
      </div>
    </div>
  </div>
  <!--Grid row-->
  <!--Section: Post-->
  <!--Main layout-->

  <main>
    <div class="container-fluid">

      <section class="mt-4">

        <div class="row">

          <!--Grid column-->
          <div class="col-md-8 mb-4 ">
            <!--/.First row-->

            <div class="becoder_tutorial_header">
              <h3>Learn code</h3>
              <h1>Tutorials</h1>
            </div>
            <hr class="extra-margins">

            <!--Second row-->
            <div class="row">
              <!--First columnn-->
              <div class="col-lg-4" height="200px !important">
                <!--Card-->
                <div class="card wow fadeIn " data-wow-delay="0.2s">

                  <!--Card image-->
                  <img class="img-fluid " src="<?php echo $images_folder;?>algorithm.jpg"
                    alt="Card image cap" height="100px" width="100px">

                  <!--Card content-->
                  <div class="card-body">
                    <!--Title-->
                    <h4 class="card-title">Data Structure</h4>
                    <!--Text-->
                    <p class="card-text">In computer science, a data structure is a
                      data organization, management and storage format that enables
                      efficient access.</p>
                    <a href="#" class="btn btn-info">Learn Algorithm</a>
                  </div>

                </div>
                <!--/.Card-->
              </div>
              <!--First columnn-->

              <!--Second columnn-->
              <div class="col-lg-4">
                <!--Card-->
                <div class="card wow fadeIn" data-wow-delay="0.4s">

                  <!--Card image-->
                  <img class="img-fluid " src="<?php echo $images_folder;?>algorithm.jpg"
                    alt="Card image cap" height="100px" width="100px">

                  <!--Card content-->
                  <div class="card-body">
                    <!--Title-->
                    <h4 class="card-title">Algorithm</h4>
                    <!--Text-->
                    <p class="card-text">In mathematics and computer science,
                      an algorithm is an unambiguous specification of how to solve a
                      class of problems. </p>
                    <a href="#" class="btn btn-info">Learn Algorithm</a>
                  </div>

                </div>
                <!--/.Card-->

              </div>
              <!--Second columnn-->

              <!--Third columnn-->
              <div class="col-lg-4">
                <!--Card-->
                <div class="card wow fadeIn" data-wow-delay="0.6s">

                  <!--Card image-->
                  <img class="img-fluid " src="<?php echo $images_folder;?>algorithm.jpg"
                    alt="Card image cap" height="100px" width="100px">
                  <!--Card content-->
                  <div class="card-body">
                    <!--Title-->
                    <h4 class="card-title">Mathmatics</h4>
                    <!--Text-->
                    <p class="card-text">Mathematics includes the study of such
                      topics as quantity, structure, space, and change.
                      Mathematicians seek</p>
                    <a href="#" class="btn btn-info">Learn Mathmatics</a>
                  </div>

                </div>
                <!--/.Card-->
              </div>
              <!--Third columnn-->
            </div>
            <!--/.Second row-->
            <hr class="extra-margins">
            <div class="becoder_tutorial_header mt-3">
              <h3 class="mt-3"> Read Articles</h3>
              <h2>Articles</h2>
            </div>
            <div class="row">

              <div class="col-md-12">
      <div class="card flex-md-row mb-4 shadow-sm h-md-250">
         <div class="card-body d-flex flex-column align-items-start">
            <strong class="d-inline-block mb-2 text-success">Health</strong>
            <h6 class="mb-0">
               <a class="text-dark" href="#">Food for Thought: Diet and Brain Health</a>
            </h6>
            <div class="mb-1 text-muted small">Nov 11</div>
            <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
            <a class="btn btn-outline-success btn-sm" href="">Continue reading</a>
         </div>
         <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="//placeimg.com/250/250/nature" style="width: 300px; height: 250px;">
      </div>
   </div>
   <div class="col-md-12">
<div class="card flex-md-row mb-4 shadow-sm h-md-250">
<div class="card-body d-flex flex-column align-items-start">
 <strong class="d-inline-block mb-2 text-success">Health</strong>
 <h6 class="mb-0">
    <a class="text-dark" href="#">Food for Thought: Diet and Brain Health</a>
 </h6>
 <div class="mb-1 text-muted small">Nov 11</div>
 <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
 <a class="btn btn-outline-success btn-sm" href="">Continue reading</a>
</div>
<img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="//placeimg.com/250/250/nature" style="width: 300px; height: 250px;">
</div>
</div>
<div class="col-md-12">
<div class="card flex-md-row mb-4 shadow-sm h-md-250">
<div class="card-body d-flex flex-column align-items-start">
<strong class="d-inline-block mb-2 text-success">Health</strong>
<h6 class="mb-0">
 <a class="text-dark" href="#">Food for Thought: Diet and Brain Health</a>
</h6>
<div class="mb-1 text-muted small">Nov 11</div>
<p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
<a class="btn btn-outline-success btn-sm" href="">Continue reading</a>
</div>
<img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="//placeimg.com/250/250/nature" style="width: 300px; height: 250px;">
</div>
</div>
      <!--Grid column-->
            </div>

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-4 mb-4">

            <!--Card: Jumbotron-->
            <div class="">

              <!-- Search form -->
                <form class="form-inline md-form form-sm active-cyan-2 mt-2">
                  <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search coder " aria-label="Search">
                  <i class="fas fa-search" aria-hidden="true"></i>
                </form>
              <!-- Content -->
            </div>
            <!--Card: Jumbotron-->

            <!--Card : COntest card-->
            <div class="card mb-4 wow fadeIn">

              <div class="card-header">Running Contests</div>

              <!--Card content-->
              <div class="card-body">

                <ul class="list-unstyled">
                  <li class="media">
                    <img class="d-flex mr-3" src="https://mdbootstrap.com/img/Photos/Others/placeholder7.jpg" alt="Generic placeholder image">
                    <div class="media-body">
                      <a href="">
                        <h5 class="mt-0 mb-1 font-weight-bold">List-based media object</h5>
                      </a>
                      Cras sit amet nibh libero, in gravida nulla (...)
                    </div>
                  </li>
                  <li class="media my-4">
                    <img class="d-flex mr-3" src="https://mdbootstrap.com/img/Photos/Others/placeholder6.jpg" alt="An image">
                    <div class="media-body">
                      <a href="">
                        <h5 class="mt-0 mb-1 font-weight-bold">List-based media object</h5>
                      </a>
                      Cras sit amet nibh libero, in gravida nulla (...)
                    </div>
                  </li>
                  <li class="media">
                    <img class="d-flex mr-3" src="https://mdbootstrap.com/img/Photos/Others/placeholder5.jpg" alt="Generic placeholder image">
                    <div class="media-body">
                      <a href="">
                        <h5 class="mt-0 mb-1 font-weight-bold">List-based media object</h5>
                      </a>
                      Cras sit amet nibh libero, in gravida nulla (...)
                    </div>
                  </li>
                </ul>
                <div class="mt-3">Upcoming Contests</div>
                <hr>
                <ul class="list-unstyled mt-3">
                  <li class="media">
                    <img class="d-flex mr-3" src="https://mdbootstrap.com/img/Photos/Others/placeholder7.jpg" alt="Generic placeholder image">
                    <div class="media-body">
                      <a href="">
                        <h5 class="mt-0 mb-1 font-weight-bold">List-based media object</h5>
                      </a>
                      Cras sit amet nibh libero, in gravida nulla (...)
                    </div>
                  </li>
                  <li class="media my-4">
                    <img class="d-flex mr-3" src="https://mdbootstrap.com/img/Photos/Others/placeholder6.jpg" alt="An image">
                    <div class="media-body">
                      <a href="">
                        <h5 class="mt-0 mb-1 font-weight-bold">List-based media object</h5>
                      </a>
                      Cras sit amet nibh libero, in gravida nulla (...)
                    </div>
                  </li>
                  <li class="media">
                    <img class="d-flex mr-3" src="https://mdbootstrap.com/img/Photos/Others/placeholder5.jpg" alt="Generic placeholder image">
                    <div class="media-body">
                      <a href="">
                        <h5 class="mt-0 mb-1 font-weight-bold">List-based media object</h5>
                      </a>
                      Cras sit amet nibh libero, in gravida nulla (...)
                    </div>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                 <a href="#!" class="card-link">View All</a>
              </div>

            </div>
            <!--/.Card : Dynamic content wrapper-->
            <div class="card mb-4 wow fadeIn">

              <div class="card-header">Recent Tutorials</div>

              <!--Card content-->
              <div class="card-body">

                <ul class="list-unstyled">
                  <li class="media">
                    <img class="d-flex mr-3" src="https://mdbootstrap.com/img/Photos/Others/placeholder7.jpg" alt="Generic placeholder image">
                    <div class="media-body">
                      <a href="">
                        <h5 class="mt-0 mb-1 font-weight-bold">List-based media object</h5>
                      </a>
                      Cras sit amet nibh libero, in gravida nulla (...)
                    </div>
                  </li>
                  <li class="media my-4">
                    <img class="d-flex mr-3" src="https://mdbootstrap.com/img/Photos/Others/placeholder6.jpg" alt="An image">
                    <div class="media-body">
                      <a href="">
                        <h5 class="mt-0 mb-1 font-weight-bold">List-based media object</h5>
                      </a>
                      Cras sit amet nibh libero, in gravida nulla (...)
                    </div>
                  </li>
                  <li class="media">
                    <img class="d-flex mr-3" src="https://mdbootstrap.com/img/Photos/Others/placeholder5.jpg" alt="Generic placeholder image">
                    <div class="media-body">
                      <a href="">
                        <h5 class="mt-0 mb-1 font-weight-bold">List-based media object</h5>
                      </a>
                      Cras sit amet nibh libero, in gravida nulla (...)
                    </div>
                  </li>
                </ul>

              </div>
              <div class="card-body">
                 <a href="#!" class="card-link">View All</a>
              </div>


            </div>
            <!--Card-->
            <div class="card mb-4 wow fadeIn">

              <div class="card-header">Recent articles</div>

              <!--Card content-->
              <div class="card-body">

                <ul class="list-unstyled">
                  <li class="media">
                    <img class="d-flex mr-3" src="https://mdbootstrap.com/img/Photos/Others/placeholder7.jpg" alt="Generic placeholder image">
                    <div class="media-body">
                      <a href="">
                        <h5 class="mt-0 mb-1 font-weight-bold">List-based media object</h5>
                      </a>
                      Cras sit amet nibh libero, in gravida nulla (...)
                    </div>
                  </li>
                  <li class="media my-4">
                    <img class="d-flex mr-3" src="https://mdbootstrap.com/img/Photos/Others/placeholder6.jpg" alt="An image">
                    <div class="media-body">
                      <a href="">
                        <h5 class="mt-0 mb-1 font-weight-bold">List-based media object</h5>
                      </a>
                      Cras sit amet nibh libero, in gravida nulla (...)
                    </div>
                  </li>
                  <li class="media">
                    <img class="d-flex mr-3" src="https://mdbootstrap.com/img/Photos/Others/placeholder5.jpg" alt="Generic placeholder image">
                    <div class="media-body">
                      <a href="">
                        <h5 class="mt-0 mb-1 font-weight-bold">List-based media object</h5>
                      </a>
                      Cras sit amet nibh libero, in gravida nulla (...)
                    </div>
                  </li>
                </ul>

              </div>
              <div class="card-body">
                 <a href="#!" class="card-link">View All</a>
              </div>


            </div>
            <!--/.Card-->

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </section>
      <!--Section: Post-->

    </div>
  </main>
  <!--Main layout-->
  <!--Footer-->
  <footer class="page-footer text-center text-md-left mt-4 pt-4">
    <!--Footer links-->
    <div class="container-fluid">
      <div class="row">
        <!--First column-->
        <div class="col-lg-3 col-md-6 ml-auto">
          <h5 class="title mb-3"><strong>About becoder</strong></h5>
          <p>In mathematics and computer science, an algorithm is an unambiguous
             specification of how to solve a class of problems.</p>
          <p>In mathematics and computer science, an algorithm is an unambiguous
            specification of how to solve a class of problems.</p>
        </div>
        <!--/.First column-->
        <hr class="w-100 clearfix d-sm-none">
        <!--Second column-->
        <div class="col-lg-2 col-md-6 ml-auto mb-4">
          <h5 class="title mb-3"><strong>First column</strong></h5>
          <ul class="list-unstyled">
            <li>
              <a href="#!">Link 1</a>
            </li>
            <li>
              <a href="#!">Link 2</a>
            </li>
            <li>
              <a href="#!">Link 3</a>
            </li>
            <li>
              <a href="#!">Link 4</a>
            </li>
          </ul>
        </div>
        <!--/.Second column-->
        <hr class="w-100 clearfix d-sm-none">
        <!--Third column-->
        <div class="col-lg-2 col-md-6 ml-auto mb-4">
          <h5 class="title mb-3"><strong>Second column</strong></h5>
          <ul class="list-unstyled">
            <li>
              <a href="#!">Link 1</a>
            </li>
            <li>
              <a href="#!">Link 2</a>
            </li>
            <li>
              <a href="#!">Link 3</a>
            </li>
            <li>
              <a href="#!">Link 4</a>
            </li>
          </ul>
        </div>
        <!--/.Third column-->
        <hr class="w-100 clearfix d-sm-none">
        <!--Fourth column-->
        <div class="col-lg-2 col-md-6 ml-auto mb-4">
          <h5 class="title mb-3"><strong>Third column</strong></h5>
          <ul class="list-unstyled">
            <li>
              <a href="#!">Link 1</a>
            </li>
            <li>
              <a href="#!">Link 2</a>
            </li>
            <li>
              <a href="#!">Link 3</a>
            </li>
            <li>
              <a href="#!">Link 4</a>
            </li>
          </ul>
        </div>
        <!--/.Fourth column-->
      </div>
    </div>
    <!--/.Footer links-->
    <hr>
    <!--Call to action-->
    <div class="call-to-action text-center my-4">
      <h4 class="mb-4">Learn to code</h4>
      <h5 class="mb-4">Register and start coding</h5>
      <ul class="list-unstyled list-inline">
        <li class="list-inline-item">
          <a href="#" class="btn btn-primary waves-effect waves-light"
            rel="nofollow">Register</a>
        </li>
        <li class="list-inline-item">
          <a  href="#" class="btn btn-info waves-effect waves-light"
            rel="nofollow">Log in</a>
        </li>
      </ul>
    </div>
    <!--/.Call to action-->

    <!--Copyright-->
    <div class="footer-copyright py-3 text-center">
      <div class="containter-fluid">
        © 2019 Copyright: <a href="<?php echo $root;?>"> becoder.com </a>
      </div>
    </div>
    <!--/.Copyright-->
  </footer>
  <!--/.Footer-->
  <script>
  new WOW().init();
  </script>
</body>

</html>
