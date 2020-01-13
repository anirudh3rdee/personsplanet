 

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

                $banner_image='';
                $banner_title='';
                $subscriptionButton='';
                $subscriptionButtonUrl='';
                $bannerID=0;

                if( !empty( $slideData )){

                    $slideid = $slideData[0]->id;
                    $arrayData = (array) json_decode($slideData[0]->value);
                    $banner_title = $arrayData['banner_title'];
                    $banner_image = $arrayData['banner_image'];
                    $bannerID = $key->id;
                    $subscriptionButton = $arrayData['subscription_button'];
                    $subscriptionButtonUrl = $arrayData['subscription_button_url'];
                    $old_image = trim( $arrayData['banner_image'] );
                }

              

                ?>

                <div class="row">

                    <div class="col-12">

                        <div class="card">

                            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url('admin/home/save_home_bannersection/'.$slideid);?>">

                                <div class="card-body">

                                    <div class="form-group row">

                                        <label for="banner_title" class="col-sm-3 text-right control-label col-form-label">Title</label>

                                        <div class="col-sm-9">

                                            <input type="text" class="form-control" name="banner_title" id="banner_title" placeholder="Title Here" required="" value="<?php echo $banner_title;?>" style="margin-top:0px;margin-bottom:0px;">

                                             <input type="hidden" class="form-control" name="slideid" id="slideid" placeholder="Title Here" required="" value="<?php echo $slideid;?> ">

                                        </div>

                                    </div>

                                    <div class="form-group row">

                                        <label for="banner_image" class="col-sm-3 text-right control-label col-form-label">Featured Image</label>

                                        <div class="col-sm-9">

                                            <input type="file" class="form-control" id="banner_image" name="banner_image" accept="image/*">

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

                                        <label for="buttontext" class="col-sm-3 text-right control-label col-form-label">Button Text</label>

                                        <div class="col-sm-9">

                                           <input type="text"  name="subscription_button" id="subscription_button" required="" class="form-control" value="<?php echo $subscriptionButton;?>">

                                        </div>

                                    </div>

                                    <div class="form-group row">

                                        <label for="subscription_button_url" class="col-sm-3 text-right control-label col-form-label">Button Text URL</label>

                                        <div class="col-sm-9">

                                           <input type="text"  name="subscription_button_url" id="subscription_button_url" required="" class="form-control" value="<?php echo $subscriptionButtonUrl;?>">

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


            </div>

