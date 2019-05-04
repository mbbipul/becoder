<?php
	require_once($_SERVER['DOCUMENT_ROOT']."/becoder/config.php");
	require_once($header);
	require_once($navbar);
	?>

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
        <a  href="" data-toggle="modal" data-target="#modalLRForm"  class="btn btn-outline-unique" rel="nofollow">Register
          <i class="fas fa-download right"></i>
        </a>
        <a href="" data-toggle="modal" data-target="#modalLRForm"  class="btn btn-unique btn-ptc"
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


  <!--Footer layout-->

  <?php require_once($footer) ?>

  <!--End Footer Layout-->
