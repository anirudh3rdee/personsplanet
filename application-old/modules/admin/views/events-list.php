 

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

                                <a class="btn btn-outline-primary" href="<?php echo base_url('admin/events/add_new/');?>" >Create New</a>

                                <br/>

                                <div class="table-responsive" style='margin-top:10px'>

                                	<table class="table" id="myTable">

                                		<thead>

                                		 	<tr>

                                		 		 <th>S No.</th>

                                		 		<th>Title</th>

                                                <th>Start Date</th>

                                		 		<th>End Date</th>

                                                <th>URL</th>

                                		 		<th>Action</th>

                                		 	</tr>

                                		 </thead>

                                		 <tbody>
                                           
                                		 	<?php if(!empty($eventsData)){

                                		 		$i=1;

  											foreach ($eventsData as $key ) {
                                                $array_data = (array) json_decode($key->value);
                                                // var_dump($array_data);
  												?>                           		 	

                                             <tr id="row_<?php echo $key->id; ?>">

                                		 		<td><?php echo $i; ?></td>

                                		 		<td><?php echo $array_data['event_title']; ?></td>

                                                <td><?php echo $array_data['start_date']; ?></td>
                                                <td><?php echo $array_data['end_date']; ?></td>

                                		 		 <td><?php
                                                    if( '' != trim($array_data['event_link']))
                                                    {

                                                        echo "<a target='_blank' href='".$array_data['event_link']."'>Link</a>";
                                                    }else{
                                                        echo "NA";
                                                    }
                                                  
                                                  ?></td>

                                                <td>

                                		 			<div class="btn-group">

			                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>

			                                        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">

			                                          <a class="dropdown-item" onclick="deleteData('settingbypage', <?php echo $key->id; ?>)">Delete</a>

			                                          <a class="dropdown-item" href="<?php echo base_url('admin/events/add_new_event/'.$key->id);?>">Edit</a>

			                                         

			                                        </div>

			                                    </div>

			                                   

                                		 		</td>

                                		 	</tr>

                                		    <?php  $i++; } } ?>

                                		 </tbody>

                                         <tfoot>

                                            <tr>
                                                <th>Title</th>
                                                <th>Start Date</th>
                                                <th>End Date</th>
                                                <th>URL</th>
                                                <th>Action</th>

                                            </tr>

                                         </tfoot>

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

                        <h5 class="modal-title" id="exampleModalLabel">Add Client</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                            <span aria-hidden="true ">×</span>

                        </button>

                    </div>

                    <div class="modal-body">

                         <form method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/client_logo/save_client_logo');?>">

                                    <div class="row mb-3 align-items-center">

                                        <div class="col-lg-4 col-md-12 text-right">

                                            <span>Title</span>

                                        </div>

                                        <div class="col-lg-8 col-md-12">

                                            <input type="text" name="title" data-toggle="tooltip" title="" class="form-control" style="margin-top:0px;margin-bottom:0px;" id="validationDefault05" placeholder="Enter Client Logo Title" required="" data-original-title="Enter Client Logo Title">

                                        </div>

                                    </div>

                                    <div class="row mb-3 align-items-center">

                                        <div class="col-lg-4 col-md-12 text-right">

                                            <span>Image</span>

                                        </div>

                                        <div class="col-lg-8 col-md-12">

                                            <input type="file" name="logo"  required="" >

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



