<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Client_logo extends MY_Controller {



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

		$data['title'] = 'Client Logo';

		$data['client_data'] = $this->basicModal->check('settingbypage',array('valueKey'=>'client_logo'));

        $data['subview'] = $this->load->view('client_logo', $data, true);

        $this->load->view('layout_main', $data);

        //add_edit_client_logo.php

	}

	public function edit_client_logo()

   {
   
       $data['title'] = 'Edit Client Logo';
   
       $clientLogoId = $this->uri->segment(4);

//        print_r($clientLogoId); 
//  die;  
       if( isset( $clientLogoId) > 0 ) {
   
           $data['id'] = $clientLogoId;
   
           $data['title'] = 'Edit Client Logo Page';

           
   
           $data['logoData'] = $this->basicModal->check('settingbypage',array('valueKey'=>'client_logo','id' => $clientLogoId));
    // print_r($data);
    // die;
   
       }else{
   
           $data['id'] = 0;
   
           $data['title'] = 'About New Client Logo';
   
           $data['logoData'] = '';
   
       }
   
       $data['subview'] = $this->load->view('add_edit_client_logo', $data, true);
   
       $this->load->view('layout_main', $data);
   
   }

	public function save_client_logo($id=0){

		$data['title']=$_POST['title'];

		$data['valueKey']='client_logo';

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

	            $data['value'] = 'assets/setting_header/'.$image_name;

	        }

        }



        if($id>0){

			// update code
			
			if($this->basicModal->update_data('settingbypage',$data,$id)){

				$this->session->set_flashdata('msg','Infomation update success.');

		   }else{

			   $this->session->set_flashdata('msg','Infomation update failed.');

		   }

		   redirect('admin/client_logo/index');

        }else{

        	

        	if($this->basicModal->insert_data('settingbypage',$data)){

                

                $this->session->set_flashdata('msg','Infomation save success.');

        	}else{

        		$this->session->set_flashdata('msg','Infomation save failed.');

        	}

        	redirect('admin/client_logo/index');

            // insert code

        }

	}



	

  

}