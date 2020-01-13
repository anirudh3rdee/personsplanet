<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Video extends MY_Controller {



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

		$data['title'] = 'Video';

		$data['client_data'] = $this->basicModal->check('settingbypage',array('valueKey'=>'video'));

        $data['subview'] = $this->load->view('video', $data, true);

        $this->load->view('layout_main', $data);

        //add_edit_client_logo.php

	}

	

	public function save_video($id=0){

		$data['title']=$_POST['title'];

		$data['valueKey']='video';

		$data['value']=$_POST['url'] ;

        if($id>0){

			// update code
			
			if($this->basicModal->update_data('settingbypage',$data,$id)){

				$this->session->set_flashdata('msg','Infomation update success.');

		   }else{

			   $this->session->set_flashdata('msg','Infomation update failed.');

		   }

		   redirect('admin/video/index');

        }else{

        	if($this->basicModal->insert_data('settingbypage',$data)){

                

                $this->session->set_flashdata('msg','Infomation save success.');

        	}else{

        		$this->session->set_flashdata('msg','Infomation save failed.');

        	}

        	redirect('admin/video/index');

            // insert code

        }

	}


	public function edit_video()

	{
	
		$data['title'] = 'About Video';
	
		$video_id = $this->uri->segment(4);
 
	    //  print_r($video_id); 
	
		if( isset( $video_id) > 0 ) {
	
			$data['id'] = $video_id;
	
			$data['title'] = 'Edit Video Page';
 
			
	
			$data['videoData'] = $this->basicModal->check('settingbypage',array('id' => $video_id));
	 // print_r($data);
	 // die;
	
		}else{
	
			$data['id'] = 0;
	
			$data['title'] = 'About New Video';
	
			$data['videoData'] = '';
	
		}
	
		$data['subview'] = $this->load->view('edit_video_page', $data, true);
	
		$this->load->view('layout_main', $data);
	
	}
	

  

}