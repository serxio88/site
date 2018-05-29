<?php define( '_ACCESS', 1 ); ?>

<?php

    $page_name = 'drugs';
    $page_title = 'Drugs';
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
						<span class="custom-control-description">Released without a prescription</span>
					</label>
                    <label class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">Can be covered by insurance points</span>
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

                        <h3>Sex</h3>
                        <label class="custom-control custom-radio">
							<input id="radio1" name="radio" type="radio" class="custom-control-input" checked="checked">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Any</span>
						</label>
                        <label class="custom-control custom-radio">
							<input id="radio2" name="radio" type="radio" class="custom-control-input">
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
	
        <div class="col-xl-3 push-xl-9 col-lg-12 push-lg-0">

            <h3>Categories</h3>

            <ul class="cat-list">
                <li><a class="active" href="#">All</a></li>
                <li><a href="/drugs">Allergenics</a> <span class="badge">1015</span></li>
                <li><a href="/drugs">Analgesics</a> <span class="badge">1015</span></li> 
                <li><a href="/drugs">Antacids</a> <span class="badge">1015</span></li>
                <li><a href="/drugs">Antidotes</a> <span class="badge">1015</span></li>
                <li><a href="/drugs">Benzodiazepines</a> <span class="badge">1015</span></li>
                <li><a href="/drugs">Catecholamines</a> <span class="badge">1015</span></li>
                <li><a href="/drugs">Diuretics</a> <span class="badge">1015</span></li>
                <li><a href="/drugs">Estrogens</a> <span class="badge">1015</span></li>
                <li><a href="/drugs">Fibric acid derivatives</a> <span class="badge">1015</span></li>
                <li><a href="/drugs">GI stimulants</a> <span class="badge">1015</span></li>
                <li><a href="/drugs">Hormones</a> <span class="badge">1015</span></li>
                <li><a href="/drugs">Interleukins</a> <span class="badge">1015</span></li>
                <li><a href="/drugs">Laxatives</a> <span class="badge">1015</span></li>
                <li><a href="/drugs">Meglitinides</a> <span class="badge">1015</span></li>
                <li><a href="/drugs">NS5A inhibitors</a> <span class="badge">1015</span></li>
                <li><a href="/drugs">Oral nutritional supplements</a> <span class="badge">1015</span></li>
                <li><a href="/drugs">Penicillins</a> <span class="badge">1015</span></li>
                <li><a href="/drugs">Radiologic agents</a> <span class="badge">1015</span></li>
                <li><a href="/drugs">Statins</a> <span class="badge">1015</span></li>
                <li><a href="/drugs">Vitamins</a> <span class="badge">1015</span></li>
            </ul><!--/.cat-list-->

        </div>
        <!--/.col-->
		
        <div class="col-xl-9 pull-xl-3 col-lg-12 pull-lg-0">
		
			<h3>Alphabetical index</h3>

            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">A</a></li>
                <li class="list-inline-item"><a href="#">B</a></li>
                <li class="list-inline-item"><a href="#">C</a></li>
                <li class="list-inline-item"><a href="#">D</a></li>
                <li class="list-inline-item"><a href="#">E</a></li>
                <li class="list-inline-item"><a href="#">F</a></li>
                <li class="list-inline-item"><a href="#">G</a></li>
                <li class="list-inline-item"><a href="#">H</a></li>
                <li class="list-inline-item"><a href="#">I</a></li>
                <li class="list-inline-item"><a href="#">J</a></li>
                <li class="list-inline-item"><a href="#">K</a></li>
                <li class="list-inline-item"><a href="#">L</a></li>
                <li class="list-inline-item"><a href="#">M</a></li>
                <li class="list-inline-item"><a href="#">N</a></li>
                <li class="list-inline-item"><a href="#">O</a></li>
                <li class="list-inline-item"><a href="#">P</a></li>
                <li class="list-inline-item"><a href="#">Q</a></li>
                <li class="list-inline-item"><a href="#">R</a></li>
                <li class="list-inline-item"><a href="#">S</a></li>
                <li class="list-inline-item"><a href="#">T</a></li>
                <li class="list-inline-item"><a href="#">U</a></li>
                <li class="list-inline-item"><a href="#">V</a></li>
                <li class="list-inline-item"><a href="#">W</a></li>
                <li class="list-inline-item"><a href="#">X</a></li>
                <li class="list-inline-item"><a href="#">Y</a></li>
                <li class="list-inline-item"><a href="#">Z</a></li>
            </ul>
  
            <div class="table-responsive">
                <table summary="" class="table table-hover">
                    <thead>
                        <tr>
                            <th width="40%">
                                <h5>Name</h5>
                            </th>
                            <th>
                                <h5>Price</h5>
                            </th>
                            <th>
                                <h5>Insurance</h5>
                            </th>
                            <th>
                                <h5>On prescription only</h5>
                            </th>
                            <th class="text-right">
                                <h5>Providers</h5>

                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <h4><a href="/drug" title="">Aspirin</a> acetylsalicylic acid (ASA)</h4>
                                <p>The prototypical analgesic used in the treatment of mild to moderate pain. It has anti-inflammatory and antipyretic properties and acts as an inhibitor of cyclooxygenase which results in the inhibition of the biosynthesis
                                    of prostaglandins. </p>
                            </td>
                            <td class="price-td">from <strong class="text-dark">$24</strong><br /><strong class="text-success">240 MPT</strong></td>
                            <td class="text-center"><i class="fas fa-plus text-success" data-toggle="tooltip" data-placement="top" title="Can be purchased for insurance points"></i></td>
                            <td class="text-center"><i class="fas fa-plus text-success" data-toggle="tooltip" data-placement="top" title="Can be purchased for insurance points"></i></td>
                            <td><a class="btn btn-primary float-right" href="/doctors"><strong>1270</strong> Pharmacies</a></td>
                        </tr>
                        <tr>
                            <td>
                                <h4><a href="/drug" title="">Aspirin</a> acetylsalicylic acid (ASA)</h4>
                                <p>The prototypical analgesic used in the treatment of mild to moderate pain. It has anti-inflammatory and antipyretic properties and acts as an inhibitor of cyclooxygenase which results in the inhibition of the biosynthesis
                                    of prostaglandins. </p>
                            </td>
                            <td class="price-td">from <strong class="text-dark">$24</strong><br /><strong class="text-success">240 MPT</strong></td>
                            <td></td>
                            <td></td>
                            <td><a class="btn btn-primary float-right" href="/doctors"><strong>1270</strong> Pharmacies</a></td>
                        </tr>
                        <tr>
                            <td>
                                <h4><a href="/drug" title="">Aspirin</a> acetylsalicylic acid (ASA)</h4>
                                <p>The prototypical analgesic used in the treatment of mild to moderate pain. It has anti-inflammatory and antipyretic properties and acts as an inhibitor of cyclooxygenase which results in the inhibition of the biosynthesis
                                    of prostaglandins. </p>
                            </td>
                            <td class="price-td">from <strong class="text-dark">$24</strong><br /><strong class="text-success">240 MPT</strong></td>
                            <td></td>
                            <td></td>
                            <td><a class="btn btn-primary float-right" href="/doctors"><strong>1270</strong> Pharmacies</a></td>
                        </tr>
                        <tr>
                            <td>
                                <h4><a href="/drug" title="">Aspirin</a> acetylsalicylic acid (ASA)</h4>
                                <p>The prototypical analgesic used in the treatment of mild to moderate pain. It has anti-inflammatory and antipyretic properties and acts as an inhibitor of cyclooxygenase which results in the inhibition of the biosynthesis
                                    of prostaglandins. </p>
                            </td>
                            <td class="price-td">from <strong class="text-dark">$24</strong><br /><strong class="text-success">240 MPT</strong></td>
                            <td class="text-center"><i class="fas fa-plus text-success" data-toggle="tooltip" data-placement="top" title="Can be purchased for insurance points"></i></td>
                            <td class="text-center"><i class="fas fa-plus text-success" data-toggle="tooltip" data-placement="top" title="Can be purchased for insurance points"></i></td>
                            <td><a class="btn btn-primary float-right" href="/doctors"><strong>1270</strong> Pharmacies</a></td>
                        </tr>
                        <tr>
                            <td>
                                <h4><a href="/drug" title="">Aspirin</a> acetylsalicylic acid (ASA)</h4>
                                <p>The prototypical analgesic used in the treatment of mild to moderate pain. It has anti-inflammatory and antipyretic properties and acts as an inhibitor of cyclooxygenase which results in the inhibition of the biosynthesis
                                    of prostaglandins. </p>
                            </td>
                            <td class="price-td">from <strong class="text-dark">$24</strong><br /><strong class="text-success">240 MPT</strong></td>
                            <td class="text-center"><i class="fas fa-plus text-success" data-toggle="tooltip" data-placement="top" title="Can be purchased for insurance points"></i></td>
                            <td class="text-center"><i class="fas fa-plus text-success" data-toggle="tooltip" data-placement="top" title="Can be purchased for insurance points"></i></td>
                            <td><a class="btn btn-primary float-right" href="/doctors"><strong>1270</strong> Pharmacies</a></td>
                        </tr>
                        <tr>
                            <td>
                                <h4><a href="/drug" title="">Aspirin</a> acetylsalicylic acid (ASA)</h4>
                                <p>The prototypical analgesic used in the treatment of mild to moderate pain. It has anti-inflammatory and antipyretic properties and acts as an inhibitor of cyclooxygenase which results in the inhibition of the biosynthesis
                                    of prostaglandins. </p>
                            </td>
                            <td class="price-td">from <strong class="text-dark">$24</strong><br /><strong class="text-success">240 MPT</strong></td>
                            <td class="text-center"><i class="fas fa-plus text-success" data-toggle="tooltip" data-placement="top" title="Can be purchased for insurance points"></i></td>
                            <td></td>
                            <td><a class="btn btn-primary float-right" href="/doctors"><strong>1270</strong> Pharmacies</a></td>
                        </tr>
                        <tr>
                            <td>
                                <h4><a href="/drug" title="">Aspirin</a> acetylsalicylic acid (ASA)</h4>
                                <p>The prototypical analgesic used in the treatment of mild to moderate pain. It has anti-inflammatory and antipyretic properties and acts as an inhibitor of cyclooxygenase which results in the inhibition of the biosynthesis
                                    of prostaglandins. </p>
                            </td>
                            <td class="price-td">from <strong class="text-dark">$24</strong><br /><strong class="text-success">240 MPT</strong></td>
                            <td></td>
                            <td></td>
                            <td><a class="btn btn-primary float-right" href="/doctors"><strong>1270</strong> Pharmacies</a></td>
                        </tr>
                        <tr>
                            <td>
                                <h4><a href="/drug" title="">Aspirin</a> acetylsalicylic acid (ASA)</h4>
                                <p>The prototypical analgesic used in the treatment of mild to moderate pain. It has anti-inflammatory and antipyretic properties and acts as an inhibitor of cyclooxygenase which results in the inhibition of the biosynthesis
                                    of prostaglandins. </p>
                            </td>
                            <td class="price-td">from <strong class="text-dark">$24</strong><br /><strong class="text-success">240 MPT</strong></td>
                            <td></td>
                            <td></td>
                            <td><a class="btn btn-primary float-right" href="/doctors"><strong>1270</strong> Pharmacies</a></td>
                        </tr>
                        <tr>
                            <td>
                                <h4><a href="/drug" title="">Aspirin</a> acetylsalicylic acid (ASA)</h4>
                                <p>The prototypical analgesic used in the treatment of mild to moderate pain. It has anti-inflammatory and antipyretic properties and acts as an inhibitor of cyclooxygenase which results in the inhibition of the biosynthesis
                                    of prostaglandins. </p>
                            </td>
                            <td class="price-td">from <strong class="text-dark">$24</strong><br /><strong class="text-success">240 MPT</strong></td>
                            <td></td>
                            <td></td>
                            <td><a class="btn btn-primary float-right" href="/doctors"><strong>1270</strong> Pharmacies</a></td>
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