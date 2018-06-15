<?php

class Patient_model extends CI_Model {



    function __construct() {
        parent::__construct(); // construct the Model class
    }

    public function get_prefix_list() {
        $query = $this->db->get('prefix');
        
        
        return $query->result();
    }

    public function insert_entry() {
        $this->title = $_POST['title']; // please read the below note
        $this->content = $_POST['content'];
        $this->date = time();

        $this->db->insert('entries', $this);
    }

    public function update_entry() {
        $this->title = $_POST['title'];
        $this->content = $_POST['content'];
        $this->date = time();

        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }

}
