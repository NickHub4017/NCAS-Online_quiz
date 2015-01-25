<?php
/**
 * Created by PhpStorm.
 * User: Dinith Minura
 * Date: 1/22/15
 * Time: 9:43 PM
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI

class Home extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            //$this->load->view('home_view', $data);
            $this->load->helper('html');
            $this->load->view('header',$data);
            //$this->load->view('home');
            $this->load->view('number_grid');

        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    function logout()
    {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('home', 'refresh');
    }

}

?>