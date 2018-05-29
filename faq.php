<?php define( '_ACCESS', 1 ); ?>

<?php

    $page_name = 'faq';
    $page_title = 'FAQ';
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
        <div class="col-xl-9 col-lg-8 col-md-6 col-sm-12">
  
			<h3>About the project</h3> 
						
			<div id="accordion" class="ui-accordion">
				<h4>What is MedPoints&#8482;?</h4>
				<div>MedPoints&#8482; is a decentralized service for finding doctors and recording for an appointment to them. We help our visitors to choose a good specialist in the best location for them.</div>
				<h4>Is MedPoints&#8482; a clinic?</h4>
				<div>No, MedPoints&#8482; is a service where you can find and make an appointment in a suitable clinic. MedPoints&#8482; does not provide medical services.</div>
				<h4>Can I make an appointment to any doctor?</h4>
				<div>If this specialist is already added by the partner clinic, then yes, you can. Every day the database of the service is replenished with new members.</div>
				<h4>MedPoints&#8482; is free for patients?</h4>
				<div>MedPoints&#8482; is a blockchain platform, to maintain the functionality of which requires charging a commission for a number of actions on the site. These expenses on the part of the patient are compensated by special price offers from the partners of the system.</div>
				<h4>How much does it cost to make an appointment to a doctor through MedPoints&#8482;?</h4>
				<div>The cost of appointment to a doctor depends on the clinic in which he works. For our part, we guarantee that we do not overestimate the cost of services and that prices correspond to the official price from the clinics.</div>
				<h4>Can I add my child?</h4>
				<div>Yes, you can add data of your child, but when you visit a doctor, you must have all the necessary and accompanying documents to prove that you are his parent or official guardian.</div> 
			</div><!--accordion-->
						
			<h3>About storing records</h3>
						
			<div id="accordion2" class="ui-accordion">
				<h4>How is personal information stored?</h4>
				<div>Your personal data of health history and transactions are stored in a distributed form, not on your phone or any software. institutions. Nobody except you can read or change your data.</div>
				<h4>How can I access my account?</h4>
				<div>In the registration process on the platform you will be generated 2 keys, with which you can access your account. Keep this information confidential and do not share it with anyone. Decentralization does not imply the restoration of access by means of requests to support, becouse no one, include developers, have no access to this data.</div>
				<h4>How long have you kept the patient data?</h4>
				<div>Your information is stored as long as you have an active account in the system. When you delete your account, all your personal information will also be deleted and will no longer be available after generating a new block in the chain.</div>
				<h4>Are my records available to a third party?</h4>
				<div>MedPoints&#8482; can not and will not share your data with anyone unless you personaly not to open access to your records by request of medical specialists.</div>
			</div><!--accordion2-->
						 
			<h3>About booking</h3>
						
			<div id="accordion3" class="ui-accordion">
				<h4>How to choose a doctor on MedPoints&#8482;?</h4>
				<div>We provide several search options for professionals and detailed questionnaires with honest ratings and reviews. You will be able to choose a doctor that suits your criteria. You can sort the list by experience and cost of visit. You also can sort experts by who visit patient at home and/or work with childrens.</div>
				<h4>How is the doctor's appointment paid?</h4>
				<div>Reception of the doctor is paid in the context of a smart contract for the provision of services by the clinic. May not include the additional services that will be required during visiting clinic.</div>
				<h4>How can I leave a review?</h4>
				<div>A feedback system is mandatory for each patient. It can be a couple of words or just a plus sign. It is important for us that every specialist and clinic had as many reviews as possible to create the most accurate assessment of the services provided by them.</div>
				<h4>How quickly does the confirmation come from the clinic?</h4>
				<div>The processing speed of the application is influenced by several factors:
					<ul>
						<li>The traffic in the blockchain network</li>
    					<li>Number of active operators on the side of the clinic</li>
    					<li>Time of appointment (working hours of medical institutions may not coincide with your time zone)</li>
					</ul> 
					The combination of these factors affects the speed of booking confirmation, and can take from 5 minutes to 24 hours.
				</div>
				<h4>How to add a complaint with the clinic?</h4>
				<div>We do not handle complaints privately, but you can leave feedback with an appropriate assessment and if the clinic's rating falls below the red line it will be automatically excluded from the database for 1 year.</div> 
			</div><!--accordion3-->
						
			<h3>About partnership</h3>
						
			<div id="accordion4" class="ui-accordion">
				<h4>How can I add a doctor?</h4>
				<div>To register in the system as a doctor or any other medical employee you need to be among the staff of one of the clinics that are part of the system, because only clinics can add medical personal and services.</div>
				<h4>How to register clinics and / or medical centers?</h4>
				<div>Any clinic, regardless of geography, can become part of the MedPoints&#8482; system, all that required is to download the software for a specific operating system to the clinic's computer, go through verification and add information about itself, a list of departments, doctors and offered services. The addition process involves importing data from the xml table.</div>
				<h4>Does the clinic need an account?</h4>
				<div>When you activate the software on your computer, a wallet will be automatically created for you, which will be used to pay for the services of the clinic. You do not need to replenish the balance additionally.</div>
				<h4>What documents are needed to open an account of the clinic?</h4>
				<div>To gain access to the MedPoints&#8482; customer base and add information about your employees and services to the database medical institution needs:
					<ol>
						<li>Read and agree to the terms of conditions on the site</li>
    					<li>Goes through verification</li>
    					<li>After that, the official mail of the clinic will receive a link to download the licensed software for processing applications</li>
					</ol>
				</div> 
				<h4>How much does the service cost?</h4>
				<div>All partners "pay" with resources of their computers, becouse it is on their side all transactions are processed. Additional investments from clinics, pharmacological businesses and their representative offices are not required.</div>
				<h4>How to pay taxes?</h4>
				<div>Each clinic independently conducts its own tax accounting in accordance with the current legislation of the host country. MedPoints&#8482; in this case is only a communication channel between the doctor and the patient.</div>
				<h4>Are you blocking accounts? How can this be avoided?</h4>
				<div>The account can be blocked only in one case - if the clinic's rating fell below the red line. Re-registration for this medical institution will be available only after 1 year.</div>
				<h4>Why are deleted accounts available again after 1 year?</h4>
				<div>Medical market is a dynamic sphere of activity and for a period of 12 months not only the management but also the staff of the institution can change, which entitles new participants to show themselves best in the MedPoints&#8482; system.</div>
				<h4>How clinics and pharmacies withdraw money?</h4>
				<div>For each account of the clinic, it is possible to withdraw the accumulated MPT points to its official requisites. Payments take from 1 to 5 days depending on the legal address.</div>
			</div><!--accordion2-->
						
			<h3>About prescriptions</h3>
						
			<div id="accordion5" class="ui-accordion">
				<h4>Can I get a real prescription?</h4>
				<div>Within the framework of existing agreements and the current legislation on the traffic of drugs, we can not provide 100% of the functionality to obtain valid prescriptions in all pharmacies. However, as the network expands, the number of interacting medical institutions will grow, and accordingly you will be able to use your virtual prescription in more pharmacological networks.</div>
				<h4>Are the prescriptions confidential?</h4>
				<div>Information on your prescription is available to you, the specialist who prescribe it and medical institution in which he works. No one else has access to information on your prescriptions.</div>
				<h4>What prescriptions can the doctor prescribe?</h4>
				<div>Within the limits of digital prescriptions the doctor has the right to write out to you the prescription for any medicinal preparations, except for a group of strong, narcotic substances and experimental preparations.<br />
<sup>*</sup> The traffic of all drugs is regulated by the current legislation of the host country.<br />
<sup>*</sup> We provide the opportunity to receive electronic prescriptions only for patients aged 18 years.</div>
			</div><!--accordion5-->
						
			<h3>General issues</h3>
						
			<div id="accordion6" class="ui-accordion">
				<h4>How can I pay for services?</h4>
				<div>We accept all major credit cards and PayPal transfers to fill the balance of your account in the system.</div>
				<h4>Can I use the system for emergencies?</h4>
				<div>In MedPoints&#8482;, we tried to create an ecosystem with the most-rapid processing of requests for medical specialists, however, there are several variables in this connection channel that are not directly related to the platform, so if you think that your problem is urgent medical assistance, we advise you to seek the help in emergency medical services and if it's possible to call an ambulance.</div>
				<h4>Which doctors work in the system?</h4>
				<div>All doctors whose profiles are available in the MedPoints&#8482; system are certified medical specialists with an official place of work in one of the partners clinics.</div>
				<h4>How can I communicate with a doctor in another language?</h4>
				<div>At the moment the system works in several languages. As for direct live communication, the platform does not provide for the services of translators. At least for now.</div> 
			</div><!--accordion4-->
			 
        </div>
        <!--/.col-->
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">

            <nav class="sticky-top">

                <div class="wave">
				
					<h3>Ask your question</h3>
  
                    <div class="form-group">
                        <label for="yourName">Your name</label>
                        <input type="text" name="name" class="form-control" id="yourName" placeholder="Your name" />
                    </div>
              
                    <div class="form-group">
                        <label for="yourEmail">Your e-mail</label>
                        <input type="text" name="email" class="form-control" id="yourEmail" placeholder="Your e-mail" />
                    </div> 
              
                    <div class="form-group">
                        <label for="yourQuestion">Text of your question</label>
                        <textarea name="question" class="form-control" id="yourQuestion" placeholder="Text of your question"></textarea>
                    </div> 
              
                    <div class="form-group">
                        <label class="custom-file">
  <input type="file" id="file" class="custom-file-input">
  <span class="custom-file-control"></span>
</label>
                    </div> 
              
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary justify">Send question</button>
                    </div> 

                </div>
                <!--/.wave-->

            </nav>
 
        </div>
        <!--/.col-->
    </div>
    <!--/.row-->

    <?php include($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>