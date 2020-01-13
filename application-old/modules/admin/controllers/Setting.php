<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Setting extends MY_Controller {



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

		$data['title'] = 'Dashboard';

        $data['subview'] = $this->load->view('dashboard', $data, true);

        $this->load->view('layout_main', $data);

	}



	public function header(){

		$data['title'] = 'Header Setting';

        $data['header_data']=$this->basicModal->get_data_direct_from_table('settings');

        $data['subview'] = $this->load->view('setting_header', $data, true);

        $this->load->view('layout_main', $data);

	}

    public function footer(){

        $data['title'] = 'Footer Setting';

        $data['header_data']=$this->basicModal->get_data_direct_from_table('settings');

        $data['subview'] = $this->load->view('setting_footer', $data, true);

        $this->load->view('layout_main', $data);

    }

    public function footer_menu()

    {
        $data['footermenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footermenu'));
        $data['footersubmenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footersubmenu'));
        $data['title'] = 'Footer Menu';
 
        $data['allPage'] = $this->basicModal->check('settingbypage',array('type'=>'pages'));
        $data['allMenu'] = $this->basicModal->check('settingbypage',array('type'=>'menu'));
        $data['subview'] = $this->load->view('setting_footer_menu', $data, true);
 
        $this->load->view('layout_main', $data);
 
    }

    public function save_footermenu($id=0)

    {
        $data['valueKey']='footer-menu';

        $data['type']='footermenu';
        $datajson['first_menu']=$_POST['first_menu'];
        $datajson['second_menu']=$_POST['second_menu'];
        $datajson['third_menu']=$_POST['third_menu'];
       $data['value']=json_encode($datajson);
       
    //  print_r($data); die;
        if($id>0){

            // update code
              if($this->basicModal->update_data('settingbypage',$data,$id)){

                 $this->session->set_flashdata('msg','Infomation update success.');

            }else{

                $this->session->set_flashdata('msg','Infomation update failed.');

            }

            redirect('admin/setting/footer_menu/index');


        }else{

        	

        	if($this->basicModal->insert_data('settingbypage',$data)){

                

                $this->session->set_flashdata('msg','Infomation save success.');

        	}else{

        		$this->session->set_flashdata('msg','Infomation save failed.');

        	}

        	redirect('admin/setting/footer_menu/index');

            // insert code

        }

    }

    public function save_footersubmenu($id=0)

    {
        $data['valueKey']= $_POST['sub_link_type'];
        $data['title']= $_POST['sub_title'];
        $data['type']='footersubmenu';
        $datajson['sub_select_link']=$_POST['sub_select_link'];
        $datajson['sub_external_link']=$_POST['sub_external_link'];
        $datajson['sub_select_parent']=$_POST['sub_select_parent'];
       // $datajson['select_parent']=$_post['select_parent'];
       $data['value']=json_encode($datajson);
       
    //  print_r($data); die;
        if($id>0){

            // update code
              if($this->basicModal->update_data('settingbypage',$data,$id)){

                 $this->session->set_flashdata('msg','Infomation update success.');

            }else{

                $this->session->set_flashdata('msg','Infomation update failed.');

            }

            redirect('admin/setting/footer_menu/index');


        }else{

        	

        	if($this->basicModal->insert_data('settingbypage',$data)){

                

                $this->session->set_flashdata('msg','Infomation save success.');

        	}else{

        		$this->session->set_flashdata('msg','Infomation save failed.');

        	}

        	redirect('admin/setting/footer_menu/index');

            // insert code

        }

    }

    public function edit_footer_menu()

    {
        $data['footermenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footermenu'));
        $data['title'] = 'footerSubMenu';
        
        $data['allPage'] = $this->basicModal->check('settingbypage',array('type'=>'pages'));
        $data['allMenu'] = $this->basicModal->check('settingbypage',array('type'=>'menu'));

        $data['title'] = 'Add New Footer Menu';
        // print_r($data); die;

        $submenu_id = $this->uri->segment(4);

        if( isset( $submenu_id) > 0 ) {

            $data['id'] = $submenu_id;

            $data['title'] = 'Edit Sub Menu';

            $data['footersubmenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footersubmenu', 'id' => $submenu_id));

            

            $data['sub_title'] = 'tgg ';

            $data['sub_select_link'] = 'cfdf';

            $data['sub_external_link'] = ' dfdf ';

            $data['sub_select_parent'] = 'fg ff';

        }else{

            $data['id'] = 0;

            $data['title'] = 'Add New Footer Menu';

            $data['footersubmenuData'] = '';

        }
        // $data['pageData'] = $this->basicModal->check('settingbypage',array('type'=>'pages'));

        $data['subview'] = $this->load->view('edit_footersubmenu', $data, true);

        $this->load->view('layout_main', $data);

    }



	public function save_log(){

		$config['upload_path'] = './assets/setting_header';

        $config['allowed_types'] = 'gif|jpg|png';

        $config['max_size'] = 2000;

        $config['max_width'] = 1500;

        $config['max_height'] = 1500;

	    $this->load->library('upload', $config);

		$this->upload->initialize($config);

        $savedata=array();

        if (!$this->upload->do_upload('header_logo')) {

            $error = array('error' => $this->upload->display_errors());

            var_dump($error);

        } else {

            $data = array('image_metadata' => $this->upload->data());

            $image_name = $data["image_metadata"]["file_name"];

            $logo_path = 'assets/setting_header/'.$image_name;

            $this->basicModal->insert_setting('header_logo',$logo_path);

        }

        if (!$this->upload->do_upload('header_favicon')) {

            $error = array('error' => $this->upload->display_errors());

            var_dump($error);

        } else {

            $data = array('image_metadata' => $this->upload->data());

            $image_name = $data["image_metadata"]["file_name"];

            $logo_path = 'assets/setting_header/'.$image_name;

            $this->basicModal->insert_setting('header_favicon',$logo_path);

        }

           $this->basicModal->insert_setting('member_login_url',$_POST['member_login_url']);

            

       

        redirect('admin/setting/header');



	}

    function save_socail(){

        

        if (isset($_POST['social_heading'])) {

            $i=0;

            $socailArray=array();

           foreach ($_POST['social_heading'] as $key) {

                 $newArray=array(

                    'heading'=>$_POST['social_heading'][$i],

                    'url'=>$_POST['social_url'][$i],

                    'icon'=>$_POST['social_icon'][$i],

                 );

                 $socailArray[]=$newArray;

                 $i++;

             }  

             $sociakLink=json_encode($socailArray);

             $this->basicModal->insert_setting('socailLink',$sociakLink);

        }

        

       redirect('admin/setting/header');

    }

    function save_footer(){

       $this->basicModal->insert_setting('footer_about',$_POST['footer_about']); 

       $this->basicModal->insert_setting('footer_about_full_details',$_POST['footer_about_full_details']); 

       redirect('admin/setting/footer');

    }

  

}