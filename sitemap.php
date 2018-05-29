<?php define( '_ACCESS', 1 ); ?>

<?php

    $page_name = 'sitemap';
    $page_title = 'Sitemap';
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

    <ul>
        <li><a href="/">Main page</a></li>
        <li><a href="/clinics">Clinics</a></li>
        <li>
            <ul>
                <li><a href="/clinic">Clinic</a></li>
            </ul>
        </li>
        <li><a href="/booking">Booking</a></li>
        <li><a href="/rates">MedPoints rates</a></li>
        <li><a href="/services">Services</a></li>
        <li>
            <ul>
                <li><a href="/service">Service</a></li>
            </ul>
        </li>
        <li><a href="/doctors">Doctors</a></li>
        <li>
            <ul>
                <li><a href="/doctor">Doctor</a></li>
            </ul>
        </li>
        <li><a href="/pharmacies">Pharmacies</a></li>
        <li>
            <ul>
                <li><a href="/pharmacy">Pharmacy</a></li>
            </ul>
        </li>
        <li><a href="/drugs">Drugs</a></li>
        <li>
            <ul>
                <li><a href="/drug">Drug</a></li>
            </ul>
        </li>
        <li><a href="/foundation">Foundation for Medical Assistance</a></li>
        <li><a href="/foundation-cases">Foundation cases</a></li>
        <li>
            <ul>
                <li><a href="/foundation-case">Foundation Case</a></li>
            </ul>
        </li>
        <li><a href="/search-results">Search Results</a></li>
        <li><a href="/insurance">Insurance program</a></li>
        <li><a href="/registration">Registration</a></li>
        <li><a href="/account">Account</a></li>
        <li>
            <ul>
                <li><a href="/account-records">Medical records</a></li>
                <li>
                    <ul>
                        <li><a href="/account-request">Records request</a></li>
                        <li><a href="/add-record">Add record</a></li>
                    </ul>
                </li>
                <li><a href="/account-balance">Account balance</a></li>
                <li><a href="/account-favorites">Account Favorites</a></li>
                <li><a href="/account-reviews">Account reviews</a></li>
                <li>
                    <ul>
                        <li><a href="/add-review">Add review</a></li>
                    </ul>
                </li>
                <li><a href="/account-tickets">Support tickets</a></li>
                <li>
                    <ul>
                        <li><a href="/account-ticket">Support ticket</a></li>
                        <li><a href="/add-ticket">Add ticket</a></li>
                    </ul>
                </li>
                <li><a href="/account-foundations">Account assistance foundations</a></li>
                <li><a href="/account-insurance">Insurance program</a></li>
                <li>
                    <ul> 
                        <li><a href="/add-insurance">Add insurance</a></li>
                    </ul>
                </li>
                <li><a href="/account-edit">Edit account</a></li>
            </ul>
        </li>
        <li><a href="/about">About</a></li>
        <li><a href="/terms-of-use">Terms of use</a></li>
        <li><a href="/privacy-policy">Privacy Policy</a></li>
        <li><a href="/partnership">Partnership</a></li>
        <li><a href="/explorer">Blockchain explorer</a></li>
		<li><a href="/blog">Blog</a></li>
        <li><a href="/success">Successful booking</a></li>
        <li><a href="/text">Text page</a></li>
        <li><a href="/403">403</a></li>
        <li><a href="/404">404</a></li>
        <li><a href="/500">500</a></li>
        <li><a href="/503">503</a></li>
        <li><a href="/faq">FAQ</a></li>
        <li><a href="/sitemap">Sitemap</a></li>
    </ul>


    <?php include($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>