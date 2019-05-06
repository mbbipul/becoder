<?php
	require_once($_SERVER['DOCUMENT_ROOT']."/becoder/config.php");
	require_once($header);
	require_once($navbar);
	?>
	<style>

	.clockdiv{
		font-family: sans-serif;
	  font-size: 10px;
		display: inline-block;
		text-align: center;
		font-weight:bold;
	}

	.clockdiv > div{
		display: inline-block;
	}
	.clockdiv strong{
		font-size: 15px;
	}
	.clockdiv div > span{
	  color:black;
		padding-left: 5px;
		padding-right: 5px;
		font-size: 20px;
		display: inline-block;
	}

	.smalltext{
	  color: black;
		padding-top: 0;
	}
        
    .becoder-hover:hover
    {
        box-shadow: 0px 0px 5px #000000;
        z-index: 2;
        -webkit-transition: all 200ms ease-in;
        -webkit-transform: scale(1);
        -ms-transition: all 200ms ease-in;
        -ms-transform: scale(1);   
        -moz-transition: all 200ms ease-in;
        -moz-transform: scale(1);
        transition: all 200ms ease-in;
        transform: scale(1);
    }
    .enter-now:hover {
        background-color: #1BCD63;
        color: #000;
        z-index: 2;
        box-shadow: 0px 0px 2px #000000;
        -webkit-transition: all 200ms ease-in;
        -webkit-transform: scale(1);
        -ms-transition: all 200ms ease-in;
        -ms-transform: scale(1);   
        -moz-transition: all 200ms ease-in;
        -moz-transform: scale(1);
        transition: all 200ms ease-in;
        transform: scale(1);
    }
    .register-now:hover {
        background-color: #FF4959;
        color: #000;
        z-index: 2;
        box-shadow: 0px 0px 2px #000000;
        -webkit-transition: all 200ms ease-in;
        -webkit-transform: scale(1);
        -ms-transition: all 200ms ease-in;
        -ms-transform: scale(1);   
        -moz-transition: all 200ms ease-in;
        -moz-transform: scale(1);
        transition: all 200ms ease-in;
        transform: scale(1);
    }
    .enter-now {
        color: #1BCD63;
    }
    .register-now {
        color: #FF4959;   
    }
</style>
</head>
<main>
    <div class="container-fluid ">
      <section>
        <div class="row">
          <!--Grid column-->
        <div class="col-md-8 mb-4 card mt-2 grey lighten-5 ">
            <!--/.First row-->
            <div class="becoder_tutorial_header">
              <h1>All Contests</h1>
            </div>
            <hr class="extra-margins">
            <h3 style="padding-left:0px"> <b>Running</b></h3>
            <!--Second row Start for Running contest -->
         <!--From bipul for running contest -->
		        <div class=" card border-success becoder-hover mb-3 card-header">
                <div class="row " >
                  <div class="col-md-9">   <!-- divided into 9:3 in 12 -->
                  	<div class="row ">
                      <div class="col-md-8">
                        <h1 class="d-inline-block mb-2"> <strong>Becoder Round  hello...</strong></h1>
                      </div>
                      <div class="col-md-4">
												<div id="clockdiv" class="clockdiv">
												  <div>
												    <span class="hours"></span> <strong>:</strong>
												    <div class="smalltext">Hours</div>
												  </div>
												  <div>
												    <span class="minutes"></span> <strong>:</strong>
												    <div class="smalltext">Minutes</div>
												  </div>
												  <div>
												    <span class="seconds"></span>
												    <div class="smalltext">Seconds</div>
												  </div>
												</div>
						          </div>
                		</div>
                    <div class="row">
                      <div class="col-md-5 card-text" style="font-family:cursive;font-size: 80% !important" >
                        Sajal Debnath, Bu cse3
                      </div>
											<div class="col-md-3 no_padding">
												<a href="" class="text-success" style="font-size: 80%;">  Details Here </a>
                      </div>
                  		<div class="col-md-4 text-primary" style="padding-left:20px;">
												2:30 hours
											</div>
                    </div>
                  </div>
                <div class="col-md-3" style="border-left: 1px inset;padding-left:45px;"> <!--divided into 9:3 in 12-->
                    <div class="row" style="padding-top:10px !important " >
                        <a class="contest_reg_button enter-now"  href="specificContests.php"><strong>Enter Now</strong></a>
                    </div>
										<div class="row" style="font-size: 15px;padding-left: 10px;padding-top:5px">
											<span class="badge badge-secondary ml-2"><i class="fas fa-user"></i>124</span>
											<strong class="badge badge-pill badge-secondary ml-2">algorithm</strong>
										</div>
                </div>
              </div>
            </div>
		         <div class=" card border-success becoder-hover mb-3 card-header">
                <div class="row " >
                  <div class="col-md-9">   <!-- divided into 9:3 in 12 -->
                  	<div class="row ">

                      <div class="col-md-8">
                        <h1 class="d-inline-block mb-2"> <strong>Becoder Round  hello...</strong></h1>
                      </div>
                      <div class="col-md-4">
												<div id="clockdiv1" class="clockdiv">

					  <div>
					    <span class="hours"></span> <strong>:</strong>
					    <div class="smalltext">Hours</div>
					  </div>
					  <div>
					    <span class="minutes"></span> <strong>:</strong>
					    <div class="smalltext">Minutes</div>
					  </div>
					  <div>
					    <span class="seconds"></span>
					    <div class="smalltext">Seconds</div>
					  </div>
					</div>

          </div>
                </div>



                    <div class="row">
                      <div class="col-md-5 card-text" style="font-family:cursive;font-size: 80% !important" >
                        Sajal Debnath, Bu cse3
                      </div>
											<div class="col-md-3 no_padding">
												<a href="" class="text-success" style="font-size: 80%;">  Details Here </a>
                      </div>
                  		<div class="col-md-4 text-primary" style="padding-left:20px;">
												2:30 hours
											</div>
                    </div>
                  </div>


                  <div class="col-md-3" style="border-left: 1px inset;padding-left:45px;"> <!--divided into 9:3 in 12-->
                         <div class="row" style="padding-top:10px !important " >
                                  <a class="contest_reg_button enter-now"  href=""><strong>Enter Now</strong></a>
                         </div>
												 <div class="row" style="font-size: 15px;padding-left: 10px;padding-top:5px">
													 <span class="badge badge-secondary ml-2"><i class="fas fa-user"></i>124</span>
													 <strong class="badge badge-pill badge-secondary ml-2">algorithm</strong>
												 </div>

                  </div>
                </div>
              </div>
            <!--/.Second row End-->


            <hr class="extra-margins">
            <h3 style="padding-left:0px"> <b>Up Comming</b></h3>
            <!--third row Start (Upccomming contest) -->



				<div class=" card border-success becoder-hover mb-3 card-header">
                <div class="row " >
                  <div class="col-md-9">   <!-- divided into 9:3 in 12 -->
                  	<div class="row ">
                      <div class="col-md-8">
                        <h1 class="d-inline-block mb-2"> <strong>Becoder Round  hello...</strong></h1>
                      </div>
                      <div class="col-md-4">
												<div id="clockdivup1" class="clockdiv">
												  <div>
												    <span class="days"></span> <strong>:</strong>
												    <div class="smalltext">Days</div>
												  </div>
												  <div>
												    <span class="hours"></span> <strong>:</strong>
												    <div class="smalltext">Hours</div>
												  </div>
												  <div>
												    <span class="minutes"></span> <strong>:</strong>
												    <div class="smalltext">Minutes</div>
												  </div>
												  <div>
												    <span class="seconds"></span>
												    <div class="smalltext">Seconds</div>
												  </div>
												</div>
						          </div>
                		</div>
                    <div class="row">
                      <div class="col-md-5 card-text" style="font-family:cursive;font-size: 80% !important" >
                        Sajal Debnath, Bu cse3
                      </div>
											<div class="col-md-3 no_padding">
												<a href="" class="text-success" style="font-size: 80%;">  Details Here </a>
                      </div>
                  		<div class="col-md-4 text-primary" style="padding-left:20px;">
												2:30 hours
											</div>
                    </div>
                  </div>
                <div class="col-md-3" style="border-left: 1px inset;padding-left:45px;"> <!--divided into 9:3 in 12-->
                    <div class="row" style="padding-top:10px !important " >
                        <a class="contest_reg_button register-now"  href=""><strong>Register Now</strong></a>
                    </div>
										<div class="row" style="font-size: 15px;padding-left: 10px;padding-top:5px">
											<span class="badge badge-secondary ml-2"><i class="fas fa-user"></i>124</span>
											<strong class="badge badge-pill badge-secondary ml-2">algorithm</strong>
										</div>
                </div>
              </div>
            </div>

				<div class=" card border-success mb-3 becoder-hover card-header">
								<div class="row " >
									<div class="col-md-9">   <!-- divided into 9:3 in 12 -->
										<div class="row ">
											<div class="col-md-8">
												<h1 class="d-inline-block mb-2"> <strong>Becoder Round  hello...</strong></h1>
											</div>
											<div class="col-md-4">
												<div id="clockdivup2" class="clockdiv">
													<div>
														<span class="days"></span> <strong>:</strong>
														<div class="smalltext">Days</div>
													</div>
													<div>
														<span class="hours"></span> <strong>:</strong>
														<div class="smalltext">Hours</div>
													</div>
													<div>
														<span class="minutes"></span> <strong>:</strong>
														<div class="smalltext">Minutes</div>
													</div>
													<div>
														<span class="seconds"></span>
														<div class="smalltext">Seconds</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-5 card-text" style="font-family:cursive;font-size: 80% !important" >
												Sajal Debnath, Bu cse3
											</div>
											<div class="col-md-3 no_padding">
												<a href="" class="text-success" style="font-size: 80%;">  Details Here </a>
											</div>
											<div class="col-md-4 text-primary" style="padding-left:20px;">
												2:30 hours
											</div>
										</div>
									</div>
								<div class="col-md-3" style="border-left: 1px inset;padding-left:45px;"> <!--divided into 9:3 in 12-->
										<div class="row" style="padding-top:10px !important " >
												<a class="contest_reg_button register-now"  href=""><strong>Register Now</strong></a>
										</div>
										<div class="row" style="font-size: 15px;padding-left: 10px;padding-top:5px">
											<span class="badge badge-secondary ml-2"><i class="fas fa-user"></i>124</span>
											<strong class="badge badge-pill badge-secondary ml-2">algorithm</strong>
										</div>
								</div>
							</div>
						</div>


          <!-- Third row end (Upccomming contest) -->



          <hr class="extra-margins">
          <h3 style="padding-left:0px"> <b>Previous </b></h3>
          <!--Forth row Start (Previous contest) -->
					<?php
						$x=0;
						while($x<10){?>
							<div class=" card border-success becoder-hover becoder-expand mb-3 card-header" onmouseover="myFunction(<?php echo $x;?>)" onmouseout="myFunction(<?php echo $x;?>)">
									<div class="row " >
										<div class="col-md-9">   <!-- divided into 9:3 in 12 -->
											<div class="row ">
												<div class="col-md-6">
													<h3 class="d-inline-block mb-2"> <strong>Becoder Round  hello...</strong></h3>
												</div>
												<div class="col-md-4 mt-2">
													<p class="text-dark" >Date: 02 February, 2019 </p>
												</div>
												<div class="col-md-2 mt-2">
													<span class="badge badge-secondary ml-2"><i class="fas fa-user"></i>124</span>
												</div>
											</div>
											<div class="row" id="toggleviews<?php echo $x;?>" style="display:none">
												<div class="col-md-5 card-text" style="font-family:cursive;font-size: 80% !important" >
													Sajal Debnath, Bu cse3
												</div>
												<div class="col-md-3 no_padding">
													<a href="" class="text-success" style="font-size: 80%;">  Details Here </a>
												</div>
												<div class="col-md-4 text-primary" style="padding-left:20px;">
													2:30 hours
												</div>
											</div>
										</div>
									<div class="col-md-3" style="border-left: 1px inset;padding-left:45px;"> <!--divided into 9:3 in 12-->
											<div class="row" style="padding-top:0 !important " >
													<a class="contest_reg_button enter-now text-secondary"  href=""><strong>View Contest</strong></a>
											</div>
											<div class="row " id="toggleviews2<?php echo $x;?>" style="display: none;font-size: 15px;padding-left: 10px;padding-top:5px">
												<strong class="badge badge-pill badge-secondary ml-2">algorithm</strong>
											</div>
									</div>
								</div>
							</div>
							<?php $x++;
						}
					 ?>
    </div>
        <div class="col-md-4" style="padding-top:10px;">
            <div class="card mb-4 wow fadeIn rounded-lg">

              <!--Card content-->
            <div class="card-body">
                <a href="#!" class="card-link text-secondary mb-3"><strong>Create Contest</strong></a><br>
                <a href="#!" class="card-link text-secondary"><strong>Manage Contest</strong></a>
            </div>
            </div>
						<?php require_once($becoder_right_side) ?>

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
<!-- for days countdown -->
<script>

function myFunction(a) {
  var x = document.getElementById("toggleviews"+a);
	var y = document.getElementById("toggleviews2"+a);

  if (x.style.display === "none") {
        x.style.display = "";
        y.style.display = "";
  } else {
        x.style.display = "none";
		y.style.display = "none";
  }
}

function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  return {
    'total': t,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}

function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    var t = getTimeRemaining(endtime);

    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

var deadline = new Date(Date.parse(new Date()) + 9000 * 1000);
var deadline1 = new Date(Date.parse(new Date()) + 15 * 24 * 60 * 60 * 1000);

initializeClock('clockdiv', deadline);
initializeClock('clockdiv1', deadline);


// for days countdowntimer
function getTimeRemainingd(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  var days = Math.floor(t / (1000 * 60 * 60 * 24));
  return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}

function initializeClockd(id, endtime) {
  var clock = document.getElementById(id);
  var daysSpan = clock.querySelector('.days');
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    var t = getTimeRemainingd(endtime);

    daysSpan.innerHTML = t.days;
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

var deadlined = new Date(Date.parse(new Date()) + 15 * 24 * 60 * 60 * 1000);
initializeClockd('clockdivup1', deadlined);
initializeClockd('clockdivup2', deadlined);

</script>

<?php require_once($footer);?>
