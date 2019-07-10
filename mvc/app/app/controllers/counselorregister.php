<?php
class Counselorregister extends Controller {

    public function __construct($controller, $action) {
      parent::__construct($controller, $action);
      $this->load_model('Counselors');
      $this->view->setLayout('default');
    }

    public function loginAction(){
        $validation=new Validate();

        if($_POST){
          $validation->check($_POST,[
            'email'=>[
              'display'=>"email",
              'required'=>true
            ],
            'password'=>[
              'display'=>"password",
              'required'=>true
              
            ]
          ]);
          if($validation->passed()){
            $user=$this->CounselorsModel->findByUsername($_POST['email']);
           
            // dnd($user);
            // var_dump(md5($_POST['password']));
            // dnd($user->password);
            //$_POST['password'] == $user->password
            if(md5($_POST['password']) == $user->password){
            //   $remember=(isset($_POST['remember_me']) && Input::get('remember_me'))?true:false;
              $user->login();
            //   echo '<script>console.log("g")</script>';
                // var_dump("h");die();
              Router::redirect('');//mentor's profile

            }

          }
        }
        $this->view->displayErrors=$validation->displayErrors();
        $this->view->render('counselorregister/login');
    }

    public function logoutAction(){
      dnd(currentUser("Counselors"));
      if( currentUser("Counselors")){
        currentUser("Counselors")->logout();
      }
      
      Router::redirect('counselorregister/login');
    }

    public function registerAction(){

      $validation=new Validate();
      $posted_values=['name'=>'','email'=>'','gender'=>'','password'=>'','confirm'=>'','designation'=>'','faculty'=>'','department'=>''];
     
     if($_POST){
      //  dnd($_POST);
       $posted_values=posted_values($_POST);
        $validation->check($_POST,[
          'name'=>[
            'display'=>'name',
            'required'=>true
          ],
        'email'=>[
          'display'=>'email',
            'required'=>true
        ],
        'gender'=>[
          'display'=>'gender',
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
        'designation'=>[
          'display'=>'designation',
            'required'=>true
        ],
        'faculty'=>[
          'display'=>'faculty',
            'required'=>true
        ],
        'department'=>[
          'display'=>'department',
            'required'=>true
        ]]);
     
      // $this->view->displayErrors= $validation->displayErrors();
      // dnd($validation->passed());
     if($validation->passed()){
      //  dnd("hi");
      $newUser=new Counselors();
      $newUser->registerNewCounselor($_POST);
      // dnd( $newUser); 
      $newUser->login();

     
        // Router::redirect('');//
        // header('Location: ../app/');
        header('Location: ../../../app/counselorregister/login');
     }
    }
      $this->view->post=$posted_values;
      $this->view->displayErrors= $validation->displayErrors();
      // die();
      $this->view->render('counselorregister/register');
    }

    
}