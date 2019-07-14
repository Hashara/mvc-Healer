<?php
class Counselorregister extends Controller {

    public function __construct($controller, $action) {
      parent::__construct($controller, $action);
      $this->load_model('Counselors');
      $this->load_model('Students');
      $this->view->setLayout('default');
    }

    public function loginAction(){
        $validation=new Validate();
        
        if($_POST){
          // dnd($_POST['email']=="register" && $_POST['password']=="123abc" );
          if($_POST['email']=="register" && $_POST['password']=="123abc"){
            // dnd("hi");
            header('Location: ../../mvc/app/counselorregister/register');
          }
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
                Router::redirect("counselorregister/showProfile/".(string)$user->counsellorid);
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
      //Router::redirect('studentregister/register');
      header('Location: ../../mvc/app/counselorregister/register');
    }

    public function showProfileAction($id){
      $counselor = $this->CounselorsModel->findByUserId($id);

      // dnd(currentLoggedInUse());
      // dnd($this->studentId);
      $this->view->counselor = $counselor;
      // $parms["id"]=[$id];
      $studentlist=$this->loadStudentAction($id);
     // dnd($studentlist);
      $this->view->studentlist = $studentlist;
      $this->view->render('counselor/profile');
    } 

    public function loadStudentAction($id){
      $students=$this->StudentsModel->findbyCounselor($id);
     // dnd($students); 
      return $students;
    }

    public function viewStudentAction($cid,$sid){
      //dnd($id);
      header('Location: ../../../../studentview/Student.php?StudentID='.$sid."&counselorid=".$cid);
      //$this->view->render('counselor/profile');
    }

    public function viewstudentdetails(){

    }

    public function editAction($id){
      $counselor=$this->CounselorsModel->findByUserId((int)$id);
      $this->view->counselor=$counselor;
      $this->view->render('counselor/edit');
    }
    public function changeProfilePicAction($id){
      $counselor=$this->CounselorsModel->findByUserId((int)$id);
      $this->view->counselor=$counselor;
      $this->view->render('counselor/changeProfilePic');
    }

    public function editPasswordAction($id){

      $cou=$this->CounselorsModel->findByUserId($id);
      //dnd($cou);
      $this->view->cou=$cou;
      $this->view->id=$id;
      //dnd($id);
      $validation=new Validate();
      $posted_values=['current'=>'','new'=>'','confirm'=>''];

     if($_POST){
       //dnd($_POST['new']);
       $posted_values=posted_values($_POST);
        $validation->check($_POST,[



        'current'=>[
          'display'=>'current password',
          'required'=>true,
          'min'=>6,
          'is_correct'=>$cou->password //his correct password
        ],

        'new'=>[
          'display'=>'new password',
          'required'=>true,
          'min'=>6
        ],

        'confirm'=>[
          'display'=>'confirm password',
         'required'=>true,
         'matches'=>'new'
        ]

        ]);

     if($validation->passed()){

      $this->CounselorsModel->updatePassword($id ,md5( $_POST['new']));

        //header('Location: ../../../app/studentregister/showProfile/170007T');
        Router::redirect("counselorregister/showProfile/".(string)$cou->counsellorid);

     }
    }
      $this->view->post=$posted_values;
      $this->view->displayErrors= $validation->displayErrors();
      // die();
    //   $this->view->render('studentregister/register');
    // }



      $this->view->render('counselorregister/editPassword');
    }
    public function viewAction($id){
      $counselor=$this->CounselorsModel->findByUserId((int)$id);
      $this->view->counselor=$counselor;
      $this->view->render('counselor/view');
    }

}