<?php

class M_users extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    public function get($id = null) {
        if ($id == null) {
            $query = $this->db->get('users');
        } else {
            $query = $this->db->get_where('users', ['id' => $id]);
        }
        return $query->result();
    }

    public function login($username, $password) {

        $this->db->select('username', 'password');
        $this->db->from('users');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        // $this->db->where('status', $status);
        //$this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    public function delete($id) {
        $this->db->where(['id' => $id]);
        $result = $this->db->delete('users');
        return $result;
    }

    public function update($id, $username, $password, $firstname, $lastname, $email) {

        $this->db->set('username', $username);
        $this->db->set('password', $password);
        $this->db->set('firstname', $firstname);
        $this->db->set('lastname', $lastname);
        $this->db->set('email', $email);
        $this->db->where(['id' => $id]);
        //$this->db->where('id', $id);

        $result = $this->db->update('users');
        return $result;
    }

    public function adminlogin($username, $password) {

        $this->db->select('username', 'password');
        $this->db->from('admins');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        // $this->db->where('status', $status);
        //$this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return FALSE;
        }
    }
    
    public function store($bookid){
        
            $this->db->select('*');
            $this->db->from('books');
            $this->db->where('book_id', $bookid);
            
            $query = $this->db->get()->row();

        if ($query) {
            return $query->result();
        } else {
            return FALSE;
        }
            
    }
    

    /* public function insert($data){

      $this->db->insert('user', $data);

      } */

    /* public function signup(/* $first, $last, $username, $password, $password2, $email ) {

      $query = $this->db->get('user');
      if ($query > 0) {
      return false;
      } else {
      return true;
      } */

    /**
      $data = array();
      $data['firstname'] = $first;
      $data['lastname'] = $last;
      $data['username'] = $username;
      $data['password'] = $password;
      $data['password2'] = $password2;
      $data['email'] = $email;

      if ($query > 0) {
      echo "<center> <h3> ID and Pasword already exist";
      return false;
      }
      else
      {
      $this->db->insert('user', $data);
      return true;
      }
     */
}

?>