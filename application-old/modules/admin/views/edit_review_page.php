 

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

                $title = '';

                $reviewid = '';

                $old_image = '';

                $review = '';

                $rating = '';

//  print_r($homeData);
//  die;
                if( !empty( $homeData )){

                    $reviewid = $homeData[0]->id;

                    $title = $homeData[0]->title;

                    $array_data = (array) json_decode($homeData[0]->value);
//print_r($array_data); die;
                    $review = $array_data['review'];

                    $rating = $array_data['rating'];

                    $old_image =  $array_data['img'] ;
                   
                }

              

                ?>

                <div class="row">

                    <div class="col-12">

                        <div class="card">

                            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url('admin/home/save_review/'.$reviewid);?>">

                                <div class="card-body">

                                    <div class="form-group row">

                                        <label for="aboutBlogTitle" class="col-sm-3 text-right control-label col-form-label">Title</label>

                                        <div class="col-sm-9">

                                            <input type="text" class="form-control" name="title" id="title" placeholder="Title Here" required="" value="<?php echo $title;?>" style="margin-top:0px;margin-bottom:0px;">

                                             <input type="hidden" class="form-control" name="reviewID" id="reviewID" placeholder="Title Here" required="" value="<?php echo $reviewid;?> ">

                                        </div>

                                    </div>

                                    <div class="form-group row">

                                        <label for="featureImage" class="col-sm-3 text-right control-label col-form-label">Featured Image</label>

                                        <div class="col-sm-9">

                                            <input type="file" class="form-control" id="logo" name="logo" accept="image/*">

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

                                        <label for="review" class="col-sm-3 text-right control-label col-form-label">Review</label>

                                        <div class="col-sm-9">

                                        <textarea class="form-control" name="review"><?php echo $review;?></textarea>

                                        </div>

                                    </div>

                                    <div class="form-group row">

                                      <label for="rating" class="col-sm-3 text-right control-label col-form-label">Rating</label>

                                       <div class="col-sm-9">

                                       <input type="number" class="form-control" name="rating" id="rating" placeholder="Rating Here" required="" value="<?php echo $rating;?>">

                                   </div>

                                 </div>

                                </div>

                                <div class="border-top">

                                    <div class="card-body">

                                        <input class="btn btn-primary" type="submit" name="save_review" value="Save">

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

CKEDITOR.replace('review');

</script>