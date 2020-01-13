<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Location extends MY_Controller {



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
        $data['title'] = 'Location Page';

		$data['locationData'] = $this->basicModal->check('settingbypage',array('type'=>'location-page'));

        $data['subview'] = $this->load->view('all_locations', $data, true);

        $this->load->view('layout_main', $data);

   }

   public function add_new()

   {
       $data['title'] = 'Events Page';

       $data['subview'] = $this->load->view('event_location', $data, true);

       $this->load->view('layout_main', $data);

  }

   public function save_location($id=0){

    $data['valueKey'] = 'location';

    $data['type'] = 'location-page';
 
    $metaValueKey=array();

    $metaValueKey['location_name']=$_POST['location_name'];

    $metaValueKey['location_slug']=$_POST['location_slug'];

    $metaValueKey['location_description']=$_POST['location_description'];
 
    $metaValueKey['event_address']=$_POST['event_address'];
    
    $metaValueKey['location_latitude']=$_POST['location_latitude'];
    
    $metaValueKey['location_longitude']=$_POST['location_longitude'];

    if($_FILES['thumbnail_image']['name']){

        $config['upload_path'] = './assets/setting_header';

        $config['allowed_types'] = 'gif|jpg|png';

        $config['max_size'] = 4000;

        $config['max_width'] = 3500;

        $config['max_height'] = 2500;

        $this->load->library('upload', $config);

        $this->upload->initialize($config);

        $savedata=array();

         if (!$this->upload->do_upload('thumbnail_image')) {

            $error = array('error' => $this->upload->display_errors());

            var_dump($error);

        } else {

            $datas = array('image_metadata' => $this->upload->data());

            $image_name = $datas["image_metadata"]["file_name"];

            $metaValueKey['thumbnail_image'] = 'assets/setting_header/'.$image_name;

        }

    }else{

       $metaValueKey['thumbnail_image']=$_POST['old-value']; 

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

        redirect('admin/location/index');

    }else{

        // insert code

        if($this->basicModal->insert_data('settingbypage',$data)){

             $this->session->set_flashdata('msg','Infomation save success.');

        }else{

            $this->session->set_flashdata('msg','Infomation save failed.');

        }

        redirect('admin/location/index');

    }   

}

public function add_new_location()

{

    $data['title'] = 'Add New Location';

    $location_id = $this->uri->segment(4);

    if( isset( $location_id) > 0 ) {

        $data['id'] = $location_id;

        $data['title'] = 'Edit Location';

        $data['locationData'] = $this->basicModal->check('settingbypage',array('type'=>'location-page', 'id' => $location_id));

        $data['page_title'] = 'tgg ';

        $data['old_featured_image'] = 'cfdf';

        $data['page_slug'] = ' dfdf ';

        $data['page_content'] = 'fg ff';

    }else{

        $data['id'] = 0;

        $data['title'] = 'Add New Page';

        $data['pageData'] = '';

    }

    // $data['pageData'] = $this->basicModal->check('settingbypage',array('type'=>'pages'));

    $data['subview'] = $this->load->view('event_location', $data, true);

    $this->load->view('layout_main', $data);

}

}