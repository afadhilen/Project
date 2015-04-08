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
            $this->load->view('v_home', $data);
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
        $this->load->library('form_validation');
        $this->form_validation->set_rules('bookid', 'Book ID', 'required');
        $this->form_validation->set_rules('bookname', 'Book Name', 'required');
        $this->form_validation->set_rules('type', 'Type', 'required');
        $this->form_validation->set_rules('pcs', 'Quantity', 'required|integer');

        $bookid = $this->input->post('bookid');
        $bookname = $this->input->post('bookname');
        $pcs = $this->input->post('pcs');

        $this->db->select('*');
        $this->db->from('books');
        $this->db->where('book_id', $bookid);
        $this->db->where('name', $bookname);

        $query = $this->db->get();

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('v_home');
        } else if ($bookid = $query->result() && $bookname = $query->result()) {
            //$this->load->view('v_add', $bookid, $bookname, $pcs);

            $bookid = $this->input->post('bookid1');


            $bookname = $this->input->post('bookname');
            echo 'Book ' . $bookid;
            echo ' and ' . $bookname;
            echo ' already exist! The quantity will automatically added';

            $pcs = $this->input->post('pcs');

            $this->db->set('pcs', 'pcs + ' . (int) $pcs, FALSE);
            $this->db->where('book_id', $bookid1);
            $this->db->update('books');
        } else if ($bookid != $query->result() && $bookname != $query->result()) {
            echo 'Book ID and Book Name did not match';
        } else {

            $data = array(
                'book_id' => $bookid3,
                'name' => $this->input->post('bookname'),
                'type' => $this->input->post('type'),
                'pcs' => $this->input->post('pcs'),
            );
            $this->db->insert('books', $data);
            echo 'The books has been stored!';
        }
    }

    public function add() {
        $bookid = $this->input->post('bookid');
        $bookname = $this->input->post('bookname');
        echo 'Book ' . $bookid;
        echo ' and' . $bookname;
        echo ' Successfully added';

        $pcs = $this->input->post('pcs');

        $this->db->set('pcs', 'pcs + ' . (int) $pcs, FALSE);
        $this->db->where('book_id', $bookid);
        $this->db->update('books');
    }

// else if (($bookid = $query->result()) &&($bookname != $query->result())) {
    //echo 'Book ID and Book Name did not match';
}

?>