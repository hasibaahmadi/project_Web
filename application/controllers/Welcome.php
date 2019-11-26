<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
        parent::__construct();
        // $this->load->Model("userModel");
        // $this->load->library('form_validation');
        // if (!($this->session->userdata('language'))) {
        //     $this->session->set_userdata('language','english');
		// }
		if (!($this->session->userdata('language'))) {
            // $this->session->set_userdata('language','english');
            $this->lang->load('main');
        }else{
            $this->lang->load('main',$this->session->userdata('language'));
        }
    }
	public function info(){
		$this->load->view('info');
	}
	public function index(){
		$this->load->view('about');
	}
	public function contact(){
		$this->load->view('contact');
	}
	public function blog(){
		$this->load->Model('PostModel');
		$data['posts']=$this->PostModel->getPosts();
		$this->load->view('news',$data);
	}
}
