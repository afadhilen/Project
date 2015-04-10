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
            
            return $this->db->get();
            
    }
}

?>