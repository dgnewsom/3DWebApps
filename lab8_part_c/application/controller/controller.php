<?php
include "./debug/chromephp.php";
//ChromePhp::log('controller.php: Hello World');
//ChromePhp::log($_SERVER);

//create Controller class
class Controller {

    // Declare public vars
    public $load;
    public $model;

    // Create functions
    function __construct($PageURI = NULL){
        $this->load = new Load();
        $this->model = new Model();

        $this->$PageURI();
    }

    function home(){
        $data = $this->model->dbGetData();
        $this->load->view('view3DAppData',$data);
    }

    function apiCreateTable(){
        $data = $this->model->dbCreateTable();
        $this->load->view('viewMessage',$data);
    }

    function apiInsertData(){
        $data = $this->model->dbInsertData();
        $this->load->view('viewMessage',$data);
    }

    function apiGetData(){
        $data = $this->model->dbGetData();
        $this->load->view('view3DAppData',$data);
    }

    function apiGetFlickrService(){
        $this->load->view('viewFlickrService');
    }

    function apiGetJson(){
        $this->load->view('viewJson');
    }

    function apiLoadImage(){
//        ChromePhp::warn('controller.php: [apiLoadImage] Get the brand data');
        $data = $this->model->dbGetBrand();
//        ChromePhp::log($data);
        $this->load->view('viewDrinks',$data);
    }
}