<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Menu extends MY_Controller {



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

        $this->load->view('layout_main', $data);

        //add_edit_client_logo.php

	}
	

  

}