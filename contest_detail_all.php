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
  <title>contest page</title>
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

     /* for Register and details button */
     .RD:link {
        text-decoration: none;
      }

      .RD:visited {
        text-decoration: none;
      }

      .RD:hover {
        text-decoration: underline;
      }

      .RD:active {
        text-decoration: underline;
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
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Practice</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contest_detail_all.php">Contests</a>
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
<!--Its removed -->
  <!--Main layout-->

  <main>
    <div class="container-fluid">

      <section class="mt-4">

        <div class="row">

          <!--Grid column-->
          <div class="col-md-8 mb-4 ">
            <!--/.First row-->

            <div class="becoder_tutorial_header">

              <h1>All Contests</h1>
            </div>
            <hr class="extra-margins">
            <h3 style="padding-left:0px"> <b>Running</b></h3>



            <!--Second row Start for Running contest -->
            <div class=" card container" >
                   <div class="row" >
                     <div class="col-md-9"style="padding-top:12px !important ">   <!-- divided into 9:3 in 12 -->
                       <div class="row">

                         <div class="col-md-4">
                           <strong class="d-inline-block mb-2 text-success"> Becoder Round 01</strong>
                         </div>

                         <div class="col-md-4">
                           <p class="text-dark" >CountDown: 00:53:12</p>
                         </div>

                         <div class="col-md-4">
                           <p class="text-dark">Duration: 2 hr</p>
                         </div>
                       </div>



                       <div class="row">
                         <div class="col-md-6">
                           <p class="card-text mb-auto" style="font-family:cursive;font-size: 80% !important" >
                             Author: Sajal Debnath, Bu cse3
                           </p>
                         </div>
                         <div class="col-md-6">
                           <p><a href="" style="margin-left:100px; font-size: 80%;padding-left: 10px; color:black;">  Details Here   </a></p>
                         </div>
                       </div>
                     </div>


                     <div class="col-md-3" style="border-left: 1px inset;padding-left:45px;"> <!--divided into 9:3 in 12-->
                            <div class="row" style="padding-top:12px !important " >
                                     <a class="RD"  href="" style="font-size: 90%">Register Now</a>
                            </div>
                             <div class="row">
                                     <p class="card-text mb-auto" style="font-size: 90% !important" >  Particepanting: <i>145</i>    </p>
                            </div>
                            <div class="row">
                                     <p class="card-text mb-auto" style="font-size: 90% !important" >
                                       Type: Algorithm
                                     </p>
                            </div>
                     </div>
                   </div>
                 </div>
               </br>


         <!--From bipul for running contest -->
         <div class=" card container">
                <div class="row" >
                  <div class="col-md-9"style="padding-top:12px !important ">   <!-- divided into 9:3 in 12 -->
                  	<div class="row">

                      <div class="col-md-4">
                        <strong class="d-inline-block mb-2 text-success"> Becoder Round 02</strong>
                      </div>

                      <div class="col-md-4">
                        <p class="text-dark" >CountDown: 00:53:12</p>
                      </div>

                      <div class="col-md-4">
                        <p class="text-dark">Duration: 2 hr</p>
                      </div>
                    </div>



                    <div class="row">
                      <div class="col-md-6">
                        <p class="card-text mb-auto" style="font-family:cursive;font-size: 80% !important" >
                          Author: Sajal Debnath, Bu cse3
                        </p>
                      </div>
                      <div class="col-md-6">
                        <p><a href="" style="margin-left:100px; font-size: 80%;padding-left: 10px; color:black;">  Details Here   </a></p>
                      </div>
                    </div>
                  </div>


                  <div class="col-md-3" style="border-left: 1px inset;padding-left:45px;"> <!--divided into 9:3 in 12-->
                         <div class="row" style="padding-top:12px !important " >
                                  <a class="RD"  href="" style="font-size: 90%">Register Now</a>
                         </div>
                          <div class="row">
                                  <p class="card-text mb-auto" style="font-size: 90% !important" >  Particepanting: <i>145</i>    </p>
                         </div>
                         <div class="row">
                                  <p class="card-text mb-auto" style="font-size: 90% !important" >
                                    Type: Algorithm
                                  </p>
                         </div>
                  </div>
                </div>
              </div>

            <!--/.Second row End-->


            <hr class="extra-margins">
            <h3 style="padding-left:0px"> <b>Up Comming</b></h3>
            <!--third row Start (Upccomming contest) -->



            <div class=" card container" >
                   <div class="row" >
                     <div class="col-md-9"style="padding-top:12px !important ">   <!-- divided into 9:3 in 12 -->
                       <div class="row">

                         <div class="col-md-4">
                           <strong class="d-inline-block mb-2 text-success"> Becoder Round 01</strong>
                         </div>

                         <div class="col-md-4">
                           <p class="text-dark" >Start at: 19 May, 2019</p>
                         </div>

                         <div class="col-md-4">
                           <p class="text-dark">Duration: 2 hr</p>
                         </div>
                       </div>



                       <div class="row">
                         <div class="col-md-6">
                           <p class="card-text mb-auto" style="font-family:cursive;font-size: 80% !important" >
                             Author: Sajal Debnath, Bu cse3
                           </p>
                         </div>
                         <div class="col-md-6">
                           <p><a href="" style="margin-left:100px; font-size: 80%;padding-left: 10px; color:black;">  Details Here   </a></p>
                         </div>
                       </div>
                     </div>


                     <div class="col-md-3" style="border-left: 1px inset;padding-left:45px;"> <!--divided into 9:3 in 12-->
                            <div class="row" style="padding-top:12px !important " >
                                     <a class="RD"  href="" style="font-size: 90%">Register Now</a>
                            </div>
                             <div class="row">
                                     <p class="card-text mb-auto" style="font-size: 90% !important" >  Particepanting: <i>145</i>    </p>
                            </div>
                            <div class="row">
                                     <p class="card-text mb-auto" style="font-size: 90% !important" >
                                       Type: Algorithm
                                     </p>
                            </div>
                     </div>
                   </div>
                 </div>
               </br>


         <!--From bipul for up coming contest -->
         <div class=" card container">
                <div class="row" >
                  <div class="col-md-9"style="padding-top:12px !important ">   <!-- divided into 9:3 in 12 -->
                    <div class="row">

                      <div class="col-md-4">
                        <strong class="d-inline-block mb-2 text-success"> Becoder Round 02</strong>
                      </div>

                      <div class="col-md-4">
                        <p class="text-dark" >Start at: 03 May, 2019</p>
                      </div>

                      <div class="col-md-4">
                        <p class="text-dark">Duration: 2 hr</p>
                      </div>
                    </div>



                    <div class="row">
                      <div class="col-md-6">
                        <p class="card-text mb-auto" style="font-family:cursive;font-size: 80% !important" >
                          Author: Sajal Debnath, Bu cse3
                        </p>
                      </div>
                      <div class="col-md-6">
                        <p><a href="" style="margin-left:100px; font-size: 80%;padding-left: 10px; color:black;">  Details Here   </a></p>
                      </div>
                    </div>
                  </div>


                  <div class="col-md-3" style="border-left: 1px inset;padding-left:45px;"> <!--divided into 9:3 in 12-->
                         <div class="row" style="padding-top:12px !important " >
                                  <a class="RD"  href="" style="font-size: 90%">Register Now</a>
                         </div>
                          <div class="row">
                                  <p class="card-text mb-auto" style="font-size: 90% !important" >  Particepanting: <i>145</i>    </p>
                         </div>
                         <div class="row">
                                  <p class="card-text mb-auto" style="font-size: 90% !important" >
                                    Type: Algorithm
                                  </p>
                         </div>
                  </div>
                </div>
              </div>



          <!-- Third row end (Upccomming contest) -->



          <hr class="extra-margins">
          <h3 style="padding-left:0px"> <b>Previous </b></h3>
          <!--Forth row Start (Previous contest) -->


          <div class=" card container" >
                 <div class="row" >
                   <div class="col-md-9"style="padding-top:12px !important ">   <!-- divided into 9:3 in 12 -->
                     <div class="row">

                       <div class="col-md-4">
                         <strong class="d-inline-block mb-2 text-success"> Becoder Round 01</strong>
                       </div>

                       <div class="col-md-4" style="font-size: 90% !important">
                         <p class="text-dark" >Date: 02 February, 2019 </p>
                       </div>

                       <div class="col-md-4">
                         <p class="card-text mb-auto" style="font-size: 90% !important" >  Particepation: <i>145</i>    </p>
                       </div>
                     </div>
                   </div>


                   <div class="col-md-3" style="border-left: 1px inset;padding-left:100px;"> <!--divided into 9:3 in 12-->
                          <div class="row" style="padding-top:12px !important " >
                                   <a class="RD"  href="" style="font-size: 90%">Enter</a>
                          </div>

                   </div>
                 </div>
               </div>
             </br>



             <div class=" card container" >
                    <div class="row" >
                      <div class="col-md-9"style="padding-top:12px !important ">   <!-- divided into 9:3 in 12 -->
                        <div class="row">

                          <div class="col-md-4">
                            <strong class="d-inline-block mb-2 text-success"> Becoder Round 01</strong>
                          </div>

                          <div class="col-md-4" style="font-size: 90% !important">
                            <p class="text-dark" >Date: 02 February, 2019 </p>
                          </div>

                          <div class="col-md-4">
                            <p class="card-text mb-auto" style="font-size: 90% !important" >  Particepation: <i>145</i>    </p>
                          </div>
                        </div>
                      </div>


                      <div class="col-md-3" style="border-left: 1px inset;padding-left:100px;"> <!--divided into 9:3 in 12-->
                             <div class="row" style="padding-top:12px !important " >
                                      <a class="RD"  href="" style="font-size: 90%">Enter</a>
                             </div>

                      </div>
                    </div>
                  </div>
                </br>

                <div class=" card container" >
                       <div class="row" >
                         <div class="col-md-9"style="padding-top:12px !important ">   <!-- divided into 9:3 in 12 -->
                           <div class="row">

                             <div class="col-md-4">
                               <strong class="d-inline-block mb-2 text-success"> Becoder Round 01</strong>
                             </div>

                             <div class="col-md-4" style="font-size: 90% !important">
                               <p class="text-dark" >Date: 02 February, 2019 </p>
                             </div>

                             <div class="col-md-4">
                               <p class="card-text mb-auto" style="font-size: 90% !important" >  Particepation: <i>145</i>    </p>
                             </div>
                           </div>
                         </div>


                         <div class="col-md-3" style="border-left: 1px inset;padding-left:100px;"> <!--divided into 9:3 in 12-->
                                <div class="row" style="padding-top:12px !important " >
                                         <a class="RD"  href="" style="font-size: 90%">Enter</a>
                                </div>

                         </div>
                       </div>
                     </div>
                   </br>


                   <div class=" card container" >
                          <div class="row" >
                            <div class="col-md-9"style="padding-top:12px !important ">   <!-- divided into 9:3 in 12 -->
                              <div class="row">

                                <div class="col-md-4">
                                  <strong class="d-inline-block mb-2 text-success"> Becoder Round 01</strong>
                                </div>

                                <div class="col-md-4" style="font-size: 90% !important">
                                  <p class="text-dark" >Date: 02 February, 2019 </p>
                                </div>

                                <div class="col-md-4">
                                  <p class="card-text mb-auto" style="font-size: 90% !important" >  Particepation: <i>145</i>    </p>
                                </div>
                              </div>
                            </div>


                            <div class="col-md-3" style="border-left: 1px inset;padding-left:100px;"> <!--divided into 9:3 in 12-->
                                   <div class="row" style="padding-top:12px !important " >
                                            <a class="RD"  href="" style="font-size: 90%">Enter</a>
                                   </div>

                            </div>
                          </div>
                        </div>
                      </br>

                      <div class=" card container" >
                             <div class="row" >
                               <div class="col-md-9"style="padding-top:12px !important ">   <!-- divided into 9:3 in 12 -->
                                 <div class="row">

                                   <div class="col-md-4">
                                     <strong class="d-inline-block mb-2 text-success"> Becoder Round 01</strong>
                                   </div>

                                   <div class="col-md-4" style="font-size: 90% !important">
                                     <p class="text-dark" >Date: 02 February, 2019 </p>
                                   </div>

                                   <div class="col-md-4">
                                     <p class="card-text mb-auto" style="font-size: 90% !important" >  Particepation: <i>145</i>    </p>
                                   </div>
                                 </div>
                               </div>


                               <div class="col-md-3" style="border-left: 1px inset;padding-left:100px;"> <!--divided into 9:3 in 12-->
                                      <div class="row" style="padding-top:12px !important " >
                                               <a class="RD"  href="" style="font-size: 90%">Enter</a>
                                      </div>

                               </div>
                             </div>
                           </div>
                         </br>

          <!-- Forth row end (Previous contest) -->




            <hr class="extra-margins">
    <div class="row">
      <!--Grid column-->
    </div>




    </div>
         <div class="col-md-4 mb-4">
            <!--Card: Jumbotron-->
            <div class=""><br><br>

              <!-- Search form -->
                <form class="form-inline md-form form-sm active-cyan-2 mt-2">
                  <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search Contest " aria-label="Search">
                  <i class="fas fa-search" aria-hidden="true"></i>
                </form>
            </div><br>

            <!--/.Card-->

            <!--/Capied By sajal for button card -->
            <div class="card mb-4 wow fadeIn">

              <!--Card content-->
              <div class="card-body">
                 <a href="#!" class="card-link">Create Contest</a><br><br>
                 <a href="#!" class="card-link">Manage Contest</a>
              </div>
            </div>
          <!-- Capied End by sajal for button card -->
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
        <div class="containter-fluid"> © 2019 Copyright: <a href="<?php echo $root;?>"> becoder.com </a></div>
    </div>
    <!--/.Copyright-->
  </footer>
  <!--/.Footer-->

        <script>
        new WOW().init();
        </script>

</body>
</html>
