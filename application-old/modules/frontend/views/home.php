<?php $banner_background = '';if(isset( $banner->banner_image) ):$img_url = base_url().''.$banner->banner_image;$banner_background = "style='background-image:url(".$img_url.")' " ;endif;?>		
 <section class="banner_sec home_bg" <?php echo $banner_background;?> >
            <div class="container">
                <div class="row">
                    <div class="banner_text">						<?php						if(isset( $banner->banner_heading) ):							echo "<h1>".$banner->banner_heading."</h1>";						endif;
                        						if(isset( $banner->banner_sub_heading) ):							echo "<h3>".$banner->banner_sub_heading."</h3>";						endif;
                        if(isset( $banner->banner_details) ):							echo "<p>".$banner->banner_details."</p>";						endif;            
                        
                        
                        
                        if(isset( $banner->subscription_button) ):						echo "<a href='".$banner->subscription_button_url."' class='subs_butn_1 subs_btn'>".$banner->subscription_button."</a>"; endif;  ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="yellow_sec">
            <div class="container">
                <div class="row">
                    <div class="yellow_text italic_heading">						<?php						if(isset( $senond_section->second_heading) ):							echo "<p>".$senond_section->second_heading."</p>";						endif;						?>
                        </div>

                </div>
            </div>
        </section>
        <section class="person_blog">
            <div class="dark_sec">
                <div class="dark_left_sec">		<?php	if(isset( $senond_section->second_sub_heading) ):echo "<h4>".$senond_section->second_sub_heading."</h4>";	endif;		if(isset( $senond_section->section_details) ):						echo "<p class='live_forum_detail'>".$senond_section->section_details."</p>";		endif;		if(isset( $senond_section->second_button) ):		echo "<a href='".$senond_section->second_button_url."' class=' weekly_rprt_btn'>".$senond_section->second_button."</a>";					endif;					?>
                    
                </div>
                <div class="dark_right_sec">
                    <div class="img-person">						<?php						if(isset( $senond_section->Second_section_image) ):							echo "<img src='".$senond_section->Second_section_image."' alt='Person'>";						endif;						?>
                         
                    </div>
                </div>
            </div>
        </section>
        <section class="listing_sec">
            <div class="container">
                <div class="row">				<?php					foreach( $blog_section as $blog_data )					{						?>
                    <div class="col-md-4 mb-3">
                        <div class="card_sec">
                            <div class="card">
                                <h5 class="card-title"><?php echo $blog_data->title;?></h5>								<?php								$blog_detail = json_decode( $blog_data->value );								 								if( isset( $blog_detail->blogImage) )									{										$blog_img_url = base_url().''.$blog_detail->blogImage;										echo "<img class='card-img-top' src='".$blog_img_url."' alt='Card image cap'>";									}									?>
                                <div class="card-body">									<?php 									if( isset( $blog_detail->blogContent) )									{										echo "<p class='card-text'>".$blog_detail->blogContent."</p>";									}									if( isset( $blog_detail->blogBtnLabel, $blog_detail->blogBtnLink) )									{										echo "<a href='".$blog_detail->blogBtnLink."' class='btn btn-primary'>".$blog_detail->blogBtnLabel."</a>";									}									?>                               							
                                     
                                </div>
                            </div>
                        </div>
                    </div>					<?php } //endforeach ?>
                                        
                </div>
            </div>
        </section>		<?php		foreach ( $fourth_section as $fourth_data )		{			$fourth_banner_background = '';			if(isset( $fourth_data->background_image) ):				$img_url = base_url().''.$fourth_data->background_image;				$fourth_banner_background = "style='background-image:url(".$img_url.")' " ;			endif;		?>
        <section class="freebook_sec" <?php echo $fourth_banner_background;?>>
            <div class="container">
                <div class="row">
                    <div class="bnr-ing">			
                        <div class="left_sec">	<?php		if( isset( $fourth_data->fourth_heading ) )	{		echo "<h5>".$fourth_data->fourth_heading."</h5>";							}							if( isset( $fourth_data->fourth_details ) )							{								echo $fourth_data->fourth_details;							}							if( isset( $fourth_data->fourth_btn_label ) )							{								echo "<a href='".$fourth_data->fourth_btn_url."' class='col-10 yellow_btn col-md-10'>".$fourth_data->fourth_btn_label."</a>";							}							if( isset( $fourth_data->fourth_other_details ) )							{								echo $fourth_data->fourth_other_details;							}						 						?>
                                               
                        </div>
                    </div>
                </div>
            </div>
        </section>
            <?php } 
             //print_r($fifth_section);
              foreach ( $fifth_section as $fifth_data ){
                              $review_bckgrnd_image = ''; 
                              if(isset( $fifth_data->review_bckgrnd_image) ):
                               $img_url = base_url().''.$fifth_data->review_bckgrnd_image;            
                               $review_bckgrnd_image = "style='background-image:url(".$img_url.")' " ;         
                             endif;      ?>
                    
                     <?php } //end video foreach 
           
            if( !empty( $videos ) )		{		?>
        <section class="video_sec">
            <div class="container">
            <div class="video_class21"> <?php		if( isset( $fifth_section[0]->video_heading ) )	{	
                    	echo "<h5><strong>".$fifth_section[0]->video_heading."</strong></h5>";}	?> </div>	
                <div class="row">

                		
                	<?php foreach( $videos as $video )				{ 				  if( '' == trim($video->value)  ){					 continue;				  }		?>
                    <div class="col-md-4 mb-5">
                        <div class="card_sec1">
                            <div class="card video-card">
                                <iframe src="<?php echo $video->value;?>" frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen class="video-sec-design"></iframe>
                                <div class="card-body">
                                    <h3 class="card-title-text"><?php echo $video->title;?></h3>
                                </div>
                            </div>
                        </div>
                    </div>				<?php } //end video foreach ?>
                    
                    
                    <div class="btn-section">
                        <!-- <button class=yellow_btn>View All</button> -->
                      


                            <?php if( isset( $fifth_data->view_all_btn_label ) ) {
                                
                               echo "<a href='".$fifth_data->view_all_btn_url."' class='view_all_btn'>".$fifth_data->view_all_btn_label."</a>"; 
                            } 
                     ?> 
                    </div>
                    
                </div>
            </div>
        </section>		<?php } ?>		<?php 		 		if( !empty( $client_testimonial ) )		{		?>
        <section class="testimonial_sec" <?php echo $review_bckgrnd_image; ?>>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-4 d-flex align-items-center new-margin-review">
                        <div class="d-block w-100 testimponial-slider">
						<?php foreach( $client_testimonial as $testimonial )						{ 						  if( '' == trim($testimonial->value)  ){							 continue;						  }						  $testimonial_data = json_decode( $testimonial->value) ;						  						  ?>						 
                            <div class="white_box">
                                <h4 class="review_title_new">Client Reviews</h4>
                                <div class="rating">
                                    <ul>									<?php for( $i = 1; $i <= $testimonial_data->rating;$i++)									{										echo '<li><i class="fa fa-star"></i></li>';									}?>									</ul>
                                </div>
                                <p><?php echo $testimonial_data->review;?> </p>
                                <h5 class="review_title"><?php echo $testimonial->title;?></h5>
                            </div>						<?php } //end testimonial foreach ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>		<?php } ?>		<?php 		 		if( !empty( $client_logos ) )		{		?>
        <section class="logo_sec">
            <div class="container-fluid">
                <section class="customer-logos slider">				<?php foreach( $client_logos as $client_logo )				{ 				  if( '' == trim($client_logo->value)  ){					 continue;				  }				?>
                    <div class="slide"><img class="logo_image" src="<?php echo base_url().''.$client_logo->value; ?>"></div>				<?php 				} // end blogfoeach?>
                     
                </section>

            </div>
        </section>		<?php } ?>
