<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends MY_Controller {

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
	public function index()
	{	$data['header'] = $this->get_header_footer();
		$data['footermenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footermenu'));
        $data['footersubmenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footersubmenu'));
		$home_data = $this->frontendModal->check('settingbypage',array('type'=>'home-page'));
		$home_banner = $this->frontendModal->check('settingbypage',array('type'=>'home-page', 'valueKey'=>'banner-section'));
		$data['videos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'video'));
		$data['client_logos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'client_logo'));
		$data['client_testimonial'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'review'));
		$data['banner'] = array();
		$data['senond_section'] = array();
		$data['blog_section'] = array();
		$data['fourth_section'] = array();
		$data['fifth_section'] = array();
		$data['menu_data'] = $this->frontendModal->check('settingbypage',array('type'=>'menu'));
		$data['home_banner'] = $home_banner;
		foreach( $home_data as $home_val )
		{	
			if( 'banner-section' == $home_val->valueKey )
			{
				$data['banner'] = json_decode( $home_val->value );
			}else if( 'second-section' == $home_val->valueKey )
			{
				$data['senond_section'] = json_decode( $home_val->value );
			}else if( 'blog-section' == $home_val->valueKey )
			{
				$data['blog_section'][] = $home_val  ;
			}else if( 'fourth-section' == $home_val->valueKey )
			{
				$data['fourth_section'][] = json_decode( $home_val->value );
			} 
			else if( 'fifth-section' == $home_val->valueKey )
			{
				$data['fifth_section'][] = json_decode( $home_val->value );
			} 
		}
		$data['page_title'] = 'Persons Planet';
		$this->load->view('component/header', $data);
		$this->load->view('home');
		$this->load->view('component/footer',$data);
	}
	public function about_new()
	{
		$data['pageData'] = $this->basicModal->check('settingbypage',array('type'=>'pages' ,'valueKey'=>'about-new'));
		$data['header'] = $this->get_header_footer();
		$data['footermenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footermenu'));
        $data['footersubmenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footersubmenu'));
		$home_data = $this->frontendModal->check('settingbypage',array('type'=>'home-page'));
		$data['videos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'video'));
		$data['client_logos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'client_logo'));
		$data['client_testimonial'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'review'));
		$data['banner'] = array();
		$data['senond_section'] = array();
		$data['blog_section'] = array();
		$data['fourth_section'] = array();
		$data['fifth_section'] = array();
		$data['menu_data'] = $this->frontendModal->check('settingbypage',array('type'=>'menu'));
		foreach( $home_data as $home_val )
		{	
			if( 'banner-section' == $home_val->valueKey )
			{
				$data['banner'] = json_decode( $home_val->value );
			}else if( 'second-section' == $home_val->valueKey )
			{
				$data['senond_section'] = json_decode( $home_val->value );
			}else if( 'blog-section' == $home_val->valueKey )
			{
				$data['blog_section'][] = $home_val  ;
			}else if( 'fourth-section' == $home_val->valueKey )
			{
				$data['fourth_section'][] = json_decode( $home_val->value );
			} 
			else if( 'fifth-section' == $home_val->valueKey )
			{
				$data['fifth_section'][] = json_decode( $home_val->value );
			} 
		}
		$data['page_title'] = 'about';
		$this->load->view('component/header', $data);
		$this->load->view('about');
		$this->load->view('component/footer',$data);
	}
	public function example()
	{
		$data['header'] = $this->get_header_footer();
		$data['footermenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footermenu'));
        $data['footersubmenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footersubmenu'));
		$home_data = $this->frontendModal->check('settingbypage',array('type'=>'home-page'));
		$data['videos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'video'));
		$data['client_logos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'client_logo'));
		$data['client_testimonial'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'review'));
		$data['banner'] = array();
		$data['senond_section'] = array();
		$data['blog_section'] = array();
		$data['fourth_section'] = array();
		$data['fifth_section'] = array();
		$data['menu_data'] = $this->frontendModal->check('settingbypage',array('type'=>'menu'));
		foreach( $home_data as $home_val )
		{	
			if( 'banner-section' == $home_val->valueKey )
			{
				$data['banner'] = json_decode( $home_val->value );
			}else if( 'second-section' == $home_val->valueKey )
			{
				$data['senond_section'] = json_decode( $home_val->value );
			}else if( 'blog-section' == $home_val->valueKey )
			{
				$data['blog_section'][] = $home_val  ;
			}else if( 'fourth-section' == $home_val->valueKey )
			{
				$data['fourth_section'][] = json_decode( $home_val->value );
			} 
			else if( 'fifth-section' == $home_val->valueKey )
			{
				$data['fifth_section'][] = json_decode( $home_val->value );
			} 
		}
		$data['page_title'] = 'example';
		$this->load->view('component/header', $data);
		$this->load->view('example');
		$this->load->view('component/footer',$data);
	}
	public function market()
	{
		$data['header'] = $this->get_header_footer();
		$data['footermenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footermenu'));
        $data['footersubmenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footersubmenu'));
		$home_data = $this->frontendModal->check('settingbypage',array('type'=>'market-page'));
		$data['videos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'video'));
		$data['client_logos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'client_logo'));
		$data['client_testimonial'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'review'));
		$data['banner'] = array();
		$data['senond_section'] = array();
		$data['blog_section'] = array();
		$data['fourth_section'] = array();
		$data['menu_data'] = $this->frontendModal->check('settingbypage',array('type'=>'menu'));
		foreach( $home_data as $home_val )
		{	
			if( 'banner-section' == $home_val->valueKey )
			{
				$data['banner'] = json_decode( $home_val->value );
			}else if( 'second-section' == $home_val->valueKey )
			{
				$data['senond_section'] = json_decode( $home_val->value );
			}else if( 'blog-section' == $home_val->valueKey )
			{
				$data['blog_section'][] = $home_val  ;
			}else if( 'fourth-section' == $home_val->valueKey )
			{
				$data['fourth_section'][] = json_decode( $home_val->value );
			} 
		}
		$data['page_title'] = 'market';
		$this->load->view('component/header', $data);
		$this->load->view('market');
		$this->load->view('component/footer', $data);
	}
	public function contact_us()
	{
        $data['pageData'] = $this->basicModal->check('settingbypage',array('type'=>'pages' ,'valueKey'=>'contact-us'));
		$data['header'] = $this->get_header_footer();
		$data['footermenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footermenu'));
        $data['footersubmenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footersubmenu'));
		$home_data = $this->frontendModal->check('settingbypage',array('type'=>'home-page'));
		$data['videos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'video'));
		$data['client_logos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'client_logo'));
		$data['client_testimonial'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'review'));
		$data['menu_data'] = $this->frontendModal->check('settingbypage',array('type'=>'menu'));
		$data['banner'] = array();
		$data['senond_section'] = array();
		$data['blog_section'] = array();
		$data['fourth_section'] = array();
		foreach( $home_data as $home_val )
		{	
			if( 'banner-section' == $home_val->valueKey )
			{
				$data['banner'] = json_decode( $home_val->value );
			}else if( 'second-section' == $home_val->valueKey )
			{
				$data['senond_section'] = json_decode( $home_val->value );
			}else if( 'blog-section' == $home_val->valueKey )
			{
				$data['blog_section'][] = $home_val  ;
			}else if( 'fourth-section' == $home_val->valueKey )
			{
				$data['fourth_section'][] = json_decode( $home_val->value );
			} 
		}
		$data['page_title'] = 'contact us';
		$this->load->view('component/header', $data);
		$this->load->view('contact_us');
		$this->load->view('component/footer', $data);
	}
	public function testimonials()
	{
		$data['header'] = $this->get_header_footer();
		$data['footermenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footermenu'));
        $data['footersubmenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footersubmenu'));
		$home_data = $this->frontendModal->check('settingbypage',array('type'=>'market-page'));
		$data['videos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'video'));
		$data['client_logos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'client_logo'));
		$data['client_testimonial'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'review'));
		$data['banner'] = array();
		$data['senond_section'] = array();
		$data['blog_section'] = array();
		$data['fourth_section'] = array();
		$data['menu_data'] = $this->frontendModal->check('settingbypage',array('type'=>'menu'));
		foreach( $home_data as $home_val )
		{	
			if( 'banner-section' == $home_val->valueKey )
			{
				$data['banner'] = json_decode( $home_val->value );
			}else if( 'second-section' == $home_val->valueKey )
			{
				$data['senond_section'] = json_decode( $home_val->value );
			}else if( 'blog-section' == $home_val->valueKey )
			{
				$data['blog_section'][] = $home_val  ;
			}else if( 'fourth-section' == $home_val->valueKey )
			{
				$data['fourth_section'][] = json_decode( $home_val->value );
			} 
		}
		$data['page_title'] = 'trade_navigator';
		$this->load->view('component/header',$data);
		$this->load->view('testimonials');
		$this->load->view('component/footer',$data);
	}

	public function trade_navigator()
	{
		$data['header'] = $this->get_header_footer();
		$data['footermenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footermenu'));
        $data['footersubmenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footersubmenu'));
		$home_data = $this->frontendModal->check('settingbypage',array('type'=>'market-page'));
		$data['videos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'video'));
		$data['client_logos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'client_logo'));
		$data['client_testimonial'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'review'));
		$data['banner'] = array();
		$data['senond_section'] = array();
		$data['blog_section'] = array();
		$data['fourth_section'] = array();
		$data['menu_data'] = $this->frontendModal->check('settingbypage',array('type'=>'menu'));
		foreach( $home_data as $home_val )
		{	
			if( 'banner-section' == $home_val->valueKey )
			{
				$data['banner'] = json_decode( $home_val->value );
			}else if( 'second-section' == $home_val->valueKey )
			{
				$data['senond_section'] = json_decode( $home_val->value );
			}else if( 'blog-section' == $home_val->valueKey )
			{
				$data['blog_section'][] = $home_val  ;
			}else if( 'fourth-section' == $home_val->valueKey )
			{
				$data['fourth_section'][] = json_decode( $home_val->value );
			} 
		}
		$data['page_title'] = 'trade_navigator';
		$this->load->view('component/header', $data);
		$this->load->view('trade_navigator');
		$this->load->view('component/footer', $data);
	}

	public function trade_station()
	{

		$data['header'] = $this->get_header_footer();
		$data['footermenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footermenu'));
        $data['footersubmenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footersubmenu'));
		$home_data = $this->frontendModal->check('settingbypage',array('type'=>'market-page'));
		$data['videos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'video'));
		$data['client_logos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'client_logo'));
		$data['client_testimonial'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'review'));
		$data['banner'] = array();
		$data['senond_section'] = array();
		$data['blog_section'] = array();
		$data['fourth_section'] = array();
		$data['menu_data'] = $this->frontendModal->check('settingbypage',array('type'=>'menu'));
		foreach( $home_data as $home_val )
		{	
			if( 'banner-section' == $home_val->valueKey )
			{
				$data['banner'] = json_decode( $home_val->value );
			}else if( 'second-section' == $home_val->valueKey )
			{
				$data['senond_section'] = json_decode( $home_val->value );
			}else if( 'blog-section' == $home_val->valueKey )
			{
				$data['blog_section'][] = $home_val  ;
			}else if( 'fourth-section' == $home_val->valueKey )
			{
				$data['fourth_section'][] = json_decode( $home_val->value );
			} 
		}
		$data['page_title'] = 'trade_station';
		$this->load->view('component/header', $data);
		$this->load->view('trade_station');
		$this->load->view('component/footer', $data);
	}

	public function mentoring()
	{
		$data['header'] = $this->get_header_footer();
		$data['footermenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footermenu'));
        $data['footersubmenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footersubmenu'));
		$home_data = $this->frontendModal->check('settingbypage',array('type'=>'market-page'));
		$data['videos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'video'));
		$data['client_logos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'client_logo'));
		$data['client_testimonial'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'review'));
		$data['banner'] = array();
		$data['senond_section'] = array();
		$data['blog_section'] = array();
		$data['fourth_section'] = array();
		$data['menu_data'] = $this->frontendModal->check('settingbypage',array('type'=>'menu'));
		foreach( $home_data as $home_val )
		{	
			if( 'banner-section' == $home_val->valueKey )
			{
				$data['banner'] = json_decode( $home_val->value );
			}else if( 'second-section' == $home_val->valueKey )
			{
				$data['senond_section'] = json_decode( $home_val->value );
			}else if( 'blog-section' == $home_val->valueKey )
			{
				$data['blog_section'][] = $home_val  ;
			}else if( 'fourth-section' == $home_val->valueKey )
			{
				$data['fourth_section'][] = json_decode( $home_val->value );
			} 
		}
		$data['page_title'] = 'mentoring';
		$this->load->view('component/header', $data);
		$this->load->view('mentoring');
		$this->load->view('component/footer', $data);
	}

	public function cot_reports()
	{
		$data['header'] = $this->get_header_footer();
		$data['footermenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footermenu'));
        $data['footersubmenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footersubmenu'));
		$home_data = $this->frontendModal->check('settingbypage',array('type'=>'market-page'));
		$data['videos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'video'));
		$data['client_logos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'client_logo'));
		$data['client_testimonial'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'review'));
		$data['banner'] = array();
		$data['senond_section'] = array();
		$data['blog_section'] = array();
		$data['fourth_section'] = array();
		$data['menu_data'] = $this->frontendModal->check('settingbypage',array('type'=>'menu'));
		foreach( $home_data as $home_val )
		{	
			if( 'banner-section' == $home_val->valueKey )
			{
				$data['banner'] = json_decode( $home_val->value );
			}else if( 'second-section' == $home_val->valueKey )
			{
				$data['senond_section'] = json_decode( $home_val->value );
			}else if( 'blog-section' == $home_val->valueKey )
			{
				$data['blog_section'][] = $home_val  ;
			}else if( 'fourth-section' == $home_val->valueKey )
			{
				$data['fourth_section'][] = json_decode( $home_val->value );
			} 
		}
		$data['page_title'] = 'cot_reports';
		$this->load->view('component/header', $data);
		$this->load->view('cot_reports');
		$this->load->view('component/footer', $data);
	}

	public function pug()
	{
		$data['header'] = $this->get_header_footer();
		$data['footermenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footermenu'));
        $data['footersubmenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footersubmenu'));
		$home_data = $this->frontendModal->check('settingbypage',array('type'=>'market-page'));
		$data['videos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'video'));
		$data['client_logos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'client_logo'));
		$data['client_testimonial'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'review'));
		$data['banner'] = array();
		$data['senond_section'] = array();
		$data['blog_section'] = array();
		$data['fourth_section'] = array();
		$data['menu_data'] = $this->frontendModal->check('settingbypage',array('type'=>'menu'));
		foreach( $home_data as $home_val )
		{	
			if( 'banner-section' == $home_val->valueKey )
			{
				$data['banner'] = json_decode( $home_val->value );
			}else if( 'second-section' == $home_val->valueKey )
			{
				$data['senond_section'] = json_decode( $home_val->value );
			}else if( 'blog-section' == $home_val->valueKey )
			{
				$data['blog_section'][] = $home_val  ;
			}else if( 'fourth-section' == $home_val->valueKey )
			{
				$data['fourth_section'][] = json_decode( $home_val->value );
			} 
		}
		$data['page_title'] = 'pug';
		$this->load->view('component/header', $data);
		$this->load->view('pug');
		$this->load->view('component/footer', $data);
	}

	public function courses()
	{
		$data['header'] = $this->get_header_footer();
		$data['footermenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footermenu'));
        $data['footersubmenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footersubmenu'));
		$home_data = $this->frontendModal->check('settingbypage',array('type'=>'market-page'));
		$data['videos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'video'));
		$data['client_logos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'client_logo'));
		$data['client_testimonial'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'review'));
		$data['banner'] = array();
		$data['senond_section'] = array();
		$data['blog_section'] = array();
		$data['fourth_section'] = array();
		$data['menu_data'] = $this->frontendModal->check('settingbypage',array('type'=>'menu'));
		foreach( $home_data as $home_val )
		{	
			if( 'banner-section' == $home_val->valueKey )
			{
				$data['banner'] = json_decode( $home_val->value );
			}else if( 'second-section' == $home_val->valueKey )
			{
				$data['senond_section'] = json_decode( $home_val->value );
			}else if( 'blog-section' == $home_val->valueKey )
			{
				$data['blog_section'][] = $home_val  ;
			}else if( 'fourth-section' == $home_val->valueKey )
			{
				$data['fourth_section'][] = json_decode( $home_val->value );
			} 
		}
		$data['page_title'] = 'courses';
		$this->load->view('component/header', $data);
		$this->load->view('courses');
		$this->load->view('component/footer', $data);
	}

	public function td_ameritrade()
	{
		$data['header'] = $this->get_header_footer();
		$data['footermenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footermenu'));
        $data['footersubmenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footersubmenu'));
		$home_data = $this->frontendModal->check('settingbypage',array('type'=>'market-page'));
		$data['videos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'video'));
		$data['client_logos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'client_logo'));
		$data['client_testimonial'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'review'));
		$data['banner'] = array();
		$data['senond_section'] = array();
		$data['blog_section'] = array();
		$data['fourth_section'] = array();
		$data['menu_data'] = $this->frontendModal->check('settingbypage',array('type'=>'menu'));
		foreach( $home_data as $home_val )
		{	
			if( 'banner-section' == $home_val->valueKey )
			{
				$data['banner'] = json_decode( $home_val->value );
			}else if( 'second-section' == $home_val->valueKey )
			{
				$data['senond_section'] = json_decode( $home_val->value );
			}else if( 'blog-section' == $home_val->valueKey )
			{
				$data['blog_section'][] = $home_val  ;
			}else if( 'fourth-section' == $home_val->valueKey )
			{
				$data['fourth_section'][] = json_decode( $home_val->value );
			} 
		}
		$data['page_title'] = 'td_ameritrade';
		$this->load->view('component/header', $data);
		$this->load->view('td_ameritrade');
		$this->load->view('component/footer', $data);
	}

	public function tradeshark_software()
	{
		$data['header'] = $this->get_header_footer();
		$data['footermenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footermenu'));
        $data['footersubmenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footersubmenu'));
		$home_data = $this->frontendModal->check('settingbypage',array('type'=>'market-page'));
		$data['videos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'video'));
		$data['client_logos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'client_logo'));
		$data['client_testimonial'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'review'));
		$data['banner'] = array();
		$data['senond_section'] = array();
		$data['blog_section'] = array();
		$data['fourth_section'] = array();
		$data['menu_data'] = $this->frontendModal->check('settingbypage',array('type'=>'menu'));
		foreach( $home_data as $home_val )
		{	
			if( 'banner-section' == $home_val->valueKey )
			{
				$data['banner'] = json_decode( $home_val->value );
			}else if( 'second-section' == $home_val->valueKey )
			{
				$data['senond_section'] = json_decode( $home_val->value );
			}else if( 'blog-section' == $home_val->valueKey )
			{
				$data['blog_section'][] = $home_val  ;
			}else if( 'fourth-section' == $home_val->valueKey )
			{
				$data['fourth_section'][] = json_decode( $home_val->value );
			} 
		}
		$data['page_title'] = 'tradeshark_software';
		$this->load->view('component/header', $data);
		$this->load->view('tradeshark_soft');
		$this->load->view('component/footer', $data);
	}
	public function get_the_ebook()
	{
		$data['pageData'] = $this->basicModal->check('settingbypage',array('type'=>'pages' ,'valueKey'=>'get-the-ebook'));
		$data['header'] = $this->get_header_footer();
		$data['footermenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footermenu'));
        $data['footersubmenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footersubmenu'));
		$home_data = $this->frontendModal->check('settingbypage',array('type'=>'home-page'));
		$data['videos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'video'));
		$data['client_logos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'client_logo'));
		$data['client_testimonial'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'review'));
		$data['menu_data'] = $this->frontendModal->check('settingbypage',array('type'=>'menu'));
		$data['banner'] = array();
		$data['senond_section'] = array();
		$data['blog_section'] = array();
		$data['fourth_section'] = array();
		foreach( $home_data as $home_val )
		{	
			if( 'banner-section' == $home_val->valueKey )
			{
				$data['banner'] = json_decode( $home_val->value );
			}else if( 'second-section' == $home_val->valueKey )
			{
				$data['senond_section'] = json_decode( $home_val->value );
			}else if( 'blog-section' == $home_val->valueKey )
			{
				$data['blog_section'][] = $home_val  ;
			}else if( 'fourth-section' == $home_val->valueKey )
			{
				$data['fourth_section'][] = json_decode( $home_val->value );
			} 
		}
		$data['page_title'] = 'get the ebook';
		$this->load->view('component/header', $data);
		$this->load->view('get_the_ebook');
		$this->load->view('component/footer', $data);
	}
	public function daily_persons_pivots()
	{
		$data['header'] = $this->get_header_footer();
		$data['footermenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footermenu'));
        $data['footersubmenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footersubmenu'));
		$home_data = $this->frontendModal->check('settingbypage',array('type'=>'market-page'));
		$data['videos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'video'));
		$data['client_logos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'client_logo'));
		$data['client_testimonial'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'review'));
		$data['banner'] = array();
		$data['senond_section'] = array();
		$data['blog_section'] = array();
		$data['fourth_section'] = array();
		$data['menu_data'] = $this->frontendModal->check('settingbypage',array('type'=>'menu'));
		foreach( $home_data as $home_val )
		{	
			if( 'banner-section' == $home_val->valueKey )
			{
				$data['banner'] = json_decode( $home_val->value );
			}else if( 'second-section' == $home_val->valueKey )
			{
				$data['senond_section'] = json_decode( $home_val->value );
			}else if( 'blog-section' == $home_val->valueKey )
			{
				$data['blog_section'][] = $home_val  ;
			}else if( 'fourth-section' == $home_val->valueKey )
			{
				$data['fourth_section'][] = json_decode( $home_val->value );
			} 
		}
		$data['page_title'] = 'daily_persons_pivots';
		$this->load->view('component/header', $data);
		$this->load->view('daily_persons_pivots');
		$this->load->view('component/footer', $data);
	}
	public function persons_pivot_triggers()
	{
		$data['header'] = $this->get_header_footer();
		$data['footermenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footermenu'));
        $data['footersubmenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footersubmenu'));
		$home_data = $this->frontendModal->check('settingbypage',array('type'=>'market-page'));
		$data['videos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'video'));
		$data['client_logos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'client_logo'));
		$data['client_testimonial'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'review'));
		$data['banner'] = array();
		$data['senond_section'] = array();
		$data['blog_section'] = array();
		$data['fourth_section'] = array();
		$data['menu_data'] = $this->frontendModal->check('settingbypage',array('type'=>'menu'));
		foreach( $home_data as $home_val )
		{	
			if( 'banner-section' == $home_val->valueKey )
			{
				$data['banner'] = json_decode( $home_val->value );
			}else if( 'second-section' == $home_val->valueKey )
			{
				$data['senond_section'] = json_decode( $home_val->value );
			}else if( 'blog-section' == $home_val->valueKey )
			{
				$data['blog_section'][] = $home_val  ;
			}else if( 'fourth-section' == $home_val->valueKey )
			{
				$data['fourth_section'][] = json_decode( $home_val->value );
			} 
		}
		$data['page_title'] = 'persons_pivot_triggers';
		$this->load->view('component/header', $data);
		$this->load->view('pivot_triggers');
		$this->load->view('component/footer', $data);
	}
	public function advance_trading_indicator()
	{
		$data['header'] = $this->get_header_footer();
		$data['footermenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footermenu'));
        $data['footersubmenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footersubmenu'));
		$home_data = $this->frontendModal->check('settingbypage',array('type'=>'market-page'));
		$data['videos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'video'));
		$data['client_logos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'client_logo'));
		$data['client_testimonial'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'review'));
		$data['banner'] = array();
		$data['senond_section'] = array();
		$data['blog_section'] = array();
		$data['fourth_section'] = array();
		$data['menu_data'] = $this->frontendModal->check('settingbypage',array('type'=>'menu'));
		foreach( $home_data as $home_val )
		{	
			if( 'banner-section' == $home_val->valueKey )
			{
				$data['banner'] = json_decode( $home_val->value );
			}else if( 'second-section' == $home_val->valueKey )
			{
				$data['senond_section'] = json_decode( $home_val->value );
			}else if( 'blog-section' == $home_val->valueKey )
			{
				$data['blog_section'][] = $home_val  ;
			}else if( 'fourth-section' == $home_val->valueKey )
			{
				$data['fourth_section'][] = json_decode( $home_val->value );
			} 
		}
		$data['page_title'] = 'advance_trading_indicator';
		$this->load->view('component/header', $data);
		$this->load->view('advance_trading_ind');
		$this->load->view('component/footer', $data);
	}
	public function john_lifetime_package()
	{
		$data['header'] = $this->get_header_footer();
		$data['footermenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footermenu'));
        $data['footersubmenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footersubmenu'));
		$home_data = $this->frontendModal->check('settingbypage',array('type'=>'market-page'));
		$data['videos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'video'));
		$data['client_logos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'client_logo'));
		$data['client_testimonial'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'review'));
		$data['banner'] = array();
		$data['senond_section'] = array();
		$data['blog_section'] = array();
		$data['fourth_section'] = array();
		$data['menu_data'] = $this->frontendModal->check('settingbypage',array('type'=>'menu'));
		foreach( $home_data as $home_val )
		{	
			if( 'banner-section' == $home_val->valueKey )
			{
				$data['banner'] = json_decode( $home_val->value );
			}else if( 'second-section' == $home_val->valueKey )
			{
				$data['senond_section'] = json_decode( $home_val->value );
			}else if( 'blog-section' == $home_val->valueKey )
			{
				$data['blog_section'][] = $home_val  ;
			}else if( 'fourth-section' == $home_val->valueKey )
			{
				$data['fourth_section'][] = json_decode( $home_val->value );
			} 
		}
		$data['page_title'] = 'john_lifetime_package';
		$this->load->view('component/header', $data);
		$this->load->view('john_package');
		$this->load->view('component/footer', $data);
	}
	public function instructional_videos()
	{
		$data['header'] = $this->get_header_footer();
		$data['footermenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footermenu'));
        $data['footersubmenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footersubmenu'));
		$home_data = $this->frontendModal->check('settingbypage',array('type'=>'market-page'));
		$data['videos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'video'));
		$data['client_logos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'client_logo'));
		$data['client_testimonial'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'review'));
		$data['banner'] = array();
		$data['senond_section'] = array();
		$data['blog_section'] = array();
		$data['fourth_section'] = array();
		$data['menu_data'] = $this->frontendModal->check('settingbypage',array('type'=>'menu'));
		foreach( $home_data as $home_val )
		{	
			if( 'banner-section' == $home_val->valueKey )
			{
				$data['banner'] = json_decode( $home_val->value );
			}else if( 'second-section' == $home_val->valueKey )
			{
				$data['senond_section'] = json_decode( $home_val->value );
			}else if( 'blog-section' == $home_val->valueKey )
			{
				$data['blog_section'][] = $home_val  ;
			}else if( 'fourth-section' == $home_val->valueKey )
			{
				$data['fourth_section'][] = json_decode( $home_val->value );
			} 
		}
		$data['page_title'] = 'instructional_videos';
		$this->load->view('component/header', $data);
		$this->load->view('instructional_videos');
		$this->load->view('component/footer', $data);
	}
	public function privacy_policy()
	{
		$data['header'] = $this->get_header_footer();
		$data['footermenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footermenu'));
        $data['footersubmenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footersubmenu'));
		$home_data = $this->frontendModal->check('settingbypage',array('type'=>'market-page'));
		$data['videos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'video'));
		$data['client_logos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'client_logo'));
		$data['client_testimonial'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'review'));
		$data['banner'] = array();
		$data['senond_section'] = array();
		$data['blog_section'] = array();
		$data['fourth_section'] = array();
		$data['menu_data'] = $this->frontendModal->check('settingbypage',array('type'=>'menu'));
		foreach( $home_data as $home_val )
		{	
			if( 'banner-section' == $home_val->valueKey )
			{
				$data['banner'] = json_decode( $home_val->value );
			}else if( 'second-section' == $home_val->valueKey )
			{
				$data['senond_section'] = json_decode( $home_val->value );
			}else if( 'blog-section' == $home_val->valueKey )
			{
				$data['blog_section'][] = $home_val  ;
			}else if( 'fourth-section' == $home_val->valueKey )
			{
				$data['fourth_section'][] = json_decode( $home_val->value );
			} 
		}
		$data['page_title'] = 'Privacy Policy';
		$this->load->view('component/header', $data);
		$this->load->view('privacy_policy');
		$this->load->view('component/footer', $data);
	}
	public function algo_optimizer_training()
	{
		$data['header'] = $this->get_header_footer();
		$data['footermenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footermenu'));
        $data['footersubmenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footersubmenu'));
		$home_data = $this->frontendModal->check('settingbypage',array('type'=>'market-page'));
		$data['videos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'video'));
		$data['client_logos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'client_logo'));
		$data['client_testimonial'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'review'));
		$data['banner'] = array();
		$data['senond_section'] = array();
		$data['blog_section'] = array();
		$data['fourth_section'] = array();
		$data['menu_data'] = $this->frontendModal->check('settingbypage',array('type'=>'menu'));
		foreach( $home_data as $home_val )
		{	
			if( 'banner-section' == $home_val->valueKey )
			{
				$data['banner'] = json_decode( $home_val->value );
			}else if( 'second-section' == $home_val->valueKey )
			{
				$data['senond_section'] = json_decode( $home_val->value );
			}else if( 'blog-section' == $home_val->valueKey )
			{
				$data['blog_section'][] = $home_val  ;
			}else if( 'fourth-section' == $home_val->valueKey )
			{
				$data['fourth_section'][] = json_decode( $home_val->value );
			} 
		}
		$data['page_title'] = 'algo_optimizer_training';
		$this->load->view('component/header', $data);
		$this->load->view('algo_optimizer_training');
		$this->load->view('component/footer', $data);
	}
	public function algo_trading()
	{
		$data['header'] = $this->get_header_footer();
		$data['footermenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footermenu'));
        $data['footersubmenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footersubmenu'));
		$home_data = $this->frontendModal->check('settingbypage',array('type'=>'market-page'));
		$data['videos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'video'));
		$data['client_logos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'client_logo'));
		$data['client_testimonial'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'review'));
		$data['banner'] = array();
		$data['senond_section'] = array();
		$data['blog_section'] = array();
		$data['fourth_section'] = array();
		$data['menu_data'] = $this->frontendModal->check('settingbypage',array('type'=>'menu'));
		foreach( $home_data as $home_val )
		{	
			if( 'banner-section' == $home_val->valueKey )
			{
				$data['banner'] = json_decode( $home_val->value );
			}else if( 'second-section' == $home_val->valueKey )
			{
				$data['senond_section'] = json_decode( $home_val->value );
			}else if( 'blog-section' == $home_val->valueKey )
			{
				$data['blog_section'][] = $home_val  ;
			}else if( 'fourth-section' == $home_val->valueKey )
			{
				$data['fourth_section'][] = json_decode( $home_val->value );
			} 
		}
		$data['page_title'] = 'algo_trading';
		$this->load->view('component/header', $data);
		$this->load->view('algo_trading');
		$this->load->view('component/footer', $data);
	}
	public function pivot()
	{
		$data['header'] = $this->get_header_footer();
		$data['footermenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footermenu'));
        $data['footersubmenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footersubmenu'));
		$home_data = $this->frontendModal->check('settingbypage',array('type'=>'market-page'));
		$data['videos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'video'));
		$data['client_logos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'client_logo'));
		$data['client_testimonial'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'review'));
		$data['banner'] = array();
		$data['senond_section'] = array();
		$data['blog_section'] = array();
		$data['fourth_section'] = array();
		$data['menu_data'] = $this->frontendModal->check('settingbypage',array('type'=>'menu'));
		foreach( $home_data as $home_val )
		{	
			if( 'banner-section' == $home_val->valueKey )
			{
				$data['banner'] = json_decode( $home_val->value );
			}else if( 'second-section' == $home_val->valueKey )
			{
				$data['senond_section'] = json_decode( $home_val->value );
			}else if( 'blog-section' == $home_val->valueKey )
			{
				$data['blog_section'][] = $home_val  ;
			}else if( 'fourth-section' == $home_val->valueKey )
			{
				$data['fourth_section'][] = json_decode( $home_val->value );
			} 
		}
		$data['page_title'] = 'pivot';
		$this->load->view('component/header', $data);
		$this->load->view('pivot_calculator');
		$this->load->view('component/footer', $data);
	}
	public function seminar_at_sea()
	{
		$data['header'] = $this->get_header_footer();
		$data['footermenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footermenu'));
        $data['footersubmenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footersubmenu'));
		$home_data = $this->frontendModal->check('settingbypage',array('type'=>'market-page'));
		$data['videos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'video'));
		$data['client_logos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'client_logo'));
		$data['client_testimonial'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'review'));
		$data['banner'] = array();
		$data['senond_section'] = array();
		$data['blog_section'] = array();
		$data['fourth_section'] = array();
		$data['menu_data'] = $this->frontendModal->check('settingbypage',array('type'=>'menu'));
		foreach( $home_data as $home_val )
		{	
			if( 'banner-section' == $home_val->valueKey )
			{
				$data['banner'] = json_decode( $home_val->value );
			}else if( 'second-section' == $home_val->valueKey )
			{
				$data['senond_section'] = json_decode( $home_val->value );
			}else if( 'blog-section' == $home_val->valueKey )
			{
				$data['blog_section'][] = $home_val  ;
			}else if( 'fourth-section' == $home_val->valueKey )
			{
				$data['fourth_section'][] = json_decode( $home_val->value );
			} 
		}
		$data['page_title'] = 'Seminar At Sea';
		$this->load->view('component/header', $data);
		$this->load->view('seminar_at_sea');
		$this->load->view('component/footer', $data);
	}
	public function start_here()
	{
		$data['header'] = $this->get_header_footer();
		$data['footermenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footermenu'));
        $data['footersubmenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footersubmenu'));
		$home_data = $this->frontendModal->check('settingbypage',array('type'=>'market-page'));
		$data['videos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'video'));
		$data['client_logos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'client_logo'));
		$data['client_testimonial'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'review'));
		$data['banner'] = array();
		$data['senond_section'] = array();
		$data['blog_section'] = array();
		$data['fourth_section'] = array();
		$data['menu_data'] = $this->frontendModal->check('settingbypage',array('type'=>'menu'));
		foreach( $home_data as $home_val )
		{	
			if( 'banner-section' == $home_val->valueKey )
			{
				$data['banner'] = json_decode( $home_val->value );
			}else if( 'second-section' == $home_val->valueKey )
			{
				$data['senond_section'] = json_decode( $home_val->value );
			}else if( 'blog-section' == $home_val->valueKey )
			{
				$data['blog_section'][] = $home_val  ;
			}else if( 'fourth-section' == $home_val->valueKey )
			{
				$data['fourth_section'][] = json_decode( $home_val->value );
			} 
		}
		$data['page_title'] = 'Start Here';
		$this->load->view('component/header', $data);
		$this->load->view('start_here');
		$this->load->view('component/footer', $data);
	}
		public function new_pug()
	{
		$data['header'] = $this->get_header_footer();
		$data['footermenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footermenu'));
        $data['footersubmenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footersubmenu'));
		$home_data = $this->frontendModal->check('settingbypage',array('type'=>'market-page'));
		$data['videos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'video'));
		$data['client_logos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'client_logo'));
		$data['client_testimonial'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'review'));
		$data['banner'] = array();
		$data['senond_section'] = array();
		$data['blog_section'] = array();
		$data['fourth_section'] = array();
		$data['menu_data'] = $this->frontendModal->check('settingbypage',array('type'=>'menu'));
		foreach( $home_data as $home_val )
		{	
			if( 'banner-section' == $home_val->valueKey )
			{
				$data['banner'] = json_decode( $home_val->value );
			}else if( 'second-section' == $home_val->valueKey )
			{
				$data['senond_section'] = json_decode( $home_val->value );
			}else if( 'blog-section' == $home_val->valueKey )
			{
				$data['blog_section'][] = $home_val  ;
			}else if( 'fourth-section' == $home_val->valueKey )
			{
				$data['fourth_section'][] = json_decode( $home_val->value );
			} 
		}
		$data['page_title'] = 'new pug';
		$this->load->view('component/header', $data);
		$this->load->view('new_pug');
		$this->load->view('component/footer', $data);
	}
			public function new_shark()
	{
		$data['header'] = $this->get_header_footer();
		$data['footermenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footermenu'));
        $data['footersubmenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footersubmenu'));
		$home_data = $this->frontendModal->check('settingbypage',array('type'=>'market-page'));
		$data['videos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'video'));
		$data['client_logos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'client_logo'));
		$data['client_testimonial'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'review'));
		$data['banner'] = array();
		$data['senond_section'] = array();
		$data['blog_section'] = array();
		$data['fourth_section'] = array();
		$data['menu_data'] = $this->frontendModal->check('settingbypage',array('type'=>'menu'));
		foreach( $home_data as $home_val )
		{	
			if( 'banner-section' == $home_val->valueKey )
			{
				$data['banner'] = json_decode( $home_val->value );
			}else if( 'second-section' == $home_val->valueKey )
			{
				$data['senond_section'] = json_decode( $home_val->value );
			}else if( 'blog-section' == $home_val->valueKey )
			{
				$data['blog_section'][] = $home_val  ;
			}else if( 'fourth-section' == $home_val->valueKey )
			{
				$data['fourth_section'][] = json_decode( $home_val->value );
			} 
		}
		$data['page_title'] = 'new shark';
		$this->load->view('component/header', $data);
		$this->load->view('new_shark');
		$this->load->view('component/footer', $data);
	}
				public function new_td_ami()
	{
		$data['header'] = $this->get_header_footer();
		$data['footermenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footermenu'));
        $data['footersubmenuData'] = $this->basicModal->check('settingbypage',array('type'=>'footersubmenu'));
		$home_data = $this->frontendModal->check('settingbypage',array('type'=>'market-page'));
		$data['videos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'video'));
		$data['client_logos'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'client_logo'));
		$data['client_testimonial'] = $this->frontendModal->check('settingbypage',array('valueKey'=>'review'));
		$data['banner'] = array();
		$data['senond_section'] = array();
		$data['blog_section'] = array();
		$data['fourth_section'] = array();
		$data['menu_data'] = $this->frontendModal->check('settingbypage',array('type'=>'menu'));
		foreach( $home_data as $home_val )
		{	
			if( 'banner-section' == $home_val->valueKey )
			{
				$data['banner'] = json_decode( $home_val->value );
			}else if( 'second-section' == $home_val->valueKey )
			{
				$data['senond_section'] = json_decode( $home_val->value );
			}else if( 'blog-section' == $home_val->valueKey )
			{
				$data['blog_section'][] = $home_val  ;
			}else if( 'fourth-section' == $home_val->valueKey )
			{
				$data['fourth_section'][] = json_decode( $home_val->value );
			} 
		}
		$data['page_title'] = 'new td ami';
		$this->load->view('component/header', $data);
		$this->load->view('new_td_ami');
		$this->load->view('component/footer', $data);
	}
}

