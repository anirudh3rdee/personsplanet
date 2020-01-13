<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Ajax extends MY_Controller {



    function __construct() {

        parent::__construct();



        $this->load->model('basicModal');

    }

	public function delete()

	{

		$id=$_POST['id'];

		$table=$_POST['table'];

		if($this->basicModal->deleteRow($table,$id)){

          return 1;

		}else{

          return 0;

		}

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

	



	

  

}