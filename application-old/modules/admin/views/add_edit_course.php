 

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

                $pageTitle = '';

                $pageSlug = '';

                $courseDescription = '';
                $courseFeature = '';
                $pageid = '';
                $buyNowUrl = '';
                $coursePrice = '';
                $old_image = '';
             

                if( !empty( $pageData )){

                    $pageid = $pageData[0]->id;

                    $pageTitle = $pageData[0]->title;

                    $pageSlug = $pageData[0]->valueKey;

                    $array_data = (array) json_decode($pageData[0]->value);

                    $courseDescription = trim( $array_data['courseDescription'] );
                    $courseFeature = trim( $array_data['courseFeature'] );
                    $buyNowUrl = trim( $array_data['buyNowUrl'] );
                    $coursePrice = trim( $array_data['coursePrice'] );
                    $old_image = trim( $array_data['featureImage'] );

                }

              

                ?>

                <div class="row">

                    <div class="col-12">

                        <div class="card">

                            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url('admin/courses/save_page/'.$pageid);?>">

                                <div class="card-body">

                                    <div class="form-group row">

                                        <label for="pageTitle" class="col-sm-3 text-right control-label col-form-label">Course Name</label>

                                        <div class="col-sm-9">

                                            <input type="text" class="form-control" style="margin-top:0px;margin-bottom:0px;" name="pageTitle" id="pageTitle" placeholder="Title Here" required="" value="<?php echo $pageTitle;?>">

                                            <input type="hidden" class="form-control" name="pageID" id="pageID" placeholder="Title Here" required="" value="<?php echo $pageid;?> ">

                                        </div>

                                    </div>

                                    <div class="form-group row">

                                        <label for="pageSlug" class="col-sm-3 text-right control-label col-form-label">Slug</label>

                                        <div class="col-sm-9">

                                            <input type="text" class="form-control" style="margin-top:0px;margin-bottom:0px;" name="pageSlug" id="pageSlug" placeholder="Slug Here" required="" value="<?php echo $pageSlug;?>">

                                        </div>

                                    </div>
                                    <div class="form-group row">

                                        <label for="coursePrice" class="col-sm-3 text-right control-label col-form-label">Price</label>

                                        <div class="col-sm-9">

                                            <input type="text" class="form-control" style="margin-top:0px;margin-bottom:0px;" name="coursePrice" id="coursePrice" placeholder="$350" required="" value="<?php echo $coursePrice;?>">

                                        </div>

                                    </div>
                                     <div class="form-group row">

                                        <label for="buyNowUrl" class="col-sm-3 text-right control-label col-form-label">Buy Now Button URL</label>

                                        <div class="col-sm-9">

                                            <input type="text" class="form-control" style="margin-top:0px;margin-bottom:0px;" name="buyNowUrl" id="buyNowUrl" placeholder="URL" value="<?php echo $buyNowUrl;?>">

                                        </div>

                                    </div>
                                    <div class="form-group row">

                                        <label for="featureImage" class="col-sm-3 text-right control-label col-form-label">Featured Image</label>

                                        <div class="col-sm-9">

                                            <input type="file" class="form-control" id="featureImage" name="featureImage" accept="image/*">

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

                                        <label for="pageContent" class="col-sm-3 text-right control-label col-form-label">Features</label>

                                        <div class="col-sm-9">

                                           <textarea  name="courseFeature" class="form-control"><?php echo $courseFeature;?></textarea>

                                        </div>

                                    </div>

                                     <div class="form-group row">

                                        <label for="courseDescription" class="col-sm-3 text-right control-label col-form-label">Description</label>

                                        <div class="col-sm-9">

                                           <textarea  name="courseDescription" class="form-control"><?php echo $courseDescription;?></textarea>

                                        </div>

                                    </div>

                                     

                                     

                                </div>

                                <div class="border-top">

                                    <div class="card-body">

                                        <input class="btn btn-primary" type="submit" name="save_page" value="Save">

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

CKEDITOR.replace('courseDescription');
CKEDITOR.replace('courseFeature');


</script>