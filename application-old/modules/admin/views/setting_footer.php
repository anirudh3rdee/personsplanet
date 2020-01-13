 

            <!-- Container fluid  -->

            <!-- ============================================================== -->

            <div class="container-fluid">

                <!-- ============================================================== -->

                <!-- Start Page Content -->

                <!-- ============================================================== -->

                <div class="row">

                    <div class="col-12">

                        <div class="card">

                            <form method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/setting/save_footer');?>">

                                <table class="table">

                                    <tr>

                                      <th scope="col">About Footer short Details</th>

                                      <?php

                                         $footer_about='';

                                         
                                          foreach ($header_data as $key ) {

                                            if($key->setting_name=='footer_about'){

                                                $footer_about=$key->setting_value;

                                               

                                            }

                                      } ?> 

                                      <td><textarea name="footer_about" class="form-control" style="margin-top:0px;margin-bottom:0px;"> <?php echo  $footer_about; ?></textarea> </td>

                                    </tr>

                                     <tr>

                                      <th scope="col">About Footer Details</th>

                                      <?php

                                         $footer_about='';

                                          foreach ($header_data as $key ) {

                                            if($key->setting_name=='footer_about_full_details'){

                                                $footer_about=$key->setting_value;

                                               

                                            }

                                      } ?> 

                                      <td>

                                        <textarea  name="footer_about_full_details" class="form-control" style="margin-top:0px;margin-bottom:0px;"> <?php echo  $footer_about; ?></textarea> </td>

                                    </tr> 

                                    <tr>

                                        <td colspan="3"><input class="btn btn-primary" type="submit" name="submit_logo" value="Save"></td>

                                    </tr>

                                </table>

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

                        CKEDITOR.replace( 'footer_about_full_details' );

                </script>