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
    function view_answers($team_id){

        $query = $this->db->query ("SELECT * FROM answer WHERE team_id='$team_id'");
        return $query->row();
    }
    function update_answers($q_no){
        $answer = $_POST['answer'];
        $team_id =$this->session->userdata('id');
        $query = $this -> db ->query("UPDATE answer SET $q_no='$answer' WHERE team_id='2015'");
        return $query;
    }

}
?>