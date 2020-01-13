
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

                $sub_title = '';

                $select_link_type = '';

                $sub_select_link = '';

                $sub_external_link = '';
                
                $sub_link_type = '';

                $footersubmenu_id = '';

                $sub_select_parent = '';
                // print_r($footersubmenuData); 

                if( !empty( $footersubmenuData )){

                    $footersubmenu_id = $footersubmenuData[0]->id;

                    $sub_title = $footersubmenuData[0]->title;

                    $sub_link_type = $footersubmenuData[0]->valueKey;

                    $array_data = (array) json_decode($footersubmenuData[0]->value);

                    $sub_select_link = $array_data['sub_select_link'];

                   $sub_external_link = $array_data['sub_external_link'];
                   
                   $sub_select_parent = $array_data['sub_select_parent'];

                }

            // print_r($sub_link_type); 

                ?>

                <div class="row">

                    <div class="col-12">

                        <div class="card">

                            <form method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/setting/save_footersubmenu/'.$footersubmenu_id); ?>">

                                <div class="card-body">

                                    <div class="form-group row">

                                        <label for="pageTitle" class="col-sm-3 text-right control-label col-form-label">Title</label>

                                        <div class="col-sm-9">

                                            <input type="text" name="sub_title" data-toggle="tooltip" class="form-control" id="validationDefault05" placeholder="Enter Menu Title" required="" data-original-title="Enter Menu Title" value="<?php echo $sub_title;?>" style="margin-top:0px;margin-bottom:0px;">
                                             
                                             <input type="hidden" class="form-control" style="margin-top:0px;margin-bottom:0px;" name="footersubmenu_id" id="footersubmenu_id" placeholder="Title Here" required="" value="<?php echo $footersubmenu_id;?> ">
                                        </div>

                                    </div>
                                    
                                    <div class="row mb-3 align-items-center" value="link_type" class="hide" id="div1">
                                        <div class="col-sm-3 text-right control-label col-form-label">
                                            <span>Select Link Type</span>
                                        </div>
                                        <div class="col-lg-8 col-md-12">
                                            <select name="select_link_type" data-toggle="tooltip" title="" class="form-control dropdown_class" style="margin-top:0px;margin-bottom:0px;">
                                                   <option value="internal" <?php if( $sub_link_type =="internal_link"){ echo "selected";}?>>Internal</option>
                                                   <option value="external" <?php if( $sub_link_type =="sub_external_link"){ echo "selected";}?>>External</option>                
                                            </select>
                                        </div>
                                    </div>

                                   <div class="row mb-3 align-items-center">
                                        <label for="sub_link_type" class="col-sm-3 text-right control-label col-form-label">Enter Link</label>
                                        <div class="col-lg-8 col-md-12">
                                        
                                            <input type="radio" id="checkboxval1" name="sub_link_type"  value="internal_link" onclick="selectLink('internal');" <?php if( $sub_link_type=="internal_link"){ echo "checked";}?>> Internal Link
                                            <input type="radio" id="checkboxval2" name="sub_link_type" value="external_link" onclick="selectLink('external');" <?php if( $sub_link_type=="external_link"){ echo "checked";}?>> External Link
                                        </div>
                                    </div>
                                   
                                    <?php if( $sub_link_type=="internal_link"){
                                        ?>
                                        <style>
                                            .external{
                                                display:none;
                                            }
                                            </style>
                                        <?php
                                    }else{ ?>
                                        <style>
                                            .internal{
                                                display:none;
                                            }
                                            </style>
                                            <?php
                                    }
                                        ?>
                                    

                                    <div class="form-group  internal" id="div1">
                                        <div class="row">
                                            

                                       <label for="select_link" class="col-sm-3 text-right control-label col-form-label">Select Page</label>
                                        <div class="col-sm-9">
                                            <select name="sub_select_link" id="sub_select_link" style="margin-top:0px;margin-bottom:0px;" class="form-control" value="<?php echo $sub_select_link; ?>">
                                                <?php

                                            //print_r($allPage);

                                                 foreach ($allPage as $key) {
                                                     $sel='';
                                                    if($sub_select_link == $key->valueKey){
                                                        $sel='selected';
                                                        
                                                    }
                                                   ?>
                                                   <option value="<?php echo $key->valueKey ; ?>" <?php echo $sel; ?> >
                                                    <?php echo $key->title ; ?>
                                                       
                                                   </option>
                                                   <?php
                                                 }
                                                  ?>
                                                
                                            </select>
                                        </div>

                                    
                                        </div>
                                    </div> 

                                    <div class="form-group external" >
                                    <div class="row">
                                       <label for="external_link" class="col-sm-3 text-right control-label col-form-label">External Link</label>
                                        <div class="col-sm-9">
                                            <input type="url" name="sub_external_link" data-toggle="tooltip" title="" style="margin-top:0px;margin-bottom:0px;" class="form-control" id="url" placeholder="Enter Link" data-original-title="Enter Link" value="<?php echo $sub_external_link; ?>">
                                        </div>
                                    </div>
                                    </div>

                                     <div class="form-group row">
                                          <label for="select_parent" class="col-sm-3 text-right control-label col-form-label">Select Parent</label>
                                        <div class="col-sm-9">
                                            <select name="sub_select_parent" id="sub_select_parent" class="form-control" style="margin-top:0px;margin-bottom:0px;" value="<?php echo $sub_select_parent; ?>">
                                            <?php
            //   var_dump($sub_select_parent);                             
foreach ($footermenuData as $key) {
    if($key->valueKey=='footer-menu'){
        $arrayData=(array) json_decode($key->value);
        $firstMenu=$arrayData['first_menu'];
        $footermenuID=$key->id;
        $secondMenu=$arrayData['second_menu'];
        $thirdMenu=$arrayData['third_menu'];
    }
}
?>
<option value="<?php echo "first_menu"; ?>" <?php if($sub_select_parent == 'first_menu'){ echo "selected";} ?>><?php echo $firstMenu?></option>
<option value="<?php echo "second_menu"; ?>" <?php if($sub_select_parent == 'second_menu'){ echo "selected";} ?>><?php echo $secondMenu?></option>
<option value="<?php echo "third_menu"; ?>" <?php if($sub_select_parent == 'third_menu'){ echo "selected";} ?>><?php echo $thirdMenu?></option>
<?php
?>
 
                                              
                                            </select>
                                            
                                        </div>
                                     </div>

                                     

                                </div>

                                <div class="border-top">

                                    <div class="card-body">

                                        <input class="btn btn-primary" type="submit" name="save_footer_submenu" value="Save">

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

<!--<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>-->

<!--<script>-->

<!--CKEDITOR.replace('pageContent');-->



<!--</script>-->
   <script type="text/javascript">
    function selectLink(value){
      if(value=='internal'){
            $(".internal").show();
            $(".external").hide();
      }else{
            $(".internal").hide();
            $(".external").show();
      }
    }
</script>