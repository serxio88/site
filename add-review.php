<?php define( '_ACCESS', 1 ); ?>

<?php

    $page_name = 'add-review';
    $page_title = 'Add record';
	$page_keywords = '';
	$page_description = '';
	
?>

    <?php include($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="/account">Account</a></li>
            <li class="breadcrumb-item"><a href="/account-reviews">Account reviews</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?=$page_title?></li>
        </ol>
    </nav>

    <ul>
        <li id="191" class="alert alert-warning parent" role="alert">
            <strong>Note!</strong> <a class="" href="#">General Hospital</a> <small>Public</small> request your medical records at 11:24 - 12.02.2018. <a href="/account-request">Choose records to open</a>
            <a name="delete" id="191" class="delete-parent" href="#"><i class="fas fa-times"></i></a>
        </li>

        <li id="192" class="alert alert-warning parent" role="alert">
            <strong>Note!</strong> At 2011-08-20 <strong>16:45:00</strong> from your account will be charged <strong class="text-danger">35 MPT</strong> as Monthly insurance fee
            <a name="delete" id="192" class="delete-parent" href="#"><i class="fas fa-times"></i></a>
        </li>
    </ul>

    <div class="row">
	
        <div class="col-xl-3 push-xl-9 col-lg-4 push-lg-8 col-md-5 push-md-7 col-sm-12 push-sm-0"> 
            <nav class="sticky-top"> 
                <?php include($_SERVER["DOCUMENT_ROOT"]."/inc/right.php"); ?> 
            </nav> 
        </div>
        <!--/.col--> 
		
        <div class="col-xl-9 pull-xl-3 col-lg-8 pull-lg-4 col-md-7 pull-md-5 col-sm-12 pull-sm-0"> 
		 
    		<form>

        	<div class="row">
            	<div class="col-xl-8 col-lg-7 col-md-12 col-sm-12">  
			
					<h3>Knowledges</h3>
                    <label class="custom-control custom-radio">
						<input id="radio1" name="radio" type="radio" class="custom-control-input" checked="checked">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">1</span>
					</label>
                    <label class="custom-control custom-radio">
						<input id="radio2" name="radio" type="radio" class="custom-control-input">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">2</span>
					</label>
                    <label class="custom-control custom-radio">
						<input id="radio3" name="radio" type="radio" class="custom-control-input">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">3</span>
					</label>
                    <label class="custom-control custom-radio">
						<input id="radio4" name="radio" type="radio" class="custom-control-input">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">4</span>
					</label>
                    <label class="custom-control custom-radio">
						<input id="radio5" name="radio" type="radio" class="custom-control-input">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">5</span>
					</label>
                    <label class="custom-control custom-radio">
						<input id="radio6" name="radio" type="radio" class="custom-control-input">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">6</span>
					</label>
                    <label class="custom-control custom-radio">
						<input id="radio7" name="radio" type="radio" class="custom-control-input">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">7</span>
					</label>
                    <label class="custom-control custom-radio">
						<input id="radio8" name="radio" type="radio" class="custom-control-input">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">8</span>
					</label>
                    <label class="custom-control custom-radio">
						<input id="radio9" name="radio" type="radio" class="custom-control-input">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">9</span>
					</label>
                    <label class="custom-control custom-radio">
						<input id="radio10" name="radio" type="radio" class="custom-control-input">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">10</span>
					</label> 
					
					<br />
					
					<br />
			
					<h3>Skills</h3>
                    <label class="custom-control custom-radio">
						<input id="radio2-1" name="radio2" type="radio" class="custom-control-input" checked="checked">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">1</span>
					</label>
                    <label class="custom-control custom-radio">
						<input id="radio2-2" name="radio2" type="radio" class="custom-control-input">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">2</span>
					</label>
                    <label class="custom-control custom-radio">
						<input id="radio2-3" name="radio2" type="radio" class="custom-control-input">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">3</span>
					</label>
                    <label class="custom-control custom-radio">
						<input id="radio2-4" name="radio2" type="radio" class="custom-control-input">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">4</span>
					</label>
                    <label class="custom-control custom-radio">
						<input id="radio2-5" name="radio2" type="radio" class="custom-control-input">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">5</span>
					</label>
                    <label class="custom-control custom-radio">
						<input id="radio2-6" name="radio2" type="radio" class="custom-control-input">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">6</span>
					</label>
                    <label class="custom-control custom-radio">
						<input id="radio2-7" name="radio2" type="radio" class="custom-control-input">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">7</span>
					</label>
                    <label class="custom-control custom-radio">
						<input id="radio2-8" name="radio2" type="radio" class="custom-control-input">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">8</span>
					</label>
                    <label class="custom-control custom-radio">
						<input id="radio2-9" name="radio2" type="radio" class="custom-control-input">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">9</span>
					</label>
                    <label class="custom-control custom-radio">
						<input id="radio2-10" name="radio2" type="radio" class="custom-control-input">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">10</span>
					</label>
					
					<br />
					
					<br />
			
					<h3>Attention</h3>
                    <label class="custom-control custom-radio">
						<input id="radio3-1" name="radio3" type="radio" class="custom-control-input" checked="checked">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">1</span>
					</label>
                    <label class="custom-control custom-radio">
						<input id="radio3-2" name="radio3" type="radio" class="custom-control-input">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">2</span>
					</label>
                    <label class="custom-control custom-radio">
						<input id="radio3-3" name="radio3" type="radio" class="custom-control-input">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">3</span>
					</label>
                    <label class="custom-control custom-radio">
						<input id="radio3-4" name="radio3" type="radio" class="custom-control-input">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">4</span>
					</label>
                    <label class="custom-control custom-radio">
						<input id="radio3-5" name="radio3" type="radio" class="custom-control-input">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">5</span>
					</label>
                    <label class="custom-control custom-radio">
						<input id="radio3-6" name="radio3" type="radio" class="custom-control-input">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">6</span>
					</label>
                    <label class="custom-control custom-radio">
						<input id="radio3-7" name="radio3" type="radio" class="custom-control-input">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">7</span>
					</label>
                    <label class="custom-control custom-radio">
						<input id="radio3-8" name="radio3" type="radio" class="custom-control-input">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">8</span>
					</label>
                    <label class="custom-control custom-radio">
						<input id="radio3-9" name="radio3" type="radio" class="custom-control-input">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">9</span>
					</label>
                    <label class="custom-control custom-radio">
						<input id="radio3-10" name="radio3" type="radio" class="custom-control-input">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">10</span>
					</label>
					
					<br />
					
					<br />
			
					<h3>Price / Quality</h3>
                    <label class="custom-control custom-radio">
						<input id="radio4-1" name="radio4" type="radio" class="custom-control-input" checked="checked">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">1</span>
					</label>
                    <label class="custom-control custom-radio">
						<input id="radio4-2" name="radio4" type="radio" class="custom-control-input">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">2</span>
					</label>
                    <label class="custom-control custom-radio">
						<input id="radio4-3" name="radio4" type="radio" class="custom-control-input">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">3</span>
					</label>
                    <label class="custom-control custom-radio">
						<input id="radio4-4" name="radio4" type="radio" class="custom-control-input">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">4</span>
					</label>
                    <label class="custom-control custom-radio">
						<input id="radio4-5" name="radio4" type="radio" class="custom-control-input">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">5</span>
					</label>
                    <label class="custom-control custom-radio">
						<input id="radio4-6" name="radio4" type="radio" class="custom-control-input">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">6</span>
					</label>
                    <label class="custom-control custom-radio">
						<input id="radio4-7" name="radio4" type="radio" class="custom-control-input">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">7</span>
					</label>
                    <label class="custom-control custom-radio">
						<input id="radio4-8" name="radio4" type="radio" class="custom-control-input">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">8</span>
					</label>
                    <label class="custom-control custom-radio">
						<input id="radio4-9" name="radio4" type="radio" class="custom-control-input">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">9</span>
					</label>
                    <label class="custom-control custom-radio">
						<input id="radio4-10" name="radio4" type="radio" class="custom-control-input">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">10</span>
					</label>
					
					<br />
					
					<br />
              
                	<div class="form-group">
                    	<h3><label for="reviewText">Review text</label></h3> 
                    	<textarea name="textarea" class="form-control" id="reviewText" placeholder=""></textarea>
                	</div> 
 
            	</div>
            	<!--/.col-->
			
            	<div class="col-xl-4 col-lg-5 col-md-12 col-sm-12">

                	<nav class="sticky-top">

                    	<div class="wave">
							
                            <h5>Review for service <br /><a href="/services" title="">New patient visit</a> <br />to <a href="/doctor"><strong>Smith</strong> John</a> <small>M.D</small> <br />from <a href="/clinic">General hospital</a> <small>Public</small></h5>
							
							<em>June 15 2017</em>
								 
                        	<div>Total weight - <strong>25 345 kb</strong></div>
                        	<p>Transaction Fee = <strong>0.0001 MPT</strong></p> 
	 
                        	<div class="form-group">
								<a class="btn btn-primary justify" href="#">Add your review</a>  
							</div>  

                    	</div>
                    	<!--/.wave-->

                	</nav>
 
            	</div>
            	<!--/.col-->
        	</div>
        	<!--/.row-->

    	</form>  
			
        </div>
        <!--/.col-->
		
    </div>
    <!--/.row-->
	 
    <?php include($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>