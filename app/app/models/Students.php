<?php

class Students extends Model {
    private $_isLoggedIn, $_sessionName, $_cookieName;
    public static $currentLoggedInUser = null;
    public $msgObject;

    public function __construct($user='') {
        $table = 'students';
        parent::__construct($table);
        $this->_sessionName = CURRENT_USER_SESSION_NAME;
        $this->_cookieName = REMEMBER_ME_COOKIE_NAME;
        $this->_softDelete = true;

        // $u = $this->_db->findFirst('studentdetails', ['conditions'=>'studentId = ?','bind'=>[$user]]);
    
        //   if($u) {
        //     foreach($u as $key => $val) {
        //       $this->$key = $val;
        //     }
        //   }
        // }
    }

    public function findByUsername($username) {
      // dnd($username);
      // dnd($this->findFirst(['conditions'=> "studentId = ?", 'bind'=>[$username]]));
        return $this->findFirst(['conditions'=> "studentId = ?", 'bind'=>[$username]]);
    }
    
    public static function currentLoggedInUser(){
      // return 1;
      if(!isset(self::$currentLoggedInUser) && Session::exists(CURRENT_USER_SESSION_NAME)){
        // dnd("asa");
        $u=new Students((int)Session::get(CURRENT_USER_SESSION_NAME));
        // dnd($u);
        // $this->msgObject-=new Messages();
        self::$currentLoggedInUser=$u;
      }
      // dnd($currentLoggedInUser);
      // dnd($u);
      return self::$currentLoggedInUser;
    }

    public function login($user) {
      // dnd($user->studentId);
      //   $this->$msgObject=new Messages();
        Session::set($this->_sessionName, $user->studentId);
      
        
      }

      public function logout() {
        // $user_agent=Session::uagent_no_version();
        // $this->_db->query("DELETE FROM user_session WHERE user_id=? AND user_agent=?",[$this->id,$user_agent]);
        // $userSession = UserSessions::getFromCookie();
        // if($userSession) $userSession->delete();
       
        Session::delete(CURRENT_USER_SESSION_NAME);

        // if(Cookie::exists(REMEMBER_ME_COOKIE_NAME)) {
        //   Cookie::delete(REMEMBER_ME_COOKIE_NAME);
        // }
        self::$currentLoggedInUser = null;
        return true;
      }
      public function findbyCounselor($id){
        return $this->find(['conditions'=> "Counselor = ?", 'bind'=>[(string)$id]]);
      }

      public function editProfile($params){
        $this->assign($params);
        $this->save();


      }

      public function updatePassword($id , $new){
        //  ['password'=>$_POST['new']]
          //dnd( $new);
          //dnd($id);
            return $this->updateStudent($id, ['password'=>$new] );
        }
  
        public function updateDepartment($id ,$department){
          return $this->updateStudent($id,['department'=>$department] );
        }
  
        public function updateImage($id ,$path){
          return $this->updateStudent($id,['Image'=>$path] );
        }
      
}

// public aciveAction($id)
// {
//   $task = $this->TasksModel->getAchive($id);
//   // Router::redirect('achivements/ffhfg'.$task->id);
//   $this->AchiveModel->putTask($task->id);
//   $this->view->task = $task;
//   $this->view->render('hjhjhj/kjkjkjk');

//   // $this->task
// }
// $user->messages;