<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Events extends MY_Controller {



    function __construct() {

        parent::__construct();

        $logged = $this->session->userdata('pplogin_status');

        if( !isset( $logged ) || $logged != true ){

        	$this->session->sess_destroy();

        	redirect('/admin');

        	exit();

        }

        $this->load->model('basicModal');

    }

	public function index()

	{
        $data['title'] = 'All Events Page';

		$data['eventsData'] = $this->basicModal->check('settingbypage',array('type'=>'events-page'));

        $data['subview'] = $this->load->view('events-list', $data, true);

        $this->load->view('layout_main', $data);

   }

   public function add_new()

	{
        $data['title'] = 'Events Page';

		// $data['eventsData'] = $this->basicModal->check('settingbypage',array('type'=>'events-page'));

        $data['subview'] = $this->load->view('all_events', $data, true);

        $this->load->view('layout_main', $data);

   }

   public function save_event_data($id=0){

    $data['valueKey']= $_POST['pageSlug'];

    $data['title']= $_POST['event_title'];

    $data['type'] = 'events-page';

    $data['startDate']=$_POST['start_date'];
    $data['endDate']=$_POST['end_date'];

 
    $metaValueKey=array();

    $metaValueKey['event_title']=$_POST['event_title'];

    $metaValueKey['start_date']=$_POST['start_date'];

    $metaValueKey['end_date']=$_POST['end_date'];

    $metaValueKey['mec_allday']=$_POST['mec_allday'];
 
    $metaValueKey['time_in_hour']=$_POST['time_in_hour'];
    
    $metaValueKey['time_in_minute']=$_POST['time_in_minute'];
    
    $metaValueKey['time_in_ap']=$_POST['time_in_ap'];

    $metaValueKey['end_time_hour']=$_POST['end_time_hour'];

    $metaValueKey['end_time_minute']=$_POST['end_time_minute'];

    $metaValueKey['end_time_ap']=$_POST['end_time_ap'];

    $metaValueKey['mec_allday']=$_POST['mec_allday'];

    $metaValueKey['hide_time']=$_POST['hide_time'];

    $metaValueKey['hide_end_time']=$_POST['hide_end_time'];

    $metaValueKey['time_comment']=$_POST['time_comment'];

    $metaValueKey['event_repeating']=$_POST['event_repeating'];

    $metaValueKey['repeat_type']=$_POST['repeat_type'];

    $metaValueKey['repeat_interval']=$_POST['repeat_interval'];

    $metaValueKey['ends_repeat_option']=$_POST['ends_repeat_option'];

    $metaValueKey['certain_weekdays']=$_POST['certain_weekdays'];

    $metaValueKey['event_repeating_date']=$_POST['event_repeating_date'];

    $metaValueKey['end_repeat_date']=$_POST['end_repeat_date'];

    $metaValueKey['occurence_times']=$_POST['occurence_times'];

    $metaValueKey['event_location']=$_POST['event_location'];

    $metaValueKey['event_link_type']=$_POST['event_link_type'];

    $metaValueKey['event_link']=$_POST['event_link'];

    $metaValueKey['more_info']=$_POST['more_info'];

    $metaValueKey['more_information']=$_POST['more_information'];

    $metaValueKey['window_location']=$_POST['window_location'];

    $metaValueKey['event_cost']=$_POST['event_cost'];

    $metaValueKey['event_content']=$_POST['event_content'];

    $metaValueKey['organizer_id']=$_POST['organizer_id'];

    $metaValueKey['organizer_name']=$_POST['organizer_name'];

    $metaValueKey['organizer_tel']=$_POST['organizer_tel'];

    $metaValueKey['organizer_email']=$_POST['organizer_email'];

    $metaValueKey['organizer_url']=$_POST['organizer_url'];

    $metaValueKey['show_map']=$_POST['show_map'];

    if($_FILES['location_image']['name']){

        $config['upload_path'] = './assets/setting_header';

        $config['allowed_types'] = 'gif|jpg|png';

        $config['max_size'] = 4000;

        $config['max_width'] = 3500;

        $config['max_height'] = 2500;

        $this->load->library('upload', $config);

        $this->upload->initialize($config);

        $savedata=array();

         if (!$this->upload->do_upload('location_image')) {

            $error = array('error' => $this->upload->display_errors());

            

        } else {

            $datas = array('image_metadata' => $this->upload->data());

            $image_name = $datas["image_metadata"]["file_name"];

            $metaValueKey['location_image'] = 'assets/setting_header/'.$image_name;

        }

    }else{

       $metaValueKey['location_image']=$_POST['old-value']; 

    }
    if (isset($_POST['hourly_from'])) {

        $i=0;

        $hourlyArray=array();

       foreach ($_POST['hourly_from'] as $key) {

             $newArray=array(

                'from'=>$_POST['hourly_from'][$i],

                'to'=>$_POST['hourly_to'][$i],

                'title'=>$_POST['hourly_title'][$i],

                'description'=>$_POST['hourly_description'][$i],

             );

             $hourlyArray[]=$newArray;

             $i++;

         }  

         $HourlyLink=json_encode($hourlyArray);

         $metaValueKey['hourly_schedule'] = $HourlyLink;

    }
    $data['value']= json_encode($metaValueKey);

    // print_r($data); die;

    if($id>0){

        // update code

        if($this->basicModal->update_data('settingbypage',$data,$id)){

             $this->session->set_flashdata('msg','Infomation update success.');

        }else{

            $this->session->set_flashdata('msg','Infomation update failed.');

        }

        redirect('admin/events/index');

    }else{

        if($this->basicModal->insert_data('settingbypage',$data)){

             $this->session->set_flashdata('msg','Infomation save success.');

        }else{

            $this->session->set_flashdata('msg','Infomation save failed.');

        }

        redirect('admin/events/index');

        // insert code

    }

}

public function add_new_event()

{

    $data['title'] = 'Add New Event';

    $event_id = $this->uri->segment(4);

    if( isset( $event_id) > 0 ) {

        $data['id'] = $event_id;

        $data['title'] = 'Edit Event';

        $data['eventsData'] = $this->basicModal->check('settingbypage',array('type'=>'events-page', 'id' => $event_id));

        $data['header_data']=$this->basicModal->get_data_direct_from_table('settings');

        $data['event_title'] = ' tgg ';

        $data['select_link'] = 'cfdf';

        $data['external_link'] = ' dfdf ';

        $data['page_slug'] = ' dfdf ';

    }else{

        $data['id'] = 0;

        $data['title'] = 'Add New Event';

        $data['eventsData'] = '';

    }

    $data['subview'] = $this->load->view('all_events', $data, true);

    $this->load->view('layout_main', $data);

}

}