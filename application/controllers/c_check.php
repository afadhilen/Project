<?php

session_start();

class C_check extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {

        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            //$this->load->view('v_home', $data);

            $view_data = array();

            $this->load->library('form_validation');
            $this->form_validation->set_rules('bookid', 'Book ID', 'required|max_length[4]|callback_bookrule');

            if ($this->form_validation->run() == TRUE) {

                $bookid = $this->input->post('bookid');

                $this->load->model('m_products');
                $book = $this->m_products->store($bookid);

                if ($book->book_id == $bookid) {
                    $view_data['msg1'] = "Book ID: $bookid already in database";
                } else if ($book->book_id != $bookid) {
                    $view_data['msg2'] = "Book ID: $bookid not exist yet. Add to database?";
                    $this->load->view('v_home');
                }
            }
            $this->load->view('v_check', $view_data);
        } else {
            //If no session, redirect to login page
            $this->load->view('404_page');
        }
    }

    public function bookrule($str) {

        //$pattern = '^(\d{1})(\-\d{2})$^';
        $pattern2 = '^(\d{1}+)-\d{2}$^';
        if (preg_match($pattern2, $str)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}
