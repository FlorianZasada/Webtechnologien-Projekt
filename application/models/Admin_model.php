<?php
class Admin_model extends CI_Model {
  
  public function getUserLastNames() {
    $this->db->select('lastname');
    $query = $this->db->get('users');

    if($query->num_rows() > 0)
      return $query->result();
  }

  public function getUserByLastName($lastname) {
    $this->db->select('id, name, lastname, email, is_email_verified, is_admin');
    $this->db->where('lastname', $lastname);
    $query = $this->db->get('users');

    if($query->num_rows() > 0)
      return $query->result();
  }
}