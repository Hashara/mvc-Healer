<?php

class Counselors extends Users {
    private $_isLoggedIn, $_sessionName, $_cookieName;
    public static $currentLoggedInUser = null;

    public function __construct($user='') {
        $table = 'counselors';
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

    public function findByUsername($email) {
        return $this->findFirst(['conditions'=> "email = ?", 'bind'=>[$email]]);
    }
    
    public function findByUserId($id){
      return $this->findFirst(['conditions'=> "counsellorid = ?", 'bind'=>[$id]]);
    }

    public function login() {
        Session::set($this->_sessionName, $this->id);
        // if($rememberMe) {
        //   $hash = md5(uniqid() + rand(0, 100));
        //   $user_agent = Session::uagent_no_version();
        //   Cookie::set($this->_cookieName, $hash, REMEMBER_ME_COOKIE_EXPIRY);
        //   $fields = ['session'=>$hash, 'user_agent'=>$user_agent, 'user_id'=>$this->id];
        //   $this->_db->query("DELETE FROM user_sessions WHERE user_id = ? AND user_agent = ?", [$this->id, $user_agent]);
        //   $this->_db->insert('user_sessions', $fields);
        // }
      }

      public static function currentLoggedInUser(){
        if(!isset(self::$currentLoggedInUser) && Session::exists(CURRENT_USER_SESSION_NAME)){
          $u=new Counselors((int)Session::get(CURRENT_USER_SESSION_NAME));
          self::$currentLoggedInUser=$u;
        }
        
        return self::$currentLoggedInUser;
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
      public function updatePassword($id , $new){
    
        return $this->updateConcellor($id, ['password'=>$new] );
    }
}