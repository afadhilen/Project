<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class C_project extends CI_Controller {

    Public function index() {

        $this->load->model('m_users');
        $this->load->view('v_login');
    }

    Public function login($username = FALSE, $password = FALSE) {
        $this->load->model('m_users');


        $data = array();
        $data['id'] = $this->m_users->user_id($username);
        $data['pass'] = $this->m_users->password($password);

        if (!isset($data['user']->id)) {
            $view_data['msg'] = "404 NOT FOUND";
        } else {
            $view_data ['login'] = 'Successfully Login';
        }

        $this->load->view('v_project1', $data);
    }

}

?>