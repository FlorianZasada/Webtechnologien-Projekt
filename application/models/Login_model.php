<?php
class Login_model extends CI_Model
{
    /**
     * Erzeugen Sie eine function can_login($,$) an die email und password übergeben wird
     */
 function can_login($email, $password)
 {
     /**
      * eine Abfrage der DB erfolgt so:
      * 1. Emailadresse als Suchstring speichern, SQL vorbereiten
      * $this->db->where('name des feldes', suchstring) bereitet die Abfrage vor
      * 2. Ergebnisse speichern
      * $this->db->get('name der tabelle') liefert uns das Ergebnis
      * wir sollten das Ergebnis in einer Variablen speichern, um darauf zuzugreifen
      */
    
    //AUFGABE: bereiten Sie die DB-Abfrage vor (siehe oben)
    $this->db->where('email', $email);
    
    //AUFGABE: speichern Sie die Abfrage in $query
    $query = $this->db->get('users'); 
    
    /**
     * Auswerten der Abfrage und Suche nach dem Passwort-Hash
     */
    if($query->num_rows() > 0){
        foreach($query->result() as $row){
            if($row->is_email_verified == 'yes'){

                /**
                 * Der Hash des Passwortes steht in $row->password und das Passwort selbst haben wir als Funktionsargument übergeben bekommen.
                 * Der Hash kann mit der PHP-Funktion password_verifiy(passwort, hash) geprüft werden.
                 */
                
                /**AUFGABE: 
                 * speichern Sie den Hashwert des Passwortes in einer Variablen und vergleichen Sie ihn mit der eingebauten PHP-Funktion
                 * Im positiven Fall setzen Sie eine Session mittels: $this->session->set_userdata('id', $row->id);
                 * Im negativen Fall geben Sie den String "Wrong Password" zurück.
                 */
                $hash = $row->password;
                
                if(password_verify($password, $hash)){
                    $this->session->set_userdata('id', $row->id);
                    $this->session->set_userdata('name', $row->name);
                    if(boolval($row->is_admin)) $this->session->set_userdata('admin', true);
                }else{
                    return 'Wrong Password';
                }
            }else{
                return 'First verify your email address';
            }
        }
    }else{
        return 'Wrong Email Address';
    }
}
}

?>