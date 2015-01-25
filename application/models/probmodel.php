<?php
/**
 * Created by PhpStorm.
 * User: Dinith Minura
 * Date: 1/22/15
 * Time: 9:37 PM
 */
Class Probmodel extends CI_Model
{
    function view_problem($number)
    {
        $query = $this -> db ->query("SELECT * FROM question WHERE q_no='$number'");
        return $query->row();
    }
    function view_answers($q_number){
        $query = $this->db->query ("SELECT * FROM answer WHERE q_no='$q_number'");
        return $query->result();
    }
}
?>