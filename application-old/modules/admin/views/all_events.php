
<script src="https://code.jquery.com/jquery-latest.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
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
                        // print_r($eventsData);

                        $eventId = '';

                        $event_title = '';

                        $pageSlug = '';

                        if( !empty( $eventsData )){

                            $eventId = $eventsData[0]->id;
                            
                            $pageSlug = $eventsData[0]->valueKey;

                            $event_title = $eventsData[0]->title;

                            $array_data = (array) json_decode($eventsData[0]->value);

                            $event_title = $array_data['event_title'];

                            $start_date = $array_data['start_date'];

                            $end_date = $array_data['end_date']; 

                            $mec_allday = $array_data['mec_allday'];

                            $time_in_hour = $array_data['time_in_hour'];

                            $time_in_minute = $array_data['time_in_minute'];

                            $time_in_ap = $array_data['time_in_ap'];

                            $end_time_hour = $array_data['end_time_hour'];

                            $end_time_minute = $array_data['end_time_minute'];

                            $end_time_ap = $array_data['end_time_ap'];

                            $mec_allday = $array_data['mec_allday'];

                            $hide_time = $array_data['hide_time'];

                            $hide_end_time = $array_data['hide_end_time'];

                            $time_comment = $array_data['time_comment'];

                            $event_repeating = $array_data['event_repeating'];

                            $repeat_type = $array_data['repeat_type'];

                            $repeat_interval = $array_data['repeat_interval'];

                            $ends_repeat_option = $array_data['ends_repeat_option'];

                            $certain_weekdays = $array_data['certain_weekdays'];

                            $event_repeating_date = $array_data['event_repeating_date'];

                            $end_repeat_date = $array_data['end_repeat_date'];

                            $occurence_times = $array_data['occurence_times'];

                            $event_location = $array_data['event_location'];

                            $event_link_type = $array_data['event_link_type'];

                            $event_link = $array_data['event_link'];

                            $more_info = $array_data['more_info'];

                            $more_information = $array_data['more_information'];

                            $window_location = $array_data['window_location'];

                            $event_cost = $array_data['event_cost'];

                            $event_content = $array_data['event_content'];

                            $organizer_id = $array_data['organizer_id'];

                            $organizer_name = $array_data['organizer_name'];

                            $organizer_tel = $array_data['organizer_tel'];

                            $organizer_email = $array_data['organizer_email'];

                            $organizer_url = $array_data['organizer_url'];

                            $show_map = $array_data['show_map'];

                            $old_loc_image = trim( $array_data['location_image'] );

                            $hourly_new_value = trim( $array_data['hourly_schedule'] );

                        }



                        ?>


                <div class="row">

                    <div class="col-12">
                        
                       <!-- Tabs -->
                       <section id="tabs">
  <div class="">
   
    <div class="">
      <div class="col-xs-12">
        <nav>
          <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-banner-section-tab" data-toggle="tab" href="#nav-banner-section" role="tab" aria-controls="nav-home" aria-selected="true">Event Form</a>
           
          </div>
        </nav>
        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-banner-section" role="tabpanel" aria-labelledby="nav-banner-section-tab">
             <!-- First Section Start -->
             <div class="card" style="padding-left:20px;">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">Date and Time</h5>
                            </div>
                            <hr/>
                            <form method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/events/save_event_data/'.$eventId);?>">
                            <!--first form start-->
                            <div class="mec-title" style="padding-top:15px;padding-bottom:5px;">
                            <div class="row">
                            <label for="event_title" style="padding-left: 12px;">Event Title</label>
                            <div class="col-6">
                            <input type="text" name="event_title" id="pageTitle" value="<?php echo $event_title;?>" placeholder="Event Title"/>
                            <input type="hidden" class="form-control" name="eventId" id="pageID" placeholder="Title Here" required="" value="<?php echo $eventId; ?> ">
                            </div>
                            </div>
                            </div>
                            <div class="mec-title" style="padding-top:15px;padding-bottom:5px;">
                            <i class="far fa-calendar-alt"></i>
					<label for="mec_start_date">Start Date</label>
				</div>
                <div class="row">
					<div class="col-4">
						<input type="date" name="start_date" id="start_date" value="<?php echo $start_date; ?>" placeholder="Start Date" class="" />
					</div>
                    <div class="col-6 mec-time-picker ">
                    <div class="row">
                                                <select name="time_in_hour" id="mec_start_hourmec[date][start][hour]" style="width:auto;" value="<?php echo $time_in_hour; ?>">
                                           
                                                        <option  value="1" <?php if($time_in_hour == 1){ echo "selected";} ?>>1</option>
														<option  value="2" <?php if($time_in_hour == 2){ echo "selected";} ?>>2</option>
														<option  value="3" <?php if($time_in_hour == 3){ echo "selected";} ?>>3</option>
														<option  value="4" <?php if($time_in_hour == 4){ echo "selected";} ?>>4</option>
														<option  value="5" <?php if($time_in_hour == 5){ echo "selected";} ?>>5</option>
														<option  value="6" <?php if($time_in_hour == 6){ echo "selected";} ?>>6</option>
														<option  value="7" <?php if($time_in_hour == 7){ echo "selected";} ?>>7</option>
														<option  value="8" <?php if($time_in_hour == 8){ echo "selected";} ?>>8</option>
														<option  value="9" <?php if($time_in_hour == 9){ echo "selected";} ?>>9</option>
														<option  value="10" <?php if($time_in_hour == 10){ echo "selected";} ?>>10</option>
														<option  value="11" <?php if($time_in_hour == 11){ echo "selected";} ?>>11</option>
														<option  value="12" <?php if($time_in_hour == 12){ echo "selected";} ?>>12</option>
													</select>
						<span class="time-dv" style="width:auto;">:</span>
						<select name="time_in_minute" id="mec_start_minutes" style="width:auto;" value="<?php echo $time_in_minute;?>">
														<option selected="selected" value="0">00</option>
														<option  value="5" <?php if($time_in_minute == 05){ echo "selected";} ?>>05</option>
														<option  value="10" <?php if($time_in_minute == 10){ echo "selected";} ?>>10</option>
														<option  value="15" <?php if($time_in_minute == 15){ echo "selected";} ?>>15</option>
														<option  value="20" <?php if($time_in_minute == 20){ echo "selected";} ?>>20</option>
														<option  value="25" <?php if($time_in_minute == 25){ echo "selected";} ?>>25</option>
														<option  value="30" <?php if($time_in_minute == 30){ echo "selected";} ?>>30</option>
														<option  value="35" <?php if($time_in_minute == 35){ echo "selected";} ?>>35</option>
														<option  value="40" <?php if($time_in_minute == 40){ echo "selected";} ?>>40</option>
														<option  value="45" <?php if($time_in_minute == 45){ echo "selected";} ?>>45</option>
														<option  value="50" <?php if($time_in_minute == 50){ echo "selected";} ?>>50</option>
														<option  value="55" <?php if($time_in_minute == 55){ echo "selected";} ?>>55</option>
													</select>
						<select name="time_in_ap" id="mec_start_ampm" style="width:auto;" value="<?php echo $time_in_ap;?>">
							<option  value="AM" <?php if($time_in_ap == "AM"){ echo "selected";} ?>>AM</option>
							<option  value="PM" <?php if($time_in_ap == "PM"){ echo "selected";} ?>>PM</option>
						</select>
                    </div>
                    </div>
                    </div>
                    <div class="mec-title" style="padding-top:15px;padding-bottom:5px;">
					<i class="far fa-calendar-alt"></i>
					<label for="mec_end_date">End Date</label>
				</div>
                <div class="row">
					<div class="col-4">
						<input type="date" name="end_date" id="end_date" value="<?php echo $end_date; ?>" placeholder="End Date" class="" />
					</div>
					<div class="col-6 mec-time-picker ">
                    <div class="row">
                        						<select name="end_time_hour" id="mec_end_hour" style="width:auto;" value="<?php echo $end_time_hour;?>">
														<option  value="1"  <?php if($end_time_hour == 1){ echo "selected";} ?>>1</option>
														<option  value="2"  <?php if($end_time_hour == 2){ echo "selected";} ?>>2</option>
														<option  value="3"  <?php if($end_time_hour == 3){ echo "selected";} ?>>3</option>
														<option  value="4"  <?php if($end_time_hour == 4){ echo "selected";} ?>>4</option>
														<option  value="5"  <?php if($end_time_hour == 5){ echo "selected";} ?>>5</option>
														<option  value="6"  <?php if($end_time_hour == 6){ echo "selected";} ?>>6</option>
														<option  value="7"  <?php if($end_time_hour == 7){ echo "selected";} ?>>7</option>
														<option  value="8"  <?php if($end_time_hour == 8){ echo "selected";} ?>>8</option>
														<option  value="9"  <?php if($end_time_hour == 9){ echo "selected";} ?>>9</option>
														<option  value="10" <?php if($end_time_hour == 10){ echo "selected";} ?>>10</option>
														<option  value="11" <?php if($end_time_hour == 11){ echo "selected";} ?>>11</option>
														<option  value="12" <?php if($end_time_hour == 12){ echo "selected";} ?>>12</option>
													</select>
						<span class="time-dv" style="width:auto;">:</span>
						<select name="end_time_minute" id="mec_end_minutes" style="width:auto;" value="<?php echo $end_time_minute;?>">
														<option selected="selected" value="0">00</option>
														<option  value="5" <?php if($end_time_minute == 05){ echo "selected";} ?>>05</option>
														<option  value="10" <?php if($end_time_minute == 10){ echo "selected";} ?>>10</option>
														<option  value="15" <?php if($end_time_minute == 15){ echo "selected";} ?>>15</option>
														<option  value="20" <?php if($end_time_minute == 20){ echo "selected";} ?>>20</option>
														<option  value="25" <?php if($end_time_minute == 25){ echo "selected";} ?>>25</option>
														<option  value="30" <?php if($end_time_minute == 30){ echo "selected";} ?>>30</option>
														<option  value="35" <?php if($end_time_minute == 35){ echo "selected";} ?>>35</option>
														<option  value="40" <?php if($end_time_minute == 40){ echo "selected";} ?>>40</option>
														<option  value="45" <?php if($end_time_minute == 45){ echo "selected";} ?>>45</option>
														<option  value="50" <?php if($end_time_minute == 50){ echo "selected";} ?>>50</option>
														<option  value="55" <?php if($end_time_minute == 55){ echo "selected";} ?>>55</option>
													</select>
						<select name="end_time_ap" id="mec_end_ampm" style="width:auto;" value="<?php echo $end_time_ap;?>">
							<option  value="AM" <?php if($time_in_ap == "AM"){ echo "selected";} ?>>AM</option>
							<option selected="selected" value="PM" <?php if($time_in_ap == "PM"){ echo "selected";} ?>>PM</option>
						</select>
                        </div>
                        					</div>
				</div>
                <div class="mec-form-row" style="padding-top: 15px;">
                    <input  type="checkbox" name="mec_allday" id="mec_allday" value="yes" onchange="jQuery('.mec-time-picker').toggle();" <?php if( $mec_allday=="yes"){ echo "checked";}?>/><label for="mec_allday">All Day Event</label>
                </div>
                <div class="mec-form-row" style="padding-top: 15px;">
                    <input  type="checkbox" name="hide_time" id="hide_time" value="yes" <?php if( $hide_time=="yes"){ echo "checked";}?>/><label for="mec_hide_time">Hide Event Time</label>
                </div>
                <div class="mec-form-row" style="padding-top: 15px;">
                    <input  type="checkbox" name="hide_end_time" id="hide_end_time" value="yes" <?php if( $hide_end_time=="yes"){ echo "checked";}?>/><label for="mec_hide_end_time">Hide Event End Time</label>
                </div>
                <div class="mec-form-row" style="padding-top:15px;">
                    <div class="col-4">
                        <input type="text" value="<?php echo $time_comment;?>" class="form-control" name="time_comment" id="time_comment" placeholder="Time Comment" value="" />
                        <a class="mec-tooltip" title="It shows next to event time on calendar. You can insert Timezone etc. in this field."><i title="" class="dashicons-before dashicons-editor-help"></i></a>
                    </div>
                </div>

                <div id="mec_meta_box_repeat_form">
                <div class="mec-form-row" style="padding-top: 15px;">
                    <input type="checkbox" name="event_repeating" id="mec_repeat" value="yes" <?php if( $event_repeating=="yes"){ echo "checked";}?>/><label for="mec_repeat">Event Repeating</label>
                </div>
                <?php if( $event_repeating=="yes"){
                                        ?>
                                        <style>
                                            .event_repeating_form{
                                                display:block;
                                            }
                                            </style>
                                        <?php
                                    }else{ ?>
                                        <style>
                                            .event_repeating_form{
                                                display:none;
                                            }
                                            </style>
                                            <?php
                                    }
                                        ?>
                <div class="event_repeating_form" id="event_repeat_picker" style="display:none;">
                    <div class="mec-form-row mec-interval-picker">
                        <label class="col-3" for="mec_repeat_type">Repeats</label>
                        <select class="col-2" name="repeat_type" id="mec_repeat_type" value="<?php echo $repeat_type;?>">
                            <option  value="daily" <?php if($repeat_type == "daily"){ echo "selected";} ?>>Daily</option>
                            <option  value="weekday" <?php if($repeat_type == "weekday"){ echo "selected";} ?>>Every Weekday</option>
                            <option  value="weekend" <?php if($repeat_type == "weekend"){ echo "selected";} ?>>Every Weekend</option>
                            <option  value="certain_weekdays" <?php if($repeat_type == "certain_weekdays"){ echo "selected";} ?>>Certain Weekdays</option>
                            <option  value="weekly" <?php if($repeat_type == "weekly"){ echo "selected";} ?>>Weekly</option>
                            <option  value="monthly" <?php if($repeat_type == "monthly"){ echo "selected";} ?>>Monthly</option>
                            <option  value="yearly" <?php if($repeat_type == "yearly"){ echo "selected";} ?>>Yearly</option>
                            <option  value="custom_days" <?php if($repeat_type == "custom_days"){ echo "selected";} ?>>Custom Days</option>
                        </select>
                    </div>
                    <div class="mec-form-row mec-interval-picker" id="mec_repeat_interval_container" style="padding-top: 15px;">
                        <label class="col-3" for="mec_repeat_interval">Repeat Interval</label>
                        <input class="col-2" type="number" value="<?php echo $repeat_interval;?>" name="repeat_interval" id="mec_repeat_interval" placeholder="Repeat interval" value="" />
                    </div>
                    <div class="mec-form-row mec-interval-picker" id="mec_repeat_certain_weekdays_container" style="padding-top: 15px;display:none;">
                        <label class="mec-col-3">Week Days</label>
                        <label><input type="checkbox" name="certain_weekdays" value="1" />Monday</label>
                        <label>&nbsp;<input type="checkbox" name="mec[date][repeat][certain_weekdays][]" value="2"  />Tuesday</label>
                        <label>&nbsp;<input type="checkbox" name="mec[date][repeat][certain_weekdays][]" value="3"  />Wednesday</label>
                        <label>&nbsp;<input type="checkbox" name="mec[date][repeat][certain_weekdays][]" value="4"  />Thursday</label>
                        <label>&nbsp;<input type="checkbox" name="mec[date][repeat][certain_weekdays][]" value="5"  />Friday</label>
                        <label>&nbsp;<input type="checkbox" name="mec[date][repeat][certain_weekdays][]" value="6"  />Saturday</label>
                        <label>&nbsp;<input type="checkbox" name="mec[date][repeat][certain_weekdays][]" value="7"  />Sunday</label>
                    </div>
                    <div class="mec-form-row mec-interval-picker" id="mec_exceptions_in_days_container" style="padding-top: 15px;display:none;">
                        <div class="mec-form-row">
                            <div class="mec-col-6">
                                <input type="date" value="<?php echo $event_repeating_date;?>" id="mec_exceptions_in_days_date" name="event_repeating_date" value="" placeholder="Date" class="mec_date_picker" />
                                <button class="button" type="button" id="mec_add_in_days">Add</button>
                                <a class="mec-tooltip" title="Add certain days to event occurrence dates."><i title="" class="dashicons-before dashicons-editor-help"></i></a>
                            </div>
                        </div>
                        <div class="mec-form-row mec-certain-day" id="mec_in_days">
                                                    </div>
                        <input type="hidden" id="mec_new_in_days_key" value="2" />
                        <div class="mec-util-hidden" id="mec_new_in_days_raw">
                           
                        </div>
                    </div>
                    <div class="mec-form-row" style="padding-top: 30px;">
                        <label for="mec_repeat_ends_never"><h4 class="mec-title">Ends Repeat</h4></label>
					</div>
                    <hr/>
					<div class="row" style="padding-bottom: 12px;">
                    <div class="col-3">
						<input checked="checked" type="radio" value="never_repeat" name="ends_repeat_option" id="mec_repeat_ends_never" <?php if( $ends_repeat_option=="never_repeat"){ echo "checked";}?>/>
						<label for="mec_repeat_ends_never">Never</label>
                        </div>
					</div>
					<div class="row">	
						<div class="col-3">
                            <input type="radio" value="on_repeat" name="ends_repeat_option" id="mec_repeat_ends_date" />
                            <label for="mec_repeat_ends_date">On</label>
						</div>
                        <div class="col-2">
						<input type="date" value="<?php echo $end_repeat_date;?>" class="form-control" name="end_repeat_date" id="mec_date_repeat_end_at_date" <?php if( $ends_repeat_option=="on_repeat"){ echo "checked";}?>/>
                        </div>
                    </div>
                    <div class="row">
						<div class="col-3">
                            <input type="radio" value="after_repeat" name="ends_repeat_option" id="mec_repeat_ends_occurrences" <?php if( $ends_repeat_option=="after_repeat"){ echo "checked";}?>/>
                            <label for="mec_repeat_ends_occurrences">After</label>
						</div>
                        <div class="col-2">
						<input class="form-control" value="<?php echo $occurence_times;?>" type="number" name="occurence_times" id="mec_date_repeat_end_at_occurrences" placeholder="Occurrences times" />
                        <a class="mec-tooltip" title="The event will finish after certain repeats. For example if you set it to 10, the event will finish after 10 repeats."><i title="" class="dashicons-before dashicons-editor-help"></i></a>
					</div>
                    </div>
                </div>
            </div>

 <!-- <div class="mec-meta-box-fields" id="mec-hourly-schedule" style="padding-top: 30px;">
   <h4>Hourly Schedule</h4>
   <hr/>
<p>&nbsp;</p>
<section class="container">
<div class="table table-responsive">
<table class="table table-responsive table-striped table-bordered">
<thead>
</thead>
<tbody id="HourlyBoxContainer">

  <tr>
    <th colspan="5">
    <button id="HourlybtnAdd" type="button" class="btn btn-primary" data-toggle="" data-original-title="Add more controls"><i class="glyphicon glyphicon-plus-sign"></i>&nbsp; Add&nbsp;</button></th>
  </tr>
 
</tbody>
</table>
</div>
</section>
</div> -->

        <!-- <div class="mec-meta-box-fields" id="mec_location_id" style="padding-bottom: 30px;padding-top: 20px;">
            <h4>Event Location</h4>
            <hr/>
			<div class="row" style="padding-bottom:8px;padding-top:5px;">
            <div class="col-3">
				<select name="event_location" id="event_location" title="Location" value="<?php echo $event_location;?>">
                                        <option value="1" <?php if($event_location == 1){ echo "selected";} ?>>Hide location</option>
                                        <option value="0" <?php if($event_location == 0){ echo "selected";} ?>>Insert a new location</option>
										<option value="bally" <?php if($event_location == "bally"){ echo "selected";} ?>>Bally's / Paris</option>
										<option value="caribbean" <?php if($event_location == "caribbean"){ echo "selected";} ?>>Caribbean</option>
										<option value="john_office" <?php if($event_location == "john_office"){ echo "selected";} ?>>John Person's Office</option>
										<option value="mccormic" <?php if($event_location == "mccormic"){ echo "selected";} ?>>McCormic Place South</option>
										<option value="omni_resorts" <?php if($event_location == "omni_resorts"){ echo "selected";} ?>>Omni Hotel &amp; Resorts</option>
										<option value="palm_beach" <?php if($event_location == "palm_beach"){ echo "selected";} ?>>Palm Beach Gardens, Fl</option>
										<option value="paris" <?php if($event_location == "paris"){ echo "selected";} ?>>Paris, France</option>
										<option value="salt_lake" <?php if($event_location == "salt_lake"){ echo "selected";} ?>>Salt Lake City</option>
									</select>
				<a class="mec-tooltip" title="Choose one of saved locations or insert new one below."><i title="" class="dashicons-before dashicons-editor-help"></i></a>
			</div>
            </div>
            <div id="container" style="display:none;">
				<div class="row" style="padding-bottom:8px;">
                <div class="col-4">
					<input type="text" name="mec[location][name]" id="mec_location_name" value="" placeholder="Location Name" />
                    </div>
					<span class="description" style="display: inline-block;border-left: 1px dashed #ccc;margin-left: 12px;line-height: 26px;padding-left: 12px;color: #555;">eg. City Hall</span>
				</div>
				<div class="row" style="padding-bottom:8px;">
                <div class="col-4">
					<input type="text" name="mec[location][address]" id="mec_location_address" value="" placeholder="Event Location" />
                    </div>
					<span class="description" style="display: inline-block;border-left: 1px dashed #ccc;margin-left: 12px;line-height: 26px;padding-left: 12px;color: #555;">eg. City hall, Manhattan, New York</span>
                    				</div>
				<div class="row mec-lat-lng-row" style="padding-bottom:8px;">
                <div class="col-3">
					<input class="mec-has-tip" type="text" name="mec[location][latitude]" id="mec_location_latitude" value="" placeholder="Latitude" /></div>
                    <div class="col-3">
					<input class="mec-has-tip" type="text" name="mec[location][longitude]" id="mec_location_longitude" value="" placeholder="Longitude" /></div>
					<a class="mec-tooltip" title="If you leave the latitude and longitude empty, Modern Events Calendar tries to convert the location address to geopoint."><i title="" class="dashicons-before dashicons-editor-help"></i></a>
				</div>
                <div class="row mec-thumbnail-row" style="padding-bottom:8px;">
					<div id="mec_location_thumbnail_img"></div>
	
                    <input type="file" class="form-control" id="location_image" name="location_image" accept="image/*" >
                    <input type="hidden" class="form-control"  name="old_loc_image" value="?>" >

             
					<button type="button" class="mec_location_remove_image_button button mec-util-hidden">Remove image</button>
				</div>
                <div class="row" style="padding-bottom:8px;">
                <input type="hidden" name="mec[dont_show_map]" value="0" />
                <input type="checkbox" id="mec_location_dont_show_map" name="show_map" value="yes"/><label for="mec_location_dont_show_map">Don't show map in single event page</label>
            </div>
            </div> -->
          
            <div class="mec-meta-box-fields" id="mec-read-more" style="padding-top:30px;padding-bottom:12px;">
            <h4>Event Links</h4>
            <hr/>
			
            <div class="mec-form-row" style="padding-bottom: 20px;padding-top: 12px;">
                <label class="col-2" for="mec_read_more_link">Select Link Type</label>
                <input type="radio" name="event_link_type"  value="internal_link" onclick="selectLink('internal');" <?php if( $event_link_type=="internal_link" || $event_link_type ==""){ echo "checked";}?>> Internal Slug
                <input type="radio" name="event_link_type" value="external_link" onclick="selectLink('external');" <?php if( $event_link_type=="external_link"){ echo "checked";}?>> External Link
            </div>
            <?php if( $event_link_type=="external_link"){
                                        ?>
                                        <style>
                                            .internal{
                                                display:none;
                                            }
                                            </style>
                                        <?php
                                    }else{ ?>
                                        <style>
                                            .external{
                                                display:none;
                                            }
                                            </style>
                                            <?php
                                    }
                                        ?>

<div class="mec-form-row internal" style="padding-bottom: 20px;padding-top: 12px;">
                                      <div class="row">
                                       <label for="pageSlug" class="col-2 control-label col-form-label">Page Slug</label>
                                        <div class="col-7">
                                        <input type="text" class="form-control" style="margin-top:0px;margin-bottom:0px;" name="pageSlug" id="pageSlug" placeholder="Slug Here" required="" value="<?php echo $pageSlug;?>">

                                        </div>

                                    </div>
                                    </div>

                                    <div class="mec-form-row external" style="padding-bottom: 20px;padding-top: 12px;">
                                      <div class="row">
                                       <label for="mec_read_more_link" class="col-2 control-label col-form-label">Event Link</label>
                                        <div class="col-7">
                                            <input type="url" name="event_link" data-toggle="tooltip" title="" value="<?php echo $event_link;?>" style="margin-top:0px;margin-bottom:0px;" class="form-control" id="url" placeholder="Enter Link" data-original-title="Enter Link" value="<?php echo $external_link; ?>">
                                        </div>

                                    </div>
                                    </div>
                                   


            <div class="mec-form-row">
                <label class="col-2" for="mec_more_info_link">More Info</label>
                <input class="col-5" type="text" value="<?php echo $more_info;?>" name="more_info" id="mec_more_info_link" value="" placeholder="eg. http://yoursite.com/your-event" />
                <input class="col-2" type="text" value="<?php echo $more_information;?>" name="more_information" id="mec_more_info_title" value="" placeholder="More Information" />
                <select class="col-2" name="window_location" id="mec_more_info_target" value="<?php echo $window_location;?>">
                    <option value="_self" <?php if($window_location == "_self"){ echo "selected";} ?>>Current Window</option>
                    <option value="_blank" <?php if($window_location == "_blank"){ echo "selected";} ?>>New Window</option>
                </select>
                <a class="mec-tooltip" title="If you fill it, it will be shown in event details page as an optional link. Insert full link including http(s)://"><i title="" class="dashicons-before dashicons-editor-help"></i></a>
            </div>
        </div>
        <!-- <div class="mec-meta-box-fields" id="mec-organizer">
            <h4 style="padding-top:30px;">Event Main Organizer</h4>
            <hr/>
			<div class="row" style="padding-bottom: 8px;padding-top: 5px;">
            <div class="col-3">
				<select name="organizer_id" id="mec_organizer_id" title="Organizer" value="">
                    <option value="n" >Hide organizer</option>
					<option value="y" >Insert a new organizer</option>
									</select>
				<a class="mec-tooltip" title="Choose one of saved organizers or insert new one below."><i title="" class="dashicons-before dashicons-editor-help"></i></a>
			</div>
            </div>
			<div id="mec_organizer_new_container" style="display:none;">
				<div class="row" style="padding-bottom: 8px;">
                <div class="col-4">
					<input type="text" name="organizer_name" id="mec_organizer_name" value="" placeholder="Name" />
                    </div>
					<span class="description" style="display: inline-block;border-left: 1px dashed #ccc;margin-left: 12px;line-height: 26px;padding-left: 12px;color: #555;">eg. John Smith</span>
				</div>
                <div class="row" style="padding-bottom: 8px;">
                <div class="col-4">
                    <input type="text" name="organizer_tel" id="mec_organizer_contact" value="" placeholder="Phone number." />
                    </div>
                    <span class="description" style="display: inline-block;border-left: 1px dashed #ccc;margin-left: 12px;line-height: 26px;padding-left: 12px;color: #555;">eg. +1 (234) 5678</span>
                </div>
                <div class="row" style="padding-bottom: 8px;">
                <div class="col-4">
                    <input type="text" name="organizer_email" id="mec_organizer_contact" value="" placeholder="Email address." />
                    </div>
                    <span class="description" style="display: inline-block;border-left: 1px dashed #ccc;margin-left: 12px;line-height: 26px;padding-left: 12px;color: #555;">eg. john@smith.com</span>
                </div>
				<div class="row" style="padding-bottom: 8px;">
                <div class="col-4">
					<input type="text" name="organizer_url" id="mec_organizer_url" value="" placeholder="Link to organizer page" />
                    </div>
                    <span class="description" style="display: inline-block;border-left: 1px dashed #ccc;margin-left: 12px;line-height: 26px;padding-left: 12px;color: #555;">eg. https://webnus.net</span>
				</div>
                	<div class="row mec-thumbnail-row" style="padding-bottom: 8px;">
					<div id="mec_organizer_thumbnail_img"></div>
					<input type="hidden" name="mec[organizer][thumbnail]" id="mec_organizer_thumbnail" value="" />
                     <button type="button" class="mec_organizer_upload_image_button button" id="mec_organizer_thumbnail_button">Choose image</button>
                     <input type="file" class="form-control" id="organizer_image" name="organizer_image" accept="image/*" >
                    <input type="hidden" class="form-control"  name="old_org_image" value="" >

                   
					<button type="button" class="mec_organizer_remove_image_button button mec-util-hidden">Remove image</button>
				</div>
                			</div>
            		</div> -->
                    <div class="mec-meta-box-fields" id="mec-cost">
            <h4 style="padding-top: 30px;">Event Cost</h4>
            <hr/>
            <div id="mec_meta_box_cost_form">
                <div class="mec-form-row" style="padding-top: 10px;">
                    <input type="text" class="col-6 form-control" name="event_cost" id="mec_cost" value="<?php echo $event_cost;?>" placeholder="Cost" />
                </div>
            </div>
        </div>
        <div id="mec_meta_box_cost_form">
        <h4 style="padding-top: 30px;">Content</h4>
            <hr/>
                    <div class="col-sm-9">
                       <textarea name="event_content" value="<?php echo $event_content;?>"></textarea>
                    </div>
                </div>

        </div>
        <div class="save">
        
        <input class="btn btn-primary" type="submit" name="submit_events" value="Save">
                                 
        </div>
                            <!--first form end-->
                            </form>
                        </div>
             <!-- First Section End -->
          </div>
          
        <!---->
      
      </div>
    </div>
  </div>
</section>
<!-- ./Tabs -->
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
<div class="modal fade" id="ModalNewBlog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url('admin/home/save_home_blogsection');?>">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Blog</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               
            <div class="card-body">
                <h4 class="card-title">Blog Detail</h4>
                <div class="form-group row">
                    <label for="blogTitle" class="col-sm-3 text-right control-label col-form-label">Title</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="blogTitle" required="" name="blogTitle" placeholder="Blog Title" style="margin-top:0px;margin-bottom:0px;">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="blogImage" class="col-sm-3 text-right control-label col-form-label">Image</label>
                    <div class="col-sm-9">
                        <input type="file" required="" class="form-control" id="blogImage" name="blogImage" style="margin-top:0px;margin-bottom:0px;">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="blogContent" class="col-sm-3 text-right control-label col-form-label">Blog Content</label>
                    <div class="col-sm-9">
                       <textarea  name="blogContent" ></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="bloglabel" class="col-sm-3 text-right control-label col-form-label">Button Text</label>
                    <div class="col-sm-9">
                        <input type="text" required="" class="form-control" id="blogBtnLabel" name="blogBtnLabel" style="margin-top:0px;margin-bottom:0px;">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="blogLink" class="col-sm-3 text-right control-label col-form-label">Button Link</label>
                    <div class="col-sm-9">
                        <input type="text" required="" class="form-control" id="blogBtnLink" name="blogBtnLink" style="margin-top:0px;margin-bottom:0px;">
                    </div>
                </div>
                 
            </div>
                                 
                             
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </form>
        </div>
    </div>
</div>
<!--modal3-->
<div class="modal fade" id="Modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">

            <div class="modal-dialog" role="document ">

                <div class="modal-content">

                    <div class="modal-header">

                        <h5 class="modal-title" id="exampleModalLabel">Add Video</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                            <span aria-hidden="true ">×</span>

                        </button>

                    </div>

                    <div class="modal-body">

                         <form method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/home/save_video');?>">

                                    <div class="row mb-3 align-items-center">

                                        <div class="col-lg-4 col-md-12 text-right">

                                            <span>Title</span>

                                        </div>

                                        <div class="col-lg-8 col-md-12">

                                            <input type="text" name="title" data-toggle="tooltip" title="" class="form-control" id="validationDefault05" placeholder="Enter Video Title" required="" data-original-title="Enter Review Title" style="margin-top:0px;margin-bottom:0px;">

                                        </div>

                                    </div>

                                    <div class="row mb-3 align-items-center">

                                        <div class="col-lg-4 col-md-12 text-right">

                                            <span>You Tube URL</span>

                                        </div>

                                        <div class="col-lg-8 col-md-12">

                                            <input type="url" name="url" data-toggle="tooltip" title="" class="form-control" style="margin-top:0px;margin-bottom:0px;" id="validationDefault05" placeholder="Enter Video URL " required="" data-original-title="Enter Video URL">

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
<!--modal3-->
<!-- Modal -->
<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
            <script>     
                        CKEDITOR.replace('event_content');
              
            </script>
<script type="text/javascript">
    $(function () {
        $("#mec_organizer_id").change(function () {
            if ($(this).val() == "y") {
                $("#mec_organizer_new_container").show();
            } else {
                $("#mec_organizer_new_container").hide();
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("#event_location").change(function () {
            if ($(this).val() == "0") {
                $("#container").show();
            } else {
                $("#container").hide();
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("#mec_repeat").change(function () {
            if ($(this).val() == "yes") {
                $("#event_repeat_picker").show();
            } else {
                $("#event_repeat_picker").hide();
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("#mec_repeat_type").change(function () {
            if ($(this).val() == "certain_weekdays") {
                $("#mec_repeat_certain_weekdays_container").show();
            } else {
                $("#mec_repeat_certain_weekdays_container").hide();
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("#mec_repeat_type").change(function () {
            if ($(this).val() == "custom_days") {
                $("#mec_exceptions_in_days_container").show();
            } else {
                $("#mec_exceptions_in_days_container").hide();
            }
        });
    });
</script>
<script>

$(function () {
    $("#HourlybtnAdd").bind("click", function () {
       
        var div = $("<tr />");
        div.html(GetDynamicHourlyBox(""));
        $("#HourlyBoxContainer").append(div);
    });
    $("body").on("click", ".remove", function () {
        $(this).closest("tr").remove();
    });
});
function GetDynamicHourlyBox(value) {
    return '<td><input type="text" name="hourly_from[]" value="<?php echo $newKey->from; ?>" placeholder="From e.g. 8:15"/>' + '<td><input type="text" value="<?php echo $newKey->to; ?>" name="hourly_to[]" placeholder="To e.g. 8:45" /></td>' + '<td><input type="text" value="<?php echo $newKey->title; ?>" name="hourly_title[]" placeholder="Title" /></td>' + '<td><input type="text" name="hourly_description[]" value="<?php echo $newKey->description; ?>" placeholder="Description" /></td>' + '<td><button type="button" class="btn btn-danger remove">Remove<i class="glyphicon glyphicon-remove-sign"></i></button></td>'
}

</script>

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