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

                $clientName = '';
                $clientMessage = '';
                $pageid = '';

                if( !empty( $pageData )){

                    $pageid = $pageData[0]->id;
                    $array_data = (array) json_decode($pageData[0]->value);
                    $videoTitle = $array_data['videoTitle'];
                    $videoURL = trim( $array_data['videoURL'] );
                }

              

                ?>

                <div class="row">

                    <div class="col-12">

                        <div class="card">

                            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url('admin/instructionalvideos/save_video/'.$pageid);?>">

                                <div class="card-body">

                                    <div class="form-group row">

                                        <label for="clientName" class="col-sm-3 text-right control-label col-form-label">Title</label>

                                        <div class="col-sm-9">

                                            <input type="text" class="form-control" style="margin-top:0px;margin-bottom:0px;" name="videoTitle" id="videoTitle" placeholder="Client Name" value="<?php echo $videoTitle;?>">

                                             <input type="hidden" class="form-control" name="pageID" id="pageID" placeholder="page ID" required="" value="<?php echo $pageid;?>">

                                        </div>

                                    </div>
                                    <div class="form-group row" style="margin-top: 35px;">

                                        <label for="videoURL" class="col-sm-3 text-right control-label col-form-label">Embed Video URL</label>

                                        <div class="col-sm-9">

                                          <input type="url" required="" class="form-control" id="videoURL" value="<?php echo $videoURL;?>" name="videoURL" placeholder="https://www.youtube.com/embed/qBlkrYhRSFc" style="margin-top:0px;margin-bottom:0px;">

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