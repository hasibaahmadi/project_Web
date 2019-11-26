<?php
class Users extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->Model("userModel");
        $this->load->library('form_validation');
        // if (!($this->session->userdata('language'))) {
        //     $this->session->set_userdata('language','dari');
        // }
        if (!($this->session->userdata('language'))) {
            // $this->session->set_userdata('language','english');
            $this->lang->load('main');
        }else{
            $this->lang->load('main',$this->session->userdata('language'));
        }
    
    }
// function index(){
//     if ($this->input->post('language')=='english') {
//         $this->session->user_data('language','english');
//     } else if($this->input->post('language')=='dari') {
//         $this->session->user_data('language','dari');
//     }
//     $this->load->view('login');
// }
    function login(){
        $data['error']=0;
        if($_POST){
            $config = array(
              
                array(
                    'field' => 'username',
                    'label' => 'Username',
                    'rules' => 'trim|required'
                ),
                array(
                    'field' => 'password',
                    'label' => 'Password',
                    'rules' => 'trim|required|min_length[5]'
                ),
                array(
                    'field' => 'userType',
                    'label' => 'User Type',
                    'rules' => 'required'
                )
               
            );
            $this->form_validation->set_rules($config);
            if ($this->form_validation->run() == FALSE){
                // $this->load->view('myform');
                
                echo $data['error']=validation_errors();
              
                $this->load->view('login',$data);
            } else{
                $username=$this->input->post('username',true);
                $password=$this->input->post('password',true);
                $type=$this->input->post('userType',true);

                $user=$this->userModel->login($username,$password,$type);
                if (!$user) {
                    // echo "The username/password is wrong";
                    $data['error']=1;
                } else {
                    $this->session->set_userdata('userType',$user['userType']);
                    $this->session->set_userdata('id',$user['id']);
                    redirect(base_url().'welcome');
                }
            }
        }
        $this->load->view('login',$data);
    }

    function logout(){
        $this->session->sess_destroy();
        // $this->load->view('login');
        redirect(base_url().'posts/showPosts');
    }
    
    function register(){
        $err['error']=0;
        if ($_POST) {
            $config = array(
                array(
                        'field' => 'name',
                        'label' => 'Name',
                        'rules' => 'trim|required|min_length[3]'
                ),
                array(
                    'field' => 'lastname',
                    'label' => 'Lastname',
                    'rules' => 'trim|required|min_length[3]'
                ),
                array(
                    'field' => 'username',
                    'label' => 'Username',
                    'rules' => 'trim|required|min_length[3]|is_unique[users.username]'
                ),
                array(
                    'field' => 'password',
                    'label' => 'Password',
                    'rules' => 'trim|required|min_length[5]'
                ),
                array(
                    'field' => 're_pass',
                    'label' => 'Retype password',
                    'rules' => 'trim|required|min_length[5]|matches[password]'
                ),
                array(
                        'field' => 'email',
                        'label' => 'Email',
                        'rules' => 'trim|required|valid_email',
                ),
               
                array(
                        'field' => 'userType',
                        'label' => 'UserType',
                        'rules' => 'trim'
                )
            );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == FALSE){
            // $this->load->view('myform');
            $data['error']=validation_errors();
            $this->load->view('registerUser',$data);
        } else{
            $password=$this->input->post('password');
            $data=array(
                'name'=>$this->input->post('name'),
                'lastname'=>$this->input->post('lastname'),
                'username'=>$this->input->post('username'),
                'password'=>sha1($password),
                'email'=>$this->input->post('email'),
                'userType'=>$this->input->post('userType'),
            );
            $user=$this->userModel->createUser($data);
            if (!$user) {
                echo "not registerd";
                $err['error']=1;
            } else {
                // echo "registerd";
                // $this->session->set_userdata($newdata);
                // $this->session->set_userdata('id',$user['id']);
                // redirect(base_url().'welcome');
                $this->load->view('about');
            }
        } 
    }
       
    //method block
    }
    //end method block
    function registerView(){

        $this->load->view('registerUser');
    }



    function userMessage(){
        
        $err['error']=0;
        
        if($_POST){
            $config = array(
                array(
                        'field' => 'name',
                        'label' => 'Name',
                        'rules' => 'trim|required|min_length[3]'
                ),
                array(
                        'field' => 'email',
                        'label' => 'Email',
                        'rules' => 'trim|required|valid_email',
                ),
                array(
                        'field' => 'subject',
                        'label' => 'Subject',
                        'rules' => 'trim'
                ),
                array(
                        'field' => 'message',
                        'label' => 'Message',
                        'rules' => 'trim|required|min_length[10]'
                )
        );
        // is_unique[users.username]
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == FALSE){
            // $this->load->view('myform');
            $data['error']=validation_errors();
            $this->load->view('contact',$data);
        } else {
            $data['name']= $this->input->post('name');
            $data['email']= $this->input->post('email');
            $data['subject']= $this->input->post('subject');
            $data['message']= $this->input->post('message');
            $com=$this->userModel->insertComment($data);
            if (!$com) {
                $err['error']=1;
            } else {
                // $this->session->set_userdata($newdata);
                // $this->session->set_userdata('id',$user['id']);
                // redirect(base_url().'posts/adminMethod');
                // redirect(base_url().'users/lodeCommentView');
                $this->load->view('contact',$err);
            }
        }
    }
    }

    function getUsersComments(){
        $data['comments']=$this->userModel->getUsersComments();
        $this->load->view('showUserComment',$data);
    }
    

}
