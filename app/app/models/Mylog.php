<?php

class Mylog extends Model {
    // private $_isLoggedIn, $_sessionName, $_cookieName;
    // public static $currentLoggedInUser = null;
    // public $msgObject;

    public function __construct($user='') {
        $table = 'students';
        parent::__construct($table);

    }

    public function findByStudentId($id) {
        // dnd($id);
        return $this->find(['conditions'=> "studentID = ?", 'bind'=>[$id]]);
    }
}
