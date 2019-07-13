<?php

class Messages extends Model {
    private $_isLoggedIn, $_sessionName, $_cookieName;
    // public static $currentLoggedInUser = null;

    public function __construct($message='') {
        $table = 'messages';
        parent::__construct($table);
       
    }

   
    public function sendMessage($sender,$reciever,$content){
        $a= [
                'sender'=>$sender,'reciever'=>$reciever,'content'=>base64_encode($content)
        ];
        //$this-> _setTableColumns();
        $this->assign($a);
        $this->save();
        //$a=array(array('sender']=>$sender,['reciever']=>$from,['content']=>$content};
        //dnd($a);
        //dnd(array(['id']=>NULL,['sender']=>$to,['reciever']=>$from,['content']=>$content));
        //return $this->insert([['id']=>NULL,['sender']=>$sender,['reciever']=>$from,['content']=>$content]);
    }

    public function findByfrom($studentId){
        return $this->find(['conditions'=> "sender = ?", 'bind'=>[(string)$studentId]]);
    }
    public function findByTo($studentId){
        return $this->find(['conditions'=> "reciever = ?", 'bind'=>[(string)$studentId]]);
    }
}