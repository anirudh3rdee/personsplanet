<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-banner-section" role="tabpanel" aria-labelledby="nav-banner-section-tab" style="padding-left: 15px;padding-right: 15px;">
            <?php
           
            $location_name = '';

            $location_slug = '';

            $location_description = '';

            $locationid = '';

            $event_address = '';

            $location_latitude = '';

            $location_longitude = '';

            $old_image = '';


            if( !empty( $locationData )){

               $locationid = $locationData[0]->id;

               $array_data = (array) json_decode($locationData[0]->value);

               $location_name = $array_data['location_name'];

               $location_slug = $array_data['location_slug'];

               $location_description = $array_data['location_description'];

               $event_address = $array_data['event_address'];

               $location_latitude = $array_data['location_latitude'];

               $location_longitude = $array_data['location_longitude'];

               $old_image = trim( $array_data['thumbnail_image'] );

            }



            ?>
             
             <!-- Banner Section Start -->
             <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">Add Event Location</h5>
                            </div>
                            <form method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/location/save_location/'.$locationid);?>">
                              <table class="table">
                                    
                                    <tr>
                                      <th scope="col">Name</th>
                                       <td colspan="2"><input type="text" name="location_name" value="<?php echo $location_name; ?>" placeholder="The name is how it appears on your site." class="form-control" style="margin-top:0px;margin-bottom:0px;"></td>
                                       <input type="hidden" class="form-control" name="locationID" id="locationID" placeholder="Title Here" required="" value="<?php echo $locationid;?> ">

                                    </tr>
                                    <tr>
                                      <th scope="col">Slug</th>
                                      <td colspan="2"><input type="text" name="location_slug" value="<?php echo $location_slug; ?>" class="form-control" style="margin-top:0px;margin-bottom:0px;"></td>
                                    </tr>
                                    <tr>
                                      <th scope="col">Description</th>
                                       
                                       <td colspan="2" style="padding-top: 35px;">
                                          <textarea name="location_description" class="form-control"><?php echo $location_description; ?></textarea>
                                       </td>
                                    </tr>
                                    <tr>
                                      <th scope="col">Address</th>
                                       <td colspan="2"><input type="varchar" name="event_address" value="<?php echo $event_address; ?>" class="form-control" style="margin-top:0px;margin-bottom:0px;" placeholder="Enter the location address"></td>
                                    </tr>
                                     <tr>
                                      <th scope="col">Latitude</th>
                                       <td colspan="2"><input type="text" name="location_latitude" value="<?php echo $location_latitude; ?>" class="form-control" style="margin-top:0px;margin-bottom:0px;" placeholder="Geo latitude (Optional)"></td>
                                    </tr>
                                     <tr>
                                      <th scope="col">Longitude</th>
                                       <td colspan="2"><input type="text" name="location_longitude" value="<?php echo $location_longitude; ?>" class="form-control" style="margin-top:0px;margin-bottom:0px;" placeholder="Geo longitude (Optional)"></td>
                                    </tr>
                                    <tr>
                                      <th scope="col">Thumbnail</th>
                                      <td>
                                        <input type="file" name="thumbnail_image" accept="image/*">
                                        <input type="hidden" value="<?php echo $thumbnailImg; ?>" name="old-value" />
                                     </td>
                                      <td>
                                          <?php if($thumbnailImg){
                                            ?>
                                               <img src="<?php echo base_url() . $thumbnailImg; ?>" width="100px" />
                                            <?php
                                          } ?>
                                      </td> 
                                    </tr>
                                    <tr>
                                        <td colspan="3"><input class="btn btn-primary" type="submit" name="submit_logo" value="Save"></td>
                                    </tr>
                                </table>
                            </form>
                        </div>
             <!-- Banner Section End -->
          </div>
          </div>