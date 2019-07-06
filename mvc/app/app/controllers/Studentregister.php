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
           
            
            // var_dump(md5($_POST['password']));
            // dnd($user->password);
            //$_POST['password'] == $user->password
            if(md5($_POST['password']) == $user->password){
            //   $remember=(isset($_POST['remember_me']) && Input::get('remember_me'))?true:false;
              $user->login();
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

    public function registerAction(){

      $validation=new Validate();
      $posted_values=['studentId'=>'','studentName'=>'','batch'=>'','birthday'=>'','email'=>'','password'=>'','confirm'=>'','faculty'=>'','department'=>''];
     //dnd($posted_values->studentId);
     //dnd($_POST);
     if($_POST){
      //  dnd($_POST);
       $posted_values=posted_values($_POST);
        $validation->check($_POST,[
          'studentId'=>[
              'display'=>'studentId',
              'required'=>true,
              // 'unique'=>'Students',
              'max'=>7

        ],
        'studentName'=>[
          'display'=>'studentName',
          'required'=>true
        ],
        'batch'=>[
          'display'=>'batch',
          'required'=>true
        ],
        'birthday'=>[
          'display'=>'birthday',
         'required'=>true
        ],
        'email'=>[
          'display'=>'email',
          'required'=>true
        ],
        'password'=>[
          'display'=>'password',
          'required'=>true,
          'min'=>6
        ],
        'confirm'=>[
          'display'=>'confirm',
         'required'=>true,
         'matches'=>'password'
        ],
        'faculty'=>[
          'display'=>'faculty',
         'required'=>true
        ],
        'department'=>[
          'display'=>'department',
         'required'=>true
        ]

        ]);
     
      // $this->view->displayErrors= $validation->displayErrors();
      // dnd($validation->passed());
     if($validation->passed()){
      //  dnd("hi");
      $newUser=new Students();
      $newUser->registerNewStudent($_POST);
      // dnd( $newUser); 
      $newUser->login();

     
        // Router::redirect('');//
        // header('Location: ../app/');
        // http://localhost/
        //dnd();
        header('Location: ../../../ChoseCouncelor/index.php?id='.$_POST['studentId']);
     }
    }
      $this->view->post=$posted_values;
      $this->view->displayErrors= $validation->displayErrors();
      // die();
      $this->view->render('studentregister/register');
    }

    
}