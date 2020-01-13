       <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                 <?php 
                  if($this->session->flashdata('msg')){
                    ?>
                    <div class="alert alert-primary" role="alert">
                        <?php echo $this->session->flashdata('msg'); ?>
                    </div>
                    <?php
                  }
                  ?>

                <div class="row">

                    <div class="col-12">
                        
                       <!-- Tabs -->
                        
                       <!-- Tabs -->
                       <section id="tabs">
  <div class="">
   
    <div class="">
      <div class="col-xs-12">
        <nav>
          <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-banner-section-tab" data-toggle="tab" href="#nav-banner-section" role="tab" aria-controls="nav-home" aria-selected="true">Banner Section</a>
            <a class="nav-item nav-link" id="nav-banner-second-tab" data-toggle="tab" href="#nav-banner-second" role="tab" aria-controls="nav-banner-second" aria-selected="false">Banner Second Section</a>
            <a class="nav-item nav-link" id="nav-blog-section-tab" data-toggle="tab" href="#nav-blog-section" role="tab" aria-controls="nav-blog-section" aria-selected="false">Blog Section</a>
            <a class="nav-item nav-link" id="nav-free-ebook-tab" data-toggle="tab" href="#nav-free-ebook" role="tab" aria-controls="nav-free-ebook" aria-selected="false">Free Ebook Section</a>
            <a class="nav-item nav-link" id="nav-view-all-videos-tab" data-toggle="tab" href="#nav-view-all-videos" role="tab" aria-controls="nav-view-all-videos" aria-selected="false">Fifth Section</a>
            <a class="nav-item nav-link" id="nav-client-logo-tab" data-toggle="tab" href="#nav-client-logo" role="tab" aria-controls="nav-client-logo" aria-selected="false">Logo Section</a>
            <a class="nav-item nav-link" id="nav-review-tab" data-toggle="tab" href="#nav-review" role="tab" aria-controls="nav-review" aria-selected="false">Review Section</a>
            <a class="nav-item nav-link" id="nav-video-tab" data-toggle="tab" href="#nav-video" role="tab" aria-controls="nav-video" aria-selected="false">Video Section</a>
          </div>
        </nav>
        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-banner-section" role="tabpanel" aria-labelledby="nav-banner-section-tab">
             <!-- Banner Section Start -->

             <div class="row">
              <div class="card">
                  <div class="card-body">
                    <h5 class="card-title m-b-0" style="margin-botton:20px;">Home Slider Section</h5>
                    <button style="margin-bottom: 10px;float: right;" type="button" class="btn btn-success margin-5 text-white" data-toggle="modal" data-target="#ModalNewSlide">Add New Slide</button>
                    
                      <table class="table data-table" >
                        <thead>
                          <tr>
                            <th scope="col">Banner Image</th>
                            <th scope="col">Banner Heading</th>
                            <th scope="col">Button Text</th>
                            <th scope="col">Button URL</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                        $bannerImg='';
                        $bannerHeading='';
                        $subscriptionButton='';
                        $subscriptionButtonUrl='';
                        $bannerID=0;

                        foreach ($home_banner as $key) {
                        if($key->valueKey=='banner-section'){
                            $arrayData = (array) json_decode($key->value);
                            $bannerTitle = $arrayData['banner_title'];
                            $bannerImg = $arrayData['banner_image'];
                            $bannerID = $key->id;
                            $subscriptionButton = $arrayData['subscription_button'];
                            $subscriptionButtonUrl = $arrayData['subscription_button_url'];
                        }
                    
                        ?>

                                    <tr id="row_<?php echo $key->id; ?>">
                                      <td><?php echo $bannerTitle;?></td>
                                      <td>
                                        <?php if($bannerImg){
                                            ?>
                                               <img src="<?php echo base_url() . $bannerImg; ?>" width="100px" />
                                            <?php
                                          } ?>
                                      </td>
                                      <td><?php echo $subscriptionButton;?></td>
                                      <td><?php echo $subscriptionButtonUrl;?></td>
                                      <td>
                                        <div class="btn-group">
                                              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                              <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">
                                                <a class="dropdown-item" onclick="deleteData('settingbypage', <?php echo $key->id; ?>)">Delete</a>
                                                <a class="dropdown-item" href="<?php echo base_url('admin/home/add_edit_slider/'.$key->id);?>">Edit</a>
                                               
                                              </div>
                                          </div>
                                        
                                      </td>
                                    </tr>
                                    <?php
                                    }
                                    ?>  
                                  </tbody>
                            </table>
                         
                  </div>
              </div>
          </div>

             <?php /*
                  $bannerImg='';
                  $bannerHeading='';
                  $bannerSubHeading='';
                  $bannerDetails='';
                  $subscriptionButton='';
                  $subscriptionButtonUrl='';

                  $bannerImg2 ='';
                  $bannerHeading2 ='';
                  $bannerSubHeading2 ='';
                  $bannerDetails2 ='';
                  $subscriptionButton2 ='';
                  $subscriptionButtonUrl2 ='';

                  $bannerID=0;
                  foreach ($homeData as $key) {
                    if($key->valueKey=='banner-section'){
                        $arrayData = (array) json_decode($key->value);
                        $bannerImg = $arrayData['banner_image'];
                        $bannerID = $key->id;
                        $bannerHeading = $arrayData['banner_heading'];
                        $bannerSubHeading = $arrayData['banner_sub_heading'];
                        $bannerDetails = html_entity_decode($arrayData['banner_details']);
                        $subscriptionButton = $arrayData['subscription_button'];
                        $subscriptionButtonUrl = $arrayData['subscription_button_url'];

                        $bannerImg2 = $arrayData['banner_image2'];
                        $bannerHeading2 = $arrayData['banner_heading2'];
                        $bannerSubHeading2 = $arrayData['banner_sub_heading2'];
                        $bannerDetails2 = html_entity_decode($arrayData['banner_details2']);
                        $subscriptionButton2 = $arrayData['subscription_button2'];
                        $subscriptionButtonUrl2 = $arrayData['subscription_button_url2'];
                    }
                  }
                  ?>
             <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">Banner Section</h5>
                            </div>
                            <form method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/home/save_home_banner/'.$bannerID);?>">
                              <table class="table">
                                    <tr>
                                      <th scope="col">Banner Image 1</th>
                                      <td>
                                        <input type="file" name="banner_image" accept="image/*" >
                                        <input type="hidden" value="<?php echo $bannerImg; ?>" name="old-value" />
                                     </td>
                                      <td>
                                          <?php if($bannerImg){
                                            ?>
                                               <img src="<?php echo base_url() . $bannerImg; ?>" width="100px" />
                                            <?php
                                          } ?>
                                      </td> 
                                    </tr>
                                    <tr>
                                      <th scope="col">Banner Heading</th>
                                       <td colspan="2"><input type="text" name="banner_heading" value="<?php echo $bannerHeading; ?>" class="form-control" style="margin-top:0px;margin-bottom:0px;"></td>
                                    </tr>
                                    <tr>
                                      <th scope="col">Banner Sub Heading</th>
                                      <td colspan="2"><input type="text" name="banner_sub_heading" value="<?php echo $bannerSubHeading; ?>" class="form-control" style="margin-top:0px;margin-bottom:0px;"></td>
                                    </tr>
                                    <tr>
                                      <th scope="col">Banner Details</th>
                                       
                                       <td colspan="2">
                                       
                                          <textarea  name="footer_about_full_details" class="form-control"><?php echo $bannerDetails; ?></textarea>
                                     
                                        </td>
                                    </tr>
                                     <tr>
                                      <th scope="col">Subscription Button Text</th>
                                       <td colspan="2"><input type="text" name="subscription_button" value="<?php echo $subscriptionButton; ?>" class="form-control" style="margin-top:0px;margin-bottom:0px;" ></td>
                                    </tr>
                                     <tr>
                                      <th scope="col">Subscription Button URL</th>
                                       <td colspan="2"><input type="text" name="subscription_button_url" value="<?php echo $subscriptionButtonUrl; ?>" class="form-control" style="margin-top:0px;margin-bottom:0px;"></td>
                                    </tr>

                                    <tr>
                                        <td colspan="3"><input class="btn btn-primary" type="submit" name="submit_logo" value="Save"></td>
                                    </tr>
                                </table>

                            </form>
                        </div><?php */?>
             <!-- Banner Section End -->

          </div> 
          <div class="tab-pane fade" id="nav-banner-second" role="tabpanel" aria-labelledby="nav-banner-second-tab">
             <!-- Banner Second Section Start -->
             <?php 
                  $sectionImg='';
                  $sectionHeading='';
                  $sectionSubHeading='';
                  $sectionDetails='';
                  $sectionID=0;
                  $sectionButton='';
                  $sectionUrl='';
                  foreach ($homeData as $key) {
                    if($key->valueKey=='second-section'){
                        $arrayData=(array) json_decode($key->value);
                        $sectionImg=$arrayData['Second_section_image'];
                        $sectionID=$key->id;
                        $sectionHeading=$arrayData['second_heading'];
                        $sectionSubHeading=$arrayData['second_sub_heading'];
                        $sectionDetails = html_entity_decode($arrayData['section_details']);
                        $sectionButton=$arrayData['second_button'];
                        $sectionUrl=$arrayData['second_button_url'];
                    }
                  }
              ?>
             <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">Banner Second Section</h5>
                            </div>
                            <form method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/home/save_home_second/'.$sectionID);?>">
                              <table class="table">
                                    <tr>
                                      <th scope="col">Right Side Image</th>
                                      <td>
                                        <input type="file" name="Second_section_image" accept="image/*" >
                                        <input type="hidden" value="<?php echo $sectionImg; ?>" name="old-value" />
                                     </td>
                                      <td>
                                          <?php if($sectionImg){
                                            ?>
                                               <img src="<?php echo base_url() . $sectionImg; ?>" width="100px" />
                                            <?php
                                          } ?>
                                      </td> 
                                    </tr>
                                    <tr>
                                      <th scope="col">Section Heading</th>
                                       <td colspan="2"><input type="text" name="second_heading" value="<?php echo $sectionHeading; ?>" class="form-control" style="margin-top:0px;margin-bottom:0px;"></td>
                                    </tr>
                                    <tr>
                                      <th scope="col">Section Sub Heading</th>
                                      <td colspan="2"><input type="text" name="second_sub_heading" value="<?php echo $sectionSubHeading; ?>" class="form-control" style="margin-top:0px;margin-bottom:0px;"></td>
                                    </tr>
                                    <tr>
                                      <th scope="col">Section Details</th>
                                       
                                       <td colspan="2">
                                          <textarea  name="section_details" class="form-control"><?php echo $sectionDetails; ?></textarea>
                                       </td>
                                    </tr>
                                    <tr>
                                      <th scope="col">Section Button Text</th>
                                       
                                       <td colspan="2">
                                          <input type="text" name="second_button" value="<?php echo $sectionButton; ?>" class="form-control" style="margin-top:0px;margin-bottom:0px;">
                                       </td>
                                    </tr>
                                    <tr>
                                      <th scope="col">Section Button URL</th>
                                       
                                       <td colspan="2">
                                          <input type="text" name="second_button_url" value="<?php echo $sectionUrl; ?>" class="form-control" style="margin-top:0px;margin-bottom:0px;">
                                       </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"><input class="btn btn-primary" type="submit" name="submit_logo" value="Save"></td>
                                    </tr>
                                </table>
                            </form>
                        </div>
          
          <!-- Banner Second Section End -->
          </div>
          <div class="tab-pane fade" id="nav-blog-section" role="tabpanel" aria-labelledby="nav-blog-section-tab">
          <!-- Blog Section Start -->
          <div class="row">
              <div class="card">
                  <div class="card-body">
                    <h5 class="card-title m-b-0" style="margin-botton:20px;">Blog Section</h5>
                    <button style="margin-bottom: 10px;float: right;" type="button" class="btn btn-success margin-5 text-white" data-toggle="modal" data-target="#ModalNewBlog">Add New Blog</button>
                    
                      <table class="table data-table" >
                                  <thead>
                                    <tr>
                                      <th scope="col">Title</th>
                                      <th scope="col">Image</th>
                                      <th scope="col">Content</th>
                                      <th scope="col">Button Text</th>
                                      <th scope="col">Button URL</th>
                                      <th scope="col">Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                  <?php
                                  foreach ($homeData as $key) {
                                    if($key->valueKey=='blog-section'){
                                      $arrayData=(array) json_decode($key->value);
                                     
                                      $bl_title = $key->title;
                                      $bl_id = $key->id;

                                      $bl_image = $arrayData['blogImage'];
                                      $bl_content = html_entity_decode($arrayData['blogContent']);
                                      $bl_btnLabel = $arrayData['blogBtnLabel'];
                                      $bl_btnUrl = $arrayData['blogBtnLink'];
                                       
                                 
                                  ?>

                                    <tr id="row_<?php echo $key->id; ?>">
                                      <td><?php echo $bl_title;?></td>
                                      <td>
                                        <?php if($bl_image){
                                            ?>
                                               <img src="<?php echo base_url() . $bl_image; ?>" width="100px" />
                                            <?php
                                          } ?>
                                      </td>
                                      <td><?php echo $bl_content;?></td>
                                      <td><?php echo $bl_btnLabel;?></td>
                                      <td><?php echo $bl_btnUrl;?></td>
                                      <td>
                                        <div class="btn-group">
                                              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                              <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">
                                                <a class="dropdown-item" onclick="deleteData('settingbypage', <?php echo $key->id; ?>)">Delete</a>
                                                <a class="dropdown-item" href="<?php echo base_url('admin/home/add_edit_blog/'.$key->id);?>">Edit</a>
                                               
                                              </div>
                                          </div>
                                        
                                      </td>
                                    </tr>
                                    <?php
                                        }
                                    }
                                    ?>  
                                  </tbody>
                            </table>
                         
                  </div>
              </div>
          </div>
          <!-- Blog Section End -->
          </div>
           <div class="tab-pane fade" id="nav-free-ebook" role="tabpanel" aria-labelledby="nav-free-ebook-tab">
             <!-- Free E Ebook Section Start -->
             <?php $fourth_Img='';
                  $fourth_Heading='';
                  $fourth_Details='';
                  $fourth_OtherDetails='';
                  $fourth_Section_ID=0;
                  $fourth_btn_label = '';
                  $fourth_btn_url = '';
                  foreach ($homeData as $key) {
                    if( $key->valueKey == 'fourth-section' ){
                        $arrayData =(array) json_decode($key->value);
                        $fourth_Img = $arrayData['background_image'];
                        $fourth_Section_ID=$key->id;
                        $fourth_Heading=$arrayData['fourth_heading'];
                        $fourth_Details = html_entity_decode($arrayData['fourth_details']);
                        $fourth_OtherDetails = html_entity_decode($arrayData['fourth_other_details']);
                        $fourth_btn_label = $arrayData['fourth_btn_label'];
                        $fourth_btn_url = $arrayData['fourth_btn_url'];
                    }
                  }

                  ?>
             <div class="card">
                  <div class="card-body">
                      <h5 class="card-title m-b-0">4th Section</h5>
                  </div>
                  <form method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/home/save_hove_fouth_section/'.$fourth_Section_ID);?>">
                    <table class="table">
                          <tr>
                            <th scope="col">Banner Image</th>
                            <td>
                              <input type="file" name="background_image" accept="image/*" >
                              <input type="hidden" value="<?php echo $fourth_Img; ?>" name="old-value" />
                           </td>
                            <td>
                                <?php if($fourth_Img){
                                  ?>
                                     <img src="<?php echo base_url() . $fourth_Img; ?>" width="200px" />
                                  <?php
                                } ?>
                            </td> 
                          </tr>
                          <tr>
                            <th scope="col">Heading</th>
                             <td colspan="2"><input type="text" name="fourth_heading" value="<?php echo $fourth_Heading; ?>" class="form-control" style="margin-top:0px;margin-bottom:0px;"></td>
                          </tr>
                           
                          <tr>
                            <th scope="col">Details</th>
                             
                             <td colspan="2">
                                <textarea  name="fourth_details" class="form-control"><?php echo $fourth_Details; ?></textarea>
                             </td>
                          </tr>
                          <tr>
                            <th scope="col">Button Text</th>
                             
                             <td colspan="2">
                                <textarea  name="fourth_btn_label" class="form-control" style="margin-top:0px;margin-bottom:0px;"><?php echo $fourth_btn_label; ?></textarea>
                             </td>
                          </tr>
                          <tr>
                            <th scope="col">Button URL</th>
                             
                             <td colspan="2">
                                <textarea  name="fourth_btn_url" class="form-control" style="margin-top:0px;margin-bottom:0px;"><?php echo $fourth_btn_url; ?></textarea>
                             </td>
                          </tr>
                          <tr>
                            <th scope="col">Other Details</th>
                             
                             <td colspan="2">
                                <textarea  name="fourth_other_details" class="form-control"><?php echo $fourth_OtherDetails; ?></textarea>
                             </td>
                          </tr>
                          <tr>
                              <td colspan="3"><input class="btn btn-primary" type="submit" name="submit_logo" value="Save"></td>
                          </tr>
                      </table>
                  </form>
              </div>
             <!-- Free Ebook Section End -->
          </div>
          <div class="tab-pane fade" id="nav-view-all-videos" role="tabpanel" aria-labelledby="nav-view-all-videos-tab">

             <!-- View all button URL Start -->

             <?php $review_bckgrnd_image='';

                  $fifth_Section_ID=0;
                  
                  $video_heading = '';

                  $view_all_btn_label = '';

                  $view_all_btn_url = '';

                  foreach ($homeData as $key) {

                    if( $key->valueKey == 'fifth-section' ){

                        $arrayData =(array) json_decode($key->value);

                        $review_bckgrnd_image = $arrayData['review_bckgrnd_image'];

                        $fifth_Section_ID=$key->id;
                        
                        $video_heading = $arrayData['video_heading'];

                        $view_all_btn_label = $arrayData['view_all_btn_label'];

                        $view_all_btn_url = $arrayData['view_all_btn_url'];

                    }
                  }



                  ?>

             <div class="card">

                  <div class="card-body">

                      <h5 class="card-title m-b-0">5th Section</h5>

                  </div>

                  <form method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/home/save_hove_fifth_section/'.$fifth_Section_ID);?>">

                    <table class="table">

                          <tr>

                            <th scope="col">Background Banner Image</th>

                            <td>

                              <input type="file" name="review_bckgrnd_image" accept="image/*" >

                              <input type="hidden" value="<?php echo $review_bckgrnd_image; ?>" name="old-value" />

                           </td>

                            <td>

                                <?php if($review_bckgrnd_image){

                                  ?>

                                     <img src="<?php echo base_url() . $review_bckgrnd_image; ?>" width="200px" />

                                  <?php

                                } ?>

                            </td> 

                          </tr>
                          <tr>
                            <th scope="col">Video Heading</th>
                             
                             <td colspan="2">
                                 
                               <input type="text" name="video_heading" value="<?php echo $video_heading; ?>" class="form-control" style="margin-top:0px;margin-bottom:0px;">
                                
                             </td>
                             
                          </tr>
                           
                          <tr>

                            <th scope="col">View All Button Text</th>

                             

                             <td colspan="2">

                                <textarea  name="view_all_btn_label" class="form-control" style="margin-top:0px;margin-bottom:0px;"><?php echo $view_all_btn_label; ?></textarea>

                             </td>

                          </tr>

                          <tr>

                            <th scope="col">View All Button URL</th>

                             

                             <td colspan="2">

                                <textarea  name="view_all_btn_url" class="form-control" style="margin-top:0px;margin-bottom:0px;"><?php echo $view_all_btn_url; ?></textarea>

                             </td>

                          </tr>

                          <tr>

                              <td colspan="3"><input class="btn btn-primary" type="submit" name="submit_logo" value="Save"></td>

                          </tr>

                      </table>

                  </form>

              </div>

             <!-- View all button URL End -->

          </div>
          <!--client logo start-->
          <div class="tab-pane fade" id="nav-client-logo" role="tabpanel" aria-labelledby="nav-client-logo-tab">

   <div class="card">

     <div class="card-body">

         <h5 class="card-title m-b-0">Client Logo Section</h5>

         <button style="margin-bottom: 10px;float: right;" type="button" class="btn btn-success margin-5 text-white" data-toggle="modal" data-target="#Modal1">Add Client Logo</button>

         <!-- <a class="btn btn-outline-primary" data-toggle="modal" data-target="#Modal1" style="margin-left: 900px;">Add Client Logo</a> -->

     </div>
     <div class="table-responsive" style='margin-top:10px'>
  

<table class="table data-table" >

   <thead>

   <tr>

       <th>ID</th>

       <th>Title</th>

       <th>Image</th>

       <th>Action</th>

     </tr>

   </thead>

   <tbody>
   <?php 
                   $i=1;
                  foreach ($homeData as $key) {
                    if($key->valueKey=='client_logo'){

                        $clientId=$key->id;
                        $title=$key->title;
                        $image_name=$value->logo;
                   
              ?>

   <tr id="row_<?php echo $key->id; ?>">
   <td><?php echo $i;; ?></td>
                                      <td><?php echo $title;?></td>
                                      
                                      <td><img src="<?php echo base_url() . $key->value; ?>" width="50px" /></td>
                                      
                                 <td>     

         <div class="btn-group">

            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>

            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">

              <a class="dropdown-item" onclick="deleteData('settingbypage', <?php echo $key->id; ?>)">Delete</a>

              <a class="dropdown-item" href="<?php echo base_url('admin/home/edit_client_logo/'.$key->id);?>">Edit</a>

             

            </div>

        </div>

       

       </td>

     </tr>
     <?php
      }
    }
                                      
                                    ?> 
     

   </tbody>

  </table>

</div>

    </div>
    

</div>
          <!--client logo end-->

          <!--Review Section Start-->
          <div class="tab-pane fade" id="nav-review" role="tabpanel" aria-labelledby="nav-review-tab">

<div class="card">

  <div class="card-body">

      <h5 class="card-title m-b-0">Review Section</h5>

      <button style="margin-bottom: 10px;float: right;" type="button" class="btn btn-success margin-5 text-white" data-toggle="modal" data-target="#Modal2">Add Review</button>

      <!-- <a class="btn btn-outline-primary" data-toggle="modal" data-target="#Modal1" style="margin-left: 900px;">Add Review</a> -->

  </div>
  <div class="table-responsive" style='margin-top:10px'>


  <table class="table data-table" >

<thead>

  <tr>

    <th>ID</th>

    <th>Title</th>

    <th>Image</th>

     <th>Review</th>

     <th>Rating</th>

    <th>Action</th>

  </tr>

</thead>

<tbody>
<?php if(!empty($homeData)){

$i=1;

foreach ($homeData as $key ) {
if($key->valueKey=='review')
{

$array=(array) json_decode($key->value);
//  $image_name=$array->logo;
?>

<tr id="row_<?php echo $key->id; ?>">

    <td><?php echo $i; ?></td>

    <td><?php echo $key->title; ?></td>

    <td><img src="<?php echo base_url() . $array['img'] ; ?>" width="50px" /></td>

           <td><?php echo html_entity_decode($array['review']); ?></td>

           <td><?php echo $array['rating']; ?></td>

    <td>

      <div class="btn-group">

         <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>

         <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">

           <a class="dropdown-item" onclick="deleteData('settingbypage', <?php echo $key->id; ?>)">Delete</a>

           <a class="dropdown-item" href="<?php echo base_url('admin/home/add_edit_review/'.$key->id);?>">Edit</a>

          

         </div>

     </div>

    

    </td>

  </tr>

  <?php  $i++; } } } ?>

</tbody>

</table>

</div>

 </div>
 

</div>
           <!--Review Section End-->

           <!--Video Section Start-->
           <div class="tab-pane fade" id="nav-video" role="tabpanel" aria-labelledby="nav-video-tab">

<div class="card">

  <div class="card-body">

      <h5 class="card-title m-b-0">YouTube Video Section</h5>
      <button style="margin-bottom: 10px;float: right;" type="button" class="btn btn-success margin-5 text-white" data-toggle="modal" data-target="#Modal3">Add Video</button>

      <!-- <a class="btn btn-outline-primary" data-toggle="modal" data-target="#Modal3" style="margin-left: 900px;">Add Video</a> -->

  </div>
  <div class="table-responsive" style='margin-top:10px'>


  <table class="table data-table" >

<thead>

  <tr>

    <th>ID</th>

    <th>Title</th>

    <th>You Tube URL</th>
    
    <th>Video Image</th>

    <th>Action</th>

  </tr>

</thead>

<tbody>

 	<?php if(!empty($homeData)){
// print_r($i); 
$i=1;

foreach ($homeData as $key ) {
 //print_r($homeData); 
  if($key->valueKey=='video') {
      $video_other_data = (array) json_decode($key->value);
      
      $video_url = 'NA';
      $video_image = 'NA';
      if( isset($video_other_data['url'] ) )
      {
        $video_url = $video_other_data['url'];
      }
      if( isset($video_other_data['video_image']))
      {
        $video_image = $video_other_data['video_image'];
      }
     ?>

<tr id="row_<?php echo $key->id; ?>">

<td><?php echo $i; ?></td>

<td><?php echo $key->title; ?></td>
<td><?php echo $video_url; ?></td>
<td><?php echo $video_image; ?></td>
    <td>

      <div class="btn-group">

         <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>

         <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">

           <a class="dropdown-item" onclick="deleteData('settingbypage', <?php echo $key->id; ?>)">Delete</a>

           <a class="dropdown-item" href="<?php echo base_url('admin/home/edit_video/'.$key->id);?>">Edit</a>

          

         </div>

     </div>

    

    </td>

  </tr>

   <?php  $i++; } } } ?>

</tbody>

</table>


</div>

</div>



</div>

           <!--Video Section End-->
           <div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">

            <div class="modal-dialog" role="document ">

                <div class="modal-content">

                    <div class="modal-header">

                        <h5 class="modal-title" id="exampleModalLabel">Add Review</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                            <span aria-hidden="true ">×</span>

                        </button>

                    </div>

                    <div class="modal-body">

                         <form method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/home/save_review');?>">

                                    <div class="row mb-3 align-items-center">

                                        <div class="col-lg-4 col-md-12 text-right">

                                            <span>Title</span>

                                        </div>

                                        <div class="col-lg-8 col-md-12">

                                            <input type="text" name="title" data-toggle="tooltip" title="" class="form-control all_fields" id="validationDefault05" placeholder="Enter Review Title" required="" data-original-title="Enter Review Title">

                                        </div>

                                    </div>

                                    <div class="row mb-3 align-items-center">

                                        <div class="col-lg-4 col-md-12 text-right">

                                            <span>Review</span>

                                        </div>

                                        <div class="col-lg-8 col-md-12">

                                            <input type="text" name="review" data-toggle="tooltip" title="" class="form-control" id="validationDefault05" placeholder="Enter Review " required="" data-original-title="Enter Review" style="margin-top:0px;margin-bottom:0px;">

                                        </div>

                                    </div>

                                    <div class="row mb-3 align-items-center">

                                        <div class="col-lg-4 col-md-12 text-right">

                                            <span>Review Rating</span>

                                        </div>

                                        <div class="col-lg-8 col-md-12">

                                            <input type="number" name="rating" data-toggle="tooltip" title="" class="form-control" id="validationDefault05" placeholder="Enter Review Rating" required="" data-original-title="Enter Review Rating" style="margin-top:0px;margin-bottom:0px;">

                                        </div>

                                    </div>

                                    <div class="row mb-3 align-items-center">

                                        <div class="col-lg-4 col-md-12 text-right">

                                            <span>Image</span>

                                        </div>

                                        <div class="col-lg-8 col-md-12">

                                            <input type="file" name="logo"  required="" >

                                        </div>

                                    </div>



                                    <div class="row mb-3 align-items-center">

                                        <div class="col-lg-4 col-md-12 text-right">

                                           

                                        </div>

                                        <div class="col-lg-8 col-md-12">

                                            <input type="submit" class="btn btn-primary" name="Add" value="Save">

                                        </div>

                                    </div>

                                </form>

                    </div>

                </div>

            </div>

        </div>

        <!-- </div> -->
        <div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">

<div class="modal-dialog" role="document ">

    <div class="modal-content">

        <div class="modal-header">

            <h5 class="modal-title" id="exampleModalLabel">Add Client</h5>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                <span aria-hidden="true ">×</span>

            </button>

        </div>

        <div class="modal-body">

             <form method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/home/save_client_logo');?>">

                        <div class="row mb-3 align-items-center">

                            <div class="col-lg-4 col-md-12 text-right">

                                <span>Title</span>

                            </div>

                            <div class="col-lg-8 col-md-12">

                                <input type="text" name="title" data-toggle="tooltip" title="" class="form-control" id="validationDefault05" placeholder="Enter Client Logo Title" required="" data-original-title="Enter Client Logo Title" style="margin-top:0px;margin-bottom:0px;">
                                

                            </div>

                        </div>

                        <div class="row mb-3 align-items-center">

                            <div class="col-lg-4 col-md-12 text-right">

                                <span>Image</span>

                            </div>

                            <div class="col-lg-8 col-md-12">

                                <input type="file" name="logo"  required="" >

                            </div>

                        </div>

                        <div class="row mb-3 align-items-center">

                            <div class="col-lg-4 col-md-12 text-right">

                               

                            </div>

                            <div class="col-lg-8 col-md-12">

                                <input type="submit" class="btn btn-primary" name="Add" value="Save">

                            </div>

                        </div>

                    </form>

        </div>

    </div>

</div>

</div>
        <!---->
      
      </div>
    </div>
  </div>
</section>
<!-- ./Tabs -->
</div>
                </div>



                 
                  


              
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
           <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
           
<!-- Banner Model -->
<div class="modal fade" id="ModalNewSlide" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url('admin/home/save_home_bannersection');?>">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Slide</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               
            <div class="card-body">
                <h4 class="card-title">Slide Detail</h4>
                
                <div class="form-group row">
                    <label for="banner_image" class="col-sm-3 text-right control-label col-form-label">Image</label>
                    <div class="col-sm-9">
                        <input type="file" required="" class="form-control" id="banner_image" name="banner_image" style="margin-top:0px;margin-bottom:0px;">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="banner_title" class="col-sm-3 text-right control-label col-form-label">Heading</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="banner_title" required="" name="banner_title" placeholder="Slide Heading" style="margin-top:0px;margin-bottom:0px;">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="subscription_button" class="col-sm-3 text-right control-label col-form-label">Button Text</label>
                    <div class="col-sm-9">
                        <input type="text" required="" class="form-control" id="subscription_button" name="subscription_button" style="margin-top:0px;margin-bottom:0px;">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="subscription_button_url" class="col-sm-3 text-right control-label col-form-label">Button Link</label>
                    <div class="col-sm-9">
                        <input type="text" required="" class="form-control" id="subscription_button_url" name="subscription_button_url" style="margin-top:0px;margin-bottom:0px;">
                    </div>
                </div>
                 
            </div>
                                 
                             
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </form>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="ModalNewBlog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url('admin/home/save_home_blogsection');?>">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Blog</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               
            <div class="card-body">
                <h4 class="card-title">Blog Detail</h4>
                <div class="form-group row">
                    <label for="blogTitle" class="col-sm-3 text-right control-label col-form-label">Title</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="blogTitle" required="" name="blogTitle" placeholder="Blog Title" style="margin-top:0px;margin-bottom:0px;">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="blogImage" class="col-sm-3 text-right control-label col-form-label">Image</label>
                    <div class="col-sm-9">
                        <input type="file" required="" class="form-control" id="blogImage" name="blogImage" style="margin-top:0px;margin-bottom:0px;">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="blogContent" class="col-sm-3 text-right control-label col-form-label">Blog Content</label>
                    <div class="col-sm-9">
                       <textarea  name="blogContent" ></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="bloglabel" class="col-sm-3 text-right control-label col-form-label">Button Text</label>
                    <div class="col-sm-9">
                        <input type="text" required="" class="form-control" id="blogBtnLabel" name="blogBtnLabel" style="margin-top:0px;margin-bottom:0px;">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="blogLink" class="col-sm-3 text-right control-label col-form-label">Button Link</label>
                    <div class="col-sm-9">
                        <input type="text" required="" class="form-control" id="blogBtnLink" name="blogBtnLink" style="margin-top:0px;margin-bottom:0px;">
                    </div>
                </div>
                 
            </div>
                                 
                             
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </form>
        </div>
    </div>
</div>
<!--modal3-->
<div class="modal fade" id="Modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">

            <div class="modal-dialog" role="document ">

                <div class="modal-content">

                    <div class="modal-header">

                        <h5 class="modal-title" id="exampleModalLabel">Add Video</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                            <span aria-hidden="true ">×</span>

                        </button>

                    </div>

                    <div class="modal-body">

                         <form method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/home/save_video');?>">

                                    <div class="row mb-3 align-items-center">

                                        <div class="col-lg-4 col-md-12 text-right">

                                            <span>Title</span>

                                        </div>

                                        <div class="col-lg-8 col-md-12">

                                            <input type="text" name="title" data-toggle="tooltip" title="" class="form-control" id="validationDefault05" placeholder="Enter Video Title" required="" data-original-title="Enter Review Title" style="margin-top:0px;margin-bottom:0px;">

                                        </div>

                                    </div>

                                    <div class="row mb-3 align-items-center">

                                        <div class="col-lg-4 col-md-12 text-right">

                                            <span>You Tube URL</span>

                                        </div>

                                        <div class="col-lg-8 col-md-12">

                                            <input type="url" name="url" data-toggle="tooltip" title="" class="form-control" style="margin-top:0px;margin-bottom:0px;" id="validationDefault05" placeholder="Enter Video URL " required="" data-original-title="Enter Video URL">

                                        </div>

                                    </div>

                                   
                                   <div class="row mb-3 align-items-center">

                                        <div class="col-lg-4 col-md-12 text-right">

                                            <span>Video Image</span>

                                        </div>

                                        <div class="col-lg-8 col-md-12">

                                            <input type="url" name="video_image" data-toggle="tooltip" title="" class="form-control" style="margin-top:0px;margin-bottom:0px;" id="validationDefault05" placeholder="Enter Video Image " required="" data-original-title="Enter Video Image">

                                        </div>

                                    </div>
                                   



                                    <div class="row mb-3 align-items-center">

                                        <div class="col-lg-4 col-md-12 text-right">

                                           

                                        </div>

                                        <div class="col-lg-8 col-md-12">

                                            <input type="submit" class="btn btn-primary" name="Add" value="Save">

                                        </div>

                                    </div>

                                </form>

                    </div>

                </div>

            </div>

        </div>
<!--modal3-->
<!-- Modal -->
 <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
            <script>
                        CKEDITOR.replace( 'footer_about_full_details', {
                allowedContent: true
            } );
                        CKEDITOR.replace( 'footer_about_full_details2', {
                allowedContent: true
            } );
                        CKEDITOR.replace( 'section_details', {
                allowedContent: true
            } );
                        CKEDITOR.replace('blogContent', {
                allowedContent: true
            });
                        CKEDITOR.replace('fourth_details', {
                allowedContent: true
            });
                        CKEDITOR.replace('fourth_other_details', {
                allowedContent: true
            });
                        CKEDITOR.replace('review', {
                allowedContent: true
            });

                          
                </script>