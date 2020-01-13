<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Home extends MY_Controller {



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

		$data['title'] = 'Home Page';

		$data['homeData'] = $this->basicModal->check('settingbypage',array('type'=>'home-page'));

        $data['subview'] = $this->load->view('home-setting', $data, true);

        $this->load->view('layout_main', $data);

   }

   public function save_home_banner($id=0){

        $data['valueKey']='banner-section';

        $data['type']='home-page';

        $metaValueKey=array();

        if($_FILES['banner_image']['name']){

            $config['upload_path'] = './assets/setting_header';

            $config['allowed_types'] = 'gif|jpg|png';

            $config['max_size'] = 4000;

            $config['max_width'] = 3500;

            $config['max_height'] = 2500;

            $this->load->library('upload', $config);

            $this->upload->initialize($config);

            $savedata=array();

             if (!$this->upload->do_upload('banner_image')) {

                $error = array('error' => $this->upload->display_errors());

                var_dump($error);

            } else {

                $datas = array('image_metadata' => $this->upload->data());

                $image_name = $datas["image_metadata"]["file_name"];

                $metaValueKey['banner_image'] = 'assets/setting_header/'.$image_name;

            }

        }else{

           $metaValueKey['banner_image']=$_POST['old-value']; 

        }

        $metaValueKey['banner_heading']=$_POST['banner_heading'];

        $metaValueKey['banner_sub_heading']=$_POST['banner_sub_heading'];

        $metaValueKey['banner_details']=$_POST['footer_about_full_details'];
        
        $metaValueKey['subscription_button']=$_POST['subscription_button'];
        
        $metaValueKey['subscription_button_url']=$_POST['subscription_button_url'];

        $data['value']= json_encode($metaValueKey);

        if($id>0){

            // update code

            if($this->basicModal->update_data('settingbypage',$data,$id)){

                 $this->session->set_flashdata('msg','Infomation update success.');

            }else{

                $this->session->set_flashdata('msg','Infomation update failed.');

            }

            redirect('admin/home/index');

        }else{

            if($this->basicModal->insert_data('settingbypage',$data)){

                 $this->session->set_flashdata('msg','Infomation save success.');

            }else{

                $this->session->set_flashdata('msg','Infomation save failed.');

            }

            redirect('admin/home/index');

            // insert code

        }

   }

   

   public function save_home_second($id=0){

        $data['valueKey']='second-section';

        $data['type']='home-page';

        $metaValueKey=array();

        if($_FILES['Second_section_image']['name']){

            $config['upload_path'] = './assets/setting_header';

            $config['allowed_types'] = 'gif|jpg|png';

            $config['max_size'] = 4000;

            $config['max_width'] = 3500;

            $config['max_height'] = 2500;

            $this->load->library('upload', $config);

            $this->upload->initialize($config);

            $savedata=array();

             if (!$this->upload->do_upload('Second_section_image')) {

                $error = array('error' => $this->upload->display_errors());

                var_dump($error);

            } else {

                $datas = array('image_metadata' => $this->upload->data());

                $image_name = $datas["image_metadata"]["file_name"];

                $metaValueKey['Second_section_image'] = 'assets/setting_header/'.$image_name;

            }

        }else{

           $metaValueKey['Second_section_image']=$_POST['old-value']; 

        }

        $metaValueKey['second_heading']=$_POST['second_heading'];

        $metaValueKey['second_sub_heading']=$_POST['second_sub_heading'];

        $metaValueKey['section_details']=$_POST['section_details'];

        $metaValueKey['second_button']=$_POST['second_button'];

        $metaValueKey['second_button_url']=$_POST['second_button_url'];

        $data['value']= json_encode($metaValueKey);

        if($id>0){

            // update code

            if($this->basicModal->update_data('settingbypage',$data,$id)){

                 $this->session->set_flashdata('msg','Infomation save success.');

            }else{

                $this->session->set_flashdata('msg','Infomation save failed.');

            }

            redirect('admin/home/index');

        }else{

            if($this->basicModal->insert_data('settingbypage',$data)){

                 $this->session->set_flashdata('msg','Infomation update success.');

            }else{

                $this->session->set_flashdata('msg','Infomation update failed.');

            }

            redirect('admin/home/index');

            // insert code

        }

   }



public function save_home_blogsection($id=0){

  

        $data['valueKey']='blog-section';

        $data['title']=$_POST['blogTitle'];

        $data['type']='home-page';

        $metaValueKey=array();

        if($_FILES['blogImage']['name']){

            $config['upload_path'] = './assets/setting_header';

            $config['allowed_types'] = 'gif|jpg|png';

            $config['max_size'] = 4000;

            $config['max_width'] = 3500;

            $config['max_height'] = 2500;

            $this->load->library('upload', $config);

            $this->upload->initialize($config);

            $savedata=array();

             if (!$this->upload->do_upload('blogImage')) {

                $error = array('error' => $this->upload->display_errors());

                var_dump($error);

            } else {

                $datas = array('image_metadata' => $this->upload->data());

                $image_name = $datas["image_metadata"]["file_name"];

                $metaValueKey['blogImage'] = 'assets/setting_header/'.$image_name;

            }

        }else{

           $metaValueKey['blogImage']=''; 

        }

        $metaValueKey['blogContent']=$_POST['blogContent'];

        $metaValueKey['blogBtnLabel']=$_POST['blogBtnLabel'];

        $metaValueKey['blogBtnLink']=$_POST['blogBtnLink'];

        $data['value']= json_encode($metaValueKey);





        if($id>0){

            // update code
          
            if($this->basicModal->update_data('settingbypage',$data,$id)){

                 $this->session->set_flashdata('msg','Infomation save success.');

            }else{

                $this->session->set_flashdata('msg','Infomation save failed.');

            }

            redirect('admin/home/index');

        }else{

            if($this->basicModal->insert_data('settingbypage',$data)){

                 $this->session->set_flashdata('msg','Infomation update success.');

            }else{

                $this->session->set_flashdata('msg','Infomation update failed.');

            }

            redirect('admin/home/index');

            // insert code

        }

   }

   

   public function save_hove_fouth_section($id=0){

        $data['valueKey']='fourth-section';

        $data['type']='home-page';

        $metaValueKey=array();

        if($_FILES['background_image']['name']){

            $config['upload_path'] = './assets/setting_header';

            $config['allowed_types'] = 'gif|jpg|png';

            $config['max_size'] = 4000;

            $config['max_width'] = 3500;

            $config['max_height'] = 2500;

            $this->load->library('upload', $config);

            $this->upload->initialize($config);

            $savedata=array();

             if (!$this->upload->do_upload('background_image')) {

                $error = array('error' => $this->upload->display_errors());

                var_dump($error);

            } else {

                $datas = array('image_metadata' => $this->upload->data());

                $image_name = $datas["image_metadata"]["file_name"];

                $metaValueKey['background_image'] = 'assets/setting_header/'.$image_name;

            }

        }else{

           $metaValueKey['background_image']=$_POST['old-value']; 

        }

        $metaValueKey['fourth_heading']=$_POST['fourth_heading'];

        $metaValueKey['fourth_details']=$_POST['fourth_details'];

        $metaValueKey['fourth_other_details']=$_POST['fourth_other_details'];

        $metaValueKey['fourth_btn_label']=$_POST['fourth_btn_label'];

        $metaValueKey['fourth_btn_url']=$_POST['fourth_btn_url'];

        $data['value']= json_encode($metaValueKey);

        if($id>0){

            // update code

            if($this->basicModal->update_data('settingbypage',$data,$id)){

                 $this->session->set_flashdata('msg','Infomation save success.');

            }else{

                $this->session->set_flashdata('msg','Infomation save failed.');

            }

            redirect('admin/home/index');

        }else{

            if($this->basicModal->insert_data('settingbypage',$data)){

                 $this->session->set_flashdata('msg','Infomation update success.');

            }else{

                $this->session->set_flashdata('msg','Infomation update failed.');

            }

            redirect('admin/home/index');

            // insert code

        }

   }

   public function save_hove_fifth_section($id=0){

    $data['valueKey']='fifth-section';

    $data['type']='home-page';

    $metaValueKey=array();

    if($_FILES['review_bckgrnd_image']['name']){

        $config['upload_path'] = './assets/setting_header';

        $config['allowed_types'] = 'gif|jpg|png';

        $config['max_size'] = 4000;

        $config['max_width'] = 3500;

        $config['max_height'] = 2500;

        $this->load->library('upload', $config);

        $this->upload->initialize($config);

        $savedata=array();

         if (!$this->upload->do_upload('review_bckgrnd_image')) {

            $error = array('error' => $this->upload->display_errors());

            var_dump($error);

        } else {

            $datas = array('image_metadata' => $this->upload->data());

            $image_name = $datas["image_metadata"]["file_name"];

            $metaValueKey['review_bckgrnd_image'] = 'assets/setting_header/'.$image_name;

        }

    }else{

       $metaValueKey['review_bckgrnd_image']=$_POST['old-value']; 

    }
    
     $metaValueKey['video_heading']=$_POST['video_heading'];

    $metaValueKey['view_all_btn_label']=$_POST['view_all_btn_label'];

    $metaValueKey['view_all_btn_url']=$_POST['view_all_btn_url'];

    $data['value']= json_encode($metaValueKey);

    if($id>0){

        // update code

        if($this->basicModal->update_data('settingbypage',$data,$id)){

             $this->session->set_flashdata('msg','Infomation save success.');

        }else{

            $this->session->set_flashdata('msg','Infomation save failed.');

        }

        redirect('admin/home/index');

    }else{

        if($this->basicModal->insert_data('settingbypage',$data)){

             $this->session->set_flashdata('msg','Infomation update success.');

        }else{

            $this->session->set_flashdata('msg','Infomation update failed.');

        }

        redirect('admin/home/index');

        // insert code

    }



}

public function add_edit_blog()

{

    $data['title'] = 'Add New Blog';

    $blog_id = $this->uri->segment(4);

    if( isset( $blog_id) > 0 ) {

        $data['id'] = $blog_id;

        $data['title'] = 'Edit Home page';

        $data['blogData'] = $this->basicModal->check('settingbypage',array('type'=>'home-page', 'id' => $blog_id));


    }else{

        $data['id'] = 0;

        $data['title'] = 'Add New Blog';

        $data['blogData'] = '';

    }

    // $data['pageData'] = $this->basicModal->check('settingbypage',array('type'=>'pages'));

    $data['subview'] = $this->load->view('add_edit_blog', $data, true);

    $this->load->view('layout_main', $data);

}

public function save_client_logo($id=0){

    $data['title']=$_POST['title'];

    $data['type']='home-page';

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

       redirect('admin/home/index');

    }else{
//  print_r($data); die;
        

        if($this->basicModal->insert_data('settingbypage',$data)){

            

            $this->session->set_flashdata('msg','Infomation save success.');

        }else{

            $this->session->set_flashdata('msg','Infomation save failed.');

        }

        redirect('admin/home/index');

        // insert code

    }

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

        

        $data['homeData'] = $this->basicModal->check('settingbypage',array('valueKey'=>'client_logo','id' => $clientLogoId));
//  print_r($data);
//  die;

    }else{

        $data['id'] = 0;

        $data['title'] = 'About New Client Logo';

        $data['homeData'] = '';

    }

    $data['subview'] = $this->load->view('add_edit_client_logo', $data, true);

    $this->load->view('layout_main', $data);

}

public function save_review($id=0){

    $data['title']=$_POST['title'];

    $data['type']='home-page';

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

    }else{
        $valueData['img'] = $_POST['old_image']; 
    }

    $data['value']=json_encode($valueData) ;

    if($id>0){

        // update code
        
        if($this->basicModal->update_data('settingbypage',$data,$id)){

            $this->session->set_flashdata('msg','Infomation update success.');

       }else{

           $this->session->set_flashdata('msg','Infomation update failed.');

       }

       redirect('admin/home/index');

    }else{

        if($this->basicModal->insert_data('settingbypage',$data)){

            

            $this->session->set_flashdata('msg','Infomation save success.');

        }else{

            $this->session->set_flashdata('msg','Infomation save failed.');

        }

        redirect('admin/home/index');

        // insert code

    }

}

public function add_edit_review()

	{
	
		$data['title'] = 'About Review';
	
		$review_id = $this->uri->segment(4);
 
	    // print_r($review_id);
	
		if( isset( $review_id) > 0 ) {
	
			$data['id'] = $review_id;
	
			$data['title'] = 'Edit Review';
 
			
	
			$data['homeData'] = $this->basicModal->check('settingbypage',array('id' => $review_id));
	//  print_r($data);
	//  die;
	
		}else{
	
			$data['id'] = 0;
	
			$data['title'] = 'About New Review';
	
			$data['homeData'] = '';
	
		}
	
		$data['subview'] = $this->load->view('edit_review_page', $data, true);
	
		$this->load->view('layout_main', $data);
	
    }
    
    public function save_video($id=0){

        $data['title']=$_POST['title'];
        
        $data['type']='home-page';

		$data['valueKey']='video';

		$data['value']=$_POST['url'] ;

        if($id>0){

			// update code
			
			if($this->basicModal->update_data('settingbypage',$data,$id)){

				$this->session->set_flashdata('msg','Infomation update success.');

		   }else{

			   $this->session->set_flashdata('msg','Infomation update failed.');

		   }

		   redirect('admin/home/index');

        }else{
            // print_r($data); die;

        	if($this->basicModal->insert_data('settingbypage',$data)){

                

                $this->session->set_flashdata('msg','Infomation save success.');

        	}else{

        		$this->session->set_flashdata('msg','Infomation save failed.');

        	}

        	redirect('admin/home/index');

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
 
			
	
			$data['homeData'] = $this->basicModal->check('settingbypage',array('id' => $video_id));
	 // print_r($data);
	 // die;
	
		}else{
	
			$data['id'] = 0;
	
			$data['title'] = 'About New Video';
	
			$data['homeData'] = '';
	
		}
	
		$data['subview'] = $this->load->view('edit_video_page', $data, true);
	
		$this->load->view('layout_main', $data);
	
	}

}