<?php define( '_ACCESS', 1 ); ?>

<?php

    $page_name = 'drug';
    $page_title = 'Aspirin';
	$page_keywords = '';
	$page_description = '';
	
?>

    <?php include($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/drugs">Drugs</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?=$page_title?></li>
        </ol>
    </nav>
	
	<div class="row">
        <div class="col-xl-6 col-lg-8 col-md-12 col-sm-12">

            <div class="row">
                <div class="col">

                    <img src="img/_demo/drug1.jpg" alt="" class="img-thumbnail float-left">

                    <div>Group <a href="/drugs">Analgesic</a></div>
                    <div>Price from <strong class="text-dark">$24</strong> <strong class="text-success">240 MPT</strong></div>

                    <hr />

                    <p>Lorem ipsum dolor sit amet, dolores mandamus moderatius ea ius, sed civibus vivendum imperdiet ei, amet tritani sea id. Ut veri diceret fierent mei, qui facilisi suavitate euripidis ad. In vim mucius menandri convenire, an brute zril
                        vis. Ancillae delectus necessitatibus no eam, at porro solet veniam mel, ad everti nostrud vim. Eam no menandri pertinacia deterruisset.</p>
                    <p>Lorem ipsum dolor sit amet, dolores mandamus moderatius ea ius, sed civibus vivendum imperdiet ei, amet tritani sea id. Ut veri diceret fierent mei, qui facilisi suavitate euripidis ad. In vim mucius menandri convenire, an brute zril
                        vis. Ancillae delectus necessitatibus no eam, at porro solet veniam mel, ad everti nostrud vim. Eam no menandri pertinacia deterruisset.</p>
                    <p>Lorem ipsum dolor sit amet, dolores mandamus moderatius ea ius, sed civibus vivendum imperdiet ei, amet tritani sea id. Ut veri diceret fierent mei, qui facilisi suavitate euripidis ad. In vim mucius menandri convenire, an brute zril
                        vis. Ancillae delectus necessitatibus no eam, at porro solet veniam mel, ad everti nostrud vim. Eam no menandri pertinacia deterruisset.</p>
                </div>
                <!--/.col-->
            </div>
            <!--/.row-->

        </div>
        <!--/.col-->
        <div class="col-xl-6 col-lg-4 col-md-12 col-sm-12">

            <nav class="sticky-top">

                <div class="row">
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">

                        <div class="wave text-center">
                            <p>Available in</p> 
                            <a class="btn btn-primary btn-lg justify" href="/pharmacies"><strong>2215</strong> Pharmacies</a>
                        </div>
                        <!--/.wave-->
						
                    </div>
                    <!--/.col-->
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
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
	
	<div class="row">
        <div class="col"> 

            <h3>Price comparison for <strong>Aspirin</strong> in <strong>New York</strong></h3>

            <div class="table-responsive">
                <table summary="" class="table table-hover">
                    <thead>
                        <tr>
                            <th>
                                <h5>Pharmacy</h5>
                            </th>
                            <th>
                                <h5>Price</h5>
                            </th>
                            <th class="text-center">
                                <h5>Insurance</h5>
                            </th>
                            <th class="text-right">
                                <h5>On prescription only</h5>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <h4><a href="/pharmacy" title="">Pharmacy Store #1</a></h4>
                            </td>
                            <td class="price-td">from <strong class="text-dark">$24</strong><br /><strong class="text-success">240 MPT</strong></td>
                            <td class="text-center"><i class="fas fa-plus text-success" data-toggle="tooltip" data-placement="top" title="Can be purchased for insurance points"></i></td>
                            <td class="text-right"><i class="fas fa-plus"></i></td>
                        </tr>
                        <tr>
                            <td>
                                <h4><a href="/pharmacy" title="">Pharmacy Store #2</a></h4>
                            </td>
                            <td class="price-td">from <strong class="text-dark">$34</strong><br /><strong class="text-success">340 MPT</strong></td>
                            <td></td>
                            <td class="text-center"></td>
                        </tr>
                        <tr>
                            <td>
                                <h4><a href="/pharmacy" title="">Pharmacy Store #3</a></h4>
                            </td>
                            <td class="price-td">from <strong class="text-dark">$44</strong><br /><strong class="text-success">440 MPT</strong></td>
                            <td class="text-center"><i class="fas fa-plus text-success" data-toggle="tooltip" data-placement="top" title="Can be purchased for insurance points"></i></td>
                            <td class="text-right"><i class="fas fa-plus"></i></td>
                        </tr>
                        <tr>
                            <td>
                                <h4><a href="/pharmacy" title="">Pharmacy Store #4</a></h4>
                            </td>
                            <td class="price-td">from <strong class="text-dark">$54</strong><br /><strong class="text-success">540 MPT</strong></td>
                            <td class="text-center"><i class="fas fa-plus text-success" data-toggle="tooltip" data-placement="top" title="Can be purchased for insurance points"></i></td>
                            <td class="text-center"></td>
                        </tr>
                        <tr>
                            <td>
                                <h4><a href="/pharmacy" title="">Pharmacy Store #5</a></h4>
                            </td>
                            <td class="price-td">from <strong class="text-dark">$64</strong><br /><strong class="text-success">640 MPT</strong></td>
                            <td></td>
                            <td class="text-right"><i class="fas fa-plus"></i></td>
                        </tr>
                        <tr>
                            <td>
                                <h4><a href="/pharmacy" title="">Pharmacy Store #6</a></h4>
                            </td>
                            <td class="price-td">from <strong class="text-dark">$74</strong><br /><strong class="text-success">740 MPT</strong></td>
                            <td class="text-center"><i class="fas fa-plus text-success" data-toggle="tooltip" data-placement="top" title="Can be purchased for insurance points"></i></td>
                            <td class="text-center"></td>
                        </tr>
                        <tr>
                            <td>
                                <h4><a href="/pharmacy" title="">Pharmacy Store #7</a></h4>
                            </td>
                            <td class="price-td">from <strong class="text-dark">$84</strong><br /><strong class="text-success">840 MPT</strong></td>
                            <td class="text-center"><i class="fas fa-plus text-success" data-toggle="tooltip" data-placement="top" title="Can be purchased for insurance points"></i></td>
                            <td class="text-right"><i class="fas fa-plus"></i></td>
                        </tr>
                        <tr>
                            <td>
                                <h4><a href="/pharmacy" title="">Pharmacy Store #8</a></h4>
                            </td>
                            <td class="price-td">from <strong class="text-dark">$94</strong><br /><strong class="text-success">940 MPT</strong></td>
                            <td class="text-center"><i class="fas fa-plus text-success" data-toggle="tooltip" data-placement="top" title="Can be purchased for insurance points"></i></td>
                            <td class="text-right"><i class="fas fa-plus"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div> 
            <!--end of .table-responsive-->
			
			<br />
 
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