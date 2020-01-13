 

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

                $blogContent = '';

                $blogid = '';

                $old_image = '';

                $blogButton = '';

                $blogButtonUrl = '';
// print_r($blogData);
                if( !empty( $blogData )){

                    $blogid = $blogData[0]->id;

                    $blogTitle = $blogData[0]->title;

                    $array_data = (array) json_decode($blogData[0]->value);

                    $blogContent = $array_data['blogContent'];

                    $blogButton = $array_data['blogBtnLabel'];

                    $blogButtonUrl = $array_data['blogBtnLink'];

                    $old_image = trim( $array_data['blogImage'] );

                }

              

                ?>

                <div class="row">

                    <div class="col-12">

                        <div class="card">

                            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url('admin/home/save_home_blogsection/'.$blogid);?>">

                                <div class="card-body">

                                    <div class="form-group row">

                                        <label for="pageTitle" class="col-sm-3 text-right control-label col-form-label">Title</label>

                                        <div class="col-sm-9">

                                            <input type="text" class="form-control" name="blogTitle" id="blogTitle" placeholder="Title Here" required="" value="<?php echo $blogTitle;?>" style="margin-top:0px;margin-bottom:0px;">

                                             <input type="hidden" class="form-control" name="blogID" id="blogID" placeholder="Title Here" required="" value="<?php echo $blogid;?> ">

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

                                        <label for="pageContent" class="col-sm-3 text-right control-label col-form-label">Content</label>

                                        <div class="col-sm-9">

                                           <textarea  name="blogContent" class="form-control"><?php echo $blogContent;?></textarea>

                                        </div>

                                    </div>
                                    
                                    <div class="form-group row">

                                        <label for="blogBtnLabel" class="col-sm-3 text-right control-label col-form-label">Button Text</label>

                                        <div class="col-sm-9">

                                           <input type="text"  name="blogBtnLabel" id="blogBtnLabel" required="" class="form-control" value="<?php echo $blogButton;?>">

                                        </div>

                                    </div>

                                    <div class="form-group row">

                                        <label for="blogBtnLink" class="col-sm-3 text-right control-label col-form-label">Button Text URL</label>

                                        <div class="col-sm-9">

                                           <input type="text"  name="blogBtnLink" id="blogBtnLink" required="" class="form-control" value="<?php echo $blogButtonUrl;?>">

                                        </div>

                                    </div>
                                     

                                     

                                </div>

                                <div class="border-top">

                                    <div class="card-body">

                                        <input class="btn btn-primary" type="submit" name="save_blog" value="Save">

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

CKEDITOR.replace('blogContent');



</script>