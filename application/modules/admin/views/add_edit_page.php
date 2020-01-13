 

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

                $bannerhead = '';

                $pageContent = '';

                $pageid = '';

                $old_image = '';
             

                if( !empty( $pageData )){

                    $pageid = $pageData[0]->id;

                    $pageTitle = $pageData[0]->title;

                    $pageSlug = $pageData[0]->valueKey;

                    $array_data = (array) json_decode($pageData[0]->value);

                    // echo "<pre>";
                    // var_dump(json_decode($pageData[0]->value, true));

                    $bannerhead = $array_data['bannerhead'];

                    $pageContent = html_entity_decode($array_data['pageContent']);

                    $old_image = trim( $array_data['featureImage'] );

                }

              

                ?>

                <div class="row">

                    <div class="col-12">

                        <div class="card">

                            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url('admin/pages/save_page/'.$pageid);?>">

                                <div class="card-body">

                                    <div class="form-group row">

                                        <label for="pageTitle" class="col-sm-3 text-right control-label col-form-label">Title</label>

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

                                        <label for="bannerhead" class="col-sm-3 text-right control-label col-form-label">Banner Heading</label>

                                        <div class="col-sm-9">

                                            <input type="text" class="form-control" style="margin-top:0px;margin-bottom:0px;" name="bannerhead" id="bannerhead" placeholder="Heading Here" value="<?php echo $bannerhead;?>">


                                        </div>

                                    </div>

                                    <div class="form-group row">

                                        <label for="pageContent" class="col-sm-3 text-right control-label col-form-label">Content</label>

                                        <div class="col-sm-9">

                                           <textarea  name="pageContent" class="form-control"><?php echo html_entity_decode($pageContent);?></textarea>

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

// CKEDITOR.replace('pageContent');
CKEDITOR.replace( 'pageContent', {
    allowedContent: true
} );
// CKEDITOR.editorConfig = function( config ) {
//   config.extraAllowedContent = '*[id](*)';  // remove '[id]', if you don't want IDs for HTML tags
//   console.log("Hello Sir");
// }



</script>