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
           
             //dnd($user);
            // var_dump(md5($_POST['password']));
            // dnd($user->password);
            //$_POST['password'] == $user->password
            if(md5($_POST['password']) == $user->password){
            //   $remember=(isset($_POST['remember_me']) && Input::get('remember_me'))?true:false;
            // $user->currentLoggedInUser();  
                $user->login($user);
             
            //   echo '<script>console.log("g")</script>';
                // var_dump("h");die();
                // $user->show();
                $params=[];
                // dnd((string)$user->studentId);
                array_push($params,(string)$user->studentId);
                $values = [$params];
                Router::redirect("studentregister/showProfile/".(string)$user->studentId);
              // Router::redirect('');//

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
      //Router::redirect('studentregister/register');
      header('Location: ../../mvc/app/studentregister/register');
    }

    public function showProfileAction($id){
      $user = $this->StudentsModel->findByUsername($id);

      // dnd(currentLoggedInUse());
      // dnd($this->studentId);
      $this->view->user = $user;
      // $parms["id"]=[$id];

      $this->view->render('student/profile');
    } 

    public function messaggeAction($id){
      $this->view->render('message/sendmessage');
    }
    

    // public function editAction($id){
    //   $validation=new Validate();
    //   $posted_values=['studentName'=>'','batch'=>'','birthday'=>'','email'=>'','password'=>'','confirm'=>'','faculty'=>'','department'=>''];

    //  if($_POST){
    //   //  dnd($_POST);
    //    $posted_values=posted_values($_POST);
    //     $validation->check($_POST,[

    //     'studentName'=>[
    //       'display'=>'studentName',
    //       'required'=>true
    //     ],
    //     'batch'=>[
    //       'display'=>'batch',
    //       'required'=>true
    //     ],
    //     'birthday'=>[
    //       'display'=>'birthday',
    //      'required'=>true
    //     ],
    //     'email'=>[
    //       'display'=>'email',
    //       'required'=>true
    //     ],
    //     'password'=>[
    //       'display'=>'password',
    //       'required'=>true,
    //       'min'=>6
    //     ],
    //     'confirm'=>[
    //       'display'=>'confirm',
    //      'required'=>true,
    //      'matches'=>'password'
    //     ],
    //     'faculty'=>[
    //       'display'=>'faculty',
    //      'required'=>true
    //     ],
    //     'department'=>[
    //       'display'=>'department',
    //      'required'=>true
    //     ]

    //     ]);
    //       dbd($_POST);
    //   // $this->view->displayErrors= $validation->displayErrors();
    //   // dnd($validation->passed());
    //  if($validation->passed()){
    //   //  dnd("hi");
    //   // $newUser=new Students();
    //   // $newUser->registerNewStudent($_POST);
    //   // // dnd( $newUser);
    //   // $newUser->login();


    //     // Router::redirect('');//
    //     // header('Location: ../app/');
    //     header('Location: ../../../app/studentregister/login');
    //  }
    // }
    //   $this->view->post=$posted_values;
    //   $this->view->displayErrors= $validation->displayErrors();
    //   // die();
    // //   $this->view->render('studentregister/register');
    // // }



    //   $this->view->render('studentregister/edit');
    // }
    
    public function editAction($id){
      $student=$this->StudentsModel->findByUsername($id);
      $this->view->student=$student;
      $this->view->render('studentregister/edit');
    }

    public function editProfileAction($id){
      $student=$this->StudentsModel->findByUsername($id);
      $this->view->student=$student;


      $image = $student->image;
      $path1 = "C:\\xampp\\htdocs\\app\\img\\student\\";
      $path2 = "\\app\\img\\student\\";


      $validation=new Validate();
      $posted_values=['department'=>''];

     if($_POST){
      //  dnd($_POST);
       $posted_values=posted_values($_POST);
        $validation->check($_POST,[

        'department'=>[
          'display'=>'department',
         'required'=>true
        ]

        ]);
          //dbd($_POST);

     if($validation->passed()){


       $this->StudentsModel->updateDepartment($id ,$_POST['department']);
//dnd($_FILES['file']['tmp_name']);

       move_uploaded_file($_FILES['file']['tmp_name'],$path1.$_FILES['file']['name']);
       $this->StudentsModel->updateImage($id ,$path2.$_FILES['file']['name']);

      // $con = mysqli_connect("localhost","root","","ruah");
          // $q = mysqli_query($con,"UPDATE students SET Image ='".$path2.$_FILES['file']['name']."' WHERE studentId = '".$id."'");
           //header('Location: ../editProfile/'.$id);


         Router::redirect("studentregister/showProfile/".(string)$student->studentId);



     }
    }
      $this->view->post=$posted_values;
      $this->view->displayErrors= $validation->displayErrors();
      // die();
    //   $this->view->render('studentregister/register');
    // }



      $this->view->render('studentregister/editProfile');
    }

    public function editPasswordAction($id){

      $student=$this->StudentsModel->findByUsername($id);
      //dnd($student);
      $this->view->student=$student;

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
          'is_correct'=>$student->password //his correct password
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

      $this->StudentsModel->updatePassword($id ,md5( $_POST['new']));

        //header('Location: ../../../app/studentregister/showProfile/170007T');
        Router::redirect("studentregister/showProfile/".(string)$student->studentId);

     }
    }
      $this->view->post=$posted_values;
      $this->view->displayErrors= $validation->displayErrors();
      // die();
    //   $this->view->render('studentregister/register');
    // }



      $this->view->render('studentregister/editPassword');
    }


}