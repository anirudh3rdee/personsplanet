<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Instructionalvideos extends MY_Controller {



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

        $data['title'] = 'Instructional Videos';

        $data['videoData'] = $this->basicModal->get_pagination_data('settingbypage',array('type'=>'instructionalvideos'), -1);

        $data['subview'] = $this->load->view('instructionalvideos-list', $data, true);

        $this->load->view('layout_main', $data);

    }


    public function edit_video()

    {

        $data['title'] = 'Instructional Videos';

        $page_id = $this->uri->segment(4);

        if( isset( $page_id) > 0 ) {

            $data['id'] = $page_id;

            $data['title'] = 'Edit Video';

            $data['pageData'] = $this->basicModal->check('settingbypage',array('type'=>'instructionalvideos', 'id' => $page_id));

            

            $data['page_title'] = 'tgg ';

            $data['old_featured_image'] = 'cfdf';

            $data['page_slug'] = ' dfdf ';

            $data['page_content'] = 'fg ff';

        }else{

            $data['id'] = 0;

            $data['title'] = 'Add New Video';

            $data['pageData'] = '';

        }

        // $data['pageData'] = $this->basicModal->check('settingbypage',array('type'=>'pages'));

        $data['subview'] = $this->load->view('add_edit_intstructional_video', $data, true);

        $this->load->view('layout_main', $data);

    }

    

   

   public function save_video($id=0){



        $data['valueKey'] = trim( $_POST['videoTitle'] );

        $data['title'] = trim( $_POST['videoTitle'] );

        $data['type'] = 'instructionalvideos';

        $metaValueKey=array();
        $metaValueKey['videoTitle'] = trim( $_POST['videoTitle'] );
        $metaValueKey['videoURL'] = trim( $_POST['videoURL'] );
        $metaValueKey['video_image'] = trim( $_POST['video_image'] );
        $data['value']= json_encode($metaValueKey);
        // print_r($data); die;

        if($id>0){

            // update code

            if($this->basicModal->update_data('settingbypage',$data,$id)){

                 $this->session->set_flashdata('msg','Video save successfully.');

            }else{

                $this->session->set_flashdata('msg','Video save failed.');

            }

            redirect('admin/instructionalvideos/');

        }else{

            if($this->basicModal->insert_data('settingbypage',$data)){

                 $this->session->set_flashdata('msg','Video insert successfully.');

            }else{

                $this->session->set_flashdata('msg','Video insertion failed.');

            }

            redirect('admin/instructionalvideos/');

            // insert code

        }

   }

 


 


     

}