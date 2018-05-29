<?php define( '_ACCESS', 1 ); ?>

<?php

    $page_name = 'foundation-cases';
    $page_title = 'Foundation cases';
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
	
	<div class="row">
	
        <div class="col-xl-3 push-xl-9 col-lg-12 push-lg-0">

            <nav class="sticky-top">
				<div class="text-center">
				
					<a href="#" data-toggle="modal" data-target="#listFunds">Make donation to General fund</a>
							
					<br />
						
					<small>Points from <strong>General fund</strong> serve for partial coverage in cases when required amount for the full treatment remains less then 10%, but the company's time has passed.</small>
					
					<br />
					
					<br />
						
				</div><!--/.-->

            </nav>
			
        </div>
        <!--/.col-->
		
        <div class="col-xl-9 pull-xl-3 col-lg-12 pull-lg-0">

            <ul class="items-list">
			
                <li>
                    <div class="row">
                        <div class="col-xl-8 col-md-7 col-sm-12">
                            <div class="row">
								<div class="col-xl-4 col-md-5 col-sm-12">
                            		<a class="avatar" href="/foundation-case"><div class="crop"><img src="img/_demo/foundation-case1.jpg" alt="" /></div></a>
                        		</div>
                        		<!--/.col-->
                        		<div class="col-xl-8 col-md-7 col-sm-12">
                            		<h3><a class="" href="/foundation-case">Julia Ostin</a> <small>12 y.o.</small></h3>
                            		<p><a href="/foundation-cases">New York</a>, <a href="/foundation-cases">NY</a>, <a href="/foundation-cases">United States</a></p>
                            		<div>Required medical treatment:</div>
                            		<h3>Heart transplantation</h3>
                            		<div>Curator:
                                		<h4><a class="" href="/clinic">General Hospital</a> <small>Public</small></h4>
                            		</div>
                            		<p>Lorem ipsum dolor sit amet, dolores mandamus moderatius ea ius, sed civibus vivendum imperdiet ei, amet tritani sea id. Ut veri diceret fierent mei, qui facilisi suavitate euripidis ad..</p>
                        		</div>
                        		<!--/.col-->
							</div><!--/.row-->
                        </div>
                        <!--/.col--> 
                        <div class="col-xl-4 col-md-5 col-sm-12">
                            <div class="wave text-center">
                                <p>Required amount <br /><strong class="text-info">$55.000</strong> / <strong class="text-success">25.000 MPT</strong></p>
                                <p>Collected funds <br /><strong>$35.000</strong> / <strong>15.000 MPT</strong></p>
                                <p><strong>462</strong> users participated in fundraising</p> 
								<h3><span id="clock101"></span></h3>  
                                <script>
                                    // Count down  
                                    	$('#clock101').countdown('2018/09/10', function(event) {
                                      $(this).html(event.strftime('%D days %H:%M:%S'));
                                    });
                                </script>
								<br />
                                <a class="btn btn-primary justify" href="">List funds</a>
                            </div>
                            <!--/.wave-->
                        </div>
                        <!--/.col-->
                    </div>
                    <!--/.row-->
                </li> 
			
                <li>
                    <div class="row">
                        <div class="col-xl-8 col-md-7 col-sm-12">
                            <div class="row">
								<div class="col-xl-4 col-md-5 col-sm-12">
                            		<a class="avatar" href="/foundation-case"><div class="crop"><img src="img/_demo/foundation-case1.jpg" alt="" /></div></a>
                        		</div>
                        		<!--/.col-->
                        		<div class="col-xl-8 col-md-7 col-sm-12">
                            		<h3><a class="" href="/foundation-case">Julia Ostin</a> <small>12 y.o.</small></h3>
                            		<p><a href="/foundation-cases">New York</a>, <a href="/foundation-cases">NY</a>, <a href="/foundation-cases">United States</a></p>
                            		<div>Required medical treatment:</div>
                            		<h3>Heart transplantation</h3>
                            		<div>Curator:
                                		<h4><a class="" href="/clinic">General Hospital</a> <small>Public</small></h4>
                            		</div>
                            		<p>Lorem ipsum dolor sit amet, dolores mandamus moderatius ea ius, sed civibus vivendum imperdiet ei, amet tritani sea id. Ut veri diceret fierent mei, qui facilisi suavitate euripidis ad..</p>
                        		</div>
                        		<!--/.col-->
							</div><!--/.row-->
                        </div>
                        <!--/.col--> 
                        <div class="col-xl-4 col-md-5 col-sm-12">
                            <div class="wave text-center">
                                <p>Required amount <br /><strong class="text-info">$55.000</strong> / <strong class="text-success">25.000 MPT</strong></p>
                                <p>Collected funds <br /><strong>$35.000</strong> / <strong>15.000 MPT</strong></p>
                                <p><strong>462</strong> users participated in fundraising</p> 
								<h3><span id="clock101"></span></h3>  
                                <script>
                                    // Count down  
                                    	$('#clock101').countdown('2018/09/10', function(event) {
                                      $(this).html(event.strftime('%D days %H:%M:%S'));
                                    });
                                </script>
								<br />
                                <a class="btn btn-primary justify" href="">List funds</a>
                            </div>
                            <!--/.wave-->
                        </div>
                        <!--/.col-->
                    </div>
                    <!--/.row-->
                </li> 
			
                <li>
                    <div class="row">
                        <div class="col-xl-8 col-md-7 col-sm-12">
                            <div class="row">
								<div class="col-xl-4 col-md-5 col-sm-12">
                            		<a class="avatar" href="/foundation-case"><div class="crop"><img src="img/_demo/foundation-case1.jpg" alt="" /></div></a>
                        		</div>
                        		<!--/.col-->
                        		<div class="col-xl-8 col-md-7 col-sm-12">
                            		<h3><a class="" href="/foundation-case">Julia Ostin</a> <small>12 y.o.</small></h3>
                            		<p><a href="/foundation-cases">New York</a>, <a href="/foundation-cases">NY</a>, <a href="/foundation-cases">United States</a></p>
                            		<div>Required medical treatment:</div>
                            		<h3>Heart transplantation</h3>
                            		<div>Curator:
                                		<h4><a class="" href="/clinic">General Hospital</a> <small>Public</small></h4>
                            		</div>
                            		<p>Lorem ipsum dolor sit amet, dolores mandamus moderatius ea ius, sed civibus vivendum imperdiet ei, amet tritani sea id. Ut veri diceret fierent mei, qui facilisi suavitate euripidis ad..</p>
                        		</div>
                        		<!--/.col-->
							</div><!--/.row-->
                        </div>
                        <!--/.col--> 
                        <div class="col-xl-4 col-md-5 col-sm-12">
                            <div class="wave text-center">
                                <p>Required amount <br /><strong class="text-info">$55.000</strong> / <strong class="text-success">25.000 MPT</strong></p>
                                <p>Collected funds <br /><strong>$35.000</strong> / <strong>15.000 MPT</strong></p>
                                <p><strong>462</strong> users participated in fundraising</p> 
								<h3><span id="clock101"></span></h3>  
                                <script>
                                    // Count down  
                                    	$('#clock101').countdown('2018/09/10', function(event) {
                                      $(this).html(event.strftime('%D days %H:%M:%S'));
                                    });
                                </script>
								<br />
                                <a class="btn btn-primary justify" href="">List funds</a>
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