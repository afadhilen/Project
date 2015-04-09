<?php

session_start();

class C_home extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        //$this->load->view('v_home');

        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            //$this->load->view('v_home', $data);

            $view_data = array();

            $this->load->library('form_validation');
            $this->form_validation->set_rules('bookid', 'Book ID', 'required|max_length[4]|callback_bookrule');
            $this->form_validation->set_rules('bookname', 'Book Name', 'required');
            $this->form_validation->set_rules('type', 'Type', 'required');
            $this->form_validation->set_rules('pcs', 'Quantity', 'required|integer');

            if ($this->form_validation->run() == TRUE) {

                $bookid = $this->input->post('bookid');
                $bookname = $this->input->post('bookname');

                $pcs = $this->input->post('pcs');

                $this->db->select('*');
                $this->db->from('books');
                $this->db->where('book_id', $bookid);
                $book = $this->db->get()->row();
                if (isset($book->book_id) && $book->name == $bookname) {
                    //when book id and book name is exist
                    $view_data['msg'] = "Book $bookid and $bookname already exist! The quantity will automatically added";

                    $this->db->set('pcs', 'pcs + ' . (int) $pcs, FALSE);
                    $this->db->where('book_id', $bookid);
                    $this->db->update('books');
                } else if (isset($book->book_id) && $book->name != $bookname) {
                    //when book id and book name is not match
                    $view_data['msg'] = "Book ID and Book Name did not match";
                } else {
                    $data = array(
                        'book_id' => $bookid,
                        'name' => $bookname,
                        'type' => $this->input->post('type'),
                        'pcs' => $pcs,
                    );
                    $this->db->insert('books', $data);
                    $view_data['msg'] = "The books has been stored!";
                }
            }

            $this->load->view('v_home', $view_data);
        } else {
            //If no session, redirect to login page
            echo "You don't have right to access this page! ";
            echo '<a href = "' . site_url('C_login') . '"> Sign In </a>';
            echo ' first';
            //redirect('c_login', 'refresh');
        }
        //$this->load->view('v_home');
    }

    function admin() {

        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $this->load->view('v_admin_data', $data);
        } else {
            //If no session, redirect to login page

            echo "You don't have right to access this page! ";
            //redirect('c_login', 'refresh');
        }
    }

    function logout() {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('c_login', 'refresh');
    }

    public function store() {

        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $this->load->view('v_admin_data', $data);
        } else {
            //If no session, redirect to login page

            echo "You don't have right to access this page! ";
            //redirect('c_login', 'refresh');
    }}

// else if (($bookid = $query->result()) &&($bookname != $query->result())) {
        //echo 'Book ID and Book Name did not match';

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

?>