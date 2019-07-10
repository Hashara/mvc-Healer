<?php
class Controller extends Application {
    protected $_controller, $_action;
    public $view;

    public function __construct($controller, $action) {
      parent::__construct();
      $this->_controller = $controller;
      $this->_action = $action;
    //   $this->request = new Input();
      $this->view = new View();
    }

    protected function load_model($model) {
      // $modelPath = 'App\Models\\' . $model;
      if(class_exists($model)) {
        $this->{$model.'Model'} = new $model(strtolower($model));
      }
    }

    // public function jsonResponse($resp){
    //   header("Access-Control-Allow-Origin: *");
    //   header("Content-Type: applicaton/json; charset=UTF-8");
    //   http_response_code(200);
    //   echo json_encode($resp);
    //   exit;
    // }

  }
