<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Testimonial extends MY_Controller {



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

        $data['title'] = 'Testimonials';

        $data['testimonialData'] = $this->basicModal->get_pagination_data('settingbypage',array('type'=>'testimonial'), -1);

        $data['subview'] = $this->load->view('testimonial-list', $data, true);

        $this->load->view('layout_main', $data);

    }


    public function edit_testimonial()

    {

        $data['title'] = 'Testimonial';

        $page_id = $this->uri->segment(4);

        if( isset( $page_id) > 0 ) {

            $data['id'] = $page_id;

            $data['title'] = 'Edit Testimonial';

            $data['pageData'] = $this->basicModal->check('settingbypage',array('type'=>'testimonial', 'id' => $page_id));

            

            $data['page_title'] = 'tgg ';

            $data['old_featured_image'] = 'cfdf';

            $data['page_slug'] = ' dfdf ';

            $data['page_content'] = 'fg ff';

        }else{

            $data['id'] = 0;

            $data['title'] = 'Add New Testimonial';

            $data['pageData'] = '';

        }

        // $data['pageData'] = $this->basicModal->check('settingbypage',array('type'=>'pages'));

        $data['subview'] = $this->load->view('add_edit_testimonail', $data, true);

        $this->load->view('layout_main', $data);

    }

    

   

   public function save_testimonial($id=0){



        $data['valueKey'] = trim( $_POST['clientName'] );

        $data['title'] = trim( $_POST['clientName'] );

        $data['type'] = 'testimonial';

        $metaValueKey=array();
        $metaValueKey['clientName'] = trim( $_POST['clientName'] );
        $metaValueKey['clientMessage'] = trim( $_POST['clientMessage'] );
        $data['value']= json_encode($metaValueKey);
        // print_r($data); die;

        if($id>0){

            // update code

            if($this->basicModal->update_data('settingbypage',$data,$id)){

                 $this->session->set_flashdata('msg','Testimonial save successfully.');

            }else{

                $this->session->set_flashdata('msg','Testimonial save failed.');

            }

            redirect('admin/testimonial/');

        }else{

            if($this->basicModal->insert_data('settingbypage',$data)){

                 $this->session->set_flashdata('msg','Testimonial insert successfully.');

            }else{

                $this->session->set_flashdata('msg','Testimonial insertion failed.');

            }

            redirect('admin/testimonial/');

            // insert code

        }

   }

 


 


     

}