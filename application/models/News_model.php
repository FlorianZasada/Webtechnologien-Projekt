<?php

class News_model extends CI_Model {
    
    public function insertCard($title, $description, $img, $userid) {
        $data = array(
            'title' => $title,
            'description' => $description,
            'image' => $img,
            'userid' => $userid
        );

        $this->db->insert('newscards', $data);
    }

    public function updateCard($id, $title, $description, $img) {
        $data = array(
            'title' => $title,
            'description' => $description,
            'image' => $img
        );

        $this->db->where('id', $id);
        $this->db->update('newscards', array_filter($data, 'strlen'));
    }
    
    public function getAllCards() {
        $query = $this->db->get('newscards');

        if($query->num_rows() > 0)
            return $query->result();
    }

    public function deleteCardByID($id) {
        $this->db->where('id', $id);
        $this->db->delete('newscards');
    }
}