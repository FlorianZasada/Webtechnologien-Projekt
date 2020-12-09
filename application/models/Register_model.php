<?php
class Register_model extends CI_Model
{
    /**
     * einen neuen Nutzer in der DB hinzufügen
     */
    function insert($data)
    {
        $this->db->insert('carshare_users', $data);
        return $this->db->insert_id();
    }

    /**
     * eine Emailadresse überprüfen
     * -> diese Funktion benötigen wir für die 2-stufige Registrierung
     * In unserer Übung heute spielt sie keine weitere Rolle!
     */
    function verify_email($key)
    {
        $this->db->where('verification_key', $key);
        $this->db->where('is_email_verified', 'no');
        $query = $this->db->get('carshare_users');
        if($query->num_rows() > 0)
        {
            $data = array(
                'is_email_verified'  => 'yes'
                );
                $this->db->where('verification_key', $key);
                $this->db->update('carshare_users', $data);
            return true;
        }
        else
        {
            return false;
        }
    }
}
?>