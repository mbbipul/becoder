<?php require_once"header/head.php" ?>
<?php require_once"header/nav.php" ?>

<main>
    <div class="container-fluid">

      <!--Section: Post-->
    	<section class="mt-4">
        	<div class="row wow fadeIn" data-wow-delay="0.2s">
          		<div class="col-md-12">
            		<div class="jumbotron">
            			<ul class="nav nav-tabs" id="myTab" role="tablist">
  							<li class="nav-item">
    							<a class="nav-link active" id="problem-tab" data-toggle="tab" href="#problem" role="tab" aria-controls="problem"
      							aria-selected="true">Problems</a>
  							</li>
  							<li class="nav-item">
    							<a class="nav-link" id="submit-tab" data-toggle="tab" href="#submit" role="tab" aria-controls="submit"
      							aria-selected="false">Submit</a>
  							</li>
  							<li class="nav-item">
    							<a class="nav-link" id="mySubmission-tab" data-toggle="tab" href="#mySubmission" role="tab" aria-controls="mySubmission"
      							aria-selected="false">My Submission</a>
  							</li>
  							<li class="nav-item">
    							<a class="nav-link" id="allSubmission-tab" data-toggle="tab" href="#allSubmission" role="tab" aria-controls="allSubmission"
      							aria-selected="false">All Submission</a>
  							</li>
  							<li class="nav-item">
    							<a class="nav-link" id="standing-tab" data-toggle="tab" href="#standing" role="tab" aria-controls="standing"
      							aria-selected="false">Standing</a>
  							</li>
						</ul>

						<!-- Tab Contents -->
						<div class="tab-content" id="myTabContent">
  							<div class="tab-pane fade show active" id="problem" role="tabpanel" aria-labelledby="problem-tab">
  							problems
  							</div>

  							<div class="tab-pane fade " id="submit" role="tabpanel" aria-labelledby="submit-tab">
  							submits
  							</div>

  							<div class="tab-pane fade " id="mySubmission" role="tabpanel" aria-labelledby="mySubmission-tab">
  							my submission
  							</div>

  							<div class="tab-pane fade " id="allSubmission" role="tabpanel" aria-labelledby="allSubmission-tab">
  							all submission
  							</div>

  							<div class="tab-pane fade " id="standing" role="tabpanel" aria-labelledby="standing-tab">
  							standing
  							</div>
						</div>
						<!-- End tab Contents -->
            		</div>
        		</div>
    		</div>
    	</section>
	</div>
</main>







  <!--Footer layout-->

  <?php require_once"footer/footer.php" ?>

  <!--End Footer Layout-->