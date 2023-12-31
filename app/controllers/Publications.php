<?php

Class Publications extends Controller{

    private $publicationModel;

    public function __construct()
    {
        $this->publicationModel = $this->model('Publication');
    }

    public function index(){
        echo "hello";
    }

    public function displayAll()
    {
        // echo("zz");
        $publications= $this->publicationModel->allPublications();
        echo json_encode($publications);

    }
}