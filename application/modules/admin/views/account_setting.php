 
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
      
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">Change Account Password</h5>
                            </div>
                            <hr>                            
                            
                            <div class="col-md-12"><br>
                                <form method="post" action="<?php echo base_url('admin/setting/save_account_setting');?>">                              
                                    <input type="password" name="new_password" id="password" class="form-control" value="" minlength="6" placeholder="Enter New Password Minimum length 6" pattern="(?=^.{6,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Password (UpperCase, LowerCase, SpecialChar and min 6 Chars)" required><br>
                                    <input type="password" name="conform_password" class="form-control" id="confirm_password" placeholder="Enter Conform Password" required> <br><br>
                                 <input class="btn btn-primary" type="submit" name="submit_account_setting" value="Save">
                            </form><br>
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