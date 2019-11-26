<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
 
class Gallery extends CI_Controller { 
     
    function __construct() { 
        parent::__construct(); 
        // Load image model 
        $this->load->model('galleryModel'); 
        if (!($this->session->userdata('language'))) {
            // $this->session->set_userdata('language','english');
            $this->lang->load('main');
        }else{
            $this->lang->load('main',$this->session->userdata('language'));
        }
    } 
    function getImages(){ 
        $data['images']=$this->galleryModel->getImages();
        $this->load->view('galleryView',$data);
    } 
    function getImage($id){ 
        $data['image']=$this->galleryModel->getImage($id);
        $this->load->view('gallery/gallery',$data);
    }
    function addImageView(){
        $this->load->view('gallery/addToGallery'); 
    }

    function newImage(){
        if ($_POST) {
            // $this->load->helper('date');
            $config['upload_path']='./Gallery';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
            $config['max_size']             = 1024;
            $config['max_width']            = 1170;
            $config['max_height']           = 700;
            // $config['file_name']           = time();

            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            if(!$this->upload->do_upload('image')){
                $error = array('error'=>$this->upload->display_errors());
                $this->load->view('test',$error);
            }else{
                $err=array('upload_data'=>$this->upload->data());
                $data=array(
                    
                    'image'=> $this->upload->data('file_name'),
                    'caption'=>$this->input->post('caption'),
                    'body'=>$this->input->post('body')
                );
                $this->galleryModel->insert($data);
                // $this->load->view('galleryView');
                        // $this->load->view('blog',$err);

                redirect('gallery/getImages');
            }
        } 
    }
    
    
    function deleteImage($id){
        $this->galleryModel->deleteImage($id);
        redirect('gallery/getImages');
    }
    function  editImage($id){
        $data['info']=$this->galleryModel->getImage($id);
        $this->load->view('gallery/editImage',$data);

    }
    function updateImage($id){
        $data['success']=0;
        if ($_POST) {
            // $this->load->helper('date');
            $config['upload_path']='./Gallery';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
            $config['max_size']             = 1024;
            $config['max_width']            = 1170;
            $config['max_height']           = 700;
            // $config['file_name']           = time();

            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            if(!$this->upload->do_upload('image')){
                $error = array('error'=>$this->upload->display_errors());
                $this->load->view('test',$error);
            }else{
                $err=array('upload_data'=>$this->upload->data());
                $data_post=array(
                    'image'=> $this->upload->data('file_name'),
                    'caption'=>$this->input->post('caption'),
                    'body'=>$this->input->post('body')
                );
                $this->galleryModel->editImage($id,$data_post);
                $data['success']=1;
            }
            redirect('gallery/getImages');
        }
        
    }
}



