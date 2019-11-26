<?php

class MY_Controller extends CI_Controller{
    function __construct(){
        parent::__construct();
        $languages = array('english' ,'dari' );
        // if (!($this->session->userdata('language'))) {
        //     $this->session->set_userdata('language','dari');
        // }
            if(in_array($this->uri->segment(1),$languages)) {
                $this->load->language($this->uri->segment(1),$this->uri->segment(1));
            }      
    }
    
}
