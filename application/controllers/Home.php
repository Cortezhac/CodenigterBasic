<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends My_Controller {

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->layout_front('welcome_message', 'Bienvenido');
    }
}