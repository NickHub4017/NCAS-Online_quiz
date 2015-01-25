<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Problem extends CI_Controller {


    public function index()
    {
        $this->load->view('header');
        $this->load->view('number_grid');


    }

    public  function view($number){
        $data['number']=$number;
        $this->load->view('header');
        $this->load->view('number_grid');
        $this->load->view('problem',$data);

    }
}