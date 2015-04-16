<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class C_verifiedlogin extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_users', '', TRUE);
    }

    function index() {
        //This method will have the credentials validation
        $this->load->library('form_validation');
        $this->load->model('m_users');

        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

        //$status = $this->m_users->login($status);

        if ($this->form_validation->run() == FALSE) {
            //Field validation failed.  User redirected to login page
            $this->load->view('v_login');
        } /* elseif ($status == 1) {
          redirect('c_admin');} */ else {
            //Go to private area
            redirect('c_check');
        }
    }

    function check_database($password) {
        //Field validation succeeded.  Validate against database
        $username = $this->input->post('username');
        //$status = $this->m_users->login($status);
        //query the database
        $result = $this->m_users->login($username, $password);

        $view_data = array();

        if ($result) {
            $sess_array = array();
            foreach ($result as $row) {
                $sess_array = array(
                    'id' => $row->id,
                    'username' => $row->username,
                        //'status' => $row->status
                );
                $this->session->set_userdata('logged_in', $sess_array);
            }
            return TRUE;
        } else {
            $this->form_validation->set_message('check_database', 'Invalid username or password');
            //$view_data['msg'] = '"Dont have account?" <a href ="' . site_url('C_signup/index') . '"> Sign Up </a>';
            return FALSE;
        }
    }

}

?>