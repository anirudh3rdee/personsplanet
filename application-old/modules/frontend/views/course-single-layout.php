<?php
if(count( $pageData ) > 0 ){
	$other_data = json_decode($pageData[0]->value);
	$courseFeature = trim ( $other_data->courseFeature );
	$courseDescription = trim ( $other_data->courseDescription );
	?>
	<div class="container">
		<header class="entry-header">
          <h1 class="entry-title"><?php echo $pageData[0]->title;?></h1>
        </header>
		<div class="row">
		    
		    <div class="col-md-9 course-left-wrap">
		    	<!--Accordion wrapper-->

			<div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

			  <!-- Accordion card -->
			  <div class="card">

			    <!-- Card header -->
			    <div class="card-header" role="tab" id="courseFeature">
			      <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="false"
			        aria-controls="collapseOne1">
			        <h5 class="mb-0">
			          <i class="fa fa-plus"></i> Features 
			        </h5>
			      </a>
			    </div>

			    <!-- Card body -->
			    <div id="collapseOne1" class="collapse" role="tabpanel" aria-labelledby="courseFeature" data-parent="#accordionEx">
			      <div class="card-body">
			         <?php echo $courseFeature;?>
			      </div>
			    </div>

			  </div>
			  <!-- Accordion card -->

			  <!-- Accordion card -->
			  <div class="card">

			    <!-- Card header -->
			    <div class="card-header" role="tab" id="courseDescription">
			      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
			        aria-expanded="true" aria-controls="collapseTwo2">
			        <h5 class="mb-0">
			          <i class="fa fa-plus"></i> Description
			        </h5>
			      </a>
			    </div>

			    <!-- Card body -->
			    <div id="collapseTwo2" class="collapse show" role="tabpanel" aria-labelledby="courseDescription" data-parent="#accordionEx">
			      <div class="card-body">
			         <?php echo $courseDescription;?>
			      </div>
			    </div>

			  </div>
			  <!-- Accordion card -->
			</div>
<!-- Accordion wrapper -->
		    </div>
		    <div class="col-md-3 course-left-right">
		    	<div class="col-md-12">
	    		<?php
	    		$featured_img = trim ( $other_data->featureImage );
	    		$coursePrice = trim ( $other_data->coursePrice );
	    		$buyNowUrl = trim ( $other_data->buyNowUrl );
	    		
	    		$image_url = base_url().'assets/images/course_na.png';
        	 	if( '' != $featured_img ){
        	 		$image_url = base_url().$featured_img;
        	 	}
        	 	echo "<img style='width:100%' src='".$image_url."' />";
        	 	echo "<p style='font-size: 40px; color: orange;'>".$coursePrice."</p>";
        	 	if( '' != $buyNowUrl ){
        	 		echo "<a href='".$buyNowUrl."' class='btn btn-success' >Buy Now</a>";
        	 	}else{
        	 		echo "<button href='".$buyNowUrl."' class='btn btn-success' >Buy Now</button>";
        	 	}

        	 	?>
		    	</div>
		    </div>	
		</div>
	</div> <!-- End container -->
	</br/></br/>
	<?php
	
}else{
	echo "<h1 class='center' style='text-align:center'>Page not found.</h1>";
}
?>
 