 

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

                <?php

                $blogTitle = '';

                $abBlogid = '';

                $old_image = '';

                $fullContent = '';

                $shortContent = '';

//  print_r($blogData);
//  die;
                if( !empty( $blogData )){

                    $abBlogid = $blogData[0]->id;

                    $blogTitle = $blogData[0]->title;

                    $array_data = (array) json_decode($blogData[0]->value);

                    $shortContent = $array_data['shortContent'];

                    $fullContent = $array_data['fullContent'];

                    $old_image = trim( $array_data['blogImage'] );

                }

              

                ?>

                <div class="row">

                    <div class="col-12">

                        <div class="card">

                            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url('admin/aboutus/save_about_blogsection/'.$abBlogid);?>">

                                <div class="card-body">

                                    <div class="form-group row">

                                        <label for="aboutBlogTitle" class="col-sm-3 text-right control-label col-form-label">Title</label>

                                        <div class="col-sm-9">

                                            <input type="text" class="form-control" name="blogTitle" id="blogTitle" placeholder="Title Here" required="" value="<?php echo $blogTitle;?>">

                                             <input type="hidden" class="form-control" name="abBlogID" id="abBlogID" placeholder="Title Here" required="" value="<?php echo $abBlogid;?> ">

                                        </div>

                                    </div>

                                    <div class="form-group row">

                                        <label for="featureImage" class="col-sm-3 text-right control-label col-form-label">Featured Image</label>

                                        <div class="col-sm-9">

                                            <input type="file" class="form-control" id="featureImage" name="blogImage" accept="image/*">

                                             <input type="hidden" class="form-control"  name="old_image" value="<?php echo $old_image;?>" >

                                            <?php if( $old_image != ''){

                                                echo "<p>Preview :";

                                                echo "<img width='50' src='".base_url($old_image)."' />";

                                                 echo "</p>";

                                            }

                                            ?>

                                        </div>

                                    </div>

                                    <div class="form-group row">

                                        <label for="pageShortContent" class="col-sm-3 text-right control-label col-form-label">Short Content</label>

                                        <div class="col-sm-9">

                                           <textarea  name="shortContent" class="form-control"><?php echo $shortContent;?></textarea>

                                        </div>

                                    </div>

                                    <div class="form-group row">

                                      <label for="pageFullContent" class="col-sm-3 text-right control-label col-form-label">Full Content</label>

                                       <div class="col-sm-9">

                                         <textarea  name="fullContent" class="form-control"><?php echo $fullContent;?></textarea>

                                   </div>

                                 </div>

                                </div>

                                <div class="border-top">

                                    <div class="card-body">

                                        <input class="btn btn-primary" type="submit" name="save_ab_blog" value="Save">

                                    </div>

                                </div>

                            </form>

                        </div>

                     

                    </div>

                </div>



                  

                <!-- ============================================================== -->

                <!-- End PAge Content -->

                <!-- ============================================================== -->

            </div>

           <!-- ============================================================== -->

            <!-- End Container fluid  -->

            <!-- ============================================================== -->

<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>

<script>

CKEDITOR.replace('shortContent');
CKEDITOR.replace('fullContent');


</script>