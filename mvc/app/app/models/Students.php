<?php

class Students extends Model {
    private $_isLoggedIn, $_sessionName, $_cookieName;
    public static $currentLoggedInUser = null;

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
        return $this->findFirst(['conditions'=> "studentId = ?", 'bind'=>[$username]]);
    }
    
    public static function currentLoggedInUser(){
      if(!isset(self::$currentLoggedInUser) && Session::exists(CURRENT_USER_SESSION_NAME)){
        $u=new Students((int)Session::get(CURRENT_USER_SESSION_NAME));
        self::$currentLoggedInUser=$u;
      }
      // dnd($currentLoggedInUser);
      return self::$currentLoggedInUser;
    }

    public function login($rememberMe=false) {
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

      public function registerNewStudent($params){
        
        
        $this->assign($params);
        // dnd( $this->password);
        $this->password=md5( $this->password);
        $this->save();
      }


    
}