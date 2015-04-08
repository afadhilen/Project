<?php

class C_signup extends CI_Controller {

    Public function index() {

        $this->load->view('v_signup');
    }

    Public function alpha_rules($str) {
        return (!preg_match("/^([-a-z_ ])+$/i", $str)) ? FALSE : TRUE;
    }

    Public function valid_id($str) {
        $username = $this->input->post('username');


        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('username', $username);

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return false;
        } else {
            return true;
        }
    }

    Public Function signup() {

        $this->load->library('form_validation');
        $this->form_validation->set_rules('firstname', 'Firstname', 'required|callback_alpha_rules');
        $this->form_validation->set_rules('lastname', 'Lastname', 'required|callback_alpha_rules');
        $this->form_validation->set_rules('username', 'Username', 'required|max_length[10]|callback_valid_id');
        $this->form_validation->set_rules('password', 'Password', 'required|required|min_length[6]|max_length[20]|callback_verifiedlogin|matches[password2]');
        $this->form_validation->set_rules('password2', 'Retype password', 'required|callback_verifiedlogin');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        $username = $this->input->post('username');
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('username', $username);

        $query = $this->db->get();

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('v_signup');
        } //else if ($query->num_rows() > 0) {
            //echo 'Username and Password already exist! Try another';
        //}else if ($password2 != $password) {
        //echo 'Your Password and Retype password did not match!'; }
        else {
            $data = array(
                'firstname' => $this->input->post('firstname'),
                'lastname' => $this->input->post('lastname'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'email' => $this->input->post('email'),
            );
            $this->db->insert('users', $data);
            echo 'Account created';
            echo '</br>';
            echo 'Please ';
            echo '<a href = "' . site_url('C_login') . '"> Login </a>';
            //header('Refresh: 2.5; URL= c_login/v_login');
           // redirect('c_login');
        }
    }

    /*
      public function inputdata($first, $last, $username, $password, $password2, $email) {

      $first = $this->input->post('firstname');
      $last = $this->input->post('lastname');
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $password2 = $this->input->post('password2');
      $email = $this->input->post('email');

      $this->load->model('m_users');

      $data = array();
      $data['firstname'] = $first;
      $data['lastname'] = $last;
      $data['username'] = $username;
      $data['password'] = $password;
      $data['password2'] = $password2;
      $data['email'] = $email;

      if ($this->m_users->signup($first, $last, $username, $password, $password2, $email)) {
      return true;
      } else {
      $this->form_validation->set_message('inputdata', 'You are not Exist!');
      return false;
      }
      $this->db->insert('user', $data);
      }
     */
}
?>