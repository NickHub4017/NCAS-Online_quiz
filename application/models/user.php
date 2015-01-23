<?php
/**
 * Created by PhpStorm.
 * User: Dinith Minura
 * Date: 1/22/15
 * Time: 9:37 PM
 */
Class User extends CI_Model
{
    function login($username, $password)
    {
        $this -> db -> select('team_id,team_name, password');
        $this -> db -> from('team');
        $this -> db -> where('team_id', $username);
        $this -> db -> where('password', MD5($password));
        $this -> db -> limit(1);

        $query = $this -> db -> get();

        if($query -> num_rows() == 1)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }
}
?>