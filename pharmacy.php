<?php define( '_ACCESS', 1 ); ?>

<?php

    $page_name = 'pharmacy';
    $page_title = 'Pharmacy';
	$page_keywords = '';
	$page_description = '';
	
?>

    <?php include($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/pharmacies">Pharmacies</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?=$page_title?></li>
        </ol>
    </nav>
 
    <div class="row">
        <div class="col-6">

            <div class="row">
                <div class="col-xl-4 col-md-12">
                    <a class="avatar" href="/pharmacy"><div class="crop"><img src="img/_demo/pharmacy1.jpg" alt="" /></div></a>
                </div>
                <!--/.col-->
                <div class="col-xl-8 col-md-12">
                    <p><i class="fas fa-map-marker"></i> 462 First Avenue, <a href="/clinics">New York</a>, <a href="/clinics">NY</a>, <a href="/clinics">United States</a></p>
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
                            <div class="" data-toggle="tooltip" data-placement="top" title="Available with bus routes"><i class="fas fa-bus"></i> Bus route</div>
                            <div class="" data-toggle="tooltip" data-placement="top" title="Has free parking"><i class="fas fa-car"></i> Free parking</div>
                        </div>
                        <!--/.col-->
                    </div>
                    <!--/.row-->
                </div>
                <!--/.col-->
            </div>
            <!--/.row-->

            <hr />

            <p>Lorem ipsum dolor sit amet, dolores mandamus moderatius ea ius, sed civibus vivendum imperdiet ei, amet tritani sea id. Ut veri diceret fierent mei, qui facilisi suavitate euripidis ad. In vim mucius menandri convenire, an brute zril vis.
                Ancillae delectus necessitatibus no eam, at porro solet veniam mel, ad everti nostrud vim. Eam no menandri pertinacia deterruisset.</p>


            <div class="table-responsive">
                <table summary="" class="table table-hover">
                    <tbody>
                        <tr>
                            <td><strong>Network</strong></td>
                            <td>None</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!--/.table-responsive-->

            <hr />


            <h3>Pharmacy gallery</h3>

            <div class="gallery">
                <ul class="owl-carousel owl-theme">
                    <li class="item"><a class="gallery-img" href="img/_demo/pharmacy1.jpg" title="Caption for gallery item 1"><img src="img/_demo/pharmacy1.jpg" alt="" /></a></li>
                    <li class="item"><a class="gallery-img" href="img/_demo/pharmacy2.jpg" title="Caption for gallery item 2"><img src="img/_demo/pharmacy2.jpg" alt="" /></a></li>
                    <li class="item"><a class="gallery-img" href="img/_demo/pharmacy3.jpg" title="Caption for gallery item 3"><img src="img/_demo/pharmacy3.jpg" alt="" /></a></li>
                    <li class="item"><a class="gallery-img" href="img/_demo/pharmacy4.jpg" title="Caption for gallery item 4"><img src="img/_demo/pharmacy4.jpg" alt="" /></a></li>
                    <li class="item"><a class="gallery-img" href="img/_demo/pharmacy5.jpg" title="Caption for gallery item 5"><img src="img/_demo/pharmacy5.jpg" alt="" /></a></li> 
                </ul>
            </div>


        </div>
        <!--/.col-->
        <div class="col">

            <nav class="sticky-top">

                <div class="row">
				
                    <div class="col-xl-6 col-lg-12">

                        <div class="wave text-center">
                            <h4>Rating <strong class="text-success">9.99</strong></h4>
                            <p>based on <strong><a class="" href="#opinions">58 opinions</a></strong></p> 

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
							
                            <p><a class="btn btn-primary btn-lg justify" href="/drugs"><strong>15 215</strong> drugs</a></p>

                            <p>In favorites at <strong>462</strong> users</p>

                            <a class="btn btn-secondary justify" href="#"><i class="far fa-heart"></i> Add to favorite</a>

                        </div>
                        <!--/.wave-->
                    </div>
                    <!--/.col-->
                    
					<div class="col-xl-6 col-lg-12">
						<div class="map hidden-lg-down">
                        	<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d84016.36429915384!2d2.161754161251458!3d48.848458114630624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0x47e67031f8c20147%3A0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris%2C+3+Avenue+Victoria%2C+75004+Paris%2C+Francia!3m2!1d48.856836099999995!2d2.3504327!5e0!3m2!1sen!2sru!4v1517149847463"
                            width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div><!--/.map-->
						<div class="hidden-xl-up"><br /><a class="btn-map" href="#" data-toggle="collapse" data-target="#showMap"><i class="fas fa-map-marker"></i> Show on map</a>
							<div class="collapse" id="showMap">
								<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d84016.36429915384!2d2.161754161251458!3d48.848458114630624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0x47e67031f8c20147%3A0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris%2C+3+Avenue+Victoria%2C+75004+Paris%2C+Francia!3m2!1d48.856836099999995!2d2.3504327!5e0!3m2!1sen!2sru!4v1517149847463"
                        width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div><!--/.collapse-->
						</div>
                    </div>
                    <!--/.col-->
					
                </div>
                <!--/.row-->
 
            </nav>
 
        </div>
        <!--/.col-->
    </div>
    <!--/.row-->

	<br />

    <section class="bg-gray">

        <div class="reviews" id="opinions">

            <h3>Opinions <span class="badge">8</span></h3>
            <ul class="owl-carousel owl-theme">
                <li class="item">
                    <em>June 15 2017</em> 
                    <span class="stars good">
							8 / 10
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="far fa-star"></i>
							<i class="far fa-star"></i>
						</span>
                    <p>Lorem ipsum dolor sit amet, dolores mandamus moderatius ea ius, sed civibus vivendum imperdiet ei, amet tritani sea id. Ut veri diceret fierent mei, qui facilisi suavitate euripidis ad. In vim mucius menandri convenire, an brute zril </p>
                </li>
                <li class="item">
                    <em>June 15 2017</em>
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
                    <p>Lorem ipsum dolor sit amet, dolores mandamus moderatius ea ius, sed civibus vivendum imperdiet ei, amet tritani sea id.</p>
                </li>
                <li class="item">
                    <em>June 15 2017</em>
                    <span class="stars bad">
							3 / 10
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="far fa-star"></i>
							<i class="far fa-star"></i>
							<i class="far fa-star"></i>
							<i class="far fa-star"></i>
							<i class="far fa-star"></i>
							<i class="far fa-star"></i>
							<i class="far fa-star"></i>
						</span>
                    <p>Lorem ipsum dolor sit amet, dolores mandamus moderatius ea ius, sed civibus vivendum imperdiet ei, amet tritani sea id. Ut veri diceret fierent mei, qui facilisi suavitate euripidis ad. In vim mucius menandri convenire, an brute zril
                        vis. Ancillae delectus necessitatibus no eam, at porro solet veniam mel, ad everti nostrud vim. Eam no menandri pertinacia deterruisset.</p>
                </li>
                <li class="item">
                    <em>June 15 2017</em>
                    <span class="stars good">
							8 / 10
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="far fa-star"></i>
							<i class="far fa-star"></i>
						</span>
                    <p>Lorem ipsum dolor sit amet, dolores mandamus moderatius ea ius, sed civibus vivendum imperdiet ei, amet tritani sea id. Ut veri diceret fierent mei, qui facilisi suavitate euripidis ad. In vim mucius menandri convenire, an brute zril.</p>
                </li>
                <li class="item">
                    <em>June 15 2017</em>
                    <span class="stars good">
							8 / 10
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="far fa-star"></i>
							<i class="far fa-star"></i>
						</span>
                    <p>Lorem ipsum dolor sit amet, dolores mandamus moderatius ea ius, sed civibus vivendum imperdiet ei, amet tritani sea id. Ut veri diceret fierent mei, qui facilisi suavitate euripidis ad. In vim mucius menandri convenire, an brute zril
                        vis. Ancillae delectus necessitatibus no eam, at porro solet veniam mel, ad everti nostrud vim. Eam no menandri pertinacia deterruisset.</p>
                </li>
                <li class="item">
                    <em>June 15 2017</em>
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
                    <p>Lorem ipsum dolor sit amet, dolores mandamus moderatius ea ius, sed civibus vivendum imperdiet ei.</p>
                </li>
                <li class="item">
                    <em>June 15 2017</em>
                    <span class="stars bad">
							3 / 10
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="far fa-star"></i>
							<i class="far fa-star"></i>
							<i class="far fa-star"></i>
							<i class="far fa-star"></i>
							<i class="far fa-star"></i>
							<i class="far fa-star"></i>
							<i class="far fa-star"></i>
						</span>
                    <p>Lorem ipsum dolor sit amet, dolores mandamus moderatius ea ius, sed civibus vivendum imperdiet ei, amet tritani sea id..</p>
                </li>
                <li class="item">
                    <em>June 15 2017</em>
                    <span class="stars good">
							8 / 10
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="far fa-star"></i>
							<i class="far fa-star"></i>
						</span>
                    <p>Lorem ipsum dolor sit amet, dolores mandamus moderatius ea ius, sed civibus vivendum imperdiet ei, amet tritani sea id. Ut veri diceret fierent mei, qui facilisi suavitate euripidis ad..</p>
                </li>
            </ul>
        </div>
        <!--/.reviews-->

    </section>

    <?php include($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>