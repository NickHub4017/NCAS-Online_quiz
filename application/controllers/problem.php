<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Problem extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('probmodel');

    }

    public function index()
    {
        $this->load->view('header');
        $this->load->view('number_grid');
    }

    public  function view($number){

        $team_id =$this->session->userdata('id');
        $data['question']=$this->probmodel->view_problem($number);
        $data['answer']=$this->probmodel-> view_answers(2015);

        $this->load->view('header');
        $this->load->view('number_grid');
        $this->load->view('problem',$data);


    }
    public function submit($q_no){
        $answer= $this->probmodel->update_answers($q_no);
        if($answer){
            base_url().'problem/submit/'.$q_no;
        }

    }
}