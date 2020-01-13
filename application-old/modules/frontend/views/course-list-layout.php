<?php
if(count( $pageData ) > 0 ){
	$page_data = json_decode($pageData[0]->value);
	?>
	<div class="container">
		<div class="row">
		    <?php //echo $pageData[0]->title;
		    echo $page_data->pageContent;
		    ?>
		    
		</div>
        <?php 
         
        ?>
        <!-- display all course Start -->
        <?php if( count($courseContent) > 0 ){
        	
       	?>
	        <div class="row images_row">
	        	<?php 
	        	foreach ($courseContent as $key => $courseValue) {
	        	 	$course_slug = $courseValue->valueKey;
	        	 	$detail_url = base_url().'courses/'.$course_slug;
	        	 	$other_data = json_decode($courseValue->value);
	        	 	$featured_img = trim ( $other_data->featureImage );
	        	 	$image_url = base_url().'assets/images/course_na.png';
	        	 	if( '' != $featured_img ){
	        	 		$image_url = base_url().$featured_img;
	        	 	}
	        	 	//echo "<pre>";
	        	 	//print_r($other_data);
	        	?>
			    <div class="col-md-3">
			        <div class="card_one">
			            <div>
				            <img style="width: 100%;" src="<?php echo $image_url;?>">
				            <div class="img_body">
				                <h5 class="courses_title"><?php echo $courseValue->title;?></h5>
				                <a href="<?php echo $detail_url ;?>" class="courses_btn">Read More</a>
				            </div>
						</div>
					</div>
			   </div>
			 <?php
				}
			?>
			</div>
		<?php
		} ?>
        <!-- Display all course End -->

	</div> <!-- End container -->
</br/></br/>
	<?php
	
}else{
	echo "<h1 class='center'>Page not found.</h1>";
}
?>
 