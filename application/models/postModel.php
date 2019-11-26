<?php
class PostModel extends CI_Model{
    public function getPosts($limit=5,$offset=0){  
        $this->db->select('posts.*,category.*')->from('posts')->join('category','category.catID=posts.categoryID','left')->where('active',1)->order_by('postDate','desc')->limit($limit,$offset);
        $query=$this->db->get();
        return $query->result_array();
    }
    public function getAllPosts($limit=5,$offset=0){  
        $this->db->select('posts.*,category.*')->from('posts')->join('category','category.catID=posts.categoryID','left')->where('active',0)->order_by('postDate','desc')->limit($limit,$offset);
        $query=$this->db->get();
        return $query->result_array();
    }
    function getPost($id){
        // $this->db->join('category','category.id=posts.id');
        $this->db->select('posts.*,category.*')->from('posts')->join('category','category.catID=posts.categoryID','left')->where('id',$id);
        // $this->db->order_by('postDate','desc');
        $query=$this->db->get();
        return $query->first_row('array');
    }

    // public function getPosts($limit=5,$offset=0){  
    //     $this->db->select()->from('posts')->where('active',1)->order_by('postDate','desc')->limit($limit,$offset);
    //     $query=$this->db->get();
    //     return $query->result_array();
    // }
    // public function getAllPosts($limit=5,$offset=0){  
    //     $this->db->select()->from('posts')->where('active',0)->order_by('postDate','desc')->limit($limit,$offset);
    //     $query=$this->db->get();
    //     return $query->result_array();
    // }
    // function getPost($id){
    //     $this->db->select()->from('posts')->where(array('id'=>$id))->order_by('postDate','desc');
    //     $query=$this->db->get();
    //     return $query->first_row('array');
    // }
    function newPost($data){
        $this->db->insert('posts',$data);
        return $this->db->insert_id();
    }

    function deletePost($id){
        $this->db->where('id',$id);
        $this->db->delete('posts');
        
    }
    function updatePost($id,$data){
        $this->db->where('id',$id);
        $this->db->update('posts',$data);
        
    }
    function countPosts(){
        return $this->db->count_all('posts');
    }

    function getCategoey(){
        $this->db->order_by('name');
        $query=$this->db->get('category');
        return $query->result_array();
    }
}