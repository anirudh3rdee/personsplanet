<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Marketreports extends MY_Controller {

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
		$data['title'] = 'Market Page';
        $data['marketData'] = $this->basicModal->check('settingbypage',array('type'=>'market-page'));
        $data['subview'] = $this->load->view('market-setting', $data, true);
        $this->load->view('layout_main', $data);
   }
   
	
  
}