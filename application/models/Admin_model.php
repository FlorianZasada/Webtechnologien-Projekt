<?php
class Admin_model extends CI_Model {
  
  public function getUserLastNames() {
    $this->db->select('lastname');
    $query = $this->db->get('users');

    if($query->num_rows() > 0)
      return $query->result();
  }
}