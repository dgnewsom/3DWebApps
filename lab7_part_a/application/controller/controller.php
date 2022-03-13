<?php
//create Controller class
class Controller {

    // Declare public vars
    public $load;
    public $model;

    // Create functions
    function __construct(){
        $this->load = new Load();
        $this->model = new Model();

        $this->home();
    }

    function home(){
        $data = $this->model->model3d_info();

        $this->load->view('view3DAppTest_2',$data);
    }
}