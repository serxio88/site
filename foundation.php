<?php define( '_ACCESS', 1 ); ?>

<?php

    $page_name = 'foundation';
    $page_title = 'Foundation for Medical Assistance';
	$page_keywords = '';
	$page_description = '';
	
?>

    <?php include($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>


    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?=$page_title?></li>
        </ol>
    </nav>
	
	<div class="row">
        <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12">

            <div class="row">
				
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">  
                    <p>One of the most significant aspects of the MedPoints&#8482; system, we believe, is the functionality of a decentralized collection of funds to help seriously ill or needy people.</p>
                    <p>Cases requiring the collection of funds for treatment and / or emergency care can be added only by representatives of clinics and medical institutions.</p>
                    <p>Even if the necessary amount has not been achieved, all collected funds are sent to the account of the medical institution for the treatment of this particular case and the patient.</p>
                    <p>The MedPoints&#8482; system does not take a percentage of the fundraising, except standard payment required to conduct transactions within the system.</p>
                </div>
                <!--/.col-->
			
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12"> 
                    <img class="img-responsive" src="img/foundation-eng.svg" alt="" />  
                </div>
                <!--/.col--> 
				
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">  
                    <p>The fact that all transactions are carried out through a decentralized platform, ensures that all collected money will go to the decision of a specific case and will not go to the hands of third parties or scammers.</p>
					<p>A separate point of medical care within the MedPoints&#8482; project is a <strong>General fund</strong> not tied to a specific fund-raising case, where anyone can make a contribution in any amount and any time. Points from <strong>General fund</strong> serve for partial coverage in cases when required amount for the full treatment remains less then 10%, but the company's time has passed.</p>
                </div>
                <!--/.col-->
				
            </div>
            <!--/.row-->

        </div>
        <!--/.col-->
        <div class="col-xl-3 col-lg-4 col-md-12 col-sm-12">

            <nav class="sticky-top">
 
                <div class="wave text-center">  
                    <p><a href="/clinics"><strong>78</strong> participants in the program</a></p> 
                    <a class="btn btn-primary btn-lg justify" href="/foundation-cases"><strong>156</strong> open cases</a>
                </div>
                <!--/.wave-->
				
				<br /> 
						
				<div class="text-center">
				
					<a href="#" data-toggle="modal" data-target="#listFunds">Make donation to General fund</a>
							
					<br />
						
					<small>Points from <strong>General fund</strong> serve for partial coverage in cases when required amount for the full treatment remains less then 10%, but the company's time has passed.</small>
						
					<br />
						
					<br />
						
				</div>
				<!--/.-->
					 
            </nav>
 
        </div>
        <!--/.col-->
    </div>
    <!--/.row-->
 
    <?php include($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>