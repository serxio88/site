<?php define( '_ACCESS', 1 ); ?>

<?php 

    $pageName = "error-503"; // имя страницы + класс страницы
    $page_title = "503 Service Unavailable"; // тайтл страницы
    $page_description = "503 Service Unavailable"; // Описание страницы
    $page_keywords = "503 Service Unavailable"; // ключевые слова

?>

<?php include($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
 
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?=$page_title?></li>
        </ol>
    </nav>
	
	<div class="row">

    	<div class="col">

        	<h2>503 Service Unavailable</h2>

    	</div>
    	<!--/.col-->
	</div>
	<!--/.row-->

<?php include($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>