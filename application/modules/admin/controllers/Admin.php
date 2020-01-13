<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Admin extends MY_Controller {



    function __construct() {

        parent::__construct();

     

        

    }
    
   	public function login()

	{

		 
       if($this->session->userdata('pplogin_status')){

        	redirect('/admin/dashboard/', 'refresh');

        }


	    $data['form_error'] = "";

	    $data['form_success'] = ""; 

		$this->load->view('login',$data);

		 

	}
    


	public function index()

	{

		 

	    $data['form_error'] = "";

	    $data['form_success'] = ""; 

		$this->load->view('login',$data);

		 

	}

	public function checkforgetemail()
	{
		$this->load->library('session');
		$forget_email=$this->input->post('forget_email');

		if(isset($forget_email)){

			$this->load->model('basicModal');

			$data = array(
						'u_email' => trim($forget_email),
					);
			if( $res = $this->basicModal->checkforgetpassword('users',$data) ) {   

				if( 'admin' === $res[0]->u_role){	
					$this->load->view('forgetpassword',$data);
				}
				else
				{
					$this->session->set_userdata('message', 'Not a Admin Email Address');
					redirect('/admin/login/','refresh');
					exit();
				}
				
			}
			else
				{
					$this->session->set_userdata('message', 'Email Address Not Found...');
					redirect('/admin/login/','refresh');
					exit();
				}
				

		} 
					 

	}

	public function save_forgetpassword(){
		$u_new_password=$this->input->post('new_password');

		$newpassword = md5($u_new_password);
		if(isset($newpassword)){
			$this->db->query("UPDATE users SET u_password = '$newpassword' WHERE id=3");
			$this->db->affected_rows();
			redirect('/admin/login/');
		}
		
	}

	public function check_login(){

		$u_email=$this->input->post('u_email');

		$u_pass=$this->input->post('u_pass');

		if(isset($u_email) && isset($u_pass)){

			$this->load->model('basicModal');

			$data = array(

						'u_email' => trim($u_email),

						'u_password' => md5(trim($u_pass)),

					);

			if( $res = $this->basicModal->check('users',$data) ) {   

                

				// check user role

				if( 'admin' === $res[0]->u_role){

					 

					$this->session->set_userdata('pplogin_status', true );

					$this->session->set_userdata('pplogin_email', $res[0]->u_email);

					$this->session->set_userdata('pplogin_id', $res[0]->id);

					$this->session->set_userdata('pplogin_fistname', $res[0]->u_first_name);

					$this->session->set_userdata('pplogin_lastname', $res[0]->u_last_name);

					$this->session->set_userdata('pplogin_role', $res[0]->u_role);

					redirect('/admin/dashboard/', 'refresh');

				}

				



			}else{

				$data['form_success'] = ""; 

                $data['form_error'] = "Invalid Email Or Password!";

				$this->load->view('login',$data);

			}



		}

		

		

	}



	public function logout(){
		$user_data = array( 
			'pplogin_status' => '',
			'pplogin_email' => '',
			'pplogin_id' => '',
			'pplogin_fistname' => '',
			'pplogin_lastname' => '',
			'pplogin_role' => ''
		);
		$this->session->unset_userdata( $user_data );
		$this->session->sess_destroy();
		 
		redirect('/admin');

		exit();

	}

	public function about()

	{

		$this->load->view('component/header');

		$this->load->view('about');

		$this->load->view('component/footer');

	}

	public function market()

	{

		$this->load->view('component/header');

		$this->load->view('market');

		$this->load->view('component/footer');

	}

}

