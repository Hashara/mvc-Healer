<?php
class Studentregister extends Controller {

    public function __construct($controller, $action) {
      parent::__construct($controller, $action);
      $this->load_model('Students');
      $this->view->setLayout('default');
    }

    public function loginAction(){
        $validation=new Validate();

        if($_POST){
          $validation->check($_POST,[
            'studentId'=>[
              'display'=>"studentId",
              'required'=>true
            ],
            'password'=>[
              'display'=>"password",
              'required'=>true
             
            ]
          ]);
          if($validation->passed()){
            $user=$this->StudentsModel->findByUsername($_POST['studentId']);
           
            // dnd($user);
            // var_dump(md5($_POST['password']));
            // dnd($user->password);
            //$_POST['password'] == $user->password
            if(md5($_POST['password']) == $user->password){
            //   $remember=(isset($_POST['remember_me']) && Input::get('remember_me'))?true:false;
            //   $user->login($remember);
            //   echo '<script>console.log("g")</script>';
                // var_dump("h");die();
              Router::redirect('');//

            }

          }
        }
        $this->view->displayErrors=$validation->displayErrors();
        // dnd($this->view->displayErrors=$validation->displayErrors());
        $this->view->render('studentregister/login');
    }

    public function logoutAction(){
      if( currentUser("Students")){
        currentUser("Students")->logout();
      }
      
      Router::redirect('studentregister/login');
    }

    
}