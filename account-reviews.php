<?php define( '_ACCESS', 1 ); ?>

<?php

    $page_name = 'account-reviews';
    $page_title = 'Account reviews';
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

            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-1" role="tab" aria-controls="pills-1" aria-selected="true">All</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-2" role="tab" aria-controls="pills-2" aria-selected="false">Doctors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-3" role="tab" aria-controls="pills-3" aria-selected="false">Pharmacies</a>
                </li>
            </ul>

            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-home-tab">

                    <ul class="items-list">
                        <li>
                            <div class="row">
                                <div class="col-xl-2 col-md-6 col-sm-5">
                                    <a class="avatar" href="/doctor"><div class="crop"><img src="img/_demo/doctor1.jpg" alt="" /></div></a>
                                    <div class="text-success" data-toggle="tooltip" data-placement="top" title="Participant in the program of insurance points"><i class="fas fa-heartbeat"></i> Insurance</div>
                                </div>
                                <!--/.col-->
                                <div class="col-xl-5 col-md-6 col-sm-7">
                                    <h3><a href="/doctor"><strong>Smith</strong> John</a> <small>M.D</small></h3>
                                    <em>June 15 2017</em>
                                    <p>Service <a href="/services" title="">New patient visit</a></p>
                                    <p>Lorem ipsum dolor sit amet, dolores mandamus moderatius ea ius, sed civibus vivendum imperdiet ei.</p>
                                </div>
                                <!--/.col-->
                                <div class="col-xl-5 col-md-12 col-sm-12">
                                    <div class="wave text-center">
									
                                        <p>Your rate</p>
                                        <span class="stars normal">
											6 / 10
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
										</span>
                                        <ul class="rating">

                                            <li class="row">
                                                <div class="col text-right">
                                                    Knowledges
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-striped">
                                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                                            <span class="sr-only">9/10</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/.col-->
                                            </li>
                                            <!-- end row -->
                                            <li class="row">
                                                <div class="col text-right">
                                                    Skills
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-striped">
                                                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                                            <span class="sr-only">3/10</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/.col-->
                                            </li>
                                            <!-- end row -->
                                            <li class="row">
                                                <div class="col text-right">
                                                    Attention
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-striped">
                                                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                            <span class="sr-only">6/10</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/.col-->
                                            </li>
                                            <!-- end row -->
                                            <li class="row">
                                                <div class="col text-right">
                                                    Price / Quality
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-striped">
                                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                                            <span class="sr-only">7/10</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/.col-->
                                            </li>
                                            <!-- end row -->

                                        </ul>
                                        <!--/.rating-->
										
                                    </div>
                                    <!--/.wave-->
                                </div>
                                <!--/.col-->
                            </div>
                            <!--/.row-->
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-xl-2 col-md-6 col-sm-5">
                                    <a class="avatar" href="/pharmacy"><div class="crop"><img src="img/_demo/pharmacy1.jpg" alt="" /></div></a>
                                </div>
                                <!--/.col-->
                                <div class="col-xl-5 col-md-6 col-sm-7">
                                    <h3><a class="" href="/pharmacy">Pharmacy Store #1</a></h3>
                                    <em>June 15 2017</em> 
                                    <p>Lorem ipsum dolor sit amet, dolores mandamus moderatius ea ius, sed civibus vivendum imperdiet ei, amet tritani sea id. Ut veri diceret fierent mei, qui facilisi suavitate euripidis ad..</p>
                                </div>
                                <!--/.col-->
                                <div class="col-xl-5 col-md-12 col-sm-12">
                                    <div class="wave text-center">
                                         
                                        <p>Your rate</p>
                                        <span class="stars normal">
											6 / 10
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
										</span>

                            			<ul class="rating"> 
							
                                			<li class="row">
                                    			<div class="col text-right">
                                        			Service
                                    			</div>
                                    			<div class="col">
                                        			<div class="progress progress-striped">
                                            			<div class="progress-bar bg-warning" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                			<span class="sr-only">6/10</span>
                                            			</div>
                                        			</div>
                                    			</div>
                                    			<!--/.col-->
                                			</li>
                                			<!-- end row -->
                                			<li class="row">
                                    			<div class="col text-right">
                                        			Price / Quality
                                    			</div>
                                    			<div class="col">
                                        			<div class="progress progress-striped">
                                            			<div class="progress-bar bg-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                                			<span class="sr-only">7/10</span>
                                            			</div>
                                        			</div>
                                    			</div>
                                    			<!--/.col-->
                                			</li>
                                			<!-- end row -->

                            			</ul>
                            			<!--/.rating-->
										
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
                <!--/.tab-pane--> 
                <div class="tab-pane fade" id="pills-2" role="tabpane3" aria-labelledby="pills-contact-tab">
                    Doctors
                </div>
                <!--/.tab-pane-->
                <div class="tab-pane fade" id="pills-3" role="tabpane4" aria-labelledby="pills-contact-tab">
                    Pharmacies
                </div>
                <!--/.tab-pane-->
            </div>
            <!--/.tab-content-->

        </div>
        <!--/.col-->
    </div>
    <!--/.row-->

    <?php include($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>