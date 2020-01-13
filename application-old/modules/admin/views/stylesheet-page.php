 

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

                $page_stylesheet = '';
 
                if(  trim( $default_css ) != '') {

                    $page_stylesheet = $default_css;
                }
                ?>

                <div class="row">

                    <div class="col-12">

                        <div class="card1">

                            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url('admin/stylesheet/')?>">

                                <div class="card-body">

                                    <div class="form-group row">
                                        <div class="col-sm-12">

                                    <textarea name="page_stylesheet" style="min-height: 700px"><?php echo trim( $page_stylesheet );?></textarea> 
                                        </div>

                                    </div>
 

                                </div>

                                <div class="border-top">

                                    <div class="card-body">

                                        <input class="btn btn-primary" type="submit" name="save_stylesheet" value="Save">

                                    </div>

                                </div>

                            </form>

                        </div>

                     

                    </div>

                </div>

            </div>

           <!-- ============================================================== -->

            <!-- End Container fluid  -->

            <!-- ============================================================== -->
<!-- 
<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>

<script>

CKEDITOR.replace('shortContent');
CKEDITOR.replace('fullContent');


</script> -->