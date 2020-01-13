 

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

                                <button style="margin-bottom: 10px;float: right;" type="button" class="btn btn-success margin-5 text-white" data-toggle="modal" data-target="#ModalNewTestimonial">Add New</button>

                                <br/>

                                <div class="table-responsive" style='margin-top:10px'>

                                	<table class="table" id="myTable">

                                		<thead>

                                		 	<tr>
                                		 		<th>ID</th>
                                		 		<th>Title</th>
                                                <th>Message</th>
                                		 		<th>Action</th>
                                		 	</tr>

                                		 </thead>

                                		 <tbody>

                                		 	<?php if(!empty($videoData)){

                                		 		$i=1;

  											foreach ($videoData as $key ) {
                                                $video_data = json_decode($key->value);
  												?>

                                		 	<tr id="row_<?php echo $key->id; ?>">

                                		 		<td><?php echo $i; ?></td>

                                		 		<td><?php echo $key->title; ?></td>
                                                <td>
                                                    <iframe src="<?php echo $video_data->videoURL; ?>" width="250px"></iframe>
                                                </td>
                                               


                                                <td>

                                		 			<div class="btn-group">

			                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>

			                                        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">

			                                          <a class="dropdown-item" onclick="deleteData('settingbypage', <?php echo $key->id; ?>)">Delete</a>

			                                          <a class="dropdown-item" href="<?php echo base_url('admin/instructionalvideos/edit_video/'.$key->id);?>">Edit</a>

			                                         

			                                        </div>

			                                    </div>

			                                   

                                		 		</td>

                                		 	</tr>

                                		    <?php  $i++; } } ?>

                                		 </tbody>

                                         <tfoot>

                                            <tr>
                                                <th>ID</th>
                                                <th>Title</th>
                                                <th>Message</th>             
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

       <!-- Modal -->
<div class="modal fade" id="ModalNewTestimonial" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url('admin/instructionalvideos/save_video');?>">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLabel">Add New Video</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               
            <div class="card-body">
                <!-- <h4 class="card-title">Testimonial Detail</h4> -->
                <div class="form-group row">
                    <label for="videoTitle" class="col-sm-3 text-right control-label col-form-label">Video Title</label>
                    <div class="col-sm-9">
                        <input type="text" required="" class="form-control" id="videoTitle"   name="videoTitle" placeholder="Video Title" style="margin-top:0px;margin-bottom:0px;">
                    </div>
                </div>
                
                <div class="form-group row" style="    margin-top: 35px;">
                    <label for="videoURL" class="col-sm-3 text-right control-label col-form-label">Embed Video URL</label>
                    <div class="col-sm-9">
                        <input type="url" required="" class="form-control" id="videoURL"   name="videoURL" placeholder="https://www.youtube.com/embed/qBlkrYhRSFc" style="margin-top:0px;margin-bottom:0px;">
                    </div>
                </div>
                 
            </div>
                                 
                             
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save Now</button>
            </div>
          </form>
        </div>
    </div>
</div>
<!--modal3-->



