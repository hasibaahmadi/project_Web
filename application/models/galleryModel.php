<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
class galleryModel extends CI_Model{ 
    /* Returns rows from the database based on the conditions 
     * @param array filter data based on the passed parameters 
     */ 
     function getImages(){ 
        $this->db->select()->from('gallery');
        $query=$this->db->get();
        return $query->result_array();
    } 
     
    /* 
     * Insert image data into the database 
     * @param $data data to be insert based on the passed parameters 
     */ 
    function insert($data = array()) { 
        $this->db->insert('gallery',$data);
        return $this->db->insert_id();
    } 
     function editImage($id, $data) { 
        $this->db->where('id',$id);
        $this->db->update('gallery',$data);
    }  
     function deleteImage($id){ 
        $data=$this->db->where('id',$id);
        $this->db->delete('gallery',$data);
    } 
    
     function getImage($id){
        $this->db->select()->from('gallery')->where(array('id'=>$id));
        $query=$this->db->get();
        return $query->first_row('array');
    }

}