<?php
if(count( $pageData ) > 0 ){
	//var_dump($pageData);
	$page_data = json_decode($pageData[0]->value);
	?>
	<div class="container">
		<div class="row">
		    <?php //echo $pageData[0]->title;
		    echo html_entity_decode($page_data->pageContent);
		    ?>
		    
		</div>
        <!-- Display Course according to Course Type Start -->
        <?php if( count($courseContent) > 0 ){ ?>

			<div class="row images_row">
        	<div class="col-md-12">  
        	<h2 class="courses_type_heading">Pro-Trader Course</h2>
        	<div class="advance_section">	
        	<?php 
        	foreach ($courseContent as $key => $courseValue) {
        	 	$course_slug = $courseValue->valueKey;
        	 	$detail_url = base_url().'courses/'.$course_slug;
        	 	$other_data = json_decode($courseValue->value);
        	 	$featured_img = trim ( $other_data->featureImage );
        	 	$coursecatval = $other_data->coursecat;
        	 	$image_url = base_url().'assets/images/course_na.png';
        	 	if( '' != $featured_img ){
        	 		$image_url = base_url().$featured_img;
        	 	}
	        
        	if($coursecatval == 'pro_trader'){ ?> 
		        <div class="col-md-4">        	
				        <div class="courses-sec">
				            <div class="courses-img">
								<img style="width: 100%;" src="<?php echo $image_url;?>">
							</div>
					        <div class="courses-body">
								<h5 class="courses-title"><?php echo $courseValue->title;?></h5>
							</div>
					        <div class="overlay">
							<div class="courses-btn">
								<a href="<?php echo $detail_url ;?>" class="courses_btn btn-primary btn-block yellow_btn">Read More</a>
							</div>
							</div>
						</div>
				</div>
		 <?php	} }	?>
			</div>
			</div>
			</div>

		<?php } ?>
        <!-- Display Course according to Course Type End -->

	</div> <!-- End container -->
</br/></br/>
	<?php
	
}else{
	echo "<h1 class='center'>Page not found.</h1>";
}
?>
 