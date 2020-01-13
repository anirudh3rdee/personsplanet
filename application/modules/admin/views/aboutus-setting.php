 

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

<section id="tabs">

  <div class="">

   

    <div class="">

      <div class="col-xs-12">

        <nav>

          <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">

            <a class="nav-item nav-link active" id="nav-first-section-tab" data-toggle="tab" href="#nav-first-section" role="tab" aria-controls="nav-home" aria-selected="true">Banner</a>

            <a class="nav-item nav-link" id="nav-second-section-tab" data-toggle="tab" href="#nav-second-section" role="tab" aria-controls="nav-second-section" aria-selected="false">Other Section</a>

            

           

          </div>

        </nav>

        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">

          <div class="tab-pane fade show active" id="nav-first-section" role="tabpanel" aria-labelledby="nav-banner-section-tab">

             <!-- Banner Section Start -->

             <?php $bannerImg='';

                  $bannerHeading='';

                  $bannerID=0;

                  foreach ($aboutData as $key) {

                    if($key->valueKey=='banner-section'){

                        $arrayData=(array) json_decode($key->value);

                        $bannerImg=$arrayData['banner_image'];

                        $bannerID=$key->id;

                        $bannerHeading=$arrayData['banner_heading'];

                    }

                  }

                  ?>

             <div class="card">

                            <div class="card-body">

                                <h5 class="card-title m-b-0">Banner Section</h5>

                            </div>

                            <form method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/aboutus/save_aboutus_banner/'.$bannerID);?>">

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

                                        <td colspan="3"><input class="btn btn-primary" type="submit" name="submit_abt_banner" value="Save"></td>

                                    </tr>

                                </table>

                            </form>

                        </div>

             <!-- Banner Section End -->

          </div>

          <div class="tab-pane fade" id="nav-second-section" role="tabpanel" aria-labelledby="nav-banner-second-tab">

             <!-- Banner Second Section Start -->

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

                                  <th scope="col">Short Content</th>

                                  <th scope="col">Full Content</th>

                                  <th scope="col">Action</th>

                              </tr>

                          </thead>

                          <tbody>

                          <?php

                          foreach ($aboutData as $key) {

                            if($key->valueKey=='blog-section'){

                              $arrayData=(array) json_decode($key->value);

                             

                              $bl_title = $key->title;

                              $bl_id = $key->id;



                              $bl_image = $arrayData['blogImage'];

                              $bl_short_content = $arrayData['shortContent'];

                              $bl_full_content = $arrayData['fullContent'];

                               

                         

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

                              <td><?php echo $bl_short_content;?></td>

                             <td><?php echo $bl_full_content;?></td>

                              <td>

                                <div class="btn-group">

                                      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>

                                      <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">

                                        <a class="dropdown-item" onclick="deleteData('settingbypage', <?php echo $key->id; ?>)">Delete</a>

                                        <a class="dropdown-item" href="<?php echo base_url('admin/aboutus/ab_edit_blog/'.$key->id);?>">Edit</a>

                                       

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

            

             <!-- Banner Second Section End -->

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

          <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url('admin/aboutus/save_about_blogsection');?>">

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

                    <label for="shortContent" class="col-sm-3 text-right control-label col-form-label">Short Content</label>

                    <div class="col-sm-9">

                       <textarea  name="shortContent" ></textarea>

                    </div>

                </div>

                <div class="form-group row">

                    <label for="fullContent" class="col-sm-3 text-right control-label col-form-label">Full Content</label>

                    <div class="col-sm-9">

                       <textarea  name="fullContent" ></textarea>

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

CKEDITOR.replace('shortContent');

CKEDITOR.replace('fullContent');

</script>