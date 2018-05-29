<?php define( '_ACCESS', 1 ); ?>

<?php

    $page_name = 'account-records';
    $page_title = 'Medical records';
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
		
			<ul class="items-list"> 
		 
    		<li class="row">
			
                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">  
                    <h3>14.05.2018 - <a href="/clinic">General Hospital</a> <small>Public</small></h3>
                    <p>462 First Avenue, <a href="/clinics">New York</a>, <a href="/clinics">NY</a>, <a href="/clinics">United States</a><br /><a class="btn-map" href="#" data-toggle="collapse" data-target="#showMap"><i class="fas fa-map-marker"></i> Show on map</a>
					<div class="collapse" id="showMap">
						<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d84016.36429915384!2d2.161754161251458!3d48.848458114630624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0x47e67031f8c20147%3A0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris%2C+3+Avenue+Victoria%2C+75004+Paris%2C+Francia!3m2!1d48.856836099999995!2d2.3504327!5e0!3m2!1sen!2sru!4v1517149847463"
                        width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div><!--/.collapse-->
					</p>
                    <ul class="stiled-list">
                        <li>
                            <h4>First axamination</h4>
                            <div>at 8:00 AM office 22</div>
                            <div>Terapist <a href="/doctor">Smith John</a></div>
                            <p>Price <strong>1 MPT</strong></p>
                        </li>
                        <li>
                            <h4>Blood check</h4>
                            <div>at 8:30 AM office 144A</div>
                            <p>Price <strong>1 MPT</strong></p>
                        </li>
                        <li>
                            <h4>Radiology check</h4>
                            <div>at 9:00 AM office 55D</div>
                            <p>Price <strong>1 MPT</strong></p>
                        </li>
                    </ul>
                    <p>Total cost <strong>3 MPT</strong></p>  

                </div>
                <!--/.col-->
				
                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <h3>Documents</h3>
                    <div class="gallery">
                        <ul class="owl-carousel owl-theme">
                            <li class="item"><a class="gallery-img" href="img/_demo/record1.jpg" title="Document title 1"><img src="img/_demo/record1.jpg" alt="Gallery image 1" /></a></li>
                            <li class="item"><a class="gallery-img" href="img/_demo/record2.jpg" title="Document title 2"><img src="img/_demo/record2.jpg" alt="Gallery image 2" /></a></li>
                            <li class="item">
                                <div><a href="img/_demo/test.doc" title=""><i class="far fa-file fa-2x"></i><br />Examine results.doc</a></div>
                            </li>
                            <li class="item"><a class="gallery-img" href="img/_demo/record3.jpg" title="Document title 1"><img src="img/_demo/record3.jpg" alt="Gallery image 1" /></a></li>
                            <li class="item"><a class="gallery-img" href="img/_demo/record4.jpg" title="Document title 2"><img src="img/_demo/record4.jpg" alt="Gallery image 2" /></a></li>
                            <li class="item">
                                <div><a href="img/_demo/test.pdf" title=""><i class="far fa-file-pdf fa-2x"></i><br />Radiology results.pdf</a></div>
                            </li>
                            <li class="item"><a class="gallery-img" href="img/_demo/record5.jpg" title="Document title 3"><img src="img/_demo/record5.jpg" alt="Gallery image 3" /></a></li>
                            <li class="item"><a class="gallery-img" href="img/_demo/record6.jpg" title="Document title 1"><img src="img/_demo/record6.jpg" alt="Gallery image 1" /></a></li>
                            <li class="item"><a class="gallery-img" href="img/_demo/record7.jpg" title="Document title 2"><img src="img/_demo/record7.jpg" alt="Gallery image 2" /></a></li> 
                        </ul>
                    </div>
                    <!--/.gallery-->
                </div>
                <!--/.col-->
				
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12"> 
					<div class="card">
                        <ul>
							<li>Transaction code <span id="transactionId">Ghhhsbb$hfhjaj77ghsFGGDa91PPvDa</span></li>
                			<li><a class="copy-link btn-copy1" onclick="copyToClipboard('#transactionId')"><i class="far fa-copy"></i> Copy</a> / <a href="#" data-toggle="modal" data-target="#sorry">Check in blockchain explorer</a></li>
                        	<li>Transaction status <span class="text-info">In progress</span> <small class="float-right">confirmations 2/5</small></li> 
						</ul>
					</div><!--/.card--> 
                </div>
                <!--/.col-->
				
            </li>
            <!--/.row--> 
		 
    		<li class="row">
			
                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">  
                    <h3>21.03.2018 - <a href="/clinic">General Hospital</a> <small>Public</small></h3>
                    <p>462 First Avenue, <a href="/clinics">New York</a>, <a href="/clinics">NY</a>, <a href="/clinics">United States</a><br /><a class="btn-map" href="#" data-toggle="collapse" data-target="#showMap"><i class="fas fa-map-marker"></i> Show on map</a>
					<div class="collapse" id="showMap">
						<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d84016.36429915384!2d2.161754161251458!3d48.848458114630624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0x47e67031f8c20147%3A0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris%2C+3+Avenue+Victoria%2C+75004+Paris%2C+Francia!3m2!1d48.856836099999995!2d2.3504327!5e0!3m2!1sen!2sru!4v1517149847463"
                        width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div><!--/.collapse-->
					</p>
                    <ul class="stiled-list">
                        <li>
                            <h4>First axamination</h4>
                            <div>at 8:00 AM office 22</div>
                            <div>Terapist <a href="/doctor">Smith John</a></div>
                            <p>Price <strong>1 MPT</strong></p>
                        </li>
                        <li>
                            <h4>Blood check</h4>
                            <div>at 8:30 AM office 144A</div>
                            <p>Price <strong>1 MPT</strong></p>
                        </li>
                        <li>
                            <h4>Radiology check</h4>
                            <div>at 9:00 AM office 55D</div>
                            <p>Price <strong>1 MPT</strong></p>
                        </li>
                    </ul>
                    <p>Total cost <strong>3 MPT</strong></p>  

                </div>
                <!--/.col-->
				
                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <h3>Documents</h3>
                    <div class="gallery">
                        <ul class="owl-carousel owl-theme">
                            <li class="item"><a class="gallery-img" href="img/_demo/record1.jpg" title="Document title 1"><img src="img/_demo/record1.jpg" alt="Gallery image 1" /></a></li>
                            <li class="item"><a class="gallery-img" href="img/_demo/record2.jpg" title="Document title 2"><img src="img/_demo/record2.jpg" alt="Gallery image 2" /></a></li>
                            <li class="item">
                                <div><a href="img/_demo/test.doc" title=""><i class="far fa-file fa-2x"></i><br />Examine results.doc</a></div>
                            </li>
                            <li class="item"><a class="gallery-img" href="img/_demo/record3.jpg" title="Document title 1"><img src="img/_demo/record3.jpg" alt="Gallery image 1" /></a></li>
                            <li class="item"><a class="gallery-img" href="img/_demo/record4.jpg" title="Document title 2"><img src="img/_demo/record4.jpg" alt="Gallery image 2" /></a></li>
                            <li class="item">
                                <div><a href="img/_demo/test.pdf" title=""><i class="far fa-file-pdf fa-2x"></i><br />Radiology results.pdf</a></div>
                            </li>
                            <li class="item"><a class="gallery-img" href="img/_demo/record5.jpg" title="Document title 3"><img src="img/_demo/record5.jpg" alt="Gallery image 3" /></a></li>
                            <li class="item"><a class="gallery-img" href="img/_demo/record6.jpg" title="Document title 1"><img src="img/_demo/record6.jpg" alt="Gallery image 1" /></a></li>
                            <li class="item"><a class="gallery-img" href="img/_demo/record7.jpg" title="Document title 2"><img src="img/_demo/record7.jpg" alt="Gallery image 2" /></a></li> 
                        </ul>
                    </div>
                    <!--/.gallery-->
                </div>
                <!--/.col-->
				
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12"> 
					<div class="card">
                        <ul>
							<li>Transaction code <span id="transactionId">Ghhhsbb$hfhjaj77ghsFGGDa91PPvDa</span></li>
                			<li><a class="copy-link btn-copy1" onclick="copyToClipboard('#transactionId')"><i class="far fa-copy"></i> Copy</a> / <a href="#" data-toggle="modal" data-target="#sorry">Check in blockchain explorer</a></li>
                        	<li>Transaction status <span class="text-info">In progress</span> <small class="float-right">confirmations 2/5</small></li> 
						</ul>
					</div><!--/.card--> 
                </div>
                <!--/.col-->
				
            </li>
            <!--/.row-->
			
			</ul>
			<!--/.items-list-->
 
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