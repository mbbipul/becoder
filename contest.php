<?php require_once"header/head.php" ?>
<?php require_once"header/nav.php" ?>

<script>
	// Material Select Initialization
$(document).ready(function() {
$('.mdb-select').materialSelect();
});
</script>

<style>
	.submit-form{
    margin-top: 20px;
}
</style>

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

  							<div class="table-responsive">
  							<!--Table-->
  								<table class="table table-striped">


   							 <!--Table body-->
    								<tbody>
      									<tr>
        									<th scope="row">1</th>
        									<td><a href="#!" class=""> Problem name Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</a></td>
        									<td><h5><span class="badge badge-pill badge-default">9382</span></h5></td>
        									<td><a href="#"><button type="button" class="btn btn-secondary">Submit</button></a></td>
      									</tr>
									     <tr>
									        <th scope="row">1</th>
									        <td><a href="#!" class=""> Problem name Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</a></td>
									        <td><h5><span class="badge badge-pill badge-default">2322</span></h5></td><td><a href="#"><button type="button" class="btn btn-secondary">Submit</button></a></td>
									    </tr>
									    <tr>
									        <th scope="row">1</th>
									        <td><a href="#!" class=""> Problem name Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</a></td>
									       <td><h5><span class="badge badge-pill badge-default">1212</span></h5></td><td><a href="#"><button type="button" class="btn btn-secondary">Submit</button></a></td>
									    </tr>
									    <tr>
									        <th scope="row">1</th>
									        <td><a href="#!" class=""> Problem name Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</a></td>
									        <td><h5><span class="badge badge-pill badge-default">6767</span></h5></td><td><a href="#"><button type="button" class="btn btn-secondary">Submit</button></a></td>
									    </tr>
									    <tr>
									        <th scope="row">1</th>
									        <td><a href="#!" class=""> Problem name Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</a></td>
									        <td><h5><span class="badge badge-pill badge-default">2323</span></h5></td><td><a href="#"><button type="button" class="btn btn-secondary">Submit</button></a></td>
									    </tr>
									    <tr>
									        <th scope="row">1</th>
									        <td><a href="#!" class=""> Problem name Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</a></td>
									        <td><h5><span class="badge badge-pill badge-default">4545</span></h5></td><td><a href="#"><button type="button" class="btn btn-secondary">Submit</button></a></td>
									    </tr>
									    <tr>
									        <th scope="row">1</th>
									        <td><a href="#!" class=""> Problem name Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</a></td>
									        <td><h5><span class="badge badge-pill badge-default">233</span></h5></td><td><a href="#"><button type="button" class="btn btn-secondary">Submit</button></a></td>
									    </tr>
    								</tbody>
    							<!--Table body-->
  								</table>
  							<!--Table-->
							</div>

  							</div>

  							<div class="tab-pane fade " id="submit" role="tabpanel" aria-labelledby="submit-tab">
  							<!-- Horizontal material form -->
<form class="submit-form">
  <!-- Grid row -->
  <div class="form-group row">
    <!-- Material input -->
    <label for="problemId" class="col-sm-2 col-form-label">Problem Id:</label>
    <div class="col-sm-10">
      <div class="md-form mt-0">
        <input type="number" class="form-control" id="problemId" placeholder="Problem Id">
      </div>
    </div>
  </div>
  <!-- Grid row -->

  <!-- Grid row -->
  <div class="form-group row">
    <!-- Material input -->
    <label for="problemId" class="col-sm-2 col-form-label">Language:</label>
		<select class="mdb-select md-form">
		  <option value="" disabled selected>Choose Language</option>
		  <option value="1">ANCI C</option>
		  <option value="2">ANCI C++</option>
		  <option value="3">JAVA</option>
		  <option value="3">Python</option>
		</select>
	</div>

  <!-- Grid row -->
<div class="form-group row">
    <!-- Material input -->
  <label for="problemId" class="col-sm-2 col-form-label">Code:</label>
  <div class="form-group shadow-textarea">
  <textarea class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="10"  cols="100" placeholder="Place your Code here..."></textarea>
</div>
</div>

  <!-- Grid row -->
 <div class="form-group row">
    <!-- Material input -->
  <label for="problemId" class="col-sm-2 col-form-label">.. or file Upload:</label>
  <div class="form-group shadow-textarea">
  <input type="file">
</div>
</div>
  <!-- Grid row -->
<a href="#"><button type="button" class="btn btn-primary">Submit Code</button></a>

</form>
<!-- Horizontal material form -->
  							</div>

  							<div class="tab-pane fade " id="mySubmission" role="tabpanel" aria-labelledby="mySubmission-tab">
  							<div class="table-responsive">
  							<!--Table-->
  								<table class="table table-striped">

  									<!--Table head-->
								    <thead>
								      <tr>
								        <th>Problem Id</th>
								        <th>Problem Name</th>
								        <th>Status</th>
								        <th>Language</th>
								        <th>Run Time</th>
								        <th>Submission Date</th>
								      </tr>
								    </thead>
								    <!--Table head-->


   							 <!--Table body-->
    								<tbody>
      									<tr>
        									<th scope="row">1</th>
        									<td><a href="#!" class=""> Problem name Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</a></td>
        									<td><h5><span class="badge badge-pill badge-default">accepted</span></h5></td>
        									<td>ANCI C++</td>
        									<td>0.000</td>
        									<td>2019-03-20 16:58:20</td>
      									</tr>
									     <tr>
									        <th scope="row">1</th>
        									<td><a href="#!" class=""> Problem name Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</a></td>
        									<td><h5><span class="badge badge-pill badge-default">accepted</span></h5></td>
        									<td>ANCI C++</td>
        									<td>0.000</td>
        									<td>2019-03-20 16:58:20</td>
									    </tr>
									    <tr>
									        <th scope="row">1</th>
        									<td><a href="#!" class=""> Problem name Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</a></td>
        									<td><h5><span class="badge badge-pill badge-danger">Wrong Answer</span></h5></td>
        									<td>ANCI C++</td>
        									<td>0.000</td>
        									<td>2019-03-20 16:58:20</td>
									    </tr>
									    <tr>
									        <th scope="row">1</th>
        									<td><a href="#!" class=""> Problem name Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</a></td>
        									<td><h5><span class="badge badge-pill badge-warning">Compile Error</span></h5></td>
        									<td>ANCI C++</td>
        									<td>0.000</td>
        									<td>2019-03-20 16:58:20</td>
									    </tr>
									    <tr>
									        <th scope="row">1</th>
        									<td><a href="#!" class=""> Problem name Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</a></td>
        									<td><h5><span class="badge badge-pill badge-default">accepted</span></h5></td>
        									<td>ANCI C++</td>
        									<td>0.000</td>
        									<td>2019-03-20 16:58:20</td>
									    </tr>
									    <tr>
									        <th scope="row">1</th>
        									<td><a href="#!" class=""> Problem name Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</a></td>
        									<td><h5><span class="badge badge-pill badge-warning">Compile Error</span></h5></td>
        									<td>ANCI C++</td>
        									<td>0.000</td>
        									<td>2019-03-20 16:58:20</td>
									    </tr>
									    <tr>
									        <th scope="row">1</th>
        									<td><a href="#!" class=""> Problem name Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</a></td>
        									<td><h5><span class="badge badge-pill badge-default">accepted</span></h5></td>
        									<td>ANCI C++</td>
        									<td>0.000</td>
        									<td>2019-03-20 16:58:20</td>
									    </tr>
    								</tbody>
    							<!--Table body-->
  								</table>
  							<!--Table-->
							</div>


  							</div>

  							<div class="tab-pane fade " id="allSubmission" role="tabpanel" aria-labelledby="allSubmission-tab">
  							<div class="table-responsive">
  							<!--Table-->
  								<table class="table table-striped">

  									<!--Table head-->
								    <thead>
								      <tr>
								        <th>Problem Id</th>
								        <th>Ranking</th>
								        <th>Total Submission</th>
								        <th>Date</th>
								        <th>Run Time</th>
								      </tr>
								    </thead>
								    <!--Table head-->


   							 <!--Table body-->
    								<tbody>
      									<tr>
        									<th scope="row">134343</th>
        									<td><h5><span class="badge badge-pill badge-default">535353</span></h5></td>
        									<td><h5><span class="badge badge-pill badge-default">535353</span></h5></td>
        									<td>2019-03-20 16:58:20</td>
        									<td>0.000</td>
        									
      									</tr>
									     <tr>
									        <th scope="row">13454</th>
        									<td><h5><span class="badge badge-pill badge-default">535353</span></h5></td>
        									<td><h5><span class="badge badge-pill badge-default">535353</span></h5></td>
        									<td>2019-03-20 16:58:20</td>
        									<td>0.000</td>
									    </tr>
									    <tr>
									        <th scope="row">1434</th>
        									<td><h5><span class="badge badge-pill badge-default">535353</span></h5></td>
        									<td><h5><span class="badge badge-pill badge-default">535353</span></h5></td>
        									<td>2019-03-20 16:58:20</td>
        									<td>0.000</td>
									    </tr>
									    <tr>
									        <th scope="row">1245</th>
        									<td><h5><span class="badge badge-pill badge-default">535353</span></h5></td>
        									<td><h5><span class="badge badge-pill badge-default">535353</span></h5></td>
        									<td>2019-03-20 16:58:20</td>
        									<td>0.000</td>
									    </tr>
									    <tr>
									        <th scope="row">1874534</th>
        									<td><h5><span class="badge badge-pill badge-default">535353</span></h5></td>
        									<td><h5><span class="badge badge-pill badge-default">535353</span></h5></td>
        									<td>2019-03-20 16:58:20</td>
        									<td>0.000</td>
									    </tr>
									    <tr>
									        <th scope="row">13443</th>
        									<td><h5><span class="badge badge-pill badge-default">535353</span></h5></td>
        									<td><h5><span class="badge badge-pill badge-default">535353</span></h5></td>
        									<td>2019-03-20 16:58:20</td>
        									<td>0.000</td>
									    </tr>
									    <tr>
									        <th scope="row">14434</th>
        									<td><h5><span class="badge badge-pill badge-default">535353</span></h5></td>
        									<td><h5><span class="badge badge-pill badge-default">535353</span></h5></td>
        									<td>2019-03-20 16:58:20</td>
        									<td>0.000</td>
									    </tr>
    								</tbody>
    							<!--Table body-->
  								</table>
  							<!--Table-->
							</div>
  							</div>

  							<div class="tab-pane fade " id="standing" role="tabpanel" aria-labelledby="standing-tab">
  							standing here
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