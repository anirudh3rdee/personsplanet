<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

    function __construct() {
        parent::__construct();
        $logged = $this->session->userdata('pplogin_status');
        if( !isset( $logged ) || $logged != true ){
        	$this->session->sess_destroy();
        	redirect('/admin');
        	exit();
        }
    }
	public function index()
	{
		 
		$data['title'] = 'Dashboard';
        $data['subview'] = $this->load->view('dashboard', $data, true);
        $this->load->view('layout_main', $data);
		 
	}
}