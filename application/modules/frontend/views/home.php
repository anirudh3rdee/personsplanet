
 <div class="homeSlider">
   <?php 
    foreach( $home_banner as $home_val )
        {
        $arrayData = (array) json_decode($home_val->value);   
        $banner_title= $arrayData['banner_title'];
        $banner_image = $arrayData['banner_image'];
        $subscription_button = $arrayData['subscription_button'];
        $subscription_button_url = $arrayData['subscription_button_url'];
?>
        <div>
            <img data-lazy="<?php echo $banner_image;?>" />
            <h1><?php echo $banner_title;?></h1>
            <a href="<?php echo $subscription_button_url;?>"><button><?php echo $subscription_button;?></button></a>
        </div>
<?php  } ?>
</div>


        <section class="yellow_sec">
            <div class="container">
                <div class="row">
                    <div class="yellow_text italic_heading">                        <?php
if (isset($senond_section->second_heading)):
    echo "<p>" . $senond_section->second_heading . "</p>";
endif;
?>
                       </div>

                </div>
            </div>
        </section>
        <section class="person_blog">
            <div class="dark_sec">
                <div class="dark_left_sec">        <?php
if (isset($senond_section->second_sub_heading)):
    echo "<h4>" . $senond_section->second_sub_heading . "</h4>";
endif;
if (isset($senond_section->section_details)):
    echo "<p class='live_forum_detail'>" . $senond_section->section_details . "</p>";
endif;
if (isset($senond_section->second_button)):
    echo "<a href='" . $senond_section->second_button_url . "' class='yellow_btn weekly_rprt_btn_new'>" . $senond_section->second_button . "</a>";
endif;
?>
                   
                </div>
                <div class="dark_right_sec">
                    <div class="img-person">                        <?php
if (isset($senond_section->Second_section_image)):
    echo "<img src='" . $senond_section->Second_section_image . "' alt='Person'>";
endif;
?>
                       
                    </div>
                </div>
            </div>
        </section>


        <section class="listing_sec">
            <div class="container">
            
             <?php
                $j=1; 
                foreach ($blog_section as $blogdatavar) {      
                  $arrayData=(array) json_decode($blogdatavar->value);

                  $blogdatavar_title = $blogdatavar->title;
                  $blogdatavar_image = $arrayData['blogImage'];
                  $blogdatavar_content = html_entity_decode($arrayData['blogContent']);
                  $blogdatavar_btnLabel = $arrayData['blogBtnLabel'];
                  $blogdatavar_btnUrl = $arrayData['blogBtnLink'];
            ?> 

                <?php if($j % 2 == 0){ ?>
                <div class="row listing__block pd-60">
                    <div class="col-md-6 order2 pr-60">
                        <div class="listing__heading">
                            <h3><?php echo $blogdatavar_title;?></h3>
                        </div>
                        <div class="listing__descp">
                            <p><?php echo $blogdatavar_content;?></p>
                        </div>
                        <div class="listing__btn">
                            <a href="<?php echo $blogdatavar_btnUrl ;?>" class="btn btn-primary"><?php echo $blogdatavar_btnLabel;?></a>
                        </div>
                    </div>
                    <div class="col-md-6  order1">
                        <div class="listing__img mg-image">
                            <img class="card-img-top" src="<?php echo $blogdatavar_image;?>" alt="Card image cap">
                        </div>
                    </div>
                </div>

                <?php } else { ?>
                
                  <div class="row listing__block pd-60">
                    <div class="col-md-6  order2">
                        <div class="listing__img mg-image">
                            <img class="card-img-top" src="<?php echo $blogdatavar_image;?>" alt="Card image cap">
                        </div>
                    </div>

                    <div class="col-md-6 order2 pr-60">
                        <div class="listing__heading">
                            <h3><?php echo $blogdatavar_title;?></h3>
                        </div>
                        <div class="listing__descp">
                            <p><?php echo $blogdatavar_content;?></p>
                        </div>
                        <div class="listing__btn">
                            <a href="<?php echo $blogdatavar_btnUrl ;?>" class="btn btn-primary"><?php echo $blogdatavar_btnLabel;?></a>
                        </div>
                    </div>

                </div>  
                <?php } 
                $j++; 
                } ?>

            </div>
        </section>  
        
        
        <?php
foreach ($fourth_section as $fourth_data) {
    $fourth_banner_background = '';
    if (isset($fourth_data->background_image)):
        $img_url                  = base_url() . '' . $fourth_data->background_image;
        $fourth_banner_background = "style='background-image:url(" . $img_url . ")' ";
    endif;
?>
       <section class="freebook_sec" <?php
    echo $fourth_banner_background;
?>>
            <div class="container">
                <div class="row">
                    <div class="bnr-ing"> 
                        <div class="left_sec">    <?php
    if (isset($fourth_data->fourth_heading)) {
        echo "<h5>" . $fourth_data->fourth_heading . "</h5>";
    }
    if (isset($fourth_data->fourth_details)) {
        echo $fourth_data->fourth_details;
    }    
    if (isset($fourth_data->fourth_other_details)) {
        echo $fourth_data->fourth_other_details;
    }
    if (isset($fourth_data->fourth_btn_label)) {
        echo "<a href='" . $fourth_data->fourth_btn_url . "' class='col-10 yellow_btn col-md-10'>" . $fourth_data->fourth_btn_label . "</a>";
    }
?>
                                             
                        </div>

                       <!-- <div class="right_sec">
                            <img src="http://demo.personsplanet.com/assets/media_files/blondpointing-right-transp_(1).png">
                        </div>-->
                        
                    </div>
                </div>
            </div>
        </section>
            <?php
}
//print_r($fifth_section);
foreach ($fifth_section as $fifth_data) {
    $review_bckgrnd_image = '';
    if (isset($fifth_data->review_bckgrnd_image)):
        $img_url              = base_url() . '' . $fifth_data->review_bckgrnd_image;
        $review_bckgrnd_image = "style='background-image:url(" . $img_url . ")' ";
    endif;
?>
                   
                     <?php
} //end video foreach 

if (!empty($videos)) {
?>
       <section class="video_sec">
            <div class="container">
            <div class="video_class21"> <?php
    if (isset($fifth_section[0]->video_heading)) {
        echo "<h5><strong>" . $fifth_section[0]->video_heading . "</strong></h5>";
    }
?> </div>    
                <div class="row">

                        
                    <?php
    foreach ($videos as $video) {

        if ('' == trim($video->value)) {
            continue;
            $j=1;
        }
?>
                   <div class="col-md-4 mb-5">
                        <div class="card_sec1">
                        <div class="card-body">
                                 <h3 class="card-title-text"><?php echo $video->title;?></h3>
                                </div>
                            <div id ="button-a<?php echo $j;?>" data-target="lightbox<?php echo $j;?>" class="openlb card video-card">
                            <?php 
                            	$arrayData = (array) json_decode($video->value);
						        $videoimage = $arrayData['video_image'];
						        $videourl = $arrayData['url'];
						    ?>
                            <span>
                                <img src="<?php echo $videoimage;?>">
                            </span>
                            </div>

                                
                        </div>

                                                
                        <div id ="lightbox<?php echo $j;?>" class="lightbox" >
                        <i data-target="lightbox<?php echo $j;?>" class="close-btn fa fa-times"></i>
                        <div id = "video-wrapper">   
                                <iframe class = "video"  width="960" height="540" src="<?php
                                echo $videourl;
                        ?>" frameborder="0"
                                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                            allowfullscreen class="video-sec-design"></iframe>
                        </div>
                        </div>

                    </div>                <?php
                    $j++;
    } //end video foreach 
?>

                   
                    
                    <div class="btn-section">
                        <!-- <button class=yellow_btn>View All</button> -->
                      


                            <?php
    if (isset($fifth_data->view_all_btn_label)) {
        
        echo "<a target='_blank' href='" . $fifth_data->view_all_btn_url . "' class='view_all_btn'>" . $fifth_data->view_all_btn_label . "</a>";
    }
?> 
                    </div>
                    
                </div>
            </div>
        </section>        <?php
}
?>        <?php
if (!empty($client_testimonial)) {
?>
       <section class="testimonial_sec" <?php
    echo $review_bckgrnd_image;
?>>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">  <div class="rotate-title"><h4 class="review_title_new">Client Reviews</h4></div></div>
                    <div class="col-md-8 d-flex align-items-center new-margin-review">

                        <div class="d-block w-100 testimponial-slider">
                        <?php
    foreach ($client_testimonial as $testimonial) {
        if ('' == trim($testimonial->value)) {
            continue;
        }
        $testimonial_data = json_decode($testimonial->value);
        //var_dump($testimonial_data->review);
?>                        
                            <div class="white_box">
                               <h4 class="review_title_new"><?php
                                    echo $testimonial->title;
                                ?></h4> 
                               <!--  <h5 class="review_title new-margin-review">
                                </h5> -->
                                <p><?php echo $testimonial_data->review;?> </p>
                               
                                 <div class="rating">
                                    <ul>                                    <?php
        for ($i = 1; $i <= $testimonial_data->rating; $i++) {
            echo '<li><i class="fa fa-star"></i></li>';
        }
?>                                    </ul>
                                </div>
                            </div>                        <?php
    } //end testimonial foreach 
?>
                           
                        </div>
                      
                    </div>
                </div>
            </div>
        </section>        <?php
}
?>        <?php
if (!empty($client_logos)) {
?>
       <section class="logo_sec">
            <div class="container-fluid">
                <section class="customer-logos slider">               
     <?php
    foreach ($client_logos as $client_logo) {
        if ('' == trim($client_logo->value)) {
            continue;
        }
    ?>
                   <div class="slide"><img class="logo_image" src="<?php
        echo base_url() . '' . $client_logo->value;
?>"></div>                <?php
    } // end blogfoeach
?>
                   
                </section>

            </div>
        </section>        <?php
}
?>

