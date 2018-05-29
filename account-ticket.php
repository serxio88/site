<?php define( '_ACCESS', 1 ); ?>

<?php

    $page_name = 'account-ticket';
    $page_title = 'Support ticket';
	$page_keywords = '';
	$page_description = '';
	
?>

    <?php include($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>


    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="/account">Account</a></li>
            <li class="breadcrumb-item"><a href="/account-tickets">Support tickets</a></li>
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
		
			<div class="chat">
			
				<div class="row">
			
					<div class="col-xl-10 col-lg-11 col-md-12 col-sm-12">
						<h5>You</h5>
						<div class="card">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    		<div class="gallery">
								<ul class="list-inline">
									<li class="list-inline-item"><a class="gallery-img" href="http://via.placeholder.com/750x550" title="Document title 2">Document.jpg</a></li>
									<li class="list-inline-item"><a class="gallery-img" href="http://via.placeholder.com/750x550" title="Document title 2">Document.jpg</a></li>
									<li class="list-inline-item"><a class="gallery-img" href="http://via.placeholder.com/750x550" title="Document title 2">Document.jpg</a></li>
									<li class="list-inline-item"><a class="gallery-img" href="http://via.placeholder.com/750x550" title="Document title 2">Document.jpg</a></li>
								</ul>
                    		</div>
                    		<!--/.gallery-->
						</div><!--/.card-->
						<br />
					</div>
        			<!--/.col-->  
			
					<div class="col-xl-10 push-xl-2 col-lg-11 push-lg-1 col-md-12 push-md-0 col-sm-12 push-sm-0">
						<h5 class="text-right">MedPoints administrator #454678</h5>
						<div class="card">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> 
						</div><!--/.card-->
						<br />
					</div>
        			<!--/.col-->
				
				</div>
    			<!--/.row--> 
				
			</div><!--/.chat-->
			
			<h3>Add reply</h3>
			
			<hr />
		
			 <form>  
              
                <div class="form-group row">
                    <label for="replyText" class="col-2 col-form-label">Text</label>
                	<div class="col-10">
                    	<textarea name="textarea" class="form-control" id="replyText" placeholder="Reply text"></textarea>
					</div>
                </div> 
					
                 <div class="input-fields-wrap">
    				<a class="add-field-button"><i class="fas fa-plus"></i> Add more files</a>
					<div class="form-group row">
                    	<div class="col-2 col-form-label">File 1</div>
                    	<div class="col-9">
                        	<label class="custom-file">
  								<input type="file" id="file" name="file[]" class="custom-file-input">
  								<span class="custom-file-control"></span>
							</label>
                    	</div>
                	</div><!--/.form-group--> 
				</div><!--/.input-fields-wrap--> 

				<a class="btn btn-primary justify" href="#">Add reply</a>

    		</form>    
						
        </div>
        <!--/.col-->
    </div>
    <!--/.row--> 
	
<script>
$(document).ready(function() {
    var max_fields      = 20; //maximum input boxes allowed
    var wrapper         = $(".input-fields-wrap"); //Fields wrapper
    var add_button      = $(".add-field-button"); //Add button ID
   
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="form-group row"><div class="col-2 col-form-label">File ' + x + '</div><div class="col-9"><label class="custom-file"><input type="file" id="file" name="file ' + x + '" class="custom-file-input"><span class="custom-file-control"></span></label></div><a href="#" class="remove-field"><i class="fas fa-times"></i></a></div><!--/.form-group-->'); //add input box
        }
    });
   
    $(wrapper).on("click",".remove-field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
</script>
 
    <?php include($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>