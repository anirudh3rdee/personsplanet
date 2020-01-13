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
                    $clientMessage = $array_data['clientMessage'];
                    $clientName = $array_data['clientName'];
                }

              

                ?>

                <div class="row">

                    <div class="col-12">

                        <div class="card">

                            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url('admin/testimonial/save_testimonial/'.$pageid);?>">

                                <div class="card-body">

                                    <div class="form-group row">

                                        <label for="clientName" class="col-sm-3 text-right control-label col-form-label">Title</label>

                                        <div class="col-sm-9">

                                            <input type="text" class="form-control" style="margin-top:0px;margin-bottom:0px;" name="clientName" id="clientName" placeholder="Client Name" value="<?php echo $clientName;?>">

                                             <input type="hidden" class="form-control" name="pageID" id="pageID" placeholder="page ID" required="" value="<?php echo $pageid;?>">

                                        </div>

                                    </div>
                                    <div class="form-group row" style="margin-top: 35px;">

                                        <label for="clientMessage" class="col-sm-3 text-right control-label col-form-label">Message</label>

                                        <div class="col-sm-9">

                                            <textarea  name="clientMessage" class="form-control"><?php echo $clientMessage;?></textarea>

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