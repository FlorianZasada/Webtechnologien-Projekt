<?php

class Event_model extends CI_Model {
    
    public function insertCard($title, $description, $img, $userid) {
        $data = array(
            'title' => $title,
            'description' => $description,
            'image' => $img,
            'userid' => $userid
        );

        $this->db->insert('eventcards', $data);
    }
    
    public function getAllCards() {
        $query = $this->db->get('eventcards');

        if($query->num_rows() > 0)
            return $query->result();
    }
}