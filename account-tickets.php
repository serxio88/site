<?php define( '_ACCESS', 1 ); ?>

<?php

    $page_name = 'account-tickets';
    $page_title = 'Support tickets';
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
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-1" role="tab" aria-controls="pills-1" aria-selected="true">All tickets</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-2" role="tab" aria-controls="pills-2" aria-selected="false">Open</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-3" role="tab" aria-controls="pills-3" aria-selected="false">Closed</a>
                </li>
            </ul>

            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="table-responsive">
                        <table summary="" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>
                                        <h5>Title</h5>
                                    </th>
                                    <th>
                                        <h5>Time</h5>
                                    </th>
                                    <th>
                                        <h5>Status</h5>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="/account-ticket">Ticket title</a></td>
                                    <td>2018-08-20 <strong>16:45:00</strong></td>
                                    <td><span class="text-info">Open</span></td>
                                </tr>
                                <tr>
                                    <td><a href="/account-ticket">Ticket title</a></td>
                                    <td>2018-08-18 <strong>6:45:00</strong></td>
                                    <td><span class="">Closed</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--end of .table-responsive-->
                </div>
                <!--/.tab-pane-->
                <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-profile-tab">
					2
				</div>
                <!--/.tab-pane-->
                <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-contact-tab">
					3
				</div>
                <!--/.tab-pane-->
            </div>
            <!--/.tab-content--> 
		  	 
			<a class="btn btn-primary" href="/add-ticket">Add ticket</a>   
						
        </div>
        <!--/.col-->
    </div>
    <!--/.row--> 
 
    <?php include($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>