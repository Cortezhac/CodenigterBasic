<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends My_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function index()
    {
        $crud = new Grocery_CRUD();
        $crud->set_table('alm_alumno');
        $this->layout_front('welcome_message', 'Bienvenido');
    }
}