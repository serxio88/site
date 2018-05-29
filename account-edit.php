<?php define( '_ACCESS', 1 ); ?>

<?php

    $page_name = 'account-edit';
    $page_title = 'Edit account';
	$page_keywords = '';
	$page_description = '';
	
?>

    <?php include($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>


    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="/account">Account</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?=$page_title?></li>
        </ol>
    </nav>

    <ul>
        <li id="191" class="alert alert-warning parent" role="alert">
            <strong>Note!</strong> <a class="" href="#">General Hospital</a> <small>Public</small> request your medical records at 11:24 - 12.02.2018. <a href="/account-request">Choose records to open</a>
            <a name="delete" id="191" class="float-right delete-parent" href="#"><i class="fas fa-times"></i></a>
        </li>

        <li id="192" class="alert alert-warning parent" role="alert">
            <strong>Note!</strong> At 2011-08-20 <strong>16:45:00</strong> from your account will be charged <strong class="text-danger">35 MPT</strong> as Monthly insurance fee
            <a name="delete" id="192" class="float-right delete-parent" href="#"><i class="fas fa-times"></i></a>
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
        			<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
            			<div class="form-group">
                			<label for="walletId">Wallet ID</label>
                			<input type="text" class="form-control" id="walletId" value="Ghhhsbb$hfhjaj77ghsFGGDa91PPvDa" disabled="disabled" required />
							<div class="copy-text" id="walletIdText">Ghhhsbb$hfhjaj77ghsFGGDa91PPvDa</div>
                			<a class="copy-link btn-copy1" onclick="copyToClipboard('#walletIdText')"><i class="far fa-copy"></i> Copy</a>
            			</div>
        			</div>
        			<!--/.col-->
        			<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
            			<div class="form-group">
                			<label for="walletKey">Wallet key</label>
                			<input type="text" class="form-control" id="walletKey" value="EEtdgg177FDahhdSpQnnVBCq333Fad" disabled="disabled" required />
							<div class="copy-text" id="walletKeyText">EEtdgg177FDahhdSpQnnVBCq333Fad</div>
                			<a class="copy-link btn-copy2" onclick="copyToClipboard('#walletKeyText')"><i class="far fa-copy"></i> Copy</a>
            			</div>
        			</div>
        			<!--/.col-->
    			</div>
    			<!--/.row--> 
 
    			<div class="row">
        			<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
            			<label for="firstName">First name</label>
            			<input type="text" name="firstName" class="form-control" id="firstName" placeholder="First name" required />
        			</div>
        			<!--/.col-->
        			<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
            			<label for="lastName">Last name</label>
            			<input type="text" name="lastName" class="form-control" id="lastName" placeholder="Last name" required />
        			</div>
        			<!--/.col-->
    			</div>
    			<!--/.row-->
 
    			<div class="row">
        			<div class="col"> 
		
						<br />

    					<h3>Sex</h3> 
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

    			<h3>Payment Information</h3>
 
    			<div class="row">
        			<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
            			<div class="form-group">
                			<label for="cardNumber">Card number</label>
                			<input type="text" name="cardNumber" class="form-control" id="cardNumber" value="0000********0000" required />
            			</div>
        			</div>
        			<!--/.col-->
        			<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
            			<div class="form-group">
                			<label for="cardHolder">Card holder (in latin)</label>
                			<input type="text" name="cardHolder" class="form-control" id="cardHolder" value="JOHN DOE" required />
            			</div>
        			</div>
        			<!--/.col-->
    			</div>
    			<!--/.row-->
 
    			<div class="row">
        			<div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">

            			<span class="label">Expiration date</span>
            			<div class="row">
                			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    			<select class="custom-select mb-2 mr-sm-2 mb-sm-0 justify" id="expirationMonth">
									<option selected>Month</option>
									<option value="1">One</option>
									<option value="2">Two</option>
									<option value="3">Three</option>
								</select>
                			</div>
                			<!--/.col-->
                			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    			<select class="custom-select mb-2 mr-sm-2 mb-sm-0 justify" id="expirationYear">
									<option selected>Year</option>
									<option value="1">One</option>
									<option value="2">Two</option>
									<option value="3">Three</option>
								</select>
                			</div>
                			<!--/.col-->
            			</div>
            			<!--/.row-->
        			</div>
        			<!--/.col-->
        			<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
            			<label for="CVCCode">CVC/CVV code</label>
            			<input type="text" name="CVCCode" class="form-control" id="CVCCode" value="***" required />
        			</div>
        			<!--/.col-->
    			</div>
    			<!--/.row-->

    			<br />

    			<a class="btn btn-primary" href="">Save changes</a>
			
			</form>
			
        </div>
        <!--/.col-->
    </div>
    <!--/.row-->
 
    <?php include($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>