<?php
class Register extends Controller {

    public function __construct($controller, $action) {
      parent::__construct($controller, $action);
      $this->load_model('Users');
      $this->view->setLayout('default');
    }

    public function loginAction(){
        $validation=new Validate();

        if($_POST){
          $validation->check($_POST,[
            'username'=>[
              'display'=>"Username",
              'required'=>true
            ],
            'password'=>[
              'display'=>"Password",
              'required'=>true
            ]
          ]);
          if($validation->passed()){
            $user=$this->UsersModel->findByUsername($_POST['username']);
            // dnd($user);
            
            if($user && password_verify(Input::get('password'),$user->password)){
              $remember=(isset($_POST['remember_me']) && Input::get('remember_me'))?true:false;
              $user->login($remember);
              var_dump("ji");die();
              Router::redirect('');
            }

          }
        }
        $this->view->render('register/login');
    }

    public function loginHomeAction(){
      // dnd("HI");
      $this->view->render('register/loginHome');
    }

    public function studentloginAction(){
      if (isset($_POST['submit'])){
        $errors=array();

        //username and password entered?
        if(!isset($_POST['studentId']) || strlen(trim($_POST['studentId']))<1){
            $errors[]="Student ID is missing/Invalid";
        }

        if(!isset($_POST['password']) || strlen(trim($_POST['password']))<1){
            $errors[]="password is missing/Invalid";
        }
 
        //any errors?
        if(empty($errors)){
            //save username and password for variables
            $studentId=mysqli_real_escape_string($connection,$_POST['studentId']);
            $password=mysqli_real_escape_string($connection,$_POST['password']);
            $hashed_password=md5($password);

            //prepare database query
            $query= "SELECT * FROM studentdetails 
             WHERE studentId='{$studentId}' 
             AND password='{$hashed_password}' 
            LIMIT 1";
            
            $result_set=mysqli_query($connection,$query);
            //valid?
            if($result_set){
                //query sucess
                
                if(mysqli_num_rows($result_set)==1){
                    //vaild user found
                    header('Location:login_success.php');//rederecting student.php page
                }else{
                    //username or password invaild
                    $errors[]="invaild username or password";
                }

            }else{
                $errors[]="Database query failed";
                //if not desplay error
            }
            


            
        }
    }$this->view->render('register/studentlogin');
  }

}