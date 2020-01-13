 

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

$clientLogoid = '';

$old_image = '';


//  print_r($logoData);
//  die;
if( !empty( $homeData )){

  $clientLogoid = $homeData[0]->id;

  $title = $homeData[0]->title;

//   $array_data = (array) json_decode($logoData[0]->value);

  $old_image = $homeData[0]->value;

}



?>


                <div class="row">

                    <div class="col-8">

                        <div class="card">

                            <div class="card-body">

                            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url('admin/home/save_client_logo/'.$clientLogoid);?>">

                                    <div class="row mb-3 align-items-center">

                                        <div class="col-lg-4 col-md-12 text-right">

                                            <span>Title</span>

                                        </div>

                                        <div class="col-lg-8 col-md-12">

                                            <input type="text" data-toggle="tooltip" title="" style="margin-top:0px;margin-bottom:0px;" class="form-control" id="validationDefault05" placeholder="Enter Client Logo Title" required="" data-original-title="Enter Client Logo Title" name="title" value="<?php echo $title; ?>">

                                            <input type="hidden" class="form-control" name="clientLogoId" id="clientLogoId" placeholder="ID Here" required="" value="<?php echo $clientLogoid;?> ">

                                        </div>

                                    </div>

                                    <div class="row mb-3 align-items-center">

                                        <div class="col-lg-4 col-md-12 text-right">

                                            <span>Featured Image</span>

                                        </div>

                                        <div class="col-lg-8 col-md-12">

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

                                    <div class="row mb-3 align-items-center">

                                        <div class="col-lg-4 col-md-12 text-right">

                                           <input type="submit" class="btn btn-primary" name="Add" value="Save">

                                        </div>

                                    </div>

                                </form>

                               

                            </div>

                            

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

       