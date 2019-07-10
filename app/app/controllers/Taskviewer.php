<?php
class Taskviewer extends Controller {

    public function __construct($controller, $action) {
      parent::__construct($controller, $action);
      $this->load_model('Tasks');
      // $this->load_model('Achievements');
      $this->view->setLayout('default');
    }

  

    public function tasksAction($id){
        // dnd($id);
        $task=$this->TasksModel->findByStudentId($id);
      
    $this->view->task = $task;
    // dnd($task);

    $this->view->render('Taskviewer/tasks');
    }

    public function update_tasksAction(){
      // dnd("Ff");
      $id2=(int)$_POST["done_button"];
      // dnd($id2  );
      $task = $this->TasksModel->findByTaskId($id2);//(int)id???
      // dnd($task->task_id);
     
      $this->TasksModel->archieved($task);

        Router::redirect("taskviewer/tasks/".(string)$task->studentID);
      
      // $this->view->render('Taskviewer/update_tasks');
    }

    public function archievementsAction($id){
      //dnd($id);
      $archievement=$this->TasksModel->findByStudentId($id);
        
      $this->view->archievement = $archievement;
      // dnd($archievement);

      $this->view->render('Taskviewer/archievements');
      }

      public function update_achAction(){
        // dnd("Ff");
        $id2=(int)$_POST["done_button"];
        // dnd($id2  );
        $task = $this->TasksModel->findByTaskId($id2);//(int)id???
        // dnd($task->id);
      //  dnd($task);
        $this->TasksModel->unarchieved($task);
  
          Router::redirect("Taskviewer/archievements/".(string)($task->studentID));
          
        // $this->view->render('Taskviewer/update_tasks');
      }
}