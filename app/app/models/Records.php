<?php

class Records extends Model {
    // private $_isLoggedIn, $_sessionName, $_cookieName;
    // public static $currentLoggedInUser = null;
    // public $msgObject;

    public function __construct($user='') {
        $table = 'records';
        parent::__construct($table);

    }

    public function findByStudentId($id) {
        // dnd($id);
        return $this->find(['conditions'=> "studentID = ?", 'bind'=>[$id]]);
    }

    public function findByRecordId($id) {
        // dnd($id);
        return $this->findFirst(['conditions'=> "id = ?", 'bind'=>[$id]]);
    }

    // public function archieved($record){
    //     // $task->completed=1;
    //     // dnd($task);
    //     // $task->completed=1;
    //     return $this->update((int)($record->id), ['completed'=>1]);
    // }
    //
    // public function unarchieved($task){
    //     return $this->update((int)($task->id), ['completed'=>0]);
    // }

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
