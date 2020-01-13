<?php

class BasicModal extends CI_Model {



        public $title;

        public $content;

        public $date;



        public function checkforgetpassword( $table, $where = array() ) {
                $this->db->select('*');
                $this->db->from( $table );
                $this->db->where($where);
                $query = $this->db->get();
                return $query->result();  
        }

        public function check( $table, $where = array() ) {

                

                $this->db->select('*');

                $this->db->from( $table );

                $this->db->where($where);

                $query = $this->db->get();

                return $query->result();  



        }

        /**
         * Count Total rows
         * 
         */
        public function count_total_data( $table, $where = array()){
            $this->db->select('id');
            $this->db->from( $table );
            $this->db->where($where);
            return  $this->db->count_all_results();

        }

        public function get_pagination_data( $table, $where = array(), $limit = 10, $start = 0, $order_by = 'id', $order_type = 'desc' ) {

                $this->db->select('*');
                $this->db->from( $table );
                $this->db->where($where);
                $this->db->order_by($order_by, $order_type);
                if( '-1' != $limit)
                {
                    $this->db->limit($limit, $start);
                }
                
                $query = $this->db->get();
                $result =  $query->result();  
                   // echo $this->db->last_query();
                    return $result;
        }

        /**

         * Get setting data value using key

         *

         */

        public function get_setting( $key ){

                $this->db->select('*');

                $this->db->from('settings' );

                $this->db->where (array( 'setting_name' => $key ) );

                $query = $this->db->get();

                return $query->result(); 

        }

         /**

         * Get all table data without whare value 

         *

         */

        public function get_data_direct_from_table( $table ){

                $this->db->select('*');

                $this->db->from($table);

                $query = $this->db->get();

                return $query->result(); 

        }

        public function insert_data(  $table , $data )

        {      

           $this->db->insert($table, $data);

           return ($this->db->affected_rows() != 1) ? false : true;

                 

        }





        public function update_data($key, $data , $id){

                

                $this->db->where('id', $id);

                $this->db->update($key,$data);

                return ($this->db->affected_rows() != 1) ? false : true;

        }

        public function update_account_setting($key, $value ) {
                $newvalue = md5($value);
                $query = "UPDATE users SET $key = '$newvalue' WHERE id=3";
                return ($this->db->affected_rows() != 1) ? false : true;
        }

        public function add_media_data($table, $data){
             $this->db->insert($table, $data);

            return ($this->db->affected_rows() != 1) ? false : true;
        }

        public function get_media_in_limit( $where =array(), $limit = 10, $start = 0)
        {
                
                $this->db->select('*');

                $this->db->from('media_file');
                if( !empty( $where ) ){
                    $this->db->where( $where );
                }

                $this->db->order_by("id", "desc");
               
                if( $limit != -1 ){ 
                    $this->db->limit($limit, $start);
                }
             

                $query = $this->db->get();
               
                $result  =  $query->result(); 
                  // echo $this->db->last_query();
                  
                return $result;
            
        }

        /**

         * Insert and Update setting row using name and value

         */

        public function insert_setting(  $key, $value )

        {       

                if( $this->get_setting($key) ){

                        $this->update_setting( $key, $value);

                        return true;

                }else{

                     $key = trim($key);

                     $data['setting_name'] = $key;

                        $data['setting_value'] = $value;

                    

                     $this->db->insert('settings', $data);

                     return ($this->db->affected_rows() != 1) ? false : true;

                }

                 

        }



        /**

         * Update setting row using setting name

         */

        public function update_setting( $key, $value ){

                $data = array('setting_value'=> $value);

                $this->db->where('setting_name', $key);

                $this->db->update('settings',$data);

        }



        /**

         * Delete setting row using setting name

         */

        public function delete_setting( $key ){

                $this->db->where('setting_name', $key);

                $this->db->delete('settings');

        }

        public function deleteRow($table,$id){

               $this->db->where('id', $id);

               $this->db->delete($table);

               return ($this->db->affected_rows() != 1) ? false : true;

        }





}

?>