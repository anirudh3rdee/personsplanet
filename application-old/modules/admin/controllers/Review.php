<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Review extends MY_Controller {



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

		$data['title'] = 'Review';

		$data['client_data'] = $this->basicModal->check('settingbypage',array('valueKey'=>'review'));

        $data['subview'] = $this->load->view('review', $data, true);

        $this->load->view('layout_main', $data);

        //add_edit_client_logo.php

	}

	

	public function save_review($id=0){

		$data['title']=$_POST['title'];

		$data['valueKey']='review';

		$valueData=array();

		$valueData['rating']=$_POST['rating'];

		$valueData['review']=$_POST['review'];

        if($_FILES['logo']['name']){

        	$config['upload_path'] = './assets/setting_header';

	        $config['allowed_types'] = 'gif|jpg|png';

	        $config['max_size'] = 2000;

	        $config['max_width'] = 1500;

	        $config['max_height'] = 1500;

		    $this->load->library('upload', $config);

			$this->upload->initialize($config);

	        $savedata=array();

	         if (!$this->upload->do_upload('logo')) {

	            $error = array('error' => $this->upload->display_errors());

	            var_dump($error);

	        } else {

	            $datas = array('image_metadata' => $this->upload->data());

	            $image_name = $datas["image_metadata"]["file_name"];

	            $valueData['img'] = 'assets/setting_header/'.$image_name;

	        }

        }

        $data['value']=json_encode($valueData) ;

        if($id>0){

			// update code
			
			if($this->basicModal->update_data('settingbypage',$data,$id)){

				$this->session->set_flashdata('msg','Infomation update success.');

		   }else{

			   $this->session->set_flashdata('msg','Infomation update failed.');

		   }

		   redirect('admin/review/index');

        }else{

        	if($this->basicModal->insert_data('settingbypage',$data)){

                

                $this->session->set_flashdata('msg','Infomation save success.');

        	}else{

        		$this->session->set_flashdata('msg','Infomation save failed.');

        	}

        	redirect('admin/review/index');

            // insert code

        }

	}

	public function add_edit_review()

	{
		
	
		$data['title'] = 'About Review';
	
		$review_id = $this->uri->segment(4);
 
	    print_r($review_id); die;
	
		if( isset( $review_id) > 0 ) {
	
			$data['id'] = $review_id;
	
			$data['title'] = 'Edit Review';
 
			
	
			$data['reviewData'] = $this->basicModal->check('settingbypage',array('id' => $review_id));
	//  print_r($data);
	//  die;
	
		}else{
	
			$data['id'] = 0;
	
			$data['title'] = 'About New Review';
	
			$data['reviewData'] = '';
	
		}
	
		$data['subview'] = $this->load->view('edit_review_page', $data, true);
	
		$this->load->view('layout_main', $data);
	
	}

  

}