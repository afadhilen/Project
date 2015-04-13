<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


session_start();

class C_index extends CI_Controller {

    public function index() {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        $this->load->view('v_index');
    }

}

?>
