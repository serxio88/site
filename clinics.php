<?php define( '_ACCESS', 1 ); ?>

<?php

    $page_name = 'clinics';
    $page_title = 'Clinics';
	$page_keywords = '';
	$page_description = '';
	
?>

    <?php include($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?=$page_title?></li>
        </ol>
    </nav>

    <section class="bg-gray">

        <form class="filter">
            <div class="row">
                <div class="col-sm-9">
                    <label class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">Airport transfer</span>
					</label>
                    <label class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">Work with children</span>
					</label>
                    <label class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">Only high rated</span>
					</label>
                    <label class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">Emergency department</span>
					</label>
                    <label class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">Member of MPT insurance program</span>
					</label> 
                </div>
                <!--/.col-->
				
                <div class="col-sm-3">
                    <button type="button" id="btn-more" class="btn btn-secondary float-right" data-toggle="collapse" data-target="#moreFilters">
						<i class="fas fa-angle-down"></i> More filters
					</button>
                </div>
                <!--/.col-->
				
            </div>
            <!--/.row-->

            <div class="collapse" id="moreFilters">
			
                <hr />
				
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-sm-12">
 
                        <h3>Funding</h3>
                        <label class="custom-control custom-radio">
							<input id="radio4-1" name="radio4" type="radio" class="custom-control-input" checked="checked">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Any</span>
						</label>
                        <label class="custom-control custom-radio">
							<input id="radio4-2" name="radio4" type="radio" class="custom-control-input">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Public</span>
						</label>
                        <label class="custom-control custom-radio">
							<input id="radio4-3" name="radio4" type="radio" class="custom-control-input">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Commercial</span>
						</label>
                    </div>
                    <!--/.col-->
                    <div class="col-xl-3 col-md-6 col-sm-12">

                        <h3>Location</h3>
                        <label class="custom-control custom-radio">
							<input id="radio2-1" name="radio2" type="radio" class="custom-control-input" checked="checked">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">In your city</span>
						</label>
                        <label class="custom-control custom-radio">
							<input id="radio2-2" name="radio2" type="radio" class="custom-control-input">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Worldwide</span>
						</label>
                    </div>
                    <!--/.col-->
                    <div class="col-xl-3 col-md-6 col-sm-12">

                        <h3>Sort by</h3>
                        <label class="custom-control custom-radio">
							<input id="radio3-1" name="radio3" type="radio" class="custom-control-input" checked="checked">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">By rating</span>
						</label>
                        <label class="custom-control custom-radio">
							<input id="radio3-2" name="radio3" type="radio" class="custom-control-input">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">By prices</span>
						</label>
                    </div>
                    <!--/.col-->
                    <div class="col-xl-3 col-md-6 col-sm-12">

                        <h3>Max price: <span id="demo"></span> MPT</h3>

                        <input class="justify" type="range" id="myRange">
                        <script>
                            var slider = document.getElementById("myRange");
                            var output = document.getElementById("demo");
                            output.innerHTML = slider.value;
                            
                            slider.oninput = function() {
                              output.innerHTML = this.value;
                            }
                        </script>
 
                    </div>
                    <!--/.col-->
                </div>
                <!--/.row-->
            </div>
            <!--/.collapse-->
 
        </form>

    </section>

    <div class="row">
	
        <div class="col-xl-4 push-xl-8 col-lg-12 push-lg-0">

            <nav class="sticky-top">
				<div class="map">
                	<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d84016.36429915384!2d2.161754161251458!3d48.848458114630624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0x47e67031f8c20147%3A0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris%2C+3+Avenue+Victoria%2C+75004+Paris%2C+Francia!3m2!1d48.856836099999995!2d2.3504327!5e0!3m2!1sen!2sru!4v1517149847463"
                    width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div><!--/.map-->

            </nav>
			
        </div>
        <!--/.col-->
		
        <div class="col-xl-8 pull-xl-4 col-lg-12 pull-lg-0">

            <ul class="items-list">
			
                <li>
                    <div class="row">
                        <div class="col-xl-3 col-md-3 col-sm-4">
                            <a class="avatar" href="/clinic"><div class="crop"><img src="img/_demo/clinic1.jpg" alt="" /></div></a>
                            <div class="text-success" data-toggle="tooltip" data-placement="top" title="Participant in the program of insurance points"><i class="fas fa-heartbeat"></i> Insurance</div> 
                            <div class="text-success" data-toggle="tooltip" data-placement="top" title="Participant in the program of Help foundation"><i class="far fa-life-ring"></i> Help foundation</div>
                        </div>
                        <!--/.col-->
                        <div class="col-xl-5 col-md-5 col-sm-8">
                            <h3><a class="" href="/clinic">General Hospital</a> <small>Public</small></h3>
                            <div><a href="/clinics">Dietology</a>, <a href="/clinics">Oncology</a>, <a href="/clinics">Traumatology</a> + 123 more</div>
                            <p>462 First Avenue, <a href="/clinics">New York</a>, <a href="/clinics">NY</a>, <a href="/clinics">United States</a></p>
                            <div class="row">
                                <div class="col">
									<div class="card">
                                    	<ul>
                                        	<li><small>Monday-Friday:</small> <br />8:00 - 17:00</li>
                                        	<li><small>Saturday:</small> <br />10:00 - 16:00</li>
                                        	<li><small>Sunday:</small> <br />12:00 - 14:00</li>
                                    	</ul>
									</div><!--/.card-->
                                </div>
                                <!--/.col-->
                                <div class="col">
                                    <div class="color-gray" data-toggle="tooltip" data-placement="top" title="Provides a transfer from the airport"><i class="fas fa-plane"></i> Airport transfer</div>
                                    <div class="" data-toggle="tooltip" data-placement="top" title="Available with bus routes"><i class="fas fa-bus"></i> Bus route</div>
                                    <div class="" data-toggle="tooltip" data-placement="top" title="Has free parking"><i class="fas fa-car"></i> Free parking</div>
                                </div>
                                <!--/.col-->
                            </div>
                            <!--/.row-->
                        </div>
                        <!--/.col-->
                        <div class="col-xl-4 col-md-4 col-sm-12">
                            <div class="wave text-center">
                                <h4>Rating <strong class="text-success">9.99</strong></h4>
                                <p>based on <strong><a class="" href="/clinic#opinions">58 opinions</a></strong></p>
                                <a class="btn btn-primary btn-lg justify" href="/doctors"><strong>215</strong> doctors</a>
                                <div><a class="" href="/services"><strong>1425</strong> services</a></div>
                            </div>
                            <!--/.wave-->
                        </div>
                        <!--/.col-->
                    </div>
                    <!--/.row-->
                </li> 
			
                <li>
                    <div class="row">
                        <div class="col-xl-3 col-md-3 col-sm-4">
                            <a class="avatar" href="/clinic"><div class="crop"><img src="img/_demo/clinic1.jpg" alt="" /></div></a>
                            <div class="text-success" data-toggle="tooltip" data-placement="top" title="Participant in the program of insurance points"><i class="fas fa-heartbeat"></i> Insurance</div> 
                            <div class="text-success" data-toggle="tooltip" data-placement="top" title="Participant in the program of Help foundation"><i class="far fa-life-ring"></i> Help foundation</div>
                        </div>
                        <!--/.col-->
                        <div class="col-xl-5 col-md-5 col-sm-8">
                            <h3><a class="" href="/clinic">General Hospital</a> <small>Public</small></h3>
                            <div><a href="/clinics">Dietology</a>, <a href="/clinics">Oncology</a>, <a href="/clinics">Traumatology</a> + 123 more</div>
                            <p>462 First Avenue, <a href="/clinics">New York</a>, <a href="/clinics">NY</a>, <a href="/clinics">United States</a></p>
                            <div class="row">
                                <div class="col">
									<div class="card">
                                    	<ul>
                                        	<li><small>Monday-Friday:</small> <br />8:00 - 17:00</li>
                                        	<li><small>Saturday:</small> <br />10:00 - 16:00</li>
                                        	<li><small>Sunday:</small> <br />12:00 - 14:00</li>
                                    	</ul>
									</div><!--/.card-->
                                </div>
                                <!--/.col-->
                                <div class="col">
                                    <div class="color-gray" data-toggle="tooltip" data-placement="top" title="Provides a transfer from the airport"><i class="fas fa-plane"></i> Airport transfer</div>
                                    <div class="" data-toggle="tooltip" data-placement="top" title="Available with bus routes"><i class="fas fa-bus"></i> Bus route</div>
                                    <div class="" data-toggle="tooltip" data-placement="top" title="Has free parking"><i class="fas fa-car"></i> Free parking</div>
                                </div>
                                <!--/.col-->
                            </div>
                            <!--/.row-->
                        </div>
                        <!--/.col-->
                        <div class="col-xl-4 col-md-4 col-sm-12">
                            <div class="wave text-center">
                                <h4>Rating <strong class="text-success">9.99</strong></h4>
                                <p>based on <strong><a class="" href="/clinic#opinions">58 opinions</a></strong></p>
                                <a class="btn btn-primary btn-lg justify" href="/doctors"><strong>215</strong> doctors</a>
                                <div><a class="" href="/services"><strong>1425</strong> services</a></div>
                            </div>
                            <!--/.wave-->
                        </div>
                        <!--/.col-->
                    </div>
                    <!--/.row-->
                </li> 
			
                <li>
                    <div class="row">
                        <div class="col-xl-3 col-md-3 col-sm-4">
                            <a class="avatar" href="/clinic"><div class="crop"><img src="img/_demo/clinic1.jpg" alt="" /></div></a>
                            <div class="text-success" data-toggle="tooltip" data-placement="top" title="Participant in the program of insurance points"><i class="fas fa-heartbeat"></i> Insurance</div> 
                            <div class="text-success" data-toggle="tooltip" data-placement="top" title="Participant in the program of Help foundation"><i class="far fa-life-ring"></i> Help foundation</div>
                        </div>
                        <!--/.col-->
                        <div class="col-xl-5 col-md-5 col-sm-8">
                            <h3><a class="" href="/clinic">General Hospital</a> <small>Public</small></h3>
                            <div><a href="/clinics">Dietology</a>, <a href="/clinics">Oncology</a>, <a href="/clinics">Traumatology</a> + 123 more</div>
                            <p>462 First Avenue, <a href="/clinics">New York</a>, <a href="/clinics">NY</a>, <a href="/clinics">United States</a></p>
                            <div class="row">
                                <div class="col">
									<div class="card">
                                    	<ul>
                                        	<li><small>Monday-Friday:</small> <br />8:00 - 17:00</li>
                                        	<li><small>Saturday:</small> <br />10:00 - 16:00</li>
                                        	<li><small>Sunday:</small> <br />12:00 - 14:00</li>
                                    	</ul>
									</div><!--/.card-->
                                </div>
                                <!--/.col-->
                                <div class="col">
                                    <div class="color-gray" data-toggle="tooltip" data-placement="top" title="Provides a transfer from the airport"><i class="fas fa-plane"></i> Airport transfer</div>
                                    <div class="" data-toggle="tooltip" data-placement="top" title="Available with bus routes"><i class="fas fa-bus"></i> Bus route</div>
                                    <div class="" data-toggle="tooltip" data-placement="top" title="Has free parking"><i class="fas fa-car"></i> Free parking</div>
                                </div>
                                <!--/.col-->
                            </div>
                            <!--/.row-->
                        </div>
                        <!--/.col-->
                        <div class="col-xl-4 col-md-4 col-sm-12">
                            <div class="wave text-center">
                                <h4>Rating <strong class="text-success">9.99</strong></h4>
                                <p>based on <strong><a class="" href="/clinic#opinions">58 opinions</a></strong></p>
                                <a class="btn btn-primary btn-lg justify" href="/doctors"><strong>215</strong> doctors</a>
                                <div><a class="" href="/services"><strong>1425</strong> services</a></div>
                            </div>
                            <!--/.wave-->
                        </div>
                        <!--/.col-->
                    </div>
                    <!--/.row-->
                </li> 
			
                <li>
                    <div class="row">
                        <div class="col-xl-3 col-md-3 col-sm-4">
                            <a class="avatar" href="/clinic"><div class="crop"><img src="img/_demo/clinic1.jpg" alt="" /></div></a>
                            <div class="text-success" data-toggle="tooltip" data-placement="top" title="Participant in the program of insurance points"><i class="fas fa-heartbeat"></i> Insurance</div> 
                            <div class="text-success" data-toggle="tooltip" data-placement="top" title="Participant in the program of Help foundation"><i class="far fa-life-ring"></i> Help foundation</div>
                        </div>
                        <!--/.col-->
                        <div class="col-xl-5 col-md-5 col-sm-8">
                            <h3><a class="" href="/clinic">General Hospital</a> <small>Public</small></h3>
                            <div><a href="/clinics">Dietology</a>, <a href="/clinics">Oncology</a>, <a href="/clinics">Traumatology</a> + 123 more</div>
                            <p>462 First Avenue, <a href="/clinics">New York</a>, <a href="/clinics">NY</a>, <a href="/clinics">United States</a></p>
                            <div class="row">
                                <div class="col">
									<div class="card">
                                    	<ul>
                                        	<li><small>Monday-Friday:</small> <br />8:00 - 17:00</li>
                                        	<li><small>Saturday:</small> <br />10:00 - 16:00</li>
                                        	<li><small>Sunday:</small> <br />12:00 - 14:00</li>
                                    	</ul>
									</div><!--/.card-->
                                </div>
                                <!--/.col-->
                                <div class="col">
                                    <div class="color-gray" data-toggle="tooltip" data-placement="top" title="Provides a transfer from the airport"><i class="fas fa-plane"></i> Airport transfer</div>
                                    <div class="" data-toggle="tooltip" data-placement="top" title="Available with bus routes"><i class="fas fa-bus"></i> Bus route</div>
                                    <div class="" data-toggle="tooltip" data-placement="top" title="Has free parking"><i class="fas fa-car"></i> Free parking</div>
                                </div>
                                <!--/.col-->
                            </div>
                            <!--/.row-->
                        </div>
                        <!--/.col-->
                        <div class="col-xl-4 col-md-4 col-sm-12">
                            <div class="wave text-center">
                                <h4>Rating <strong class="text-success">9.99</strong></h4>
                                <p>based on <strong><a class="" href="/clinic#opinions">58 opinions</a></strong></p>
                                <a class="btn btn-primary btn-lg justify" href="/doctors"><strong>215</strong> doctors</a>
                                <div><a class="" href="/services"><strong>1425</strong> services</a></div>
                            </div>
                            <!--/.wave-->
                        </div>
                        <!--/.col-->
                    </div>
                    <!--/.row-->
                </li> 
			
                <li>
                    <div class="row">
                        <div class="col-xl-3 col-md-3 col-sm-4">
                            <a class="avatar" href="/clinic"><div class="crop"><img src="img/_demo/clinic1.jpg" alt="" /></div></a>
                            <div class="text-success" data-toggle="tooltip" data-placement="top" title="Participant in the program of insurance points"><i class="fas fa-heartbeat"></i> Insurance</div> 
                            <div class="text-success" data-toggle="tooltip" data-placement="top" title="Participant in the program of Help foundation"><i class="far fa-life-ring"></i> Help foundation</div>
                        </div>
                        <!--/.col-->
                        <div class="col-xl-5 col-md-5 col-sm-8">
                            <h3><a class="" href="/clinic">General Hospital</a> <small>Public</small></h3>
                            <div><a href="/clinics">Dietology</a>, <a href="/clinics">Oncology</a>, <a href="/clinics">Traumatology</a> + 123 more</div>
                            <p>462 First Avenue, <a href="/clinics">New York</a>, <a href="/clinics">NY</a>, <a href="/clinics">United States</a></p>
                            <div class="row">
                                <div class="col">
									<div class="card">
                                    	<ul>
                                        	<li><small>Monday-Friday:</small> <br />8:00 - 17:00</li>
                                        	<li><small>Saturday:</small> <br />10:00 - 16:00</li>
                                        	<li><small>Sunday:</small> <br />12:00 - 14:00</li>
                                    	</ul>
									</div><!--/.card-->
                                </div>
                                <!--/.col-->
                                <div class="col">
                                    <div class="color-gray" data-toggle="tooltip" data-placement="top" title="Provides a transfer from the airport"><i class="fas fa-plane"></i> Airport transfer</div>
                                    <div class="" data-toggle="tooltip" data-placement="top" title="Available with bus routes"><i class="fas fa-bus"></i> Bus route</div>
                                    <div class="" data-toggle="tooltip" data-placement="top" title="Has free parking"><i class="fas fa-car"></i> Free parking</div>
                                </div>
                                <!--/.col-->
                            </div>
                            <!--/.row-->
                        </div>
                        <!--/.col-->
                        <div class="col-xl-4 col-md-4 col-sm-12">
                            <div class="wave text-center">
                                <h4>Rating <strong class="text-success">9.99</strong></h4>
                                <p>based on <strong><a class="" href="/clinic#opinions">58 opinions</a></strong></p>
                                <a class="btn btn-primary btn-lg justify" href="/doctors"><strong>215</strong> doctors</a>
                                <div><a class="" href="/services"><strong>1425</strong> services</a></div>
                            </div>
                            <!--/.wave-->
                        </div>
                        <!--/.col-->
                    </div>
                    <!--/.row-->
                </li> 
				
            </ul>
 
			<div class="row pagination-line">
            	<div class="col">
					<nav aria-label="...">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <span class="page-link">Previous</span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active">
                        <span class="page-link">2<span class="sr-only">(current)</span></span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            		</nav>
            	</div>
            	<!--/.col-->
            	<div class="col"> 
					<em>1-5 / 3154</em>
            	</div>
            	<!--/.col-->
          	</div>
          	<!--/.row-->

        </div>
        <!--/.col--> 
    </div>
    <!--/.row-->

    <?php include($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>