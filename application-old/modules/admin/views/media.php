 

            <!-- Container fluid  -->

            <!-- ============================================================== -->
            <?php
            $other_format = array('pdf','doc','docx','ppt','pptx', 'pp', 'ppsx', 'odt','xls', 'xlsx', 'key', 'zip', 'mp3', 'm4a', 'ogg', 'wav', 'mp4', 'm4v', 'mov', 'wmv', 'avi', 'mpg', 'ogv', '3gp', '3g2');
            ?>
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

                                <a class="btn btn-outline-primary" data-toggle="modal" data-target="#Modal1">Add Media</a>

                               

                                <br/>

                                <div class="table-responsive" style='margin-top:10px'>

                                	<table class="table" id="myTable">

                                		 <thead>

                                		 	<tr>

                                		 		<th>ID</th>

                                		 		<th>Title</th>

                                		 		<th>Media</th>
                                                <th>Copy Path</th>
                                                <th>Action</th>

                                		 	</tr>

                                		 </thead>

                                		 <tbody>

                                		 	<?php if(!empty($media_data)){

                                		 		$i=1;

  											foreach ($media_data as $key ) {

                                                

                                              ?>

                                		 	<tr id="row_<?php echo $key->id; ?>">

                                		 		<td><?php echo $i; ?></td>

                                		 		<td>

                                                    <?php echo $key->media_name; ?>
                                                    
                                                </td>

                                		 		

                                                <td>

                                                    <?php 
                                                    if( in_array($key->media_type, array('png', 'jpg', 'jpeg', 'gif'))){
                                                        
                                                    ?>

                                                    <img width="100px" src="<?php echo base_url().''.$key->media_path; ?>"/></td>
                                                <?php } else if( in_array($key->media_type, $other_format)){
                                                        
                                                    ?>

                                                    <img width="100px" src="<?php echo base_url();?>assets/media_files/default/<?php echo $key->media_type;?>.png"/></td>
                                                <?php } else{

                                                    echo base_url().''.$key->media_path;
                                                } ?>

                                                </td>
                                                <td>
                                                    <input class="" type="text" id="media_path_<?php echo $key->id;?>" value="<?php echo base_url().''.$key->media_path;?>" style="margin-top:0px;margin-bottom:0px;">
                                                    <span id="media_span_<?php echo $key->id;?>" onclick="copyMediaPath(<?php echo $key->id ?>)" style="cursor: pointer;">Copy</span>
                                                </td>

                                		 		<td>

                                		 			<div class="btn-group">

			                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>

			                                        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">

			                                          <a class="dropdown-item" onclick="deleteData('media_file', <?php echo $key->id; ?>)">Delete</a>

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

                        <h5 class="modal-title" id="exampleModalLabel">Add Media</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                            <span aria-hidden="true ">×</span>

                        </button>

                    </div>

                    <div class="modal-body">

                         <form method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/media/save_media');?>">
                                    <div class="row mb-3 align-items-center">

                                        <div class="col-lg-4 col-md-12 text-right">

                                            <span>Title</span>

                                        </div>

                                        <div class="col-lg-8 col-md-12">

                                            <input type="text" name="title" data-toggle="tooltip" title="" class="form-control" id="validationDefault05" placeholder="Enter Title" required="" data-original-title="Enter  Title" style="margin-bottom:0px;margin-top:0px;">

                                        </div>

                                    </div>
                                    <div class="row mb-3 align-items-center">

                                        <div class="col-lg-4 col-md-12 text-right">

                                            <span>Browse Media</span>

                                        </div>

                                        <div class="col-lg-8 col-md-12">

                                            <input type="file" name="media_file" data-toggle="tooltip" title="" class="form-control" id="validationDefault05"  required="">

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

</script>


