<?php

class UserModel extends CI_Model {

    function login($username,$password,$type){
        $data= array('username' =>$username,'password'=>sha1($password),'userType'=>$type);
        $this->db->select()->from('users')->where($data);
        $query=$this->db->get();
        return $query->first_row('array');
    }
    
    function createUser($data){
        $query=$this->db->insert('users',$data);
        return $this->db->insert_id();
    }

    function getUsersComments(){  
        $this->db->select()->from('viewusers')->order_by('commentDate','desc');
        $query=$this->db->get();
        return $query->result_array();
    }

    function insertComment($data){
        return $this->db->insert('viewusers',$data);
         
    }



}