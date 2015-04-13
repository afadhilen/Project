<?php

session_start();

class C_admin extends CI_Controller {

    Public function __construct() {
        parent::__construct();

        //$this->load->library('session');
    }

    Public function index() {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        $this->load->view('v_admin');
    }

    Public function detail() {
        //$this->load->helper('form');
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];

            $this->load->model('m_users');
            $users = $this->m_users->get();

            $this->load->view('v_admin_member', ['users' => $users]);
        } else {
            $this->load->view('404_page');
        }
    }

    public function booksdetail() {

        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];

            $this->load->model('m_products');
            $bookid = $this->m_products->get();

            $this->load->view('v_admin_product', ['book_id' => $bookid]);
        } else {
            $this->load->view('404_page');
        }
    }

    Public function product() {
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];

            $this->load->model('m_users');

            $this->load->view('v_admin_product');
        } else {
            $this->load->view('404_page');
        }
    }

    public function delete($id) {

        $this->load->model('m_users');
        $this->m_users->delete($id);

        redirect('c_admin/detail');
    }

    public function deletebook($bookid) {

        $this->load->model('m_products');
        $this->m_products->delete($bookid);

        redirect('c_admin/booksdetail');
    }

    public function booksdelete($bookid) {

        $this->load->model('m_products');
        $this->m_product->delete($bookid);
        redirect('c_admin/detail');
    }

    public function updateform() {
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];

            $this->load->model('m_users');
            $users = $this->m_users->get();

            $this->load->view('v_admin_edit');
        } else {
            $this->load->view('404_page');
        }
    }

    public function updatebookform() {

        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];

            $this->load->model('m_products');
            $bookid = $this->m_products->get();

            $this->load->view('v_admin_edit_books');
        } else {
            $this->load->view('404_page');
        }
    }

    public function update() {

        $id = $this->uri->segment(3);

        $this->load->library('form_validation');
        $this->form_validation->set_rules('firstname', 'Firstname', 'required|callback_alpha_rules');
        $this->form_validation->set_rules('lastname', 'Lastname', 'required|callback_alpha_rules');
        $this->form_validation->set_rules('username', 'Username', 'required|max_length[10]|callback_valid_id');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[20]|callback_verifiedlogin');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == FALSE) {
            $this->updateform();
        } else {

            $data = array(
                'firstname' => $this->input->post('firstname'),
                'lastname' => $this->input->post('lastname'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'email' => $this->input->post('email'),
            );
            $this->db->where('id', $id);
            $this->db->update('users', $data);
            redirect('c_admin/detail');
        }
    }

    public function booksupdate() {
        $bookid = $this->uri->segment(3);

        $this->load->library('form_validation');
        $this->form_validation->set_rules('bookid', 'Book ID', 'required|max_length[4]|callback_bookrule');
        $this->form_validation->set_rules('bookname', 'Book Name', 'required');
        $this->form_validation->set_rules('type', 'Type', 'required');
        $this->form_validation->set_rules('pcs', 'Quantity', 'required|integer');

        if ($this->form_validation->run() == FALSE) {
            $this->updatebookform();
        } else {

            $data = array(
                'book_id' => $this->input->post('bookid'),
                'name' => $this->input->post('bookname'),
                'type' => $this->input->post('type'),
                'pcs' => $this->input->post('pcs'),
            );
            $this->db->where('book_id', $bookid);
            $this->db->update('books', $data);
            redirect('c_admin/booksdetail');
    }}
        public function bookrule($str) {

            //$pattern = '^(\d{1})(\-\d{2})$^';
            $pattern2 = '^(\d{1}+)-\d{2}$^';
            if (preg_match($pattern2, $str)) {
                return TRUE;
            } else {
                return FALSE;
            }
        }

        function logout() {
            $this->session->unset_userdata('logged_in');
            session_destroy();
            redirect('c_index', 'refresh');
        }

    }


?>