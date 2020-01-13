<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Pages extends MY_Controller {



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

        $data['title'] = 'All Pages';

        $data['pageData'] = $this->basicModal->check('settingbypage',array('type'=>'pages'));

        $data['subview'] = $this->load->view('pages-list', $data, true);

        $this->load->view('layout_main', $data);

    }



	public function all_pages()

	{

		$data['title'] = 'All Pages';

		$data['pageData'] = $this->basicModal->check('settingbypage',array('type'=>'pages'));

        $data['subview'] = $this->load->view('pages-list', $data, true);

        $this->load->view('layout_main', $data);
    }



    public function add_new_page()

    {

        $data['title'] = 'Add New Page';

        $page_id = $this->uri->segment(4);

        if( isset( $page_id) > 0 ) {

            $data['id'] = $page_id;

            $data['title'] = 'Edit Page';

            $data['pageData'] = $this->basicModal->check('settingbypage',array('type'=>'pages', 'id' => $page_id));

         

            $data['page_title'] = 'tgg ';

            $data['old_featured_image'] = 'cfdf';

            $data['page_slug'] = ' dfdf ';

            $data['bannerhead'] = 'fg ff';

            $data['page_content'] = 'fg ff';

        }else{

            $data['id'] = 0;

            $data['title'] = 'Add New Page';

            $data['pageData'] = '';

        }

        // $data['pageData'] = $this->basicModal->check('settingbypage',array('type'=>'pages'));

        $data['subview'] = $this->load->view('add_edit_page', $data, true);

        $this->load->view('layout_main', $data);

    }

    

   

   public function save_page($id=0){



        $data['valueKey']= $_POST['pageSlug'];

        $data['title']= $_POST['pageTitle'];

        $data['type']='pages';

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

    

        // $metaValueKey['pageContent'] = htmlentities( $_POST['pageContent'] );

        $metaValueKey['bannerhead'] =  $_POST['bannerhead'];
        $metaValueKey['pageContent'] =  htmlentities($_POST['pageContent']);
        

        $data['value']= json_encode($metaValueKey);
         

        if($id>0){
           
            // update code

            if($this->basicModal->update_data('settingbypage',$data,$id)){

                 $this->session->set_flashdata('msg','Infomation update success.');

            }else{

                $this->session->set_flashdata('msg','Infomation update failed.');

            }

            redirect('admin/pages/');

        }else{

            if($this->basicModal->insert_data('settingbypage',$data)){

                 $this->session->set_flashdata('msg','Infomation save success.');

            }else{

                $this->session->set_flashdata('msg','Infomation save failed.');

            }

            redirect('admin/pages/');

            // insert code

        }

   }

   public function menu()

   {
       $data['menuData'] = $this->basicModal->check('settingbypage',array('type'=>'menu'));
      
       $data['title'] = 'Menu';

       $data['allPage'] = $this->basicModal->check('settingbypage',array('type'=>'pages'));
       $data['allMenu'] = $this->basicModal->check('settingbypage',array('type'=>'menu'));
       $data['subview'] = $this->load->view('menu', $data, true);

       $this->load->view('layout_main', $data);

   }


    public function save_menu($id=0)

    {
        $data['valueKey']= $_POST['link_type'];
        $data['title']= $_POST['title'];
        $data['type']='menu';
        $datajson['select_link_type']=$_POST['select_link_type'];
        $datajson['select_link']=$_POST['select_link'];
        $datajson['external_link']=$_POST['external_link'];
        $datajson['select_parent']=$_POST['select_parent'];
       // $datajson['select_parent']=$_post['select_parent'];
       $data['value']=json_encode($datajson);
       
    //   print_r($data); die;
        if($id>0){

            // update code
              if($this->basicModal->update_data('settingbypage',$data,$id)){

                 $this->session->set_flashdata('msg','Infomation update success.');

            }else{

                $this->session->set_flashdata('msg','Infomation update failed.');

            }

            redirect('admin/pages/menu/index');


        }else{

        	

        	if($this->basicModal->insert_data('settingbypage',$data)){

                

                $this->session->set_flashdata('msg','Infomation save success.');

        	}else{

        		$this->session->set_flashdata('msg','Infomation save failed.');

        	}

        	redirect('admin/pages/menu/index');

            // insert code

        }

    }


    public function add_new_menu()

    {

         $data['title'] = 'Menu';

        $data['allPage'] = $this->basicModal->check('settingbypage',array('type'=>'pages'));
        $data['allMenu'] = $this->basicModal->check('settingbypage',array('type'=>'menu'));

        $data['title'] = 'Add New Menu';

        $menu_id = $this->uri->segment(4);

        if( isset( $menu_id) > 0 ) {

            $data['id'] = $menu_id;

            $data['title'] = 'Edit Menu';

            $data['menuData'] = $this->basicModal->check('settingbypage',array('type'=>'menu', 'id' => $menu_id));

            

            $data['menu_title'] = 'tgg ';

            $data['select_link'] = 'cfdf';

            $data['select_link_type'] = ' dfdf ';
             
            $data['external_link'] = ' dfdf ';

            $data['select_parent'] = 'fg ff';

        }else{

            $data['id'] = 0;

            $data['title'] = 'Add New Menu';

            $data['menuData'] = '';

        }
        // $data['pageData'] = $this->basicModal->check('settingbypage',array('type'=>'pages'));

        $data['subview'] = $this->load->view('add_new_menu', $data, true);

        $this->load->view('layout_main', $data);

    }

}