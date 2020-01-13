 
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
                        <div class="card">
                            <div class="card-body">
                                <a class="btn btn-outline-primary" data-toggle="modal" data-target="#Modal1" href="<?php echo base_url('admin/menu/add_new_menu');?>">Add Menu</a>
                               
                                <br/>
                                <div class="table-responsive" style='margin-top:10px'>
                                	<table class="table" id="myTable">
                                		 <thead>
                                		 	<tr>
                                		 		<th>ID</th>
                                		 		<th>Title</th>
                                		 		<th>type</th>
                                		 		<th>URL</th>
                                		 	    <th>Parent</th>
                                                <!-- <th>Status</th> -->
                                		 		<th>Action</th>
                                		 	</tr>
                                		 </thead>
                                		 <tbody>
                                		 	<?php if(!empty($allMenu)){
                                                // print_r($allMenu); die;
                                                $i=1;
                                            foreach ($allMenu as $key ) {
                                                $jsonToArray=json_decode($key->value);
                                                ?>
                                		 	<tr id="row_<?php echo $key->id; ?>">
                                		 		<td><?php echo $i; ?></td>
                                		 		<td><?php echo $key->title; ?></td>
                                		 		<td>
                                		 		    <?php 
                                		 		    $url='';
                                		 		    if($key->valueKey=='internal_link')
                                		 		      {
                                		 		          echo 'Internal Page';
                                		 		          $url='/'.$jsonToArray->select_link;
                                		 		          
                                		 		      }
                                		 		      else{ 
                                		 		          echo 'External Page'; 
                                		 		          $url=$jsonToArray->select_link;
                                		 		      } 
                                		 		      ?>
                                		 		</td>
                                		 	
                                		 		<td><?php echo $url; ?></td>
                                		 		<td><?php echo $jsonToArray->select_parent; ?></td>
                                		 		<td>
                                		 			<div class="btn-group">
			                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
			                                        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">
			                                          <a class="dropdown-item" onclick="deleteData('settingbypage', <?php echo $key->id; ?>)">Delete</a>
			                                          <a class="dropdown-item" href="<?php echo base_url('admin/pages/add_new_menu/'.$key->id);?>">Edit</a>
			                                         
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
                        <h5 class="modal-title" id="exampleModalLabel">Add Menu</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true ">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                         <form method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/pages/save_menu'); ?>">
                                    <div class="row mb-3 align-items-center">
                                        <div class="col-lg-4 col-md-12 text-right">
                                            <span>Title</span>
                                        </div>
                                        <div class="col-lg-8 col-md-12">
                                            <input type="text" name="title" data-toggle="tooltip" title="" class="form-control" id="validationDefault05" placeholder="Enter Menu Title" required="" data-original-title="Enter Menu Title" style="margin-top:0px;margin-bottom:0px;">
                                        </div>
                                    </div>

                                    <div class="row mb-3 align-items-center">
                                        <div class="col-lg-4 col-md-12 text-right">
                                            <span>Link type</span>
                                        </div>
                                        <div class="col-lg-8 col-md-12" style="margin-top:0px;margin-bottom:0px;">
                                            <input type="radio" name="link_type"  value="internal_link" onclick="selectLink('internal');"> Select Link Type
                                            <input type="radio" name="link_type" value="external_link" onclick="selectLink('external');"> External Link
                                        </div>
                                    </div>


                                    <div class="row mb-3 align-items-center internal" value="link_type" class="hide" id="div1">
                                        <div class="col-lg-4 col-md-12 text-right">
                                            <span>Select Page </span>
                                        </div>
                                        <div class="col-lg-8 col-md-12">
                                            <select name="select_link" data-toggle="tooltip" title="" class="form-control" style="margin-top:0px;margin-bottom:0px;">
                                                <?php
                                                 foreach ($allPage as $key) {
                                                    
                                                   ?>
                                                   <option value="<?php echo $key->valueKey ; ?>">
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
                                            <input type="url" name="external_link" style="margin-top:0px;margin-bottom:0px;" data-toggle="tooltip" title="" class="form-control" id="validationDefault05" placeholder="Enter Link" data-original-title="Enter Link">
                                        </div>
                                    </div>

                                    <div class="row mb-3 align-items-center ">
                                        <div class="col-lg-4 col-md-12 text-right">
                                            <span>Select Parent</span>
                                        </div>
                                        <div class="col-lg-8 col-md-12">
                                            <?php //print_r($allPage); ?>
                                            <select name="select_parent" id="select_parent" class="form-control" value="" style="margin-top:0px;margin-bottom:0px;">
                                               
                                                

                                                 <option value="no">none</option>
                                                   
                                                   <?php
                                                 foreach ($allMenu as $key ) {
                                                     $jsonToArray=json_decode($key->value);
                                                     if($jsonToArray->select_parent =='no'){
                                                   ?>
                                                   <option value="<?php echo $key->title ; ?>">
                                                    <?php echo $key->title; ?>
                                                       <?php //echo $jsonToArray->select_parent;?>
                                                   </option>
                                                   <!--  <option value="no">
                                                    <?php //echo "none"; ?>
                                                   </option> -->
                                                   <?php
                                                   }
                                                 }
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