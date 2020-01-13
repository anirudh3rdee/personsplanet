<?php
class globalModel extends CI_Model {

	public function __construct() {
        parent::__construct();
    }
    
	public function uploadImage($field, $path = null) {
        $config['upload_path'] = ($path == null ? 'img/uploads/' : $path);
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '20240';
        // echo $path; echo '<br>';
        // print_r($config); die;
        $this->load->library('upload', $config);
        
        $this->upload->initialize($config);
        if (!$this->upload->do_upload($field)) {
            $error = $this->upload->display_errors();
            $type = 'error';
            $message = $error;
            set_message($type, $message);
            return false;
            // uploading failed. $error will holds the errors.
        } else {
             
            $fdata = $this->upload->data();
            //print_r($fdata); die;
            $img_data ['path'] = $config['upload_path'] . $fdata['file_name'];
            $img_data ['fullPath'] = $fdata['full_path'];
           

           // print_r($img_data); die;


            return $img_data;
            // uploading successfull, now do your further actions
        }


    }

     public function image_resize($imagePath, $width, $height, $thumb = false, $quality = '90%') {

        $config['image_library'] = 'gd2';
        $config['source_image'] = $imagePath;
        $config['create_thumb'] = $thumb;
        $config['maintain_ratio'] = false;
        $config['width'] = $width;
        $config['height'] = $height;
        $config['quality'] = $quality;
        //$this->load->library('image_lib', $config);
        // Create thumbnail
        //$this->load->library('image_lib');
        $this->image_lib->initialize($config);
//        $this->image_lib->resize();
//        $this->image_lib->clear();

        if (!$this->image_lib->resize()) {
            return $this->image_lib->display_errors();
        } else {
            $this->image_lib->clear();
            return true;
        }
    }

    public function uploadAllfiles($field, $path = null) {
        $config['upload_path'] = ($path == null ? 'img/uploads/' : $path);
        //gif|jpg|jpeg|png|psd|xls|xlsx|xml|doc|docx|csv|mpeg|mpg|mp3|mpga|pdf|zip|tgz|rar
        $config['allowed_types'] = '*';
        $config['max_size'] = '25024';

        //print_r($config); die;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload($field)) {
            echo $error = $this->upload->display_errors();
            die;
            $type = 'error';
            $message = $error;

            set_message($type, $message);
            return false;
            // uploading failed. $error will holds the errors.
        } else {
            //print_r($this->upload->data()); die;
            $fdata = $this->upload->data();
            $img_data ['path'] = $config['upload_path'] . $fdata['file_name'];
            $img_data ['fullPath'] = $fdata['full_path'];
            $img_data ['fullext'] = $fdata['file_ext'];
            $img_data ['raw_name'] = $fdata['raw_name'];
            return $img_data;
            // uploading successfull, now do your further actions
        }
    }

    //UPLOAD MULTIPLE IMAGES
    public function uploadMultipleImage($field, $index, $path = null) {
        $config['upload_path'] = ($path == null ? 'img/uploads/' : $path);
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '2024';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload_multiple($field, $index)) {
            $error = $this->upload->display_errors();
            $type = 'error';
            $message = $error;
            set_message($type, $message);
            return false;
            // uploading failed. $error will holds the errors.
        } else {
            $fdata = $this->upload->data();
            $img_data ['path'] = $config['upload_path'] . $fdata['file_name'];
            $img_data ['fullPath'] = $fdata['full_path'];

            return $img_data;
            // uploading successfull, now do your further actions
        }
    }

    //DAMAGE UPLOAD IMAGE
    public function uploadImageDamage($field, $path = null) {
        $config['upload_path'] = ($path == null ? 'img/uploads/' : $path);
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '2024';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload($field)) {
            $error = $this->upload->display_errors();
            $type = 'error';
            $message = $error;
            set_message($type, $message);
            return false;
            // uploading failed. $error will holds the errors.
        } else {
            $fdata = $this->upload->data();
            $img_data ['path'] = $config['upload_path'] . $fdata['file_name'];
            $img_data ['fullPath'] = $fdata['full_path'];

            return $img_data;
            // uploading successfull, now do your further actions
        }
    }

    public function uploadFile($field) {
        $config['upload_path'] = 'img/uploads/';
        $config['allowed_types'] = 'pdf|docx|doc';
        $config['max_size'] = '2048';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload($field)) {
            $error = $this->upload->display_errors();
            $type = 'error';
            $message = $error;
            set_message($type, $message);

            return false;
            // uploading failed. $error will holds the errors.
        } else {
            $fdata = $this->upload->data();
            $file_data ['fileName'] = $fdata['file_name'];
            $file_data ['path'] = $config['upload_path'] . $fdata['file_name'];
            $file_data ['fullPath'] = $fdata['full_path'];

            return $file_data;
            // uploading successfull, now do your further actions
        }
    }

}
?>