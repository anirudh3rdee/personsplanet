 
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
                
                <div class="row">

                    <div class="col-12">
                    <?php 
                    // print_r($footersubmenuData);
                  $firstMenu='';
                  $secondMenu='';
                  $thirdMenu='';
                  
                  $footermenuID=0;
                //   print_r($footermenuData); die;
                 
                 
                  foreach($footermenuData as $key){
                    if($key->valueKey=='footer-menu'){
                        $arrayData=(array) json_decode($key->value);
                        $firstMenu=$arrayData['first_menu'];
                        $footermenuID=$key->id;
                        $secondMenu=$arrayData['second_menu'];
                        $thirdMenu=$arrayData['third_menu'];
                       
                    }
                  }
                  ?>
                    <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">Sub Menu</h5>
                            </div>
                            <form method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/setting/save_footermenu/'.$footermenuID);?>">
                                <table class="table">
                              
                                    <tr>
                                    <th scope="col">First Menu Title</th>
                                       <td colspan="2"><input type="text" name="first_menu" value="<?php echo $firstMenu; ?>" class="form-control" style="margin-top:0px;margin-bottom:0px;"></td>
                                    </tr>
                                    <tr>
                                    <th scope="col">Second Menu Title</th>
                                       <td colspan="2"><input type="text" name="second_menu" value="<?php echo $secondMenu; ?>" class="form-control" style="margin-top:0px;margin-bottom:0px;"></td>
                                    </tr>
                                    <tr>
                                    <th scope="col">Third Menu Title</th>
                                       <td colspan="2"><input type="text" name="third_menu" value="<?php echo $thirdMenu; ?>" class="form-control" style="margin-top:0px;margin-bottom:0px;"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"><input class="btn btn-primary" type="submit" name="submit_footer_menu" value="Save"></td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                        <!--second section-->
                      
                        <div class="card">
                            <div class="card-body">
                                <a class="btn btn-outline-primary" data-toggle="modal" data-target="#Modal1" href="<?php echo base_url('admin/setting/add_new_menu'.$footersubmenuID);?>">Add New Menu</a>
                               
                                <br/>
                                <div class="table-responsive" style='margin-top:10px'>
                                	<table class="table" id="myTable">
                                		 <thead>
                                		 	<tr>
                                		 		<th>ID</th>
                                		 		<th>Title</th>
                                		 		<th>Link type</th>
                                		 		<th>URL</th>
                                		 	    <th>Parent</th>
                                                <!-- <th>Status</th> -->
                                		 		<th>Action</th>
                                		 	</tr>
                                		 </thead>
                                		 <tbody>
                                         <?php 
                                        //  var_dump($footersubmenuData);
                                         if(!empty($footersubmenuData)){
                                                
                                                $i=1;
                                            foreach ($footersubmenuData as $key ) {
                                                $jsonToArray=json_decode($key->value);
                                                //var_dump($jsonToArray);
                                                ?>
                                		 	<tr id="row_<?php echo $key->id; ?>">
                                		 		<td><?php echo $i; ?></td>
                                		 		<td><?php echo $key->title; ?></td>
                                		 		<td>
                                                     <?php 
                                                    //  var_dump($jsonToArray);
                                		 		    $url='';
                                		 		    if($key->valueKey=='internal_link')
                                		 		      {
                                		 		          echo 'Internal';
                                		 		          $url='/'.$jsonToArray->sub_select_link;
                                		 		          
                                		 		      }
                                		 		      else{ 
                                		 		          echo 'External'; 
                                		 		          $url=$jsonToArray->sub_external_link;
                                		 		      } 
                                		 		      ?>
                                		 		</td>
                                		 	
                                		 		<td><?php echo $url; ?></td>
                                		 		<td><?php echo $jsonToArray->sub_select_parent; ?></td>
                                		 		
                                		 		<td>
                                		 			<div class="btn-group">
			                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
			                                        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">
			                                          <a class="dropdown-item" onclick="deleteData('settingbypage', <?php echo $key->id; ?>)">Delete</a>
			                                          <a class="dropdown-item" href="<?php echo base_url('admin/setting/edit_footer_menu/'.$key->id);?>">Edit</a>
			                                         
			                                        </div>
			                                    </div>
			                                   
                                		 		</td>
                                		 	</tr>
                                             <?php  $i++; } } ?>
                                		 </tbody>
                                    </table>
                                </div>
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
       <div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog" role="document ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New Menu</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true ">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                         <form method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/setting/save_footersubmenu/'.$footersubmenuIDD); ?>">
                                    <div class="row mb-3 align-items-center">
                                        <div class="col-lg-4 col-md-12 text-right">
                                            <span>Title</span>
                                        </div>
                                        <div class="col-lg-8 col-md-12">
                                            <input type="text" name="sub_title" style="margin-top:0px;margin-bottom:0px;" data-toggle="tooltip" title="" class="form-control" id="validationDefault05" placeholder="Enter Menu Title" required="" data-original-title="Enter Menu Title">
                                        </div>
                                    </div>
                                    
                                      <div class="row mb-3 align-items-center" value="link_type" class="hide" id="div1">
                                        <div class="col-lg-4 col-md-12 text-right">
                                            <span>Select Link Type</span>
                                        </div>
                                        <div class="col-lg-8 col-md-12">
                                            <select name="select_link_type" data-toggle="tooltip" title="" class="dropdown_class" class="form-control" style="margin-top:0px;margin-bottom:0px;">
                                                   <option value="internal">Internal</option>
                                                   <option value="external">External</option>                
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-3 align-items-center">
                                        <div class="col-lg-4 col-md-12 text-right">
                                            <span>Enter Link</span>
                                        </div>
                                        <div class="col-lg-8 col-md-12">
                                            <input type="radio" id="checkboxval1" name="sub_link_type"  value="sub_internal_link" onclick="selectLink('internal');"> Internal Link
                                            <input type="radio" id="checkboxval2" name="sub_link_type" value="sub_external_link" onclick="selectLink('external');"> External Link
                                        </div>
                                    </div>


                                    <div class="row mb-3 align-items-center internal" value="sub_link_type" class="hide" id="div1">
                                        <div class="col-lg-4 col-md-12 text-right">
                                            <span>Select Page </span>
                                        </div>
                                        <div class="col-lg-8 col-md-12">
                                            <select name="sub_select_link" data-toggle="tooltip" title="" class="form-control" style="margin-top:0px;margin-bottom:0px;">
                                              
                                            <?php

//print_r($allPage);

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

                                     <div class="row mb-3 align-items-center external">
                                        <div class="col-lg-4 col-md-12 text-right">
                                            <span>Select External Link</span>
                                        </div>
                                        <div class="col-lg-8 col-md-12">
                                            <input type="url" name="sub_external_link" data-toggle="tooltip" style="margin-top:0px;margin-bottom:0px;" title="" class="form-control" id="validationDefault05" placeholder="Enter Link" data-original-title="Enter Link">
                                        </div>
                                    </div>

                                    <div class="row mb-3 align-items-center ">
                                        <div class="col-lg-4 col-md-12 text-right">
                                            <span>Select Parent</span>
                                        </div>
                                        <div class="col-lg-8 col-md-12">
                                            
                                            <select name="sub_select_parent" id="sub_select_parent" class="form-control" value="" style="margin-top:0px;margin-bottom:0px;">
                                               
                                            <?php

// print_r($footermenuData);
?>
<option value="<?php echo "first_menu"; ?>"><?php echo $firstMenu?></option>
<option value="<?php echo "second_menu"; ?>"><?php echo $secondMenu?></option>
<option value="<?php echo "third_menu"; ?>"><?php echo $thirdMenu?></option>
<?php
?>

    
                                            </select>
                                            
                                        </div>
                                    </div>
                                   

                                    <div class="row mb-3 align-items-center">
                                        <div class="col-lg-4 col-md-12 text-right">
                                           
                                        </div>
                                        <div class="col-lg-8 col-md-12">
                                            <input type="submit" class="btn btn-primary" name="Add" value="Save">
                                        </div>
                                    </div>
                                </form>
                    </div>
                </div>
            </div>
        </div>

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