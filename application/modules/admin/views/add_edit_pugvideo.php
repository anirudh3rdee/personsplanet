 

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
                  
                $pugTitle = '';

                $pageSlug = '';

                $pugID = '';

                $old_image = '';

                $video_url = '';
                
                $btntext = '';

                $btnlink = '';

                if( !empty( $pageData )){

                    $pugID = $pageData[0]->id;

                    $pugTitle = $pageData[0]->title;

                    $pageSlug = $pageData[0]->valueKey;

                    $array_data = (array) json_decode($pageData[0]->value);

                    $video_url = trim( $array_data['video_url'] );

                    $old_image = trim( $array_data['featureImage'] );

                    $btntext = trim( $array_data['buttontext'] );

                    $btnlink = trim( $array_data['buttonlink'] );


                }

                ?>

                <div class="row">

                    <div class="col-12">

                        <div class="card">
                            </br></br>
                            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url('admin/pugvideos/save_pugvideos/'.$pugID);?>">

                                <div class="card-body">

                                    <div class="form-group row">

                                        <label for="TradeTitle" class="col-sm-3 text-right control-label col-form-label">Title</label>

                                        <div class="col-sm-9">

                                            <input type="text" class="form-control" name="pugTitle" id="pugTitle" placeholder="Title Here" required="" value="<?php echo $pugTitle;?>">

                                             <input type="hidden" class="form-control" name="pugID" id="pugID" placeholder="Title Here" required="" value="<?php echo $pugID;?> ">

                                        </div>

                                    </div>
                                    

                                      <div class="form-group row">

                                        <label for="pageSlug" class="col-sm-3 text-right control-label col-form-label">Slug</label>

                                        <div class="col-sm-9">

                                            <input type="text" class="form-control" name="pageSlug" id="pageSlug" placeholder="Slug Here" required="" value="<?php echo $pageSlug;?>">

                                        </div>

                                    </div>


                                    <div class="form-group row">

                                        <label for="featureImage" class="col-sm-3 text-right control-label col-form-label">Video Image</label>

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

                                        <label for="pageShortContent" class="col-sm-3 text-right control-label col-form-label">Video Link</label>

                                        <div class="col-sm-9">

                                           <input type="text" name="video_url" placeholder="Enter Video url Here" value="<?php echo $video_url;?>">

                                        </div>

                                    </div>

                                    
                                    <div class="form-group row">
                                        <label for="Buttontext" class="col-sm-3 text-right control-label col-form-label">Button Text</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="buttontext" placeholder="Enter Button Text Here" value="<?php echo $btntext;?>">
                                        </div>
                                    </div>

                                     <div class="form-group row">
                                        <label for="buttonlink" class="col-sm-3 text-right control-label col-form-label">Button Link</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="buttonlink" placeholder="Enter Button Link Here" value="<?php echo $btnlink;?>">
                                        </div>
                                    </div>
                                    

                                </div>

                                <div class="border-top">

                                    <div class="card-body">

                                        <input class="btn btn-primary" type="submit" name="save_pugvideo" value="Save">

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

CKEDITOR.replace('shortContent', {
    allowedContent: true
} );

</script>