<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends MY_Controller {

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
    public function convert_to_slug($str) {
		$str = strtolower(trim($str));
		$str = preg_replace('/[^a-z0-9-]/', '-', $str);
		$str = preg_replace('/-+/', "-", $str);
		rtrim($str, '-');
		return $str;
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
		 echo "Hello";
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

	public function singlePage($name="home"){
		if( 'admin' == $name){
			redirect('/admin/login', '');

		}
	 
		$data['page_title'] = $name;
		$page_class = $this->convert_to_slug($name);
		$page_class = 'type-page page-'.$page_class ; 
        $page_content = $this->basicModal->check('settingbypage',array('type'=>'pages', 'valueKey' => $name ));
        $data['pageData'] = $page_content;
        // var_dump($event_content);
        if(count($page_content) > 0){
        	 
        	$data['page_title'] = $page_content[0]->title;
        }

      	$data['header'] = $this->get_header_footer();
		  $data['menu_data'] = $this->frontendModal->check('settingbypage',array('type'=>'menu'));
		  $data['footermenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footermenu'));
		  $data['footersubmenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footersubmenu'));
		 $data['page_class'] = $page_class;
      	$this->load->view('component/header', $data);
		$this->load->view('page-layout', $data);
		$this->load->view('component/footer',$data);
	}
	 
	/**
	 * This function display all courses in a page and single course page
	 *
	 */
	public function courses( $single_course = '0'){
	 	if( $single_course == '' || $single_course == '0'){
	 		$data['page_title'] = "Courses";
		 	
		 	$page_class = $this->convert_to_slug('Courses');
			$page_class = 'type-page page-'.$page_class ; 

	        $page_content = $this->basicModal->check('settingbypage',array('type'=>'pages', 'valueKey' => 'courses' ));
	        $courseContent = $this->basicModal->get_pagination_data('settingbypage',array('type'=>'course'), -1 );
	        $data['pageData'] = $page_content;
	        $data['courseContent'] = $courseContent;

	        if(count($page_content) > 0){
	        	 
	        	$data['page_title'] = $page_content[0]->title;
	        }
	      	$data['header'] = $this->get_header_footer();
			$data['menu_data'] = $this->frontendModal->check('settingbypage',array('type'=>'menu'));
			$data['footermenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footermenu'));
			$data['footersubmenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footersubmenu'));
			$data['page_class'] = $page_class;
	      	$this->load->view('component/header', $data);
			$this->load->view('course-list-layout', $data);
			$this->load->view('component/footer',$data);
	 	}else{
	 		$data['page_title'] = "Course Detail";
		 	$page_class = $this->convert_to_slug('Course Detail');
			$page_class = 'type-single-course-page page-'.$page_class ; 
	        $page_content = $this->basicModal->check('settingbypage',array('type'=>'course', 'valueKey' => trim( $single_course ) ));
	       
	        $data['pageData'] = $page_content;
	        if(count($page_content) > 0){
	        	 
	        	$data['page_title'] = $page_content[0]->title;
	        }
	      	$data['header'] = $this->get_header_footer();
			$data['menu_data'] = $this->frontendModal->check('settingbypage',array('type'=>'menu'));
			$data['footermenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footermenu'));
			$data['footersubmenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footersubmenu'));
			$data['page_class'] = $page_class;
	      	$this->load->view('component/header', $data);
			$this->load->view('course-single-layout', $data);
			$this->load->view('component/footer',$data);
	 	}

		
	}


	/**
	 * This function display client testimonial
	 *
	 */
	 public function testmonials( $i = 0 ){
	 	 
	 	$page  = 1; 
	 	if( $i > 1) {
	 		$page  = $i;
	 	}
	 	$limit = 10;
	  
		$data['page_title'] = 'Testimonial';
		$page_class = $this->convert_to_slug('Testimonial');
		$page_class = 'type-testimonial page-'.$page_class ;

		$total_data = $this->basicModal->count_total_data('settingbypage',array('type'=>'testimonial'));
		$start = ($page - 1) * $limit;
		 
		$lastpage = ceil($total_data/$limit); //lastpage.
        $page_content = $this->basicModal->get_pagination_data('settingbypage',array('type'=>'testimonial'), $limit, $start);
        $data['pageData'] = $page_content;
        $data['lastpage'] = $lastpage;
        $data['current_page'] = $page;
        // echo "<pre>";
        // print_r($page_content);
        // if(count($page_content) > 0){
        	 
        // 	$data['page_title'] = $page_content[0]->title;
        // }
      	$data['header'] = $this->get_header_footer();
		$data['menu_data'] = $this->frontendModal->check('settingbypage',array('type'=>'menu'));
		  $data['footermenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footermenu'));
        $data['footersubmenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footersubmenu'));
        $data['page_class'] = $page_class;
      	$this->load->view('component/header', $data);
		$this->load->view('page-testimonial', $data);
		$this->load->view('component/footer',$data);
	}

	/**
	 * Show single event data
	 *
	 */
	public function events( $name="home" ){
		if( 'admin' == $name){
			redirect('/admin/login', '');

		}
	 
		$data['page_title'] = $name;
		 
       	$page_class = $this->convert_to_slug($name);
		$page_class = 'type-event-page page-'.$page_class ; 
        $page_content = $this->basicModal->check('settingbypage',array('type'=>'events-page', 'valueKey' => $name ));
        // var_dump($page_content);
        $data['pageData'] = $page_content;
        // var_dump($event_content);
        if(count($page_content) > 0){
        	 
        	$data['page_title'] = $page_content[0]->title;
        }else if( $event_content > 0 ){
        	$data['pageData'] = $event_content;
        	$data['page_title'] = $event_content[0]->title;
        }

      	$data['header'] = $this->get_header_footer();
		  $data['menu_data'] = $this->frontendModal->check('settingbypage',array('type'=>'menu'));
		  $data['footermenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footermenu'));
		  $data['footersubmenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footersubmenu'));
		  $data['page_class'] = $page_class;
      	$this->load->view('component/header', $data);
		$this->load->view('events-single-layout', $data);
		$this->load->view('component/footer',$data);
	}
	 
}
