<?php
class Projects extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->Model("projectModel");
        if (!($this->session->userdata('language'))) {
            // $this->session->set_userdata('language','english');
            $this->lang->load('main');
        }else{
            $this->lang->load('main',$this->session->userdata('language'));
        }
    }
    function goToAddProject(){
        if (!$this->session->userdata('userType')=='admin') {
            redirect(base_url().'projects/showProjectName');
        }
        $this->load->view('project/addProject');
    }
    // function goToShowPeoject(){
    //     $this->load->view('showProject');
    // }
    function showProjectName(){
        $data['projects']=$this->projectModel->projectName();
        // echo "<pre>";print_r($data['pro']);echo "</pre>";
        $this->load->view('showProject',$data);
    }

    function newProject(){
        if ($_POST) {            
            $data=array(
                'name'=>$this->input->post('name'),
                'location'=>$this->input->post('location'),
                'startDate'=>$this->input->post('startDate'),
                'duration'=>$this->input->post('duration'),
                'endDate'=>$this->input->post('endDate'),
                'donor'=>$this->input->post('donor'),
                'state'=>$this->input->post('state'),
                'event'=>$this->input->post('event'),
                'cause'=>$this->input->post('cause')
            );
            $this->projectModel->newProject($data);
            // $this->load->view('showProject');
                        // $this->load->view('blog',$err);
                redirect('projects/showProjectName');   
        }
    }

    function projectView($id){
        $data['project']=$this->projectModel->getProject($id);
        $this->load->view('projectView',$data);
    }
    function deleteProject($id){
        if (!$this->session->userdata('userType')=='admin') {
            redirect(base_url().'projects/showProjectName');
        }
        $this->projectModel->deleteProject($id);
        redirect('projects/showProjectName');
    }



    function edit($id){
        if (!$this->session->userdata('userType')=='admin') {
            redirect(base_url().'projects/showProjectName');
        }
        $data['project']=$this->projectModel->getProject($id);
        $this->load->view('project/editProject',$data);
    }
    function updateProject($id){
        if (!$this->session->userdata('userType')=='admin') {
            redirect(base_url().'projects/showProjectName');
        }
        $data['success']=0;
        if($_POST){
            $data_project=array(
                'name'=>$_POST['name'],
                'location'=>$_POST['location'],
                'startDate'=>$_POST['startDate'],
                'endDate'=>$_POST['endDate'],
                'duration'=>$_POST['duration'],
                'donor'=>$_POST['donor'],
                'state'=>$_POST['state'],
                'event'=>$_POST['event'],
                'cause'=>$_POST['cause']
            );
            $this->projectModel->updateProject($id,$data_project);
            $data['success']=1;
        }
        $data['project']=$this->projectModel->getProject($id);
        $this->load->view('projectView',$data);
    }
}