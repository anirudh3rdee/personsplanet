<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Aboutus extends MY_Controller {



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

		$data['title'] = 'About Us Page';

        $data['aboutData'] = $this->basicModal->check('settingbypage',array('type'=>'aboutus-page'));

        $data['subview'] = $this->load->view('aboutus-setting', $data, true);

        $this->load->view('layout_main', $data);

   }

   public function save_aboutus_banner($id=0){

        $data['valueKey']='banner-section';

        $data['type']='aboutus-page';

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

         

        $data['value']= json_encode($metaValueKey);

        if($id>0){

            // update code

            if($this->basicModal->update_data('settingbypage',$data,$id)){

                 $this->session->set_flashdata('msg','Infomation save success.');

            }else{

                $this->session->set_flashdata('msg','Infomation save failed.');

            }

            redirect('admin/aboutus/index');

        }else{

            if($this->basicModal->insert_data('settingbypage',$data)){

                 $this->session->set_flashdata('msg','Infomation save success.');

            }else{

                $this->session->set_flashdata('msg','Infomation save failed.');

            }

            redirect('admin/aboutus/index');

            // insert code

        }

   }

   

    public function save_about_blogsection($id=0){

        $data['valueKey']='blog-section';

        $data['title']=$_POST['blogTitle'];

        $data['type']='aboutus-page';

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

        $metaValueKey['shortContent']=$_POST['shortContent'];

        $metaValueKey['fullContent']=$_POST['fullContent'];

       

        $data['value']= json_encode($metaValueKey);





        if($id>0){

            // update code

            if($this->basicModal->update_data('settingbypage',$data,$id)){

                 $this->session->set_flashdata('msg','Infomation save success.');

            }else{

                $this->session->set_flashdata('msg','Infomation save failed.');

            }

            redirect('admin/aboutus/index');

        }else{

            if($this->basicModal->insert_data('settingbypage',$data)){

                 $this->session->set_flashdata('msg','Infomation update success.');

            }else{

                $this->session->set_flashdata('msg','Infomation update failed.');

            }

            redirect('admin/aboutus/index');

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

	
   public function ab_edit_blog()

   {
   
       $data['title'] = 'About New Blog';
   
       $ab_blog_id = $this->uri->segment(4);

    //    print_r($ab_blog_id); 
   
       if( isset( $ab_blog_id) > 0 ) {
   
           $data['id'] = $ab_blog_id;
   
           $data['title'] = 'Edit About Blog Page';

           
   
           $data['blogData'] = $this->basicModal->check('settingbypage',array('type'=>'aboutus-page', 'id' => $ab_blog_id));
    // print_r($data);
    // die;
   
       }else{
   
           $data['id'] = 0;
   
           $data['title'] = 'About New Blog';
   
           $data['blogData'] = '';
   
       }
   
       $data['subview'] = $this->load->view('ab_edit_page', $data, true);
   
       $this->load->view('layout_main', $data);
   
   }
  

}