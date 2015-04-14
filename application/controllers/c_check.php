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

                // if (isset($book->book_id) && ( $book->book_id== $bookid))

                if (isset($book->book_id)) {
                    if ($book->book_id == $bookid) {
                        $view_data['msg1'] = "Book ID: $bookid already in database";
                        $this->load->view('v_book_check', $view_data);
                    }
                } else if (!isset($book->book_id)) {
                    $view_data['msgnew'] = "Book ID: $bookid not exist yet. Add to database?";
                    $view_data['bookid'] = $bookid;
                    $this->load->view('v_confirmation', $view_data);
                    //redirect('c_home', $view_data);
                }
            }
            $this->load->view('v_check');
        } else {
            //If no session, redirect to login page
            $this->load->view('404_page');
        }
    }

    public function book_check() {

        $bookid = $this->uri->segment(3);
        //$bookid2 = $this->input->post('bookid');
        //$bookname = $this->input->post('bookname');
        $pcs = $this->input->post('pcs');

        $this->load->model('m_products');
        $book = $this->m_products->store($bookid);

        $this->load->library('form_validation');
        $this->form_validation->set_rules('bookid', 'Book ID', 'required|max_length[4]|callback_bookrule');
        $this->form_validation->set_rules('bookname', 'Book Name', 'required');
        $this->form_validation->set_rules('type', 'Type', 'required');
        $this->form_validation->set_rules('pcs', 'Quantity', 'required|integer');

        if ($this->form_validation->run() == TRUE) {
            $this->updatebookform();
        } else {
            if (isset($book->book_id)) {
                if ($book->book_id == $bookid) {
                    $data = array(
                        'book_id' => $bookid,
                        'name' => $book->name,
                        'type' => $book->type,
                        'pcs' => $pcs,
                    );
                    $this->db->where('book_id', $bookid);
                    $this->db->update('books', $data);
                }
            }
        }
        $this->db->where('book_id', $bookid);
        $this->db->update('books', $data);
        $this->load->view('v_success');
    }

    public function updatebookform() {

        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];

            $this->load->model('m_products');
            $bookid = $this->m_products->get();

            $this->load->view('v_book_check');
        } else {
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

