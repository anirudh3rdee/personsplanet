<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Ajax extends MY_Controller {



    function __construct() {

        parent::__construct();



        $this->load->model('basicModal');

    }

	public function events()

	{

		$event_results = $this->basicModal->check('settingbypage',array('type'=>'events-page'));
		$dataArray = array();
		foreach ($event_results as $value) {
			$event_data = json_decode($value->value);
			 
			$es_hour = trim( $event_data->time_in_hour );
			$es_minute =  trim( $event_data->time_in_minute );
			$es_ap =  trim( $event_data->time_in_ap );

			$ee_time = $es_hour.''.$es_minute.' '.$es_ap;
			$event_start_date = $event_data->start_date. ' '.$ee_time;
			$event_start_date = date("Y-m-d H:i:s", strtotime($event_start_date));
			$ee_hour = trim( $event_data->end_time_hour );
			$ee_minute = trim( $event_data->end_time_minute );
			$ee_ap = trim( $event_data->end_time_ap );
			$ee_time = $ee_hour.''.$ee_minute.' '.$ee_ap;
			$event_end_date = $event_data->end_date.' '. $ee_time;
			$event_end_date = date("Y-m-d H:i:s", strtotime($event_end_date));
			$event_url = '';
			if( 'external_link' == $event_data->event_link_type ){
				$event_url = $event_data->event_link;
			}else if( 'internal_link' == $event_data->event_link_type ){
				$event_url =  base_url().'events/'.$value->valueKey;
			} 

			// $event_url = 'http://demo.personsplanet.com/';
			$dataArray[] = array(
			 	'allDay' => true,
				'title'=> $event_data->event_title,
	            'start' => $event_start_date,
	            'end'=> date('Y-m-d H:i:s', strtotime('+1 day', strtotime($event_end_date))),
	           
	        	'url' => $event_url,
			 );
		}
		// echo "<pre>" 
		// print_r($dataArray);
		// $dataArray = array( 
		// 	array( 
		// 		'allDay' => true,
		// 		'title'=> 'Front-End Conference',
	 //            'start' => '2019-11-16',
	 //            'end'=> '2019-11-18',
	 //        	'url' => 'https://www.google.com/',
	 //        	'extendedProps' => array('status' => 'done')
	        	
	        	 
	        	 
  //       	),
  //           array( 'title'=> 'Car mechanic',
	 //            'start' => '2019-12-13',
	 //            'end'=> '2019-12-16',
	 //            'url' => 'https://www.yahoo.com/',
	 //            'allDay' => true,
	 //        ),
  //           array( 'title'=> 'Dinner with Mike',
	 //            'start' => '2019-12-17',
	 //            'end'=> '2019-12-18',
	 //            'url' => 'https://www.yahoo.com/',
	 //            'allDay' => true,
  //       	),
		// );
		 echo json_encode($dataArray);
		 exit();

    }
     

    public function convertToSlug(){

    	$setting_type = trim($_POST['setting_type']);

		$heading = trim($_POST['heading']);

		$slug = $this->slugify( $heading );

		$where = array( 'type' => $setting_type, 'valueKey' => $slug );

		 

		$total_row = $this->basicModal->check('settingbypage', $where);

		

		 

		if(count($total_row) > 0 ){



			$index = count($total_row) + 1;

			$newSlug = $slug.'-'. $index;

			 

			echo $newSlug;

			exit();

		}else{

			echo $slug;

			exit(); 

			 

		}

	 

    }



    public  function slugify($text)

	{

	  	// replace non letter or digits by -

	  	$text = preg_replace('~[^\pL\d]+~u', '-', $text);



	  	// transliterate

	  	$text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);



	  	// remove unwanted characters

	  	$text = preg_replace('~[^-\w]+~', '', $text);



	  	// trim

	  	$text = trim($text, '-');



	  	// remove duplicate -

	  	$text = preg_replace('~-+~', '-', $text);



	  	// lowercase

	  	$text = strtolower($text);



	  	if (empty($text)) {

	    	return 'n-a';

	  	}

	  	return $text;

	}

	public function get_all_media( )
	{
		 // var_dump($_POST['current_page']);
		$media_files = $this->basicModal->get_media_in_limit(array(), -1, 0);
		$output = '';
		  $other_format = array('pdf','doc','docx','ppt','pptx', 'pp', 'ppsx', 'odt','xls', 'xlsx', 'key', 'zip', 'mp3', 'm4a', 'ogg', 'wav', 'mp4', 'm4v', 'mov', 'wmv', 'avi', 'mpg', 'ogv', '3gp', '3g2');
		foreach ($media_files as $key ) {

			$output .= '<div class="media_list">';
			$output .= '<p class="media_title">'.$key->media_name.'</p>';
			if( in_array($key->media_type, array('png', 'jpg', 'jpeg', 'gif'))){
				$output .= '<p class="media_icon"><img width="100px" src="'.base_url().''.$key->media_path.'"/></p>';
				
			}else if( in_array($key->media_type, $other_format))
			{
				$other_path = base_url().'assets/media_files/default/'.$key->media_type.'.png';
				$output .= '<p class="media_icon"><img width="100px" src="'.$other_path.'"/></p>';
				
			}
			$output .='<input class="" type="text" id="list_media_path_'.$key->id.'" value="'.base_url().''.$key->media_path.'">
                                                    <span id="list_media_span_'.$key->id.'" onclick="listCopyMediaPath('.$key->id.')" style="cursor: pointer;">Copy</span>';
			$output .= '<p class="media_url hide">'.base_url().''.$key->media_path.'</p>';
			$output .='</div>';
			 
		}
		
		echo json_encode(array('status' => 'success', 'output' => $output,  'message' => 'Success'));
		exit();
	}

	/**
	 * Send Contact Emal
	 *
	 */
	public function sendContactEmail(){
		//Load email library
		$from_email = trim( $this->input->post('user_email') );
		$user_fname = trim( $this->input->post('user_fname') );
		$user_lname = trim( $this->input->post('user_lname') );
		$user_contact = trim( $this->input->post('user_contact') );
		$user_msg = trim( $this->input->post('user_msg') );
		$full_name = $user_fname .' '.$user_lname;
		$to_email = "mperson@nationalfutures.com";
		$remember = $this->input->post('remember');
		if( '' == $from_email || $remember != 'yes'){
			echo json_encode(array('status' => 'error', 'message' => 'Enter required fields value.'));
			exit();
		}
	 
		$message = "<h2>Persons Planet</h2>";
		$message .= "<p><strong>Name: </strong>".$full_name."</p>";
		$message .= "<p><strong>Email: </strong>".$from_email."</p>";
		$message .= "<p><strong>Home Phone: </strong>".$user_contact."</p>";
		$message .= "<p><strong>Message: </strong>".$user_msg."</p>";
		$message .= "<br/><p>Thanks</p>";
	 
		$this->load->library('email');
		$this->email->from($from_email, $full_name); 
		$this->email->to($to_email);
		$this->email->subject('Persons Planet (Contact US)'); 
		$this->email->message($message); 
		$this->email->set_mailtype("html");
   
         //Send mail 
         if($this->email->send()){
         	echo json_encode(array('status' => 'success', 'message' => 'Your message has been successfully sent. We will contact you very soon!'));
         	exit();
         }else{
         	echo json_encode(array('status' => 'error', 'message' => 'Failed to send your message. Please try later.'));
         	exit();
        }
		 
	}
	
}