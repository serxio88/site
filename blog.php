<?php define( '_ACCESS', 1 ); ?>

<?php

    $page_name = 'blog';
    $page_title = 'Blog';
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
	
        <div class="col-xl-4 push-xl-8 col-lg-12 push-lg-0">

            <nav class="sticky-top">
			
				Правый

            </nav>
			
        </div>
        <!--/.col-->
		
        <div class="col-xl-8 pull-xl-4 col-lg-12 pull-lg-0">

            <ul class="items-list">
			
                <li>
                    <div class="row">
                        <div class="col-xl-3 col-md-4 col-sm-4">
                            <a class="avatar" href="/text"><div class="crop"><img src="img/_demo/service1.jpg" alt="" /></div></a> 
                        </div>
                        <!--/.col-->
                        <div class="col-xl-9 col-md-8 col-sm-12"> 
                            <h2><a class="avatar" href="/text">Article title</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <a  href="/text">read more <i class="fas fa-long-arrow-alt-right"></i></a> 
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