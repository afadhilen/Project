<?php

class M_products extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    public function store($bookid) {

        $this->db->select('*');
        $this->db->from('books');
        $this->db->where('book_id', $bookid);

        return $this->db->get()->row();
    }
        public function book($bookname) {

        $this->db->select('*');
        $this->db->from('books');
        $this->db->where('name', $bookname);

        return $this->db->get()->row();
    }

    public function get($bookid = null) {

        if ($bookid == null) {
            $query = $this->db->get('books');
        } else {
            $query = $this->db->get_where('book_id', ['book_id' => $bookid]);
        }
        return $query->result();
    }

    public function delete($bookid) {
        $this->db->where(['book_id' => $bookid]);
        $result = $this->db->delete('books');
        return $result;
    }

}

?>