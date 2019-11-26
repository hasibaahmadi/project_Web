<?php
class Posts extends MY_Controller{

    function __construct(){
        parent::__construct();
        $this->load->Model('PostModel');
        // $this->lang->load("english","english");
        if (!($this->session->userdata('language'))) {
            // $this->session->set_userdata('language','english');
            $this->lang->load('main');
        }else{
            $this->lang->load('main',$this->session->userdata('language'));
        }
    } 

    //language
    function language($lang){
        $this->session->set_userdata('language',$lang);
        redirect ($this->session->userdata('last'));
    }

    // function index(){
    //     $this->load->view('postsView');
    // }
    function showPosts(){
        $this->load->library('pagination');
        $offset=$this->uri->segment(3);
        $config['base_url'] = base_url().'posts/showPosts';
        $config['total_rows'] = $this->PostModel->countPosts();
        $config['per_page'] = 5;
        $config['uri_segment']=3;
        $this->pagination->initialize($config);
        $data['posts']=$this->PostModel->getPosts($config['per_page'],$offset);
        $data['pages']=$this->pagination->create_links();
        $this->load->view('news',$data);
        // $this->load->view('adminView',$data);
    }

    function showPost($id){
        $data['post']=$this->PostModel->getPost($id);
        $this->load->view('postView',$data);
        // print_r($data);
    }
     
    function getAllPosts(){
        // $data['posts']=$this->PostModel->();
        $this->load->library('pagination');
        $offset=$this->uri->segment(3);
        $config['base_url'] = base_url().'posts/getAllPosts';
        $config['total_rows'] = $this->PostModel->countPosts();
        $config['per_page'] = 5;
        $config['uri_segment']=3;
        $this->pagination->initialize($config);
        $data['posts']=$this->PostModel->getAllPosts($config['per_page'],$offset);
        $data['pages']=$this->pagination->create_links();
        $this->load->view('news',$data);

    }

   

    function deletePost($id){
        $this->PostModel->deletePost($id);
        redirect('posts/showPosts');

    }

    function edit($id){
        $data['category']=$this->PostModel->getCategoey();

        $data['post']=$this->PostModel->getPost($id);
        $this->load->view('editPost',$data);
    }
    function updatePost($id){
        $data['success']=0;
        if($_POST){
            $config['upload_path']='./uplodeImage';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
            $config['max_size']             = 1000;
            $config['max_width']            = 1170;
            $config['max_height']           = 690;
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            if(!$this->upload->do_upload('image')){
                $error = array('error'=>$this->upload->display_errors());
                $this->load->view('test',$error);
            }else{
                $err=array('upload_data'=>$this->upload->data());
                $data_post=array(
                    'title'=>$this->input->post('title'),
                    'body'=>$this->input->post('body'),
                    'image'=> $this->upload->data('file_name'),
                    // 'image'=> $this->upload->data('file_name'),
                    'active'=>$this->input->post('active'),
                    'categoryID'=>$this->input->post('categoryID')
                );
                $this->PostModel->updatePost($id,$data_post);
                $data['success']=1;
            // echo $data_post;
            }
        }
        $data['post']=$this->PostModel->getPost($id);
        $this->load->view('postView',$data);
    }

// function index(){
//  $this->load->view('test',array('error'=>''));
// }

function newPostView(){
    $data['category']=$this->PostModel->getCategoey();
    $this->load->view('newPosts',$data);
}
    function newPost(){
        if ($_POST) {
            
            // $this->load->helper('date');
            $config['upload_path']='./uplodeImage';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
            $config['max_size']             = 1000;
            $config['max_width']            = 1170;
            $config['max_height']           = 650;
            // $config['file_name']           = time();

            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            if(!$this->upload->do_upload('image')){
                $error = array('error'=>$this->upload->display_errors());
                $this->load->view('test',$error);
            }else{
                $err=array('upload_data'=>$this->upload->data());
                $data=array(
                    'title'=>$this->input->post('title'),
                    'body'=>$this->input->post('body'),
                    'image'=> $this->upload->data('file_name'),
                    'active'=>$this->input->post('active')
                    // 'title'=>$_POST['title'],
                    // 'body'=>$_POST['body'],
                    // 'image'=>$_POST['image'],
                    // 'active'=>$_POST['active']
                    // 'catagory'=>$_POST['catagory']
                );
                $this->PostModel->newPost($data);
                // $this->load->view('adminView',$data);
                        // $this->load->view('blog',$err);

                redirect('posts/showPosts');
            }
        } 
    }
}