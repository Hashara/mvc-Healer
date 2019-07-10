<?php

class Visitors extends Model {
    private $_isLoggedIn, $_sessionName, $_cookieName;
    // public static $currentLoggedInUser = null;

    public function __construct($message='') {
        $table = 'visitors';
        parent::__construct($table);
       
    }

    public function registerVisitor($params){
        //dnd($params);
        $this->assign($params);
        $this->save();
    }
    
    public function findByEmail($email){
        return $this->findFirst(['conditions'=> "email = ?", 'bind'=>[$email]]);
    }

    public function findById($id){
        return $this->findFirst(['conditions'=> "id = ?", 'bind'=>[$id]]);
    }

    
    public function updateinfo($id,$params){
        // $task->completed=1;
        // dnd($task);
        // $task->completed=1;
        return $this->update((int)($id), $params);
    }

    public function findByCId($id){
        return $this->find(['conditions'=> "counselor = ?", 'bind'=>[(int)$id]]);
    }
}