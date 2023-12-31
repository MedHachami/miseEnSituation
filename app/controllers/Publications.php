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
        // $this->view('pages/publication' , $publications);

    }
    public function add(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $postData = file_get_contents("php://input");
            $data = json_decode($postData, true);
            if(!empty($data['msg'])){
                echo $data['msg'];
            }else{
                echo json_encode(['message'=>'invalid request']);
            }

        }else{
            echo json_encode(['message'=>'invalid request']);
        }
    }
}