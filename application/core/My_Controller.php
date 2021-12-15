<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class My_Controller extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    public function layout_front($view, $title, $params = null)
    {   
        $data = array();
        $data['title'] = $title;
        $data['content'] = $this->load->view($view, $params);
        $this->load->view('layouts/master_page', $data, false);
    }
}