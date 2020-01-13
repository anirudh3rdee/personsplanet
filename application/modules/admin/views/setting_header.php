 
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
                                <h5 class="card-title m-b-0">Logos</h5>
                            </div>
                            <form method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/setting/save_log');?>">
                                <table class="table">
                                    <tr>
                                      <th scope="col">Logo</th>
                                      <td>
                                        <?php foreach ($header_data as $key ) {
                                            if($key->setting_name=='header_logo'){
                                                $imgname=base_url().$key->setting_value;
                                                echo '<img src="'.$imgname.'" class="img img-responsive" style="width:100px" ';
                                            }
                                      } ?> 
                                      </td> 
                                      <td><input type="file" name="header_logo" accept="image/*" ></td>
                                    </tr>
                                    <tr>
                                      <th scope="col">Favicon</th>
                                      <td>
                                        <?php foreach ($header_data as $key ) {
                                            if($key->setting_name=='header_favicon'){
                                                 $imgname=base_url().$key->setting_value;
                                                echo '<img src="'.$imgname.'" class="img img-responsive" style="width:100px" ';
                                            }
                                         } ?> 
                                      </td>
                                      <td><input type="file" name="header_favicon" accept="image/*" ></td>
                                    </tr>
                                     <tr>
                                      <th scope="col">Member Login URL</th>
                                       <?php 
                                    $member_login_url='';
                                      foreach ($header_data as $key ) {
                                            if($key->setting_name=='member_login_url'){
                                                 $member_login_url=$key->setting_value;
                                            }
                                         } ?>
                                      <td><a href='<?php echo $member_login_url; ?>'><?php echo $member_login_url; ?><a></td>
                                      
                                      <td><input type="url" name="member_login_url" value="<?php echo $member_login_url; ?>" style="margin-top:0px;margin-bottom:0px;" class="form-control" ></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"><input class="btn btn-primary" type="submit" name="submit_logo" value="Save"></td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">Social Link</h5>
                            </div>
                            <form method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/setting/save_socail');?>">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <td>Social Heading</td>
                                            <td>URL</td>
                                            <td>Icon</td>
                                            <td>Action</td>
                                        </tr>
                                    </thead>
                                    <tbody id="TextBoxContainer">
                                         <?php 
                                      $socialLink=array();

                                      foreach ($header_data as $key ) {
                                            if($key->setting_name=='socailLink'){

                                                
                                                $socialLink=(array)json_decode($key->setting_value);
                                               
                                            }
                                         } 
                                         if(!empty($socialLink)){
                                            foreach ($socialLink as $key ) {
                                               ?>
                                               <tr>
                                                  <td>
                                                    <input name="social_heading[]" placeholder="Facebook" type="text" value="<?php echo $key->heading; ?>" class="form-control" style="margin-top:0px;margin-bottom:0px;"></td>
                                                  <td>
                                                    <input name="social_url[]" placeholder="https://facebook.com" type="url" value="<?php echo $key->url; ?>" class="form-control"></td>
                                                  <td>
                                                      <select name="social_icon[]" class="form-control" style="margin-top:0px;margin-bottom:0px;">
                                                        
                                                        <option value="fab fa-facebook-f" 
                                                         <?php 
                                                            if($key->icon=='fab fa-facebook-f'){
                                                             ?>
                                                             selected
                                                             <?php
                                                            }
                                                         ?>
                                                        >Facebook</option>

                                                        <option value="fab fa-instagram"
                                                        <?php 
                                                            if($key->icon=='fa fa-instagram'){
                                                             ?>
                                                             selected
                                                             <?php
                                                            }
                                                         ?>
                                                         >
                                                        Instagram</option>

                                                        <option value="fab fa-twitter" <?php 
                                                            if($key->icon=='fab fa-twitter'){
                                                             ?>
                                                             selected
                                                             <?php
                                                            }
                                                         ?>
                                                         >Twitter</option>

                                                        <option value="fab fa-google-plus-g"
                                                        <?php 
                                                            if($key->icon=='fab fa-google-plus-g'){
                                                             ?>
                                                             selected
                                                             <?php
                                                            }
                                                         ?>
                                                         >Google + </option>
                                                        <option value="fab fa-youtube"
                                                        <?php 
                                                            if($key->icon=='fab fa-youtube'){
                                                             ?>
                                                             selected
                                                             <?php
                                                            }
                                                         ?>
                                                         >Youtube</option>

                                                         <option value="fab fa-linkedin"
                                                        <?php 
                                                            if($key->icon=='fab fa-linkedin'){
                                                             ?>
                                                             selected
                                                             <?php
                                                            }
                                                         ?>
                                                         >Linkedin</option>

                                                     </select>
                                                  </td>
                                                  <td>
                                                     <button type="button" class="btn btn-danger remove"><i class="fas fa-minus"></i></button> 
                                                  </td>
                                               </tr>
                                               <?php
                                            }
                                         }
                                         
                                         ?>
                                     
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="4">
                                               <button id="btnAdd" type="button" class="btn btn-primary" data-toggle="tooltip" data-original-title="Add more controls" style="float: right;"><i class="fas fa-plus"></i>&nbsp; Add&nbsp;</button>

                                               <input class="btn btn-primary" type="submit" name="submit_logo" value="Save">
                                            </th>
                                       </tr>

                                    </tfoot>
                                </table>
                            </form>
                        </div>
                        

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">Top Stripe Text</h5>
                            </div>
                            <hr>

                            <?php 
                            $stripe_link = ''; 
                            $stripe_content1 = ''; 

                              foreach ($header_data as $key ) {
                                if($key->setting_name == 'header_top_stripe'){
                                    $header_top_stripe=(array)json_decode($key->setting_value);
                                        if(isset($header_top_stripe['stripe_link'][0])){
                                          $stripe_link1 = $header_top_stripe['stripe_link'][0]; 
                                        }
                                        if(isset($header_top_stripe['stripe_content'][0])){
                                          $stripe_content1 = $header_top_stripe['stripe_content'][0];
                                        }
                                       
                                }
                              }
                            ?>

                            <div class="col-md-12">
                                <form method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/setting/save_top_stripe');?>">
                                    <input type="text" name="top_stripe_link[]" class="form-control"
                                    value="<?php echo $stripe_link1;?>" placeholder="Enter Top Stripe Link"><br><br>
                                    <textarea name="stripe_content[]" placeholder="Enter Header Top Stripe Text"><?php echo $stripe_content1;?></textarea> 
                                 <input class="btn btn-primary" type="submit" name="submit_stripe_content" value="Save">
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