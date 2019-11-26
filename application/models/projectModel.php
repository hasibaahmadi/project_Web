<?php

class projectModel extends CI_Model{


    function newProject($data){
        $this->db->insert('projects',$data);
    }

    function projectName(){
        $this->db->select()->from('projects');
        $query=$this->db->get();
        return $query->result_array();    
    }
    function getProject($id){
        $this->db->select()->from('projects')->where(array('id'=>$id));
        $query=$this->db->get();
        return $query->first_row('array');
    }
    function deleteProject($id){
        $this->db->where('id',$id);
        $this->db->delete('projects');
        
    }
    function updateProject($id,$data){
        $this->db->where('id',$id);
        $this->db->update('projects',$data);
        
    }
}