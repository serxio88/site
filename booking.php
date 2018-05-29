<?php define( '_ACCESS', 1 ); ?>

<?php

    $page_name = 'booking';
    $page_title = 'Booking';
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
	
    <form>

        <div class="row">
 
            <div class="col-xl-4 col-lg-4 col-md-12">

                <nav class="sticky-top">

                    <div class="wave">

                        <div class="history">
                            <h3>14.05.2018 - <a href="/clinic">General Hospital</a> <small>Public</small></h3>
                            <p><a class="btn-map" href="#" data-toggle="collapse" data-target="#showMap"><i class="fas fa-map-marker"></i> Show on map</a>
								<div class="collapse" id="showMap">
									<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d84016.36429915384!2d2.161754161251458!3d48.848458114630624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0x47e67031f8c20147%3A0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris%2C+3+Avenue+Victoria%2C+75004+Paris%2C+Francia!3m2!1d48.856836099999995!2d2.3504327!5e0!3m2!1sen!2sru!4v1517149847463"
                        width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
								</div><!--/.collapse-->
							</p>
                            <ul class="stiled-list">
                                <li>
                                    <h4>First axamination</h4>
                                    <div>at 8:00 AM office 22</div>
                                    <div>Terapist <a href="/doctor">John Doe</a></div>
                                    <p>Price <strong>100 MPT</strong></p>
                                </li>
                                <li>
                                    <h4>Blood check</h4>
                                    <div>at 8:30 AM office 144A</div>
                                    <p>Price <strong>100 MPT</strong></p>
                                </li>
                                <li>
                                    <h4>Radiology check</h4>
                                    <div>at 9:00 AM office 55D</div>
                                    <p>Price <strong>100 MPT</strong></p>
                                </li>
                            </ul>
							
							<hr />
							
                            <div>Total cost <strong>300 MPT</strong></div>
                            <p>Your balance is <strong class="text-success">2300 MPT</strong> <a href="#" data-toggle="modal" data-target="#addBalance"><i class="fas fa-plus-circle"></i> Add balance</a></p>

                        </div>
                        <!--/.history-->


                        <!-- <div class="form-group row">
							<label for="example-date-input" class="col-2 col-form-label">Date</label>
							<div class="col-10">
 								<input class="form-control" type="date" value="2011-08-19" id="example-date-input" disabled="disabled" />
							</div>
						</div> 
						<div class="form-group row">
							<label for="example-time-input" class="col-2 col-form-label">Time</label>
							<div class="col-10">
								<input class="form-control" type="time" value="13:45:00" id="example-time-input" disabled="disabled" />
							</div>
						</div> -->

                    </div>
                    <!--/.wave-->

                </nav>
 
            </div>
            <!--/.col-->

            <div class="col-xl-8 col-lg-8 col-md-12">

                <h2>Exisitng Customer? <a href="#" data-toggle="modal" data-target="#login">Click here to login</a></h2>

                <br />
                <div class="alert alert-info" role="alert">
                    <strong>Welcome!</strong> We have generated for you a unique ID and a key for authorization on the service.
                </div>

                <div class="form-group">
                    <label for="walletId">Wallet ID</label>
                    <input type="text" class="form-control" id="walletId" value="Ghhhsbb$hfhjaj77ghsFGGDa91PPvDa" disabled="disabled" />
                    <a href="#">Copy</a>
                </div>
                <div class="form-group">
                    <label for="walletKey">Wallet key</label>
                    <input type="text" class="form-control" id="walletKey" value="EEtdgg177FDahhdSpQnnVBCq333Fad" disabled="disabled" />
                    <a href="#">Copy</a>
                </div>

                <div class="row">
                    <div class="col-6">
                        <label for="firstName">First name</label>
                        <input type="text" name="firstName" class="form-control" id="firstName" placeholder="First name" required />
                    </div>
                    <!--/.col-->
                    <div class="col-6">
                        <label for="lastName">Last name</label>
                        <input type="text" name="lastName" class="form-control" id="lastName" placeholder="Last name" required />
                    </div>
                    <!--/.col--> 
                </div>
                <!--/.row-->
				
				<br />

                <div class="row">
                    <div class="col-6"> 
						
                        <label>Sex</label><br />

                        <label class="custom-control custom-radio">
							<input id="radio2" name="radio" type="radio" class="custom-control-input" checked="checked">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Male</span>
						</label>
                        <label class="custom-control custom-radio">
							<input id="radio3" name="radio" type="radio" class="custom-control-input">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Female</span>
						</label> 
						
                    </div>
                    <!--/.col-->
                    <div class="col-6"> 
						
                        <label>Date of birth</label> 
                        <input class="form-control" type="date" value="2011-08-19" id="dateOfBirth">
						 
                    </div>
                    <!--/.col-->
                </div>
                <!--/.row--> 
			 
                <hr />
				
                <h3>Add email, if you want to get notifications</h3> 
						
                <div class="row"> 
                   
                    <div class="col-6">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" id="email" placeholder="Email" />
                    </div>
                    <!--/.col-->
                    <div class="col-6">
                        <label for="confirmEmail">Confirm email</label>
                        <input type="text" name="confirmEmail" class="form-control" id="confirmEmail" placeholder="Confirm email" />
                    </div>
                    <!--/.col-->
					
                </div>
                <!--/.row--> 
 
                <br />

                <label class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" checked="checked">
					<span class="custom-control-indicator"></span>
					<span class="custom-control-description">I accept</span>
				</label> <a href="/terms-of-use" target="_blank">Terms of use</a> and <a href="/privacy-policy">Privacy Policy</a>

                <hr />
				
				<div class="row">
					<div class="col">
						<a class="btn btn-primary justify" href="/success">Confirm booking and checkout</a>
						<br />
					</div>
					<!--/.col--> 
				</div>
				<!--/.row-->
 
            </div>
            <!--/.col-->
        </div>
        <!--/.row-->

    </form>
	
    <?php include($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>