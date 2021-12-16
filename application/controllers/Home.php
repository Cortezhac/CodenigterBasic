<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends My_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('grocery_CRUD');
    }

    public function index()
    {
        $crud = new Grocery_CRUD();
        $crud->set_table('alm_alumno');
        $crud->set_subject('Alumno', 'Alumnos');
        $crud->columns(array(
            'alm_codigo',
            'alm_nombre',
            'alm_edad',
            'alm_sexo',
            'alm_id_grd'
        ));

        $crud->display_as(array(
            'alm_codigo' => 'Codigo',
            'alm_nombre' => 'Nombre',
            'alm_edad' => 'Edad',
            'alm_sexo' => 'Sexo',
            'alm_id_grd' => 'Grado'
        ));

        $crud->set_relation('alm_id_grd', 'grd_grado', 'grd_nombre');
        $output = $crud->render();

        $this->layout_front('example', 'Bienvenido', $output);
    }
} 