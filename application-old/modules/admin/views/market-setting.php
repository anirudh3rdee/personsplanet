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
            <a class="nav-item nav-link" id="nav-free-ebook-tab" data-toggle="tab" href="#nav-free-ebook" role="tab" aria-controls="nav-free-ebook" aria-selected="false">4th Section</a>
            <a class="nav-item nav-link" id="nav-view-all-videos-tab" data-toggle="tab" href="#nav-view-all-videos" role="tab" aria-controls="nav-view-all-videos" aria-selected="false">5th Section</a>
          </div>
        </nav>
        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-banner-section" role="tabpanel" aria-labelledby="nav-banner-section-tab">
             <!-- Banner Section Start -->
             <?php $bannerImg='';
                  $bannerHeading='';
                  $bannerDetails='';
                  $firstHeading='';
                  $firstHeadingDetails='';
                  $bannerID=0;
                  foreach ($homeData as $key) {
                    if($key->valueKey=='banner-section'){
                        $arrayData=(array) json_decode($key->value);
                        $bannerImg=$arrayData['banner_image'];
                        $bannerID=$key->id;
                        $bannerHeading=$arrayData['banner_heading'];
                        $bannerDetails=$arrayData['banner_details'];
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
                                      <th scope="col">Banner Image</th>
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
                                       <td colspan="2"><input type="text" name="banner_heading" value="<?php echo $bannerHeading; ?>" class="form-control" ></td>
                                    </tr>
                                    <tr>
                                      <th scope="col">Banner Details</th>
                                       
                                       <td colspan="2">
                                          <textarea  name="footer_about_full_details" class="form-control"><?php echo $bannerDetails; ?></textarea>
                                       </td>
                                    </tr>
                                    <tr>
                                      <th scope="col">First Heading</th>
                                      <td colspan="2"><input type="text" name="first_heading" value="<?php echo $firstHeading; ?>" class="form-control" ></td>
                                    </tr>
                                    <tr>
                                      <th scope="col">Heading Details</th>
                                       
                                       <td colspan="2">
                                          <textarea  name="first_heading_details" class="form-control"><?php echo $firstHeadingDetails; ?></textarea>
                                       </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"><input class="btn btn-primary" type="submit" name="submit_logo" value="Save"></td>
                                    </tr>
                                </table>
                            </form>
                        </div>
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
                        $sectionDetails=$arrayData['section_details'];
                        $sectionButton=$arrayData['second_button'];
                        $sectionUrl=$arrayData['second_button_url'];
                    }
                  }
              ?>
             <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">Plan Section</h5>
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
                                       <td colspan="2"><input type="text" name="second_heading" value="<?php echo $sectionHeading; ?>" class="form-control" ></td>
                                    </tr>
                                    <tr>
                                      <th scope="col">Section Sub Heading</th>
                                      <td colspan="2"><input type="text" name="second_sub_heading" value="<?php echo $sectionSubHeading; ?>" class="form-control" ></td>
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
                                          <input type="text" name="second_button" value="<?php echo $sectionButton; ?>" class="form-control" >
                                       </td>
                                    </tr>
                                    <tr>
                                      <th scope="col">Section Button URL</th>
                                       
                                       <td colspan="2">
                                          <input type="text" name="second_button_url" value="<?php echo $sectionUrl; ?>" class="form-control" >
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
                    <h5 class="card-title m-b-0">Blog Section</h5>
                    <button style="margin-bottom: 10px;float: right;" type="button" class="btn btn-success margin-5 text-white" data-toggle="modal" data-target="#ModalNewBlog">Add New</button>
                    
                      <table class="table">
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
                                      $bl_content = $arrayData['blogContent'];
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
                                                <a class="dropdown-item" href="#">Edit</a>
                                               
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
                        $fourth_Details=$arrayData['fourth_details'];
                        $fourth_OtherDetails=$arrayData['fourth_other_details'];
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
                             <td colspan="2"><input type="text" name="fourth_heading" value="<?php echo $fourth_Heading; ?>" class="form-control" ></td>
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
                                <textarea  name="fourth_btn_label" class="form-control"><?php echo $fourth_btn_label; ?></textarea>
                             </td>
                          </tr>
                          <tr>
                            <th scope="col">Button URL</th>
                             
                             <td colspan="2">
                                <textarea  name="fourth_btn_url" class="form-control"><?php echo $fourth_btn_url; ?></textarea>
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

                  $view_all_btn_label = '';

                  $view_all_btn_url = '';

                  foreach ($homeData as $key) {

                    if( $key->valueKey == 'fifth-section' ){

                        $arrayData =(array) json_decode($key->value);

                        $review_bckgrnd_image = $arrayData['review_bckgrnd_image'];

                        $fifth_Section_ID=$key->id;

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

                            <th scope="col">View All Button Text</th>

                             

                             <td colspan="2">

                                <textarea  name="view_all_btn_label" class="form-control"><?php echo $view_all_btn_label; ?></textarea>

                             </td>

                          </tr>

                          <tr>

                            <th scope="col">View All Button URL</th>

                             

                             <td colspan="2">

                                <textarea  name="view_all_btn_url" class="form-control"><?php echo $view_all_btn_url; ?></textarea>

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
        </div>
      
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
                        <input type="text" class="form-control" id="blogTitle" required="" name="blogTitle" placeholder="Blog Title">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="blogImage" class="col-sm-3 text-right control-label col-form-label">Image</label>
                    <div class="col-sm-9">
                        <input type="file" required="" class="form-control" id="blogImage" name="blogImage">
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
                        <input type="text" required="" class="form-control" id="blogBtnLabel" name="blogBtnLabel">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="blogLink" class="col-sm-3 text-right control-label col-form-label">Button Link</label>
                    <div class="col-sm-9">
                        <input type="text" required="" class="form-control" id="blogBtnLink" name="blogBtnLink">
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
 <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
            <script>
                        CKEDITOR.replace( 'footer_about_full_details' );
                        CKEDITOR.replace( 'section_details' );
                        CKEDITOR.replace('blogContent');
                        CKEDITOR.replace('fourth_details');
                        CKEDITOR.replace('fourth_other_details');
                        
                </script>