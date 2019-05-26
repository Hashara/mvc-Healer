<?php

class Home extends Controller{
    public function __construct($controller, $action) {
        parent::__construct($controller, $action);
      }
  
      public function indexAction() {
        // $db=DB::getInstance();
        // $contacts=$dp->
        // dnd($_SESSION);
        $this->view->render('home/index');
        // die("welcome");
    //     if (isset($_POST['action'])) {
    //       switch ($_POST['action']) {
    //           case 'insert':
    //               insert();
    //               break;
    //           case 'select':
    //               select();
    //               break;
    //       }
    //   }
      
    //   function select() {
    //       echo "The select function is called.";
    //       exit;
    //   }
      
    //   function insert() {
    //       echo "The insert function is called.";
    //       exit;
    //   }
      }
  
    // public function loginpage(){
    //   $this->view->render('register/loginhome');
    // }
}