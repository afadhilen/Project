<?php

//session_start();

class C_login extends CI_Controller {

    Public function __construct() {
        parent::__construct();

        //$this->load->library('session');
    }

    Public function index() {
        //$this->load->helper('form');
        $this->load->view('v_login');
    }

    Public function signup() {

        $this->load->view('v_signup');
    }

}

/* Public function login() {
  //$this->load->model('m_users');

  $this->form_validation->set_rules('username', 'username', 'required');
  $this->form_validation->set_rules('password', 'password', 'required|callback_verifiedlogin');

  if ($this->form_validation->run() == FALSE) {
  $this->load->view('v_login');
  } else {
  redirect('c_home');
  }
  }

  public function verifiedlogin() {

  $username = $this->input->post('username');
  $password = $this->input->post('password');

  $this->load->model('m_users');
  $result = $this->m_users->login($username, $password);
  if ($result) {

  /*$sess_array = array(
  'username' => $this->input->post('username')
  );
  $sess_array = array();
  foreach ($result as $row){
  $sess_array = array(

  'username'  => $row -> username
  );
  $this->session->set_userdata('logged_in', $sess_array);
  } */

//      return true;

/* } else {
  $this->form_validation->set_message('verifiedlogin', 'You are not Exist!');
  echo '<br>';
  echo'"Dont have account?" <a href ="' . site_url('C_signup/index') . '"> Sign Up </a>';
  return false;
  }
  } */
?>