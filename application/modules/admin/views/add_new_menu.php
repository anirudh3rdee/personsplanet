
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

                $select_link = '';

                $external_link = '';
                
                $link_type = '';

                $menuid = '';

                $select_parent = '';
                // print_r($menuData); die;

                if( !empty( $menuData )){

                    $menuid = $menuData[0]->id;

                    $title = $menuData[0]->title;

                    $link_type = $menuData[0]->valueKey;

                    $array_data = (array) json_decode($menuData[0]->value);

                    $select_link = $array_data['select_link'];

                    $select_link_type = $array_data['select_link_type'];

                    $external_link = $array_data['external_link'];
                   
                    $select_parent = $array_data['select_parent'];

                }

               // print_r($link_type); die;

                ?>

                <div class="row">

                    <div class="col-12">

                        <div class="card">

                            <form method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/pages/save_menu/'.$menuid); ?>">

                                <div class="card-body">

                                    <div class="form-group row">

                                        <label for="pageTitle" class="col-sm-3 text-right control-label col-form-label">Title</label>

                                        <div class="col-sm-9">

                                            <input type="text" name="title" data-toggle="tooltip" class="form-control" id="validationDefault05" placeholder="Enter Menu Title" required="" data-original-title="Enter Menu Title" value="<?php echo $title;?>" style="margin-top:0px;margin-bottom:0px;">
                                             
                                             <input type="hidden" class="form-control" style="margin-top:0px;margin-bottom:0px;" name="menuID" id="menuID" placeholder="Title Here" required="" value="<?php echo $menuid;?> ">
                                        </div>

                                    </div>
                                    
                                  <div class="row mb-3 align-items-center">
                                        <label for="select_link_type" class="col-sm-3 text-right control-label col-form-label">Select Link Type</label>
                                        <div class="col-lg-8 col-md-12">
                                        <select name="select_link_type" data-toggle="tooltip" title="" class="form-control dropdown_class" style="margin-top:0px;margin-bottom:0px;">
                                                   <option value="internal" <?php if( $select_link_type =="internal"){ echo "selected";}?>>Internal</option>
                                                   <option value="external" <?php if( $select_link_type =="external"){ echo "selected";}?>>External</option>                
                                         </select>
                                         </div>
                                    </div>

                                   <div class="row mb-3 align-items-center">
                                        <label for="link_type" class="col-sm-3 text-right control-label col-form-label">Link Type</label>
                                        <div class="col-lg-8 col-md-12">
                                            <input type="radio" id="checkboxval1" name="link_type"  value="internal_link" onclick="selectLink('internal');" <?php if( $link_type=="internal_link"){ echo "checked";}?>> Select Link Type
                                            <input type="radio" id="checkboxval2" name="link_type" value="external_link" onclick="selectLink('external');" <?php if( $link_type=="external_link"){ echo "checked";}?>> External Link
                                        </div>
                                    </div>
                                   
                                    <?php if( $link_type=="internal_link"){
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
                                    

                                    <div class="form-group internal" id="div1">

                                       <div class="row">
                                       <label for="select_link" class="col-sm-3 text-right control-label col-form-label">Select Page</label>
                                        <div class="col-sm-9">
                                            <select name="select_link" id="select_link" data-toggle="tooltip" title="" style="margin-top:0px;margin-bottom:0px;" class="form-control" value="<?php echo $select_link; ?>">
                                                <?php

                                            // print_r($allPage);

                                                 foreach ($allPage as $key) {
                                                     $sel='';
                                                    if($select_link == $key->valueKey){
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
                                            <input type="url" name="external_link" data-toggle="tooltip" title="" style="margin-top:0px;margin-bottom:0px;" class="form-control" id="url" placeholder="Enter Link" data-original-title="Enter Link" value="<?php echo $external_link; ?>">
                                        </div>

                                    </div>
                                                </div>

                                     <div class="form-group row">
                                          <label for="select_parent" class="col-sm-3 text-right control-label col-form-label">Select Parent</label>
                                        <div class="col-sm-9">
                                          
                                            <select name="select_parent" id="select_parent" class="form-control" style="margin-top:0px;margin-bottom:0px;" value="<?php echo $select_parent; ?>">
                                           <option value="no" <?php if($select_parent =='none') { echo 'selected';} ?>>none</option>
                                                   
                                                   <?php
                                                //    print_r($allMenu); 
                                                 foreach ($allMenu as $key ) {

                                                     $jsonToArray=json_decode($key->value);
                                                   
                                                        $sel='';
                                                     if($key->title == $select_parent ){
                                                        $sel='selected';
                                                     }
                                                   ?>
                                                  
                                                   <option value="<?php echo $key->title ; ?>" <?php echo $sel; ?> >

                                                       <?php echo $key->title; ?>
                                                    </option>
                                                 
                                                   <?php
                                                  
                                                 }
                                                  ?>
                                             
                                            </select>
                                            
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