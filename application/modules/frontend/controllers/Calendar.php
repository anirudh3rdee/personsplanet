<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendar extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 function __construct() {
        parent::__construct();
        $this->load->model('basicModal');
        $this->load->model('frontendModal');
    }
	public function get_header_footer(){
		$data = $this->frontendModal->get_setting('');
		$data_array = array();
		foreach( $data as $val){
			if( '' != $val->setting_value ){
				$data_array[$val->setting_name] = $val->setting_value;
			}
		}
		return $data_array;

	}

	public function index(){
		$data['page_title'] = 'Calendar';
		$data['pageData'] = "TestData";
		$data['header'] = $this->get_header_footer();
		$data['menu_data'] = $this->frontendModal->check('settingbypage',array('type'=>'menu'));
		$data['footermenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footermenu'));
		$data['footersubmenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footersubmenu'));
		$this->load->view('component/header', $data);
		$this->load->view('calendar-page', $data);
		$this->load->view('component/footer',$data);
	}
	 
	 public function singlePage($name="home"){
		$data['page_title'] = $name;
		 $data['pageData'] = "TestData";
		 
        $page_content = $this->basicModal->check('settingbypage',array('type'=>'pages', 'valueKey' => $name ));
        $data['pageData'] = $page_content;
        if(count($page_content) > 0){
        	 
        	$data['page_title'] = $page_content[0]->title;
        }
      	$data['header'] = $this->get_header_footer();
		  $data['menu_data'] = $this->frontendModal->check('settingbypage',array('type'=>'menu'));
		  $data['footermenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footermenu'));
		  $data['footersubmenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footersubmenu'));
      	$this->load->view('component/header', $data);
		$this->load->view('page-layout', $data);
		$this->load->view('component/footer',$data);
        
	}
	public function aboutusPage($name="about-us"){
		$data['page_title'] = $name;

        $page_content = $this->basicModal->check('settingbypage',array('type'=>'pages', 'valueKey' => $name ));
        $data['pageData'] = $page_content;
        if(count($page_content) > 0){
        	 
        	$data['page_title'] = $page_content[0]->title;
        }
      	$data['header'] = $this->get_header_footer();
		  $data['menu_data'] = $this->frontendModal->check('settingbypage',array('type'=>'menu'));
		  $data['footermenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footermenu'));
        $data['footersubmenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footersubmenu'));
      	$this->load->view('component/header', $data);
		$this->load->view('page-layout', $data);
		$this->load->view('component/footer',$data);
	}

	public function singlePage1($name="home"){
		if( 'admin' == $name){
			redirect('/admin/login', '');

		}
	 
		$data['page_title'] = $name;
		 
        $page_content = $this->basicModal->check('settingbypage',array('type'=>'pages', 'valueKey' => $name ));
        $data['pageData'] = $page_content;
        if(count($page_content) > 0){
        	 
        	$data['page_title'] = $page_content[0]->title;
        }
      	$data['header'] = $this->get_header_footer();
		  $data['menu_data'] = $this->frontendModal->check('settingbypage',array('type'=>'menu'));
		  $data['footermenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footermenu'));
		  $data['footersubmenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footersubmenu'));
      	$this->load->view('component/header', $data);
		$this->load->view('page-layout', $data);
		$this->load->view('component/footer',$data);
	}
	 
	 
}
