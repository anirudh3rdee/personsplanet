<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Courses extends MY_Controller {



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

        $data['title'] = 'All Course';

        $data['pageData'] = $this->basicModal->check('settingbypage',array('type'=>'course'));

        $data['subview'] = $this->load->view('courses-list', $data, true);

        $this->load->view('layout_main', $data);

    }



	// public function all_pages()

	// {

	// 	$data['title'] = 'All Pages';

	// 	$data['pageData'] = $this->basicModal->check('settingbypage',array('type'=>'pages'));

 //        $data['subview'] = $this->load->view('pages-list', $data, true);

 //        $this->load->view('layout_main', $data);
 //    }



    public function add_new()

    {

        $data['title'] = 'Add New Course';

        $page_id = $this->uri->segment(4);

        if( isset( $page_id) > 0 ) {

            $data['id'] = $page_id;

            $data['title'] = 'Edit Course';

            $data['pageData'] = $this->basicModal->check('settingbypage',array('type'=>'course', 'id' => $page_id));

            

            $data['page_title'] = 'tgg ';

            $data['old_featured_image'] = 'cfdf';

            $data['page_slug'] = ' dfdf ';

            $data['course_cat'] = 'cas';

            $data['page_content'] = 'fg ff';

        }else{

            $data['id'] = 0;

            $data['title'] = 'Add New Course';

            $data['pageData'] = '';

        }

        // $data['pageData'] = $this->basicModal->check('settingbypage',array('type'=>'pages'));

        $data['subview'] = $this->load->view('add_edit_course', $data, true);

        $this->load->view('layout_main', $data);

    }

    

   

   public function save_page($id=0){


       
        $data['valueKey']= $_POST['pageSlug'];
        $data['title']= $_POST['pageTitle'];
        $buyNowUrl = trim( $this->input->post('buyNowUrl') );
        $courseFeature = htmlentities( trim( $this->input->post('courseFeature') ) );
        $courseDescription =  htmlentities( trim( $this->input->post('courseDescription') ) );
        $coursecat1 = trim( $this->input->post('coursecat') );
        $coursePrice = trim( $this->input->post('coursePrice') );

        $data['type'] = 'course';

        $metaValueKey=array();

        if($_FILES['featureImage']['name']){

             

            $config['upload_path'] = './assets/setting_header';

            $config['allowed_types'] = 'gif|jpg|png';

            $config['max_size'] = 4000;

            $config['max_width'] = 3500;

            $config['max_height'] = 2500;

            $this->load->library('upload', $config);

            $this->upload->initialize($config);

            $savedata=array();

             if (!$this->upload->do_upload('featureImage')) {

                $error = array('error' => $this->upload->display_errors());

                

            } else {

                $datas = array('image_metadata' => $this->upload->data());

                $image_name = $datas["image_metadata"]["file_name"];

                $metaValueKey['featureImage'] = 'assets/setting_header/'.$image_name;

            }

        }else{

           

           $metaValueKey['featureImage'] = $_POST['old_image']; 

        }

         
        $metaValueKey['coursePrice'] = $coursePrice;
        $metaValueKey['coursecat'] = $coursecat1;
        $metaValueKey['buyNowUrl'] = $buyNowUrl;
        $metaValueKey['courseFeature'] = $courseFeature;
        $metaValueKey['courseDescription'] = $courseDescription;
        
        

        $data['value']= json_encode($metaValueKey);
        

        if( $id > 0 ) {
            // update code
            if($this->basicModal->update_data('settingbypage',$data,$id)){
                 $this->session->set_flashdata('msg','Course successfully updated.');
            }else{
                $this->session->set_flashdata('msg','Course updation failed.');
            }
            redirect('admin/courses/');

        }else{

            if($this->basicModal->insert_data('settingbypage',$data)){
                 $this->session->set_flashdata('msg','Course successfully inserted');
            }else{

                $this->session->set_flashdata('msg','Course insertion failed.');

            }

            redirect('admin/courses/');

            // insert code

        }

   }
     

}