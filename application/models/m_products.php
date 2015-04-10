<?php

class M_products extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }
    
    public function store($bookid){
        
            $this->db->select('*');
            $this->db->from('books');
            $this->db->where('book_id', $bookid);
            
            $query = $this->db->get();

        if ($query) {
            return $query->result();
        } else {
            return FALSE;
        }
            
    }
}

?>