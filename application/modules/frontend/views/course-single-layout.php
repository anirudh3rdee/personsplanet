
<?php
if(count( $pageData ) > 0 ){
	$other_data = json_decode($pageData[0]->value);
	$courseFeature = html_entity_decode( trim ( $other_data->courseFeature ) );
	$courseDescription = html_entity_decode( trim ( $other_data->courseDescription ) );
	?>
	<div class="container">
		<header class="entry-header">
          <h1 class="entry-title courses_sub_heading"><?php echo $pageData[0]->title;?></h1>
        </header>
		<div class="row">
		    
		    <div class="col-md-9 course-left-wrap">
		    	<!--Accordion wrapper-->
			
			<ul class="nav nav-tabs" role="tablist">
				<li class="nav-item">
				<a class="nav-link active" href="#courseFeature" role="tab" data-toggle="tab">Features</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="#courseDescription" role="tab" data-toggle="tab">Description</a>
				</li>
			</ul>

			<!-- <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true"> -->
			<div class="tab-content">
			 	<div role="tabpanel" class="tab-pane fade in active" id="courseFeature"><?php echo $courseFeature;?></div>
			 	<div role="tabpanel" class="tab-pane fade" id="courseDescription"> <?php echo $courseDescription;?></div>
			</div>
			  <!-- Accordion card -->
			  <?php /*?> <div class="card">

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

			  </div><?php */?>
			  <!-- Accordion card -->

			  <!-- Accordion card -->
			<?php /*?>  <div class="card">

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

			  </div> <?php */?>
			  <!-- Accordion card -->
			<!-- </div> -->
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
        	 	echo "<p style='font-size: 40px; color: orange; text-align: center;'>".$coursePrice."</p>";
        	 	if( '' != $buyNowUrl ){
        	 		echo "<a href='".$buyNowUrl."' class='btn btn-success btn-primary' >Buy Now</a>";
        	 	}else{
        	 		echo "<button href='".$buyNowUrl."' class='btn btn-success btn-primary' >Buy Now</button>";
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
 