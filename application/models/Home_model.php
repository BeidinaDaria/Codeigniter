<?php
    class Home_model extends CI_Model
    {
        public function __construct()
        {
            $this->load->database();
        }
        public function getItems()
        {
            $res = $this->db->get('Items');
            return $res->result_array();
        }
        public function getItemById($id)
        {
            $query = $this->db->get_where('Items',array('ID' => $id));
            return $query->result_array();
        }
        public function getUserByLogin($login){
            $query = $this->db->get_where('Customers',array('login' => $login));
            return $query->result_array();
        }
        public function addImages($data)
        {
            $insert = $this->db->insert("Images",$data);
            if($insert)
            {
                return $this->db->insert_id();
            }
            else
            {
                return false;
            }
        }
    }
?>
