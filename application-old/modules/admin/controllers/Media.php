<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Media extends MY_Controller {



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

		$data['title'] = 'Media';

		$data['media_data'] = $this->basicModal->check('media_file',array());

        $data['subview'] = $this->load->view('media', $data, true);

        $this->load->view('layout_main', $data);

        //add_edit_client_logo.php

	}

	public function save_media( $id = 0 ){
		$data['media_name']=$_POST['title'];
		 // var_dump($_FILES['media_file']);
		 // die("End");
		$data['media_type']='media_file';

        if($_FILES['media_file']['name']){
           
            $data['media_type'] = pathinfo($_FILES["media_file"]["name"],PATHINFO_EXTENSION);
            $allowed_types = array( 'jpg', 'jpeg','png', 'gif','pdf','doc','docx','ppt','pptx', 'pp', 'ppsx', 'odt','xls', 'xlsx', 'key', 'zip', 'mp3', 'm4a', 'ogg', 'wav', 'mp4', 'm4v', 'mov', 'wmv', 'avi', 'mpg', 'ogv', '3gp', '3g2');
        	$config['upload_path'] = './assets/media_files';
        	if( in_array($data['media_type'], $allowed_types)){
        		$config['allowed_types'] = $allowed_types;
        	}else{
        		$config['allowed_types'] = 'gif|jpg|png';
        	}
	        

	        $config['max_size'] = 2000;

	        $config['max_width'] = 2500;

	        $config['max_height'] = 2500;

		    $this->load->library('upload', $config);

			$this->upload->initialize($config);

	        $savedata=array();

	         if (!$this->upload->do_upload('media_file')) {

	            $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('msg', $error['error']);
	            redirect('admin/media/index');


	        } else {

	            $datas = array('image_metadata' => $this->upload->data());

	            $image_name = $datas["image_metadata"]["file_name"];

	            $data['media_path'] = 'assets/media_files/'.$image_name;

	        }

        }



        if($id>0){

			// update code
			
			if($this->basicModal->add_media_data('media_file',$data)){

				$this->session->set_flashdata('msg','Media successfully updated.');

		   }else{

			   $this->session->set_flashdata('msg','Media uploading failed.');

		   }

		   redirect('admin/media/index');

        }else{

        	

        	if($this->basicModal->add_media_data('media_file',$data)){

                

                $this->session->set_flashdata('msg','Media successfully added.');

        	}else{

        		$this->session->set_flashdata('msg','Media uploading failed.');

        	}

        	redirect('admin/media/index');

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