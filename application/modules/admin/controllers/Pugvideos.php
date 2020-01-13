<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Pugvideos extends MY_Controller {



    function __construct() {

        parent::__construct();

        $logged = $this->session->userdata('pplogin_status');

        if( !isset( $logged ) || $logged != true ){

        	$this->session->sess_destroy();

        	redirect('/admin');

        	exit();

        }

        $this->load->model('basicModal');
        $this->load->helper('file');

    }


    public function index()

    {
    
        $data['title'] = 'All Pug Videos';

                $data['pageData'] = $this->basicModal->check('settingbypage',array('type'=>'pugvideo'));

                $data['subview'] = $this->load->view('pug-videos', $data, true);

                $this->load->view('layout_main', $data);
    }

    public function all_pages()

    {

        $data['title'] = 'All Pug Videos Pages';

        $data['pageData'] = $this->basicModal->check('settingbypage',array('type'=>'pugvideo'));

        $data['subview'] = $this->load->view('pug-videos', $data, true);

        $this->load->view('layout_main', $data);
    }


       public function add_new_pugvideo()

    {
        $data['title'] = 'Add New Pug Video';

        $page_id = $this->uri->segment(4);

        if( isset( $page_id) > 0 ) {

            $data['id'] = $page_id;

            $data['title'] = 'Edit Pug Video';

            $data['pageData'] = $this->basicModal->check('settingbypage',array('type'=>'pugvideo', 'id' => $page_id));

         

            $data['page_title'] = 'tgg ';

            $data['old_featured_image'] = 'cfdf';

            $data['page_slug'] = ' dfdf ';

            $data['page_content'] = 'fg ff';

        }else{

            $data['id'] = 0;

            $data['title'] = 'Add New Pug Video';

            $data['pageData'] = '';

        }

        // $data['pageData'] = $this->basicModal->check('settingbypage',array('type'=>'pages'));

        $data['subview'] = $this->load->view('add_edit_pugvideo', $data, true);

        $this->load->view('layout_main', $data);

    }



        public function save_pugvideos($id=0)

    {
        
        $data['title']= $_POST['pugTitle'];
        $data['valueKey']= $_POST['pageSlug'];
        

        $data['type']='pugvideo';

        // $datajson['featureImage']=$_FILES['featureImage'];
        // $datajson['abTradeID']= $_POST['abTradeID'];
        // $datajson['shortdescription']=$_POST['shortdescription'];
        // $datajson['buttontext']=$_POST['buttontext'];
        // $datajson['buttonlink']=$_POST['buttonlink'];
        // $data['value']=json_encode($datajson);

       // var_dump($data['value']);
        //die();
        //$data['type'] = 'pugvideo';

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

        $metaValueKey['video_url'] = $_POST['video_url'];
        $metaValueKey['buttontext'] = $_POST['buttontext'];
        $metaValueKey['buttonlink'] = $_POST['buttonlink'];
        

        $data['value']= json_encode($metaValueKey);
        

        if($id>0){

            // update code
              if($this->basicModal->update_data('settingbypage',$data,$id)){
                 $this->session->set_flashdata('msg','Infomation update success.');

            }else{ 
                $this->session->set_flashdata('msg','Infomation update failed.');
            }

            redirect('admin/pugvideos/');


        }else{

            

            if($this->basicModal->insert_data('settingbypage',$data)){

                

                $this->session->set_flashdata('msg','Infomation save success.');
            }else{

                $this->session->set_flashdata('msg','Infomation save failed.');
            }

            redirect('admin/pugvideos/');

        }

    }



}