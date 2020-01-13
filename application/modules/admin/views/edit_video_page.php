 

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

                $video_id = '';

                $url = '';

                $video_image = '';
//print_r($videoData);
//  die;
                if( !empty( $homeData )){

                    $video_id = $homeData[0]->id;

                    $title = $homeData[0]->title;

                    $array_data = (array) json_decode($homeData[0]->value);
                    // var_dump($homeData);
                    if(isset($array_data['url'])){
                        $url = trim($array_data['url']);
                    }
                    if(isset($array_data['video_image'])){
                        $video_image = trim($array_data['video_image']);
                    }
                   

                    
                }

              

                ?>

                <div class="row">

                    <div class="col-12">

                        <div class="card">

                            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url('admin/home/save_video/'.$video_id);?>">

                                <div class="card-body">

                                    <div class="form-group row">

                                        <label for="aboutBlogTitle" class="col-sm-3 text-right control-label col-form-label">Video Title</label>

                                        <div class="col-sm-9">

                                            <input type="text" class="form-control" name="title" style="margin-top:0px;margin-bottom:0px;" id="title" placeholder="Title Here" required="" value="<?php echo $title;?>">

                                             <input type="hidden" class="form-control" name="video_id" id="video_id" placeholder="Title Here" required="" value="<?php echo $video_id;?> ">

                                        </div>

                                    </div>


                                    <div class="form-group row">

                                        <label for="url" class="col-sm-3 text-right control-label col-form-label">Video URL</label>

                                        <div class="col-sm-9">

                                        <input type="url" class="form-control" name="url" id="url" placeholder="URL Here" required="" value="<?php echo $url;?>">

                                        </div>

                                    </div>

									<div class="form-group row">

                                        <label for="url" class="col-sm-3 text-right control-label col-form-label">Video Image</label>

                                        <div class="col-sm-9">

                                        <input type="url" class="form-control" name="video_image" id="url" placeholder="Video Image Here" required="" value="<?php echo $video_image;?>">

                                        </div>

                                    </div>

                                </div>

                                <div class="border-top">

                                    <div class="card-body">

                                        <input class="btn btn-primary" type="submit" name="save_video" value="Save">

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